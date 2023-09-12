<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConnectPartners extends Model
{
    protected $table = 'connect_partners';

//    public function connectable()
//    {
//        return $this->morphTo();
//    }

    public function connectable()
    {
        return $this->morphTo();
    }


//    public function connectable()
//    {
//        return $this->morphTo('', 'id', 'id_manufactor','id_provider');
//    }

//    public function commentable()
//    {
//        return $this->morphTo();
//    }

    use HasFactory;
}
