<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //untuk mencari dari yg sering digunkan scope wajib belakang nya bebas
    public function scopeFilter($query, array $filters)
    {
        //jika ada didalm array filters 'search' ambil search nya lakukan query
        //dibawah ini sudah benar tp mau lebih simple lagi pakai when  
        // if(isset($filters['search']) ? $filters['search'] : false){
        //   return  $query->where('title', 'like', '%' . $filters['search'] . '%');
        // }

        //isset($filters['search']) ? $filters['search'] : false = $filters['search'] ?? false
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return  $query->where('title', 'like', '%' . $search . '%');
        });

        $query->when($filters['kategori'] ?? false, function ($query, $kategori) {
            return $query->whereHas('category', function ($query) use ($kategori) {
                $query->where('slug', $kategori);
            });
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
