<?php

namespace App\Models\API\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    protected $fillable = [
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

    protected $guarded = ['id'];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
