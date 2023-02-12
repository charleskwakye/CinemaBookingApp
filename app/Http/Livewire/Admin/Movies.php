<?php

namespace App\Http\Livewire\Admin;

use App\Models\Movie;
use Livewire\Component;

class Movies extends Component
{
    public function render()
    {
        $movies = Movie::all();
        dump($movies);
        return view('livewire.admin.movies',compact('movies'))
            ->layout('layouts.cinema-layout',[
                'title' => 'Movies',
                'description' => 'Manage all movies'
            ]);
    }
}
