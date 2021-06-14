{{--@push('styles')--}}
{{--    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">--}}
{{--@endpush--}}

{{--@push('scripts-end')--}}
{{--    <script src="{{ mix('/js/checkout.js') }}"></script>--}}
{{--@endpush--}}

<x-layout>
    <div class="max-w-5xl mx-auto mt-8 tour-page">
        <div class="bg-white rounded-md shadow p-6">
            <iframe src="{{ $tour->url }}" title="{{ $tour->title }}" width="100%" height="500px"></iframe>
        </div>
    </div>
</x-layout>
