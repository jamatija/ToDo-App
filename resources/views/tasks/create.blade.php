@extends('layout')

@section('title', 'New task')

@section('content')

<a href="{{ route('tasks.index') }}" class="text-sm/6 underline text-white">Back to all tasks</a>

<div class="flex justify-center items-center flex-col mt-10">
    <h1 class="text-white text-2xl">Create new task</h1>
    <form method="POST" action="{{ route('tasks.store') }}" class="w-full lg:w-[600px]">
        @csrf
        <div class="space-y-12">

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-6">
                    <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                    <div class="mt-2">
                        <input id="title" required type="text" name="title" placeholder="Buy groceries" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
                    <div class="mt-2">
                        <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
                    </div>
                    <p class="mt-3 text-sm/6 text-gray-400">Write few sentences about the task.</p>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('tasks.index') }}" class="text-sm/6 font-semibold text-white">Cancel</a>
                <button type="submit" class="cursor-pointer rounded-md bg-[#fb8500] px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
            </div>
            
        </div>
    </form>
</div>

@endsection