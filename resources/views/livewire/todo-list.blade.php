<div>
    <ul>
        @foreach($todos as $todo)
        <li wire:key="{{ $todo->id }}">
            <a>{{ $todo->title }}</a>
        </li>
        @endforeach
    </ul>
    <a href="{{ route('todos.create') }}">作成</a>
</div>
