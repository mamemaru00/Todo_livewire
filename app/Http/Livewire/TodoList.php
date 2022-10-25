<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Illuminate\Support\Collection;

class TodoList extends Component
{
    public Collection $todos;

    public function mount()
    {
        $this->todos = Todo::all();
    }

    public function render()
    {
        return view('livewire.todo-list')
            ->extends("layouts.app");
    }
}
