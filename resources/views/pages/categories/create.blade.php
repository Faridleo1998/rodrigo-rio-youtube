@extends('layouts.app')

@section('content')
    <div class="container">
        <x-ui.title title="Create category" />

        <form class="max-w-sm mx-auto" action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('name')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here..."></textarea>
                @error('description')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>


            <x-ui.button />
        </form>

    </div>
@endsection
