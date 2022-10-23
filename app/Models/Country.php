<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;


class Country extends Model
{
    use HasFactory;
    use HasRelationships;

    public function cities(){
        return $this->hasMany(City::class); //2nd level
    }
    public function shops(){
        return $this->hasManyThrough(Shop::class,City::class); //3rd level
    }
    public function employees(){
        return $this->hasManyDeep(Employee::class, [City::class, Shop::class]); //4th level
    }

   
}
