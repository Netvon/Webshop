<?php
namespace App\Repositories;
use App\Category;

class CategoryRepository
{
    public function all()
    {
        return Category::all();
    }

    public function byId($id)
    {
        return Category::where('id', $id)
            ->get();
    }
}