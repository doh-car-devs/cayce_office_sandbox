<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User as User;
use App\Govid as Govid;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    public $search = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = Govid::where('first_name', 'like', '%'.$this->search.'%')
            ->orWhere('second_name', 'like', '%'.$this->search.'%')
            ->paginate(10);
        return view('livewire.show-posts', [
            'users' => $users,
        ]);
    }
}
