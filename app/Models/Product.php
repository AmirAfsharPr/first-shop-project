<?php

namespace App\Models;

use App\Http\Requests\DiscountRequest;
use App\Http\Requests\ProductPictureRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function addpicture(ProductPictureRequest $request)
    {

        $path = $request->file('image')->storeAs(
            'public/products/pictures',
            $request->file('image')->getClientOriginalName());

        $this->pictures()->create([
            'path' => $path,
            'mime' => $request->file('image')->getClientMimeType()
        ]);

    }

    public function deletePicture(Picture $picture)
    {
        Storage::delete($picture->path);

        $picture->delete();
    }


    public function addDiscount(DiscountRequest $request)
    {
        if (!$this->discount()->exists()){
            $this->discount()->create([
                'value' => $request->get('value')
            ]);
        }else{
            $this->discount->update([
                'value' => $request->get('value')
            ]);
        }
    }

    public function deleteDiscount()
    {
        $this->discount()->delete();
    }

    public function getCostWithDiscountAttribute()
    {

        if (!$this->discount()->exists()){
            return $this->cost;
        }

        return $this->cost - $this->cost * $this->discount->value /100;
    }

    public function getHasDiscountAttribute()
    {
        return $this->discount()->exists();
    }

    public function getDiscountValueAttribute()
    {
        if ($this->has_discount){
            return $this->discount->value;
        }

        return null;
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'product_property', 'product_id', 'property_id')
            ->withPivot('value')
            ->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getHasCommentAttribute()
    {
        return $this->comments()->exists();
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes')
            ->withTimestamps();
    }

    public function getIsLikedAttribute()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }
}
