<?php

namespace App\Models\legal;

use App\Models\Singleton\Singleton;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Institute  extends Model

    //extends Model
{
//    private static $instance;
    protected $table = 'wp_organization';

    public $id_org_virtual; //ID организации

    use HasFactory;

    public function getActualOrg(){
        return $this::query()
            ->where('id_org','=', $this->id_org_virtual)
            ->first();
    }







}
