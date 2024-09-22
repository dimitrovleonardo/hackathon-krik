<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-4xl font-bold text-black mb-8">Донирај!</h1>

        <div class="flex justify-center space-x-8 mb-6">
            <button class="relative text-black text-lg font-semibold focus:outline-none pb-2" id="individual-tab">
                Индивидуа
                <div id="individual-line" class="h-1 w-full bg-red-500 absolute bottom-0 left-0"></div>
            </button>
            <button class="relative text-black text-lg font-semibold focus:outline-none pb-2" id="organization-tab">
                Организација/Претпријатие
            </button>
        </div>

        <div class="bg-[#F8F8F4] p-6 rounded-xl shadow-lg">
            <form action="{{ route('paypal.donation.store') }}" method="POST">
                @csrf
                <p class="text-black text-lg font-medium mb-4">Lorem ipsum dolor sit amet consectetur.</p>

                <div class="flex space-x-4 mb-6">
                    <label class="border-2 border-black text-black py-2 px-4 rounded-full text-sm cursor-pointer">
                        <input type="radio" name="amount" value="1000" class="hidden"> 1000 Ден
                    </label>
                    <label class="border-2 border-black text-black py-2 px-4 rounded-full text-sm cursor-pointer">
                        <input type="radio" name="amount" value="3000" class="hidden"> 3000 Ден
                    </label>
                    <label class="border-2 border-black text-black py-2 px-4 rounded-full text-sm cursor-pointer">
                        <input type="radio" name="amount" value="6000" class="hidden"> 6000 Ден
                    </label>
                    <button type="button"
                        class="border-2 border-black text-black py-2 px-4 rounded-full text-sm flex items-center">
                        Промени Валута <span class="ml-1">&#9660;</span>
                    </button>
                </div>

                <p class="text-black text-lg mb-6">
                    Lorem ipsum dolor sit amet consectetur. In sed lobortis donec a cras feugiat mattis velit venenatis.
                    Adipiscing viverra praesent tristique non. Nunc blandit turpis tellus natoque mi odio viverra
                    fermentum.
                </p>

                <div class="flex items-center mb-6">
                    <label class="text-black text-lg mr-4">Друг Износ:</label>
                    <input type="number" name="custom_amount" style="width: 150px;"
                        class="border-2 border-black rounded-full py-2 px-4 flex-1" placeholder="Input">
                </div>

                <div class="flex space-x-4">
                    <button onclick="scrollToCardPaymentForm(event)" type="submit" name="payment_method" value="Card"
                        class="bg-black text-white py-2 px-6 rounded-full flex items-center">
                        <i class="fas fa-credit-card mr-2"></i> Плати со картичка
                    </button>
                    <button type="submit" name="payment_method" value="PayPal"
                        class="bg-orange-500 text-black py-2 px-6 rounded-full flex items-center">
                        PayPal
                    </button>
                </div>
            </form>
        </div>



        <div id="card-payment-form" class="mt-8 p-6 border-2 rounded-xl shadow-md">
            <!-- Updated form with action and method attributes -->
            <form action="{{ route('donate.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2">Име на Донатор*</label>
                        <input type="text" name="donor_name" class="border-2 border-black rounded py-2 px-4"
                            placeholder="Example Namington" required>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2 text-xs flex items-center">
                            Број на картичка*
                            <span class="ml-auto flex items-center">
                                <i class="fa-brands fa-cc-visa"></i>
                                <i class="fa-brands fa-cc-mastercard"></i>
                                <i class="fa-brands fa-cc-amex"></i>
                            </span>
                        </label>
                        <input type="number" name="card_number" class="border-2 border-black rounded py-2 px-4"
                            placeholder="**** **** **** ****" required>
                    </div>
                    <!-- Email -->
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2">Email*</label>
                        <input type="email" name="email" class="border-2 border-black rounded py-2 px-4"
                            placeholder="example@email.com" required>
                    </div>
                    <!-- Expiration Date and CVV -->
                    <div class="flex space-x-2">
                        <div class="flex-1 flex flex-col">
                            <label class="text-black font-semibold mb-2">MM/YY</label>
                            <input type="text" name="expiration_date" class="border-2 border-black rounded py-2 px-4"
                                placeholder="MM/YY" required>
                        </div>
                        <div class="flex-1 flex flex-col">
                            <label class="text-black font-semibold mb-2">CVV</label>
                            <input type="number" name="cvv" class="border-2 border-black rounded py-2 px-4"
                                placeholder="CVV" required>
                        </div>
                    </div>
                    <!-- Phone Number -->
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2">Телефонски број*</label>
                        <input type="tel" name="phone_number" class="border-2 border-black rounded py-2 px-4"
                            placeholder="+3890000000" required>
                    </div>
                    <!-- Card Holder Name -->
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2">Име на сопственик*</label>
                        <input type="text" name="card_holder_name" class="border-2 border-black rounded py-2 px-4"
                            placeholder="Example Namington" required>
                    </div>
                    <!-- Donation Amount -->
                    <div class="flex flex-col col-span-2">
                        <label class="text-black font-semibold mb-2">Сума за донирање*</label>
                        <input type="number" name="amount" class="border-2 border-black rounded py-2 px-4"
                            placeholder="a million?" required>
                    </div>
                </div>
                <!-- Donate Button -->
                <button type="submit" class="bg-red-500 text-white py-2 px-8 rounded-full">Донирај</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('individual-tab').addEventListener('click', () => {
            document.getElementById('individual-line').classList.remove('hidden');
        });

        document.getElementById('organization-tab').addEventListener('click', () => {
            document.getElementById('individual-line').classList.add('hidden');
        });

        // Open PayPal in a new tab when clicking "PayPal"
        document.querySelector('.bg-orange-500').addEventListener('click', (e) => {
            e.preventDefault();
            window.open('https://www.paypal.com', '_blank');
        });
        function scrollToCardPaymentForm(event) {
            event.preventDefault();
            const element = document.getElementById('card-payment-form');
            element.scrollIntoView({ behavior: 'smooth' });
        }
    </script>

</x-app-layout>