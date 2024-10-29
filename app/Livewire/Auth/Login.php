<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $valid = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt($valid)) {
            $this->redirect(route('home'), true);
        }
    }
    // render ini sudah otomatis di buatkan, ketika kita bikin pa make:livewire Login
    public function render()
    {
        return view('livewire.auth.login');
    }
}
