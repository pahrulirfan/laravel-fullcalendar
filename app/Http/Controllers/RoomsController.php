<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Calendar;

class RoomsController extends Controller
{
    public function index()
    {
        $eloquentEvent = Room::all();
        $events = [];
//
        foreach ($eloquentEvent as $item) {
            $events[] = Calendar::event(
                $item->title,
                false, //full day event?
                new \DateTime($item->start), //start time (you can also use Carbon instead of DateTime)
                new \DateTime($item->end), //end time (you can also use Carbon instead of DateTime)
                $item->id, [
                    'color' => $item->color
                ]
            );
        }
        $calendar = \Calendar::addEvents($events);

        return view('calendar', compact('calendar'));
    }
}
