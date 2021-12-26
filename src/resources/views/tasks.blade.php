@extends('app')

@section('title', '完了タスク一覧')

@section('content')
    
    <div class="w-full px-20 py-8">
        @include('flush_message')
        <div class="flex flex-col space-y-4 h-full overflow-y-scroll">
            @foreach ($tasks as $task)
                <div class="w-full px-5 py-3 shadow hover:shadow-md rounded">
                    <div class="">
                        <div class="flex">
                            <div class="font-medium text-lg text-gray-700">{{ $task->name }}</div>
                            <div class="flex items-center justify-end space-x-2">
                                <div class="text-gray-400 text-sm">{{ $task->created_at->format('H:i') }}</div>
                                <div class="grop dropdown inline-block relative">
                                    <button
                                        class="rounded-full hover:bg-gray-200 text-gray-400 transition ease-in-out duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu absolute hidden grop-hover:block">
                                        <li><a href="">edit</a></li>
                                        <li><a href="">delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600"> - {{ $task->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
