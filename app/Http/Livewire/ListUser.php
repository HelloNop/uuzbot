<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;



class ListUser extends Component
{
    public $vip;
    public $adminCount;
    public $uzer;
    public $search= '';
    public $name;
    public $email;
    public $password;
    public $editState = 0;

    public function render()
    {
        $this->adminCount = User::where('roles', 'admin')->count();
        $this->vip = User::where('roles', 'vip')->count();
        $this->uzer = User::where('roles', 'user')->count();

        return view('livewire.list-user',[
            'users' => $this->search === null ? User::latest()->paginate(10) :
            User::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(10)
        ]);
    }

    public function suspend ($id) {
        $user = User::find($id);
        $user->roles = 'user';
        $user->save();
    }

    public function active ($id) {
        $user = User::find($id);
        $user->roles = 'vip';
        $user->save();
    }

    public function addAdmin() {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'roles' => 'admin',
            'tipeAkun' => 'admin',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function showEdit($id) {
        $user = User::find($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->editState = $id;
    }

    public function update($id) {
        $user = User::find($id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        $this->editState = 0;
    }
}
