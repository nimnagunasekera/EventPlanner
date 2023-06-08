<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminReservationController extends Controller
{
    public function index()
    {

        $reservations = Reservation::orderBy('created_at', 'desc')->paginate(10);



        return view('admin.reservation.index', [
            'reservations' => $reservations]);
    }
}
