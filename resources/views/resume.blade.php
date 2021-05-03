@push('scripts-end')
    <script src="{{ mix('/js/resume.js') }}"></script>
@endpush

<x-layout>
    <div class="max-w-5xl mx-auto mt-8 payment-page">
        <div class="bg-white rounded-md shadow p-6">
            <h3 class="text-lg font-semibold">OVERVIEW CHECK</h3>
            <hr class="mb-4 mt-1">
            <div class="grid-cols-12 gap-x-8 grid">
                <div class="col-span-1"></div>
                <div class="col-span-3">
                    <img class="rounded-md" src="{{ $tour->image }}" alt="{{ $tour->name }}">
                </div>
                <div class="col-span-7">
                    <div class="bg-red-theme text-center py-1 text-xl font-bold mb-4 rounded-md text-white">{{ $tour->name }}</div>
                    <p class="mb-3"><span id="date"></span> - <span id="time"></span></p>
                    <p class="mb-3">CHECKOUT: <span id="checkout"></span></p>
                </div>
            </div>
            <div class="mt-8 text-right">
                <button type="button" id="submit" class="inline-flex justify-center w-60 py-2 border border-transparent leading-4 font-bold text-lg rounded-md shadow-sm text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">PLACE ORDER</button>
            </div>
        </div>
    </div>
</x-layout>
