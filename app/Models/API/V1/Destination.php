<?php

namespace App\Models\API\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $table = 'destinations';

    protected $filllable = [
        'name',
        'description',
        'location',
        'image_url'
    ];

    public $timestamps = false;
    
    // utilizar la propiedad $guarded para especificar los atributos que no deben ser asignados masivamente. 
    protected $guarded = ['id', /* other guarded attributes */];

    protected $hidden = [
        // 'id',
        'created_at',
        'updated_at'
    ];
}
