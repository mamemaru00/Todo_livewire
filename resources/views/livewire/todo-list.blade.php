<div>
    <ul>
        @foreach($todos as $todo)
        <li wire:key="{{ $todo->id }}">
            <a href="{{ route('todos.show', ['todo' => $todo->id]) }}">{{ $todo->title }}</a>
            <!-- 削除ボタンを追加 -->
            <button wire:click="delete({{ $todo->id }})">削除</button>
        </li>
        @endforeach
    </ul>
    <a href="{{ route('todos.create') }}">作成</a>
</div>
