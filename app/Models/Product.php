<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Company;


class Product extends Model
{
 
    use HasFactory;


    public function categories(){

        return $this->belongsToMany(Category::class);

    }

    public function companies(){

        return $this->belongsToMany(Company::class);
    }
};
