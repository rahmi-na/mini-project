@extends('layouts.main')

@section('content')
<div class="bg-white dark:bg-gray-900 py-8 px-4 mx-auto max-w-2xl lg:py-16">
    <h2 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Edit Analysis</h2>

    <form action="{{ route('analysis.update', $analysis->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
            <input type="text" name="code" id="code"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                value="{{ old('code', $analysis->code) }}">
            @error('code')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="parameter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parameter</label>
            <input type="text" name="parameter" id="parameter"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                value="{{ old('parameter', $analysis->parameter_id->description) }}">
            @error('parameter')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="lead_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lead Time</label>
            <input type="text" name="lead_time" id="lead_time"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                value="{{ old('lead_time', $analysis->lead_time) }}">
            @error('lead_time')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea name="description" id="description" rows="5"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">{{ old('description', $analysis->description) }}</textarea>
            @error('description')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Update Data
            </button>
        </div>
    </form>
</div>
@endsection
