<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-2xl font-bold text-indigo-600 mb-2">Welcome, {{ Auth::user()->name }}</h3>
                <p class="text-gray-600">Let’s get started with your career journey.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="#" class="bg-indigo-50 p-5 rounded shadow hover:bg-indigo-100">
                    <h4 class="text-lg font-semibold text-indigo-700">Career Assessment</h4>
                    <p class="text-sm text-gray-600">Discover your ideal career path.</p>
                </a>

                <a href="#" class="bg-indigo-50 p-5 rounded shadow hover:bg-indigo-100">
                    <h4 class="text-lg font-semibold text-indigo-700">Upload CV</h4>
                    <p class="text-sm text-gray-600">Get expert feedback on your resume.</p>
                </a>

                <a href="#" class="bg-indigo-50 p-5 rounded shadow hover:bg-indigo-100">
                    <h4 class="text-lg font-semibold text-indigo-700">LinkedIn Review</h4>
                    <p class="text-sm text-gray-600">Optimize your online professional profile.</p>
                </a>

                <a href="#" class="bg-indigo-50 p-5 rounded shadow hover:bg-indigo-100">
                    <h4 class="text-lg font-semibold text-indigo-700">Mock Interview</h4>
                    <p class="text-sm text-gray-600">Book a practice session.</p>
                </a>

                <a href="#" class="bg-indigo-50 p-5 rounded shadow hover:bg-indigo-100">
                    <h4 class="text-lg font-semibold text-indigo-700">Content Hub</h4>
                    <p class="text-sm text-gray-600">Explore career tips and resources.</p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
