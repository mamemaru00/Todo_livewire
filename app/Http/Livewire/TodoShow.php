<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoShow extends Component
{
    public Todo $todo;

    protected  array $rules = [
        'todo.title' => 'required|string|max:255',
        'todo.content' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.todo-show')
            ->extends("layouts.app");
    }

    public function update()
    {
        $this->validate();

        $this->todo->update();
    }
}
