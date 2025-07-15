<?php

namespace App\Livewire\Be\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.be.dashboard.dashboard')->layout('layouts.be.app');
    }
}
