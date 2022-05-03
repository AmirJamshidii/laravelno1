<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public function notes() //اسم جدولی رو می‌ذاریم که می‌خوایم بهش مرتبط کنیم
    {
        return $this->hasMany(Note::class);
    
    }
}
