<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Number;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'price',
        'type',
        'photo',
    ];

    public static $types = [
        'coffee',
        'non-coffe',
        'tea',
        'dessert'
    ];

    public function getHargaAttribute()
    {
        return "Rp. " . Number::format($this->price);
    }
    public function getGambarAttribute()
    {
        return $this->photo ? Storage::url($this->photo) : url('no-image.jpg');
    }
}
