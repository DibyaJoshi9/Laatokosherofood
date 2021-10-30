<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends \TCG\Voyager\Models\Category
{
    use SoftDeletes;

    protected $tables='categories';
    protected $dates = ['deleted_at'];
    protected $fillable=['parent_id','order','name','slug','status','image'];

    /**
     * Get the user associated with the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ParentCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    
    /**
     * Get the user associated with the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ChildCategories(): HasMany
    {
        return $this->hasMany(Category::class,'parent_id','id');
    }

    // recursive, loads all descendants
    public function childrenRecursive()
    {
    return $this->ChildCategories()->with('childrenRecursive');
    // which is equivalent to:
    // return $this->hasMany('Survey', 'parent')->with('childrenRecursive);
    }

    public function Items():HasMany{
        return $this->hasMany(Item::class);
    }
     public function ItemsRecursive()
    {
        return $this->ChildCategories()->with('Items');
        // which is equivalent to:
       // return $this->hasMany('Survey', 'parent')->with('childrenRecursive);
    }

    public function subCategories(){
        return $this->hasMany(SubCategory::class);
    }

}
