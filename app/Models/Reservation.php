<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'province',
        'postal_code',
        'card_number',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Guest',
        ]);
    }
}
