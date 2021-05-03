<x-layout>
    <div class="h-96 bg-hero-header bg-no-repeat bg-center bg-cover"></div>
    <div class="bg-card-slider h-2.5 -mt-2.5"></div>
    <div class="max-w-5xl mx-auto py-8 px-4 sm:px-6 grid-cols-3 gap-x-8 grid">
        @foreach ($tours as $tour)
        <div class="col-span-1">
            <x-tour-card :tour="$tour"></x-tour-card>
        </div>
        @endforeach
    </div>
    <div class="flex">
        <div class="w-1/2 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/vezasur7.png')"></div>
        <div class="w-1/2 bg-no-repeat bg-center bg-cover py-7 px-4 bg-white" style="background-image: url('/images/bg_map.png')">
            <h4 class="uppercase font-bold text-gray-900 leading-7 text-2xl mb-3">VEZA SUR RIDE EXPERIENCE! music, good vibes , good friends AND MORE!</h4>
            <p class="leading- text-gray-700">For two hours, we’ll take you around to legendary South Beach, amazing Downtown, colorful Wynwood, or stylish Brickell.</p>
            <p class="leading-7 text-gray-700">2 hour trip for up to 10 people.</p>
            <p class="leading-7 text-gray-700"> 3 different routes to chose from..</p>
            <p class="leading-7">Available times per day:</p>
            <ul class="leading-7">
                <li>· 3pm - 5pm</li>
                <li>· 6pm - 8pm</li>
                <li>· 9pm - 11pm.</li>
            </ul>
            <p></p>
        </div>
    </div>
</x-layout>
