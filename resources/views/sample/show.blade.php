@extends('layouts.main')

@section('content')
<div class="bg-white dark:bg-gray-900 py-8 px-4 mx-auto max-w-2xl lg:py-16">
    <h2 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Sample Detail</h2>
    <form class="space-y-6">
        <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
            <p class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                {{ $sample->code }}
            </p>
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea name="description" id="description" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                >{{ $sample->description }}</textarea>
        </div>

        <a href="{{ route('sample.index') }}"
            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Back
        </a>
    </form>
</div>
@endsection
