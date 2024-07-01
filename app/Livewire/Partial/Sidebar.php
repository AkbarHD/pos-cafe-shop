<?php

namespace App\Livewire\Partial;

use Livewire\Component;

class Sidebar extends Component
{
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.partial.sidebar');
    }
}
