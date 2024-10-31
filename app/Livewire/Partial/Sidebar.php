<?php

namespace App\Livewire\Partial;

use Livewire\Component;

class Sidebar extends Component
{
    // kenapa method logout di dalam Sidebar.php kareana. tombol logout berada pada sidebar
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
