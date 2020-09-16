<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class DropDownWithSearch extends Component
{
    public $search = '';

    protected $updateQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $users = [];

        if ($this->search) {

            $users = User::when($this->search, function($query, $search) {
                    return $query->where('name', 'like', '%'.$search.'%')
                                 ->orWhere('email', 'like', '%'.$search.'%');
                })
                ->limit(10)
                ->orderBy('name')
                ->get();
        }
        else {
            $users = User::limit(10)
                ->orderBy('name')
                ->get();
        }

        return view('livewire.drop-down-with-search', [
            'users' => $users,
            'header' => 'DropDown'
            ]);
    }
}
