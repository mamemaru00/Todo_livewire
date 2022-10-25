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

    public function delete(int $id)
    {
        $index = $this->todos->search(fn (Todo $todo) => $todo->id === $id);
        $this->todos[$index]->delete();

        $this->todos = $this->todos->filter(fn (Todo $todo) => $todo->id !== $id);
    }
}
