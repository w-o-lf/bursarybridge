@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-6">
    <h2 class="text-2xl font-bold mb-6 text-blue-800">Edit Bursary Application</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('bursary.update', $application->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="full_name" class="block text-sm font-medium">Full Name:</label>
            <input type="text" id="full_name" name="full_name" value="{{ $application->full_name }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Email:</label>
            <input type="email" id="email" name="email" value="{{ $application->email }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>

        <div class="mb-4">
            <label for="phone_number" class="block text-sm font-medium">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $application->phone_number }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>

        <!-- Add more fields as necessary -->

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Update Application</button>
        </div>
    </form>
</div>
@endsection
