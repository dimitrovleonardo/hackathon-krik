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
            <p class="text-black text-lg font-medium mb-4">Lorem ipsum dolor sit amet consectetur.</p>

            <div class="flex space-x-4 mb-6">
                <button class="border-2 border-black text-black py-2 px-4 rounded-full text-sm">1000 Ден</button>
                <button class="border-2 border-black text-black py-2 px-4 rounded-full text-sm">3000 Ден</button>
                <button class="border-2 border-black text-black py-2 px-4 rounded-full text-sm">6000 Ден</button>
                <button class="border-2 border-black text-black py-2 px-4 rounded-full text-sm flex items-center">
                    Промени Валута <span class="ml-1">&#9660;</span>
                </button>
            </div>

            <p class="text-black text-lg mb-6">
                Lorem ipsum dolor sit amet consectetur. In sed lobortis donec a cras feugiat mattis velit venenatis.
                Adipiscing viverra praesent tristique non. Nunc blandit turpis tellus natoque mi odio viverra fermentum.
            </p>

            <div class="flex items-center mb-6">
                <label class="text-black text-lg mr-4">Друг Износ:</label>
                <input style="width: 150px;" type="number" class="border-2 border-black rounded-full py-2 px-4 flex-1"
                    placeholder="Input">
            </div>

            <div class="flex space-x-4">
                <button class="bg-black text-white py-2 px-6 rounded-full flex items-center">
                    <i class="fas fa-credit-card mr-2"></i> Плати со картичка
                </button>
                <button class="bg-orange-500 text-black py-2 px-6 rounded-full flex items-center">PayPal</button>
            </div>
        </div>

        <div class="mt-8 p-6 border-2 rounded-xl shadow-md">
            <form>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2">Име на Донатор*</label>
                        <input type="text" class="border-2 border-black rounded py-2 px-4"
                            placeholder="Example Namington">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2 text-xs flex items-center">
                            Број на картичка*
                            <span class="ml-auto flex items-center">
                                <img src="https://via.placeholder.com/30" alt="Visa" class="ml-1">
                                <img src="https://via.placeholder.com/30" alt="Mastercard" class="ml-1">
                                <img src="https://via.placeholder.com/30" alt="AMEX" class="ml-1">
                            </span>
                        </label>
                        <input type="number" class="border-2 border-black rounded py-2 px-4"
                            placeholder="**** **** **** ****">
                    </div>
                    <!-- Email -->
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2">Email*</label>
                        <input type="email" class="border-2 border-black rounded py-2 px-4"
                            placeholder="example@email.com">
                    </div>
                    <!-- Expiration Date and CVV -->
                    <div class="flex space-x-2">
                        <div class="flex-1 flex flex-col">
                            <label class="text-black font-semibold mb-2">MM/YY</label>
                            <input type="number" class="border-2 border-black rounded py-2 px-4" placeholder="MM/YY">
                        </div>
                        <div class="flex-1 flex flex-col">
                            <label class="text-black font-semibold mb-2">CVV</label>
                            <input type="number" class="border-2 border-black rounded py-2 px-4" placeholder="CVV">
                        </div>
                    </div>
                    <!-- Phone Number -->
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2">Телефонски број*</label>
                        <input type="tel" class="border-2 border-black rounded py-2 px-4" placeholder="+3890000000">
                    </div>
                    <!-- Card Holder Name -->
                    <div class="flex flex-col">
                        <label class="text-black font-semibold mb-2">Име на сопственик*</label>
                        <input type="text" class="border-2 border-black rounded py-2 px-4"
                            placeholder="Example Namington">
                    </div>
                    <!-- Donation Amount -->
                    <div class="flex flex-col col-span-2">
                        <label class="text-black font-semibold mb-2">Сума за донирање*</label>
                        <input type="number" class="border-2 border-black rounded py-2 px-4" placeholder="a million?">
                    </div>
                </div>
                <!-- Donate Button -->
                <button class="bg-red-500 text-white py-2 px-8 rounded-full">Донирај</button>
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
    </script>


</x-app-layout>