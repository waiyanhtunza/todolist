@foreach ($tasks as $task)
    <div class="flex  w-full">
        <div class=" flex items-center w-1/3  ml-10 my-2">
            <label class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-900" for="task_10">
                <svg xmlns="http://www.w3.org/2000/svg" fill='white' height="24" viewBox="0 -960 960 960" width="24"><path d="m438-240 226-226-58-58-169 169-84-84-57 57 142 142ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>

                <span class="ml-4  text-lg">{{ $task->task }}</span>

            </label>
        </div>

        <div class=" flex items-center justify-center ml-10 w-1/3">
            <p class="text-sm text-gray-600">Create task {{ $task->created_at->diffForHumans() }}</p>
        </div>

        <div class=" flex items-end justify-end w-1/3">
            @include('tasks.action')
        </div>


    </div>
@endforeach
