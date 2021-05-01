<div class="rounded bg-white p-4">
    <div class="bg-red-theme py-1 text-center text-white uppercase text-xl font-bold rounded mb-2">{{ $tour->name }}</div>
    <div class="bg-no-repeat bg-center bg-cover mb-3 rounded h-48" style="background-image: url('{{ $tour->image }}')"></div>
    <div class="uppercase leading-6 text-center text-xl mb-2"> {{ $tour->title }}</div>
    <div class="uppercase leading-6 text-center text-xl mb-5">COST: U$S {{ $tour->cost }}</div>
    <a href="/tour/{{ $tour->id }}" class="flex w-full justify-center font-semibold text-xl px-3.5 py-3 border border-transparent text-sm leading-4 font-medium rounded shadow-sm text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">SELECT</a>
</div>
