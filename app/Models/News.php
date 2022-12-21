<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ["name", "file_path", "created_at", "updated_at",'slug'];
    public function getDateCreateAtAttribute() {
        return $this->created_at->format('D');
    }
}
