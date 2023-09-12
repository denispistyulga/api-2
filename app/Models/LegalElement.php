<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalElement extends Model
{
    protected $table = 'legal_elements';
    use HasFactory;

//    public function director()
//    {
//        return $this->belongsTo(Director::class,'id_org', 'id_org');
//    }


    public function getDirector()
    {
        return $this->belongsTo(Director::class, 'id_org', 'id_org');
    }

}
