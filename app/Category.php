<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model implements SluggableInterface
{
    use SoftDeletes;
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    /**
     * Get the Category this Category belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    /**
     * Get all the sub-categories associated with this Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    /**
     * Get all the products associated with this Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    /**
     * @param $query Builder
     */
    public function scopeRoots($query)
    {
        $query->where('parent_id', null);
    }

    public function product_count_with_children()
    {
        $p_count = 0;
        $this->pcwc_rec($p_count, $this->id);

        return $p_count;
    }


    /**
     * @param int $p_count
     * @param int $child_id
     */
    private function pcwc_rec(&$p_count, $child_id)
    {
        /** @var \App\Category $cat */
        $cat = \App\Category::findBySlugOrId($child_id);

        $p_count += $cat->products->count();

        if($cat->children->count() > 0)
        {
            foreach($cat->children as $c)
            {
                $this->pcwc_rec($p_count, $c->id);
            }
        }
    }
}
