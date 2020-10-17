<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{

    public $full_name = '';
    public $email = '';
    public $phone = '';
    public $message = '';


    public function render()
    {
        return view('livewire.contact');
    }
}
