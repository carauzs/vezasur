@push('styles')
    <link href="{{ asset('css/tour.css') }}" rel="stylesheet">
@endpush

@push('scripts-end')
    <script>
        window.tour_id = @json($tour->id);
    </script>
    <script src="{{ mix('/js/tour.js') }}"></script>
@endpush

<x-layout>
    <div class="max-w-5xl mx-auto mt-8 tour-page">
        <div class="bg-white rounded-md shadow p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="col-span-1">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/images/tour/tour-{{ $tour->id }}-photo-1.jpg" alt="map">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/tour/tour-{{ $tour->id }}-photo-2.jpg" alt="map">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/tour/tour-{{ $tour->id }}-photo-3.jpg" alt="map">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/tour/tour-{{ $tour->id }}-map.jpg" alt="map">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-red-theme font-bold text-2xl text-white text-center mb-2 py-1 rounded-md">{{ $tour->name }}</div>
                    <div class="px-12 uxinfo">
                        <p>{{ $dev['info'] }}</p>
                        <p>STARTING AND ENDING PLACE:</p>
                        <p>
                            VEZA SUR BREWING CO.<br>
                            55 NW 25<sup>TH</sup> STREET, MIAMI, FL 33127
                        </p>
                        <p>
                            PRICE:
                            <br>
                            $500.00
                        </p>
                        <p>
                            INCLUDES: Host, Bartender, Free Music, Free Wi-Fi on board, Water and ice.
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="col-span-1">
                </div>
                <div class="col-span-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="col-span-1">
                            <a href="/" class="inline-flex justify-center w-60 py-2 border border-transparent leading-4 font-bold text-lg rounded-md shadow-sm text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">TOURS</a>
                        </div>
                        <div class="col-span-1">
                            <a href="{{ $tour->url }}" class="inline-flex justify-center w-60 py-2 border border-transparent leading-4 font-bold text-lg rounded-md shadow-sm text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">CONTINUE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
