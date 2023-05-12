<?php

namespace App\Models\API\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    protected $filllable = [
        'name',
        'description',
        'location',
        'image_url',
        'price',
        'opening_hours',
        'contact_address',
        'contact_phone',
        'contact_email',
        'destination_id'
    ];

    public $timestamps = false;
    
    // utilizar la propiedad $guarded para especificar los atributos que no deben ser asignados masivamente. 
    protected $guarded = ['id', /* other guarded attributes */];

    protected $hidden = [
        // 'id',
        'created_at',
        'updated_at'
    ];

    public function hotel()
    {
        return $this->belongsTo(Destination::class);
    }
}
