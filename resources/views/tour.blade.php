@push('styles-end')
    <link href="{{ asset('css/tour.css') }}" rel="stylesheet">
@endpush

@push('scripts-end')
    <script src="{{ mix('/js/tour.js') }}"></script>
@endpush

<x-layout>
    <div class="max-w-5xl mx-auto mt-8 tour-page">
        <div class="bg-white rounded-md shadow p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="col-span-1">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($tour->images as $image)
                                <div class="swiper-slide">
                                    <div class="w-full h-80 bg-cover bg-no-repeat bg-center" style="background-image: url({{ $image }})"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-red-theme font-bold text-xl text-white text-center mb-2 py-1 rounded-md">{{ $tour->name }}</div>
                    <div class="px-12">
                        <div class="text-center mb-2">SELECT YOUR DATE:</div>
                        <div class="calendar mb-2"></div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input id="first_slot" name="time" type="radio" value="15:00" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="first_slot" class="ml-3 block text-sm font-medium">
                                    3:00 P.M.
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="second_slot" name="time" type="radio" value="18:00"class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="second_slot" class="ml-3 block text-sm font-medium">
                                    6:00 P.M.
                                </label>
                            </div><div class="flex items-center">
                                <input id="thid_slot" name="time" type="radio" value="21:00" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="thid_slot" class="ml-3 block text-sm font-medium">
                                    9:00 P.M.
                                </label>
                            </div>
                        </div>
                        <hr class="mt-5 mb-5">
                        <a href="" target="_blank" class="flex w-full justify-center text-xl px-3.5 py-3 border border-transparent font-semibold rounded-md shadow-sm text-white bg-red-theme focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-theme leading-5 text-center">CLICK TO BUY VEZA SUR BEER</a>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-right">
                <a href="/{{ $tour->id }}/contact" class="inline-flex justify-center w-52 py-2 border border-transparent leading-4 font-bold text-lg rounded-md shadow-sm text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">CONTINUE</a>
            </div>
        </div>
    </div>
</x-layout>
