/*
DynamicRows 1.3.15
Copyright (c) 2013-2020 Dennis Dohle
Last changes: 06.10.2020
*/
(function($){

    $.fn.dynamicrows = function(options) {

        var $obj = $(this);

        // Deprecated options
        var options_deprecated = {
            copyRow: 'copy_row',
            copyValues: 'copy_values',
        };
        $.each(options_deprecated, function(old_name, new_name) {
            if (typeof options == 'object' && typeof options[ old_name ] !== 'undefined') {
                console.warn('dynamicrows: option ' + old_name + ' is deprecated; please use ' + new_name + ' instead');
                options[ new_name ] = options[ old_name ];
                delete( options[ old_name ] );
            }
        });

        // Einstellungen
        var settings = $.extend({
            row                   : 'tr', /* Selector einer Zeile */
            rows                  : 'tbody', /* Selector aller Zeilen */
            minrows               : 1, /* Sichtbare Mindestzeilen */
            handle_add            : '[data-add]:not(.disabled)', /* Selector für Option "neue Zeile" */
            handle_remove         : '[data-remove]:not(.disabled)', /* Selector für Option "Zeile löschen" */
            handle_move           : '[data-move]:not(.disabled)', /* Selector für Option "Zeile verschieben" */
            index_start           : 0, /* Start-Index der Formularlemente */
            copy_row              : null, /* Index der Zeile, die kopiert werden soll; z.B. 2 } */
            copy_values           : false, /* Beim Klonen Werte übernehmen */
            increment             : null, /* Selector für Auto-Nummerierung der Zeilen */
            form_prefix           : '', /* Prefix für Formularlemente, der beim Aktualiseren der Namen ignoriert wird */
            prevent_renaming      : false, /* Keine Umbenennung der Formularelemente */
            animation             : false, /* Animation für add und remove (fade) */
            animation_speed       : 300,  /* Animation-Geschwindigkeit für add und remove (fade) */
            beforeAdd             : null, /* Event vor dem Einfügen einer neuen Zeile */
            beforeRemove          : null, /* Event vor dem Löschen einer Zeile */
            beforeMove            : null, /* Event vor dem Verschieben einer Zeile */
            beforeFormUpdateNames : null, /* Event vor dem Ändern der Formularelementnamen einer Zeile */
            beforeAll             : null, /* Event vor der Änderung einer Zeile */
            afterAdd              : null, /* Event nach dem Einfügen einer neuen Zeile */
            afterRemove           : null, /* Event nach dem Löschen einer Zeile */
            afterMove             : null, /* Event nach dem Verschieben einer Zeile */
            afterFormUpdateNames  : null, /* Event nach dem Ändern der Formularelementnamen einer Zeile */
            afterAll              : null /* Event nach der Änderung einer Zeile */
        }, options);

        // Daten-Attribute berücksichtigen
        var data = $obj.data();
        if (typeof data == 'object') {
            $.each(data, function(key, value) {
                var option_name = decamelize(key);
                if (typeof settings[ option_name ] !== 'undefined') {
                    if (typeof value == 'string' && value.length == 0) { value = true; }
                    settings[ option_name ] = value;
                }
            });
        }

        // Zeilen-Container als Objekt definieren
        var $rows = settings.rows ? $(settings.rows, this) : $obj;

        // Custom-Event nach neuer Zeile
        if (settings.handle_add) {
            $obj.on('click', settings.handle_add, function(obj) {
                obj.preventDefault();
                addRow(this);
            });
        }

        // Custom-Event nach dem Löschen einer Zeile
        if (settings.handle_remove) {
            $obj.on('click', settings.handle_remove, function(obj) {
                obj.preventDefault();
                removeRow(this);
            });
        }

        // Custom-Event nach Verschiebe-Aktion
        if (settings.handle_move && $rows.find(settings.handle_move).length > 0) {
            // Plugin sortable.js (recommended)
            if (typeof Sortable !== 'undefined') {
                var el = $rows[0];

                $rows.find(settings.handle_move).each(function() {
                    var $row = $(this).closest(settings.row);
                    $row.addClass('dynamicrows-row');
                    $row.find(settings.handle_move).addClass('dynamicrows-move');
                });

                var sortable_options = {
                    handle: '.dynamicrows-move',
                    draggable: '.dynamicrows-row',
                    onStart: function(event) {
                        if (settings.beforeMove) { settings.beforeMove(event.item); }
                        if (settings.beforeAll) { settings.beforeAll(event.item); }
                    },
                    onUpdate: function(event) {
                        if (!settings.prevent_renaming) {
                            updateFormNames();
                        }
                        if (settings.afterMove) { settings.afterMove(event.item); }
                        if (settings.afterAll) { settings.afterAll(event.item); }
                    }
                };

                if (typeof Sortable == 'object') {
                    Sortable.init(el, sortable_options);
                }
                else if (typeof Sortable == 'function') {
                    new Sortable(el, sortable_options);
                }
            }
            // Plugin jquery-ui
            else if (jQuery.fn.sortable) {
                var items = [];
                $rows.find( settings.handle_move ).each(function(){
                    items.push( $(this).closest(settings.row) );
                });
                $rows.sortable({
                    items: items,
                    handle: settings.handle_move,
                    start: function(event, ui){
                        if (settings.beforeMove) { settings.beforeMove(ui.item); }
                        if (settings.beforeAll) { settings.beforeAll(ui.item); }
                    },

                    update: function(event, ui){
                        if (!settings.prevent_renaming) {
                            updateFormNames();
                        }
                        if (settings.afterMove) { settings.afterMove(ui.item); }
                        if (settings.afterAll) { settings.afterAll(ui.item); }
                    }
                });
            }
            else {
                alert('No sortable-plugin found! Please load sortablejs or jquery-ui (with sortable widget).');
            }
        }

        // Neue Zeile einfügen
        function addRow(handle) {
            var $row = $(handle).closest(settings.row);

            // autocompleteInput Plugin berücksichtigen
            if ($.fn.autocompleteInput) {
                $rows.find('input[data-autocomplete-input]').autocompleteInput('destroy');
            }

            if (settings.beforeAdd) {
                var result = settings.beforeAdd($row);
                if (result === false) return false;
            }

            if (settings.copy_row) {
                var $row_new = $(handle).closest(settings.rows).children(settings.row + ':nth-child(' + settings.copy_row + ')').clone(true);
            }
            else {
                var $row_new = $row.clone(true);
            }

            if (!$row_new.length) { return false; }

            cleanFormElems($row_new, true);

            if (settings.copy_values) {
                copyFormElemsValues($row, $row_new);
            }

            // datepick Plugin berücksichtigen
            if ($.fn.datepick) {
                $row_new.find('input.datepicker').datepick('destroy');
            }

            if (settings.animation == 'fade') {
                $row_new.hide().insertAfter($row);
                $row_new.fadeIn(settings.animation_speed);
            }
            else {
                $row_new.insertAfter($row);
            }

            if (!settings.prevent_renaming) {
                updateFormNames();
            }

            // datepick Plugin berücksichtigen
            if ($.fn.datepick) {
                $row_new.find('input.datepicker').datepick();
            }

            // autocompleteInput Plugin berücksichtigen
            if ($.fn.autocompleteInput) {
                $rows.find('input[data-autocomplete-input]').autocompleteInput();
            }

            if (settings.afterAdd) { settings.afterAdd($row_new); }
            if (settings.afterAll) { settings.afterAll($row_new); }
        }

        // Zeile löschen
        function removeRow(handle) {
            var $row = $(handle).closest(settings.row);
            if (settings.beforeRemove) {
                var result = settings.beforeRemove($row);
                if (result === false) return false;
            }
            var rows_count = $rows.children(settings.row).length;
            if (rows_count > settings.minrows) {
                if (settings.animation == 'fade') {
                    $row.fadeOut(settings.animation_speed, function() {
                        $(this).remove();
                    });
                }
                else {
                    $row.remove();
                }
                if (!settings.prevent_renaming) {
                    updateFormNames();
                }
                $row = null;
            }
            else {
                cleanFormElems($row);

                // autocompleteInput Plugin berücksichtigen
                if ($.fn.autocompleteInput) {
                    $row.find('input[data-autocomplete-input]').autocompleteInput('deselect');
                }
            }
            if (settings.afterRemove) { settings.afterRemove($row); }
            if (settings.afterAll) { settings.afterAll($row); }
        }

        // Array-Indexe der Formularelemente anpassen
        function updateFormNames() {
            // Adding a ? on a quantifier (?, * or +) makes it non-greedy
            var name_regex = /(.*?)(\[\d+?\])(?!\[\d+?\])(.*)/g;
            var current_index = settings.index_start - 1;
            $rows.find(settings.row).each(function() {
                var $row = $(this);
                if (settings.beforeFormUpdateNames) {
                    settings.beforeFormUpdateNames( $row );
                }
                current_index++;
                $row.find(':input').each(function(){
                    $(this).attr('name', function(i, name) {
                        if (!name) return true;
                        if (settings.form_prefix) {
                            name = name.substr( settings.form_prefix.length );
                            name = 'TMP' + name;
                        }
                        return name.replace(name_regex, function replacer(match, p1, p2, p3, offset, string) {
                            var name_replaced = p1 + '[' + current_index + ']' + p3;
                            if (settings.form_prefix) {
                                name_replaced = settings.form_prefix + name_replaced.substr( 3 );
                            }
                            return name_replaced;
                        });
                    }).removeAttr('id');
                });
                if (settings.increment) {
                    $row.find(settings.increment).html( current_index + 1 );
                }
                if (settings.afterFormUpdateNames) {
                    settings.afterFormUpdateNames( $row );
                }
            });
        }

        // Formular-Werte der kopierten Zeile übernehmen
        function copyFormElemsValues($row, $row_new){
            var root = this;
            $row.find(':text, textarea, select:not(multiple)').each(function() {
                var $el = $(this);
                var name = $el.attr('name');
                $row_new.find('[name="' + name + '"]').val( $el.val() );
            });
            $row.find(':checkbox, :radio').each(function() {
                var $el = $(this);
                var name = $el.attr('name');
                $row_new.find('[name="' + name + '"]').prop('checked', $el.prop('checked') );
            });
        }

        // Nach den Klonen einer Zeile Formular-Werte zurücksetzen
        function cleanFormElems($row, copy){
            var root = this;

            $('.disabled', $row).removeClass('disabled');

            var $inputs = $row.find(':input');
            if (!$inputs.length) return;

            $inputs.filter('input[type="hidden"]').val('');

            if (!copy || settings.copy_values === false) {
                $inputs.each(function() {
                    var $input = $(this);
                    var type = $input.prop('type');
                    switch (type) {
                        case 'color':
                        case 'date':
                        case 'datetime-local':
                        case 'email':
                        case 'month':
                        case 'number':
                        case 'password':
                        case 'range':
                        case 'search':
                        case 'tel':
                        case 'text':
                        case 'time':
                        case 'url':
                        case 'week':
                            $input.val('');
                            break;
                        case 'select-one':
                        case 'select-multiple':
                            $input.find('option').prop('selected', false);
                            break;
                        case 'checkbox':
                        case 'radio':
                            $input.prop('checked', false);
                            break;
                    }
                });
            }
        }

        // De-Camelize
        function decamelize(str, separator) {
            separator = typeof separator === 'undefined' ? '_' : separator;
            return str
                .replace(/([a-z\d])([A-Z])/g, '$1' + separator + '$2')
                .replace(/([A-Z]+)([A-Z][a-z\d]+)/g, '$1' + separator + '$2')
                .toLowerCase();
        }

    };

}(jQuery));


window.Dynamicrows = {

    init: function($el, config) {

        if (typeof $el === 'string') { var $el = $(el); }
        if (!$el.length) return;

        if (!config) config = {};

        $el.each(function() {
            var $current = $(this);
            var data = $current.data();
            if (!data) data = {};
            var config_built = $.extend({}, data, config);
            $current.dynamicrows(config_built);
        });
    }

};