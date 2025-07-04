<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">CV Review</h2>
    </x-slot>

    <div class="p-6">
        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        @if($cv->isEmpty())
            <p>No CVs submitted yet.</p>
        @else
            @foreach ($cv as $c)
                <div class="mb-6 text-white">
                    <p><strong>Status:</strong> {{ ucfirst($c->status) }}</p>
                    <p><strong>Uploaded CV:</strong> <a href="{{ Storage::url($c->cv_file_path) }}" class="text-blue-600 underline" target="_blank">View</a></p>
                    @if($c->feedback)
                        <div class="mt-4 p-4 bg-gray-100 rounded text-black">
                            <strong>Feedback:</strong>
                            <p>{{ $c->feedback }}</p>
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
            <form action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="cv" class="block font-medium text-sm text-white">Upload Your CV</label>
                    <input type="file" name="cv" id="cv" class="mt-1 block w-full">
                    @error('cv')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <x-primary-button>Submit for Review</x-primary-button>
            </form>
    </div>
</x-app-layout>
