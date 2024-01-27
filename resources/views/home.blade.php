<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex items-center justify-center w-screen h-screen font-medium">
        <div class="flex flex-grow items-center justify-center bg-gray-900 h-full">
            <!-- Component Start -->
            <div class="w-1/2 p-8 bg-gray-800 rounded-lg shadow-lg  text-gray-200">
                <div class="flex items-center mb-6">
                    <svg class="h-8 w-8 text-indigo-500 stroke-current" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    <h4 class="font-semibold ml-3 text-lg">Sam's Jobs</h4>
                </div>

                <div class="flex items-center w-full h-8 px-2 mt-2 mb-6 text-sm font-medium rounded ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="30" viewBox="0 -960 960 960"
                        width="30">
                        <path
                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q32 0 62-6t58-17l60 61q-41 20-86 31t-94 11Zm280-80v-120H640v-80h120v-120h80v120h120v80H840v120h-80ZM424-296 254-466l56-56 114 114 400-401 56 56-456 457Z" />
                    </svg>

                    <form action="" method="post">
                        <input name="task" class="flex-grow h-8 ml-4 bg-transparent focus:outline-none font-medium"
                            type="text" placeholder="add a new task">

                        <button class="bg-gray-500 w-16 rounded">save</button>
                    </form>
                </div>
                
                <div>
                    <input class="hidden" type="checkbox" id="task_10">
                    <label class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-900" for="task_10">
                        <span
                            class="flex items-center justify-center w-5 h-5 text-transparent border-2 border-gray-500 rounded-full">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span class="ml-4 text-sm">Be all round legend.</span>
                    </label>
                </div>

            </div>
            <!-- Component End  -->

        </div>
    </div>
</body>

</html>
