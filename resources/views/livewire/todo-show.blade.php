<div>
    <form wire:submit.prevent="update">
        <div>
            <input type="text" wire:model="todo.title">
        </div>
        
        <div>
            <textarea wire:model="todo.content"></textarea>
        </div>

        <button type="submit">更新</button>
    </form>
</div>
