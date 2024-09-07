<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function hasProduct()
    {
        return $this->products()->exists();
    }



    public function propertyGroups()
    {
        return $this->belongsToMany(PropertyGroup::class, 'category_property_group', 'category_id', 'property_group_id');
    }

    public function hasPropertyGroup(PropertyGroup $property)
    {
        return $this->propertyGroups()->where('property_Group_id',$property->id)->exists();
    }
}
