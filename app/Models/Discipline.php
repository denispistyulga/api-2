<?php

namespace App\Models;

use App\Models\Singleton\Singleton;
//use App\Models\Singleton\Singleton;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Singleton\SingletonTrait;

class Discipline  extends Model

    //extends Model
{
    protected $table = 'univ_common_education_data';

    use HasFactory;


    public function getLegalElement()
    {
        return $this->hasMany(LegalElement::class, 'id_org', 'id_org');
    }


    public function getLegalInfo()
    {
        return $this->hasMany(InfoLegal::class, 'id_org', 'id_org');
    }

}
