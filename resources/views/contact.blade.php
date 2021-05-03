@push('scripts-end')
    <script src="{{ mix('/js/contact.js') }}"></script>
@endpush

<x-layout>
    <div class="max-w-5xl mx-auto mt-8 payment-page">
        <div class="bg-white rounded-md shadow p-6">
            <h3 class="text-lg font-semibold mb-3">{{ $tour->name }}</h3>
            <p class=""><span id="date"></span> - <span id="time"></span></p>
            <hr class="mb-5 mt-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="col-span-1 space-y-4">
                    <h3 class="text-lg font-semibold">CONTACT INFORMATION TOUR</h3>
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700">NAME:</label>
                        <input type="text" name="name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">LAST NAME:</label>
                        <input type="text" name="last_name" id="last_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">ADDRESS:</label>
                        <input type="text" name="address" id="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                    </div>
                </div>
                <div class="col-span-1 space-y-4">
                    <h3 class="text-lg font-semibold">PAYMENT INFORMATION TOUR</h3>
                    <div>
                        <label for="payment" class="block text-sm font-medium text-gray-700">PAYMENT:</label>
                        <select name="payment" id="payment" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                            <option value="CREDIT CARD">CREDIT CARD</option>
                            <option value="CASH">CASH</option>
                        </select>
                    </div>
                    <div>
                        <label for="credit_card" class="block text-sm font-medium text-gray-700">CREDIT CARD:</label>
                        <input type="text" name="credit_card" id="credit_card" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                    </div>
                    <div>
                        <label for="billing_address" class="block text-sm font-medium text-gray-700">BILLING ADDRESS:</label>
                        <input type="text" name="billing_address" id="billing_address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                    </div>
                </div>
            </div>
            <div class="mt-12 text-right">
                <button type="button" id="submit" class="inline-flex justify-center w-60 py-2 border border-transparent leading-4 font-bold text-lg rounded-md shadow-sm text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">NEXT</button>
            </div>
        </div>
    </div>
</x-layout>
