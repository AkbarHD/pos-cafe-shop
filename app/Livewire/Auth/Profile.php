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
            'password' => 'sometimes'
        ]);

        if (!isset($this->password)) {
            unset($valid['password']);
        }

        $this->user->update($valid);
        // jika berhasil reset dan arahkan ke mount
        $this->reset();
        $this->mount();

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
