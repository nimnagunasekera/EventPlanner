<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
        'rating',
        'title',
        'comment',
    ];


}
