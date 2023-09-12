<?php

namespace App\Models;

use App\Models\Singleton\Singleton;
//use App\Models\Singleton\Singleton;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Singleton\SingletonTrait;
use App\Models\legal\Institute;
use App\Models\legal\Founder;

class Director  extends Model

    //extends Model
{
//    private static $instance;
    protected $table = 'univ_directors';

    public $id_org_virtual; //ID организации
    public $id_from_1c_virtual; //ID из 1С

    use HasFactory;
//    use SingletonTrait;
//    use App\Models\Singleton\Singleton;


    public function getActualDirector(){
        return $this::query()
            ->where('id_org','=', $this->id_org_virtual)
            ->first();
    }






//    public function getActualDirector(){//Защищаем функцию в БД
//        return self::getProtectedActualOrg();
//    }


    protected function getFullNameDirector(){
        $model_full_name=$this::getActualDirector();
        return $model_full_name->last_name.' '.$model_full_name->first_name.' '.$model_full_name->middle_name;
    }


    public function getLegalElement()
    {
        return $this->hasMany(LegalElement::class, 'id_org', 'id_org');
    }


    public function getLegalInfo()
    {
        return $this->hasMany(InfoLegal::class, 'id_org', 'id_org');
    }

    public function getActualInstitute()
    {
        return $this->hasMany(Institute::class, 'id', 'id_org');
    }

    public function getFounders()//Получить учредителей
    {
        return $this->hasMany(Founder::class, 'id_org', 'id_org')
            ->where([['is_founder', 1]]);
    }

    public function getDiscipline()
    {
        return $this->getActualDirector()->hasMany(Discipline::class, 'id_org', 'id_org')
            ->select('name', 'url_file_1', 'url_file_code_1')
            ->where([
                ['type', 1],
//                ['id_org', $this->id_org_virtual],
                ['id_from_1c', $this->id_from_1c_virtual]
//                ['name','like', '%история%']
            ]);//Только дисциплины параметр 1
    }




//    public function __construct()
//    {
//
//    }
//    public function __clone()
//    {
//        // TODO: Implement __clone() method.
//    }
//
//    public function __wakeup()
//    {
//        // TODO: Implement __wakeup() method.
//    }
//
//    static public function getInstance(){
//        return static::$instance ?? (static::$instance = new static());
//    }



}
