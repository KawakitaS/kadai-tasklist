@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <ul>

            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach

        </ul>
    @endif
{!! link_to_route('tasks.create', '新規タスクの追加') !!}

<!-- {{ '<p style="color: red;">htmlentities 関数に通した場合</p>' }}-->
<!--{!! '<p style="color: red;">htmlentities 関数に通さなかった場合</p>' !!}-->



@endsection
