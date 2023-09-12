<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ProviderList extends Model
{
    protected $table = 'provider_list';



    public function manufacturerbelongsTo()
    {
        return $this->belongsTo(ManufacturerList::class, 'manufacturer_id');
    }

    public function manufacturerhasOne()
    {
        return $this->hasOne(ManufacturerList::class,'id');
    }

    public function manufacturerhasOneThrough()
    {
        return $this->hasOneThrough(
            File::class,//order
            ManufacturerList::class,//manufactor
            'id', // Foreign key on products table...
            'provider_id', // Foreign key on orders table...
            'id', // Local key on suppliers table...
            'id' // Local key on products table...
        );
    }


    public function manufacturermorphOne(): MorphOne
    {
        return $this->morphOne(ManufacturerList::class, 'provider_list');
    }


    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'file');
    }

    public function filesMany()
    {
        return $this->morphToMany(File::class, 'file');
    }


    use HasFactory;
}
