<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Movies extends Component
{
    public function render()
    {
        return view('livewire.admin.movies')
            ->layout('layouts.cinema-layout',[
                'title' => 'Movies',
                'description' => 'Manage all movies'
            ]);
    }
}
