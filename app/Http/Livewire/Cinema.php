<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use App\Models\Showtime;
use Livewire\Component;

class Cinema extends Component
{
    public $loading = 'Please wait...';

//    public function convert_minutes_to_hours($minutes) {
//        $hours = floor($minutes / 60);
//        $remaining_minutes = $minutes % 60;
//        return $hours.'h'.$remaining_minutes;
//    }

    public function render()
    {
        $showtimes = Showtime::all();
        return view('livewire.cinema', compact('showtimes'))
            ->layout('layouts.cinema-layout',[
                'title' => 'Cinema frontpage',
                'description' => 'All showtimes'
            ]);
    }
}
