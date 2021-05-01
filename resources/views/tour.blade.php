@push('scripts-end')
    <script src="{{ mix('/js/tour.js') }}"></script>
@endpush

<x-layout>
    <div class="max-w-6xl mx-auto p-6 mt-8" id="app">
        <div class="bg-white rounded shadow grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="col-span-1">
                <swiper
                    :slides-per-view="1"
                    :space-between="50"
                    navigation
                    :pagination="{ clickable: true }"
                    :scrollbar="{ draggable: true }"
                >
                    <swiper-slide v-for="image in images">
                        <img v-bind:src="image" alt="">
                    </swiper-slide>
                </swiper>
            </div>
            <div class="col-span-1">

            </div>
        </div>
    </div>
</x-layout>
