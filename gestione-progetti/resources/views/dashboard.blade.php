<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-green-500">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <a href="/manage/project" class="btn btn-blue mt-7">Go to the project</a>
        </div>
    </div>
</x-app-layout>
