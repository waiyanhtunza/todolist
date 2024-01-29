@extends('layouts.layout')
@section('content')
    <div class="flex items-center justify-center w-screen h-screen font-medium">
        <div class="flex flex-grow items-center justify-center bg-gray-white h-full">
            <!-- Component Start -->
            <div class="w-1/2 p-8 bg-gray-800 rounded-lg shadow-lg  text-gray-200 ">

                @include('tasks.user')

                @include('tasks.add-task')

                <div>
                    @include('tasks.show-task')
                </div>

            </div>

        </div>
    </div>
@endsection
