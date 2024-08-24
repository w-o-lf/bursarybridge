@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold mb-8 text-blue-900 dark:text-blue-100">Bursary Application Form</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-4 rounded mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('bursary.application.submit') }}" method="POST">
        @csrf

        <!-- Personal Information -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-200 mb-4">Personal Information</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="full_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name:</label>
                    <input type="text" id="full_name" name="full_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email:</label>
                    <input type="email" id="email" name="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone Number:</label>
                    <input type="text" id="phone_number" name="phone_number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="date_of_birth" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date of Birth:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
            </div>
        </div>

        <!-- Educational Background -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-200 mb-4">Educational Background</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="highest_education" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Highest Level of Education:</label>
                    <input type="text" id="highest_education" name="highest_education" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="institution_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Institution Name:</label>
                    <input type="text" id="institution_name" name="institution_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="course" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Course of Study:</label>
                    <input type="text" id="course" name="course" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="year_of_study" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Year of Study:</label>
                    <input type="number" id="year_of_study" name="year_of_study" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
            </div>
        </div>

        <!-- Financial Information -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-200 mb-4">Financial Information</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="financial_need" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Financial Need:</label>
                    <textarea id="financial_need" name="financial_need" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" rows="4" required></textarea>
                </div>
                <div>
                    <label for="family_income" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Family Annual Income:</label>
                    <input type="number" id="family_income" name="family_income" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="other_scholarships" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Other Scholarships Received:</label>
                    <input type="text" id="other_scholarships" name="other_scholarships" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label for="scholarship_amount" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Amount Required:</label>
                    <input type="number" id="scholarship_amount" name="scholarship_amount" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" required>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-200 mb-4">Additional Information</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="extracurricular_activities" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Extracurricular Activities:</label>
                    <textarea id="extracurricular_activities" name="extracurricular_activities" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" rows="4"></textarea>
                </div>
                <div>
                    <label for="career_goals" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Career Goals:</label>
                    <textarea id="career_goals" name="career_goals" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" rows="4"></textarea>
                </div>
                <div>
                    <label for="volunteer_work" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Volunteer Work:</label>
                    <textarea id="volunteer_work" name="volunteer_work" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" rows="4"></textarea>
                </div>
                <div>
                    <label for="references" class="block text-sm font-medium text-gray-700 dark:text-gray-300">References:</label>
                    <textarea id="references" name="references" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-800 focus:ring focus:ring-blue-200" rows="4"></textarea>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end mt-6">
            <button type="submit" class="bg-blue-900 text-white py-2 px-6 rounded-lg hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-800">Submit Application</button>
        </div>
    </form>
</div>
@endsection
