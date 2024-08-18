@if(count($errors->all()) > 0)
    <div class="mt-2 text-center">
        <ul class="bg-light text-danger p-3">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
