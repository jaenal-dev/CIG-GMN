<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';

    protected $guarded = ['id'];

    protected $fillable = [
        'judul', 'isi', 'image'
    ];

    public function scopeFilter($query, array $filter)
    {
        $query->when($filter['search'] ?? false, function($query, $search)
        {
            return $query->where('judul', 'like', '%' . $search . '%')
                        ->orWhere('isi', 'like', '%' . $search . '%');
        });
    }
}
