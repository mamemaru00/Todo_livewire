<div>
    <ul>
        @foreach($todos as $todo)
        <li wire:key="{{ $todo->id }}">
            <!-- 更新画面へのルーティングを追加 -->
            <a href="{{ route('todos.show', ['todo' => $todo->id]) }}">{{ $todo->title }}</a>
        </li>
        @endforeach
    </ul>
    <a href="{{ route('todos.create') }}">作成</a>
</div>
