<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoLegal extends Model
{
    protected $table = 'legal_info';
    use HasFactory;


    public function getFullLegalInfo()
    {
        return $this->hasManyThrough(Director::class,LegalElement::class,  'id_org', 'id_org','id_org');
    }
}
