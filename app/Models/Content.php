<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = "table_content";
    protected $guarded = ['id'];

    public function Category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
    }
}
