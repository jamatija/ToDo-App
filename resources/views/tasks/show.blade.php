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

        <p class="mt-2">
            Status: 
            @if ($task->completed)
                <span class="text-green-400">Completed</span>
            @else
                <span class="text-yellow-400">In progress</span>
            @endif
        </p>

        <div class="mt-6 flex gap-4">
            <a href="{{ route('tasks.index') }}" class="text-blue-400 hover:underline">← Back</a>

            <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                @csrf
                @method('DELETE')
                <button class="text-red-400 hover:underline cursor-pointer">Delete</button>
            </form>
        </div>
    </div>
@endsection
