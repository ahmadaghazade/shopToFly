<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Entities\CategoryFields;

class Category extends Model
{
    use HasFactory;
    protected $table = CategoryFields::TABLE;

    protected $fillable = [
        CategoryFields::NAME,
        CategoryFields::DESCRIPTION,
        CategoryFields::SLUG,
        CategoryFields::IS_VISIBLE,
        CategoryFields::META_TITLE,
        CategoryFields::META_DESCRIPTION
    ];


}
