<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $email;
    public $password;
    public User $user;


    public function simpan()
    {
        $valid = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable'
        ]);

        if (!isset($this->password)) { // jika passwordnya tidak diisi maka : validasi password tdk di jalankan
            unset($valid['password']);
        }

        $this->user->update($valid);
        // jika berhasil reset dan arahkan ke mount
        $this->reset('password');
        // $this->mount();

    }
    public function mount()
    {
        $user = auth()->user();
        $this->user = User::find($user->id);
        $this->name = $user->name;
        $this->email = $user->email;
    }
    public function render()
    {
        return view('livewire.auth.profile');
    }
}
