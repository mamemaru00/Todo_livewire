<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoCreate extends Component
{
    public string $title = "";
    public string $content = "";

    protected array $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.todo-create')
            ->extends("layouts.app");
    }

    public function save()
    {
        $this->validate();

        Todo::create([
            "title" => $this->title,
            "content" => $this->content
        ]);

        $this->reset();
    }
}
