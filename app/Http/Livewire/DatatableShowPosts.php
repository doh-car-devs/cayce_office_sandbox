<?php

namespace App\Http\Livewire;

use App\Govid;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class DatatableShowPosts extends LivewireDatatable
{
    // public $model = Govid::class;
    public $hideable = 'select';
    public $exportable = true;
    public $posts;
    // public $afterTableSlot = 'components.selected';

    public function builder()
    {
        // return $this->posts = Govid::orderBy('first_name');
        return Govid::query('order by time');
                    //     ->orderBy('first_name');
        // return Govid::all();
        // return Govid::where('first_name', 'like', '%'.$this->search.'%')
        // ->orWhere('second_name', 'like', '%'.$this->search.'%')
        // ->paginate(10);
    }

    public function columns()
    {
        return [
            // Column::checkbox(),
            Column::name('id'),
            Column::name('first_name')->filterable()->searchable(),
            Column::name('second_name')->filterable()->searchable(),
            Column::name('address')->filterable()->searchable(),
            Column::name('contact_number')->filterable()->searchable(),
            Column::name('temp')->filterable()->searchable(),
            Column::name('1')->filterable()->searchable(),
            Column::name('2')->filterable()->searchable(),
            Column::name('3')->filterable()->searchable(),
            Column::name('4')->filterable()->searchable(),
            Column::name('time')->filterable()->searchable(),
            Column::callback(['id', 'first_name'], function ($id, $name) {
                return view('actions/action1', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
