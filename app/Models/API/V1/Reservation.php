<?php

namespace App\Models\API\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'destination_id',
        'hotel_id',
        'restaurant_id',
        'activity_id'
    ];

    public $timestamps = false;
    
    protected $guarded = ['id'];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
