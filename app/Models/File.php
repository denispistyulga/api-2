<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
    protected $table = 'file_table';

//    public function getConnectPartners()
//    {
//        return $this->morphMany(ConnectPartners::class, 'connectable');
//    }

    public function file(): MorphTo
    {
        return $this->morphTo();
    }


    use HasFactory;

}
