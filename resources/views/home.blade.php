@push('scripts-end')
    <script src="{{ mix('/js/home.js') }}"></script>
@endpush

<x-layout>
    <div class="h-96 bg-hero-header bg-no-repeat bg-center bg-cover"></div>
    <div class="bg-card-slider h-2.5 -mt-2.5"></div>
    <div class="max-w-5xl mx-auto py-8 px-4 sm:px-6 grid-cols-1 sm:grid-cols-3 gap-x-8 grid">
        @foreach ($tours as $tour)
            <div class="col-span-1 mb-4">
                <x-tour-card :tour="$tour"></x-tour-card>
            </div>
        @endforeach
    </div>
    <div class="flex">
        <div class="hidden sm:block w-1/2 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/vezasur7.png')"></div>
        <div class="w-full sm:w-1/2 bg-no-repeat bg-center bg-cover py-7 px-4 bg-white" style="background-image: url('/images/bg_map.png')">
            <h4 class="uppercase font-bold text-gray-900 leading-7 text-2xl mb-3">VEZA SUR RIDE EXPERIENCE! music, good vibes , good friends AND MORE!</h4>
            <p class="leading- text-gray-700">For two hours, we’ll take you around to amazing Downtown, Legendary Little Havana, colorful Wynwood or stylish Brickell.</p>
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
    <div class="uxoverlay overflow-y-auto flex hidden" id="age">
        <div class="uxoverlay__wrap">
            <p class="uxoverlay__logo">
                <img src="http://3.214.202.199/images/logo.png" alt="logo" class="w-[80%] sm:max-w-[460px] mx-auto">
            </p>
            <p class="text-center px-4">YOU MUST BE 21+ TO ENTER AND FOLLOW</p>
            <p class="text-center px-4">PLEASE CONFIRM DATE OF BIRTH</p>
            <form name="ageForm" id="ageForm" method="post" action="#">
                <div class="flex">
                    <div class="mr-5">
                        <input class="age-input" type="text" name="month_age" pattern=".{1,2}" placeholder="MM" required="" value="<?php echo date('n'); ?>">
                        <label class="age-label text-center">MM</label>
                    </div>
                    <div class="mr-5">
                        <input class="age-input" type="text" name="day_age" pattern=".{1,2}" placeholder="DD" required="" value="<?php echo date('j'); ?>">
                        <label class="age-label text-center">DD</label>
                    </div>
                    <div class="">
                        <input class="year age-input" type="text" name="year_age" pattern=".{4}" placeholder="YYYY" required="" value="2000">
                        <label class="age-label text-center">Year</label>
                    </div>
                </div>
                <div class="text-center mb-6">
                    <button type="submit" class="text-center border-2 px-12 py-4 font-bold text-2xl">SUBMIT</button>
                </div>
            </form>
        </div>
        <div class="uxfilter"></div>
    </div>
</x-layout>
