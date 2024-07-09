<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Blog\Entities\CategoryFields;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(CategoryFields::BLOG_CATEGORIES, function (Blueprint $table) {
            $table->id();
            $table->string(CategoryFields::NAME);
            $table->string(CategoryFields::SLUG)->unique();
            $table->longText(CategoryFields::DESCRIPTION);
            $table->boolean(CategoryFields::IS_VISIBLE)->default(false);
            $table->string(CategoryFields::META_TITLE, 60)->nullable();
            $table->string(CategoryFields::META_DESCRIPTION, 160)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(CategoryFields::BLOG_CATEGORIES);
    }
};
