<?php

namespace App\Models\API\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'comment',
        'rating',
        'destination_id',
        'hotel_id',
        'restaurant_id',
        'activity_id',
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
