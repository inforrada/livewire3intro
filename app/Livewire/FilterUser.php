<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class FilterUser extends Component
{
    public $text = "";
    public $users = null; 
    public function render()
    {
        
        if ($this->text == '') {
            $this->users = new Collection();
        }
        else {
            $this->users = User::where('name', 'like', '%' . $this->text  . '%')->get();
        }
        
    return view('livewire.filter-user');
    }
}
