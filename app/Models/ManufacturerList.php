<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class ManufacturerList extends Model
{
    protected $table = 'manufacturer_list';

//    protected $fillable = ['name'];

    public function getConnectPartners()
    {
        return $this->morphMany(ConnectPartners::class, 'connectable');
    }

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'file');
    }

    use HasFactory;
}
