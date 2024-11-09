@extends('layout.app')

<h1> This is index blade <br>
    The list of task </h1>

<div class="">
    @if (count($tasks))
        @foreach ($tasks as $task)
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">Id Product: {{ $task->id }}</a>
            <div>Title: {{ $task->title }}</div>
            <div>Description: {{ $task->description }}</div><br>
        @endforeach
    @else
        <div class="">There are no task</div>
    @endif
</div>
