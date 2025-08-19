@extends('layout')

@section('title', $task->title)

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-gray-900 text-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">{{ $task->title }}</h1>

        @if ($task->description)
            <p class="mb-4 text-gray-300">{{ $task->description }}</p>
        @endif

        <p class="text-sm text-gray-400 italic">
            Created: {{ $task->created_at->translatedFormat('d. F Y') }}
        </p>

        <div class="flex justify-between items-center">
            <p>
                Status: 
                @if ($task->status === "completed")
                    <span class="text-green-400">Completed</span>
                @elseif ($task->status === "in_progress")
                    <span class="text-yellow-400">In progress</span>
                @else
                    <span class="text-gray-400">Not started</span>
                @endif
            </p>
            <form action="{{ route('tasks.changeStatus', $task) }}" method="POST">
                @csrf
                @method('PUT')
                <select name="status" id="status" onchange="this.form.submit()">
                    <option class="text-black" value="in_progress" {{ $task->status === "in_progress" ? 'selected' : ''}}>In progress</option>
                    <option class="text-black" value="completed" {{ $task->status === "completed" ? 'selected' : ''}}>Completed</option>
                    <option class="text-black" value="pending" {{ $task->status === "pending" ? 'selected' : ''}}>Not started</option>
                </select>
            </form>
        </div>

        <div class="mt-6 flex gap-4">
            <a href="{{ route('tasks.index') }}" class="text-blue-400 hover:underline">← Back</a>
            <a href="{{ route('tasks.edit', $task) }}" class="text-green-200 hover:underline">Edit task</a>

            <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                @csrf
                @method('DELETE')
                <button class="text-red-400 hover:underline cursor-pointer">Delete</button>
            </form>
        </div>
    </div>
@endsection
