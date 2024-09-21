<x-app-layout>
    <section>
        <div class="container mx-auto px-4 py-8 ">
            <div class="flex justify-center space-x-8 py-32">
                <button class="relative text-black text-xl font-bold focus:outline-none" id="center-tab">
                    Центар Крикни
                    <div id="center-line" class="h-1 w-full bg-red-500 absolute bottom-0 left-0"></div>
                </button>
                <button class="relative text-black text-xl font-bold focus:outline-none" id="independent-tab">
                    Независни Станбени Единици
                    <div id="independent-line" class="h-1 w-full absolute bottom-0 left-0"></div>
                </button>
                <button class="relative text-black text-xl font-bold focus:outline-none" id="consult-tab">
                    Советувалиште
                    <div id="consult-line" class="h-1 w-full absolute bottom-0 left-0"></div>
                </button>
            </div>

            <div id="service-info" class="mt-8">
                <h2 class="text-black text-4xl font-bold">Центар Крикни</h2>
                <p class="text-black mt-4 text-lg leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sint reiciendis minus ullam eos odio
                    illo totam architecto. Nam, ad quae tempore ratione sint ea asperiores reiciendis molestias nihil
                    numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores velit animi, suscipit
                    illum blanditiis nobis. Non tenetur aperiam velit ratione molestiae quasi cupiditate temporibus
                    totam? Dignissimos nemo alias nam eaque sed, magni nostrum eveniet ex consectetur voluptatum quae
                    laborum animi?
                </p>
            </div>

            <div class="mt-28">
                <h3 class="text-black text-xl font-bold">Галерија со Активности</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mt-4">
                    <div class="h-48 bg-cover bg-center"
                        style="background-image: url('https://via.placeholder.com/400x300');"></div>
                    <div class="h-48 bg-cover bg-center"
                        style="background-image: url('https://via.placeholder.com/400x300');"></div>
                    <div class="h-48 bg-cover bg-center"
                        style="background-image: url('https://via.placeholder.com/400x300');"></div>
                    <div class="h-48 bg-cover bg-center"
                        style="background-image: url('https://via.placeholder.com/400x300');"></div>
                    <div class="h-48 bg-cover bg-center"
                        style="background-image: url('https://via.placeholder.com/400x300');"></div>

                </div>
            </div>

            <script>

                const centerTab = document.getElementById('center-tab');
                const independentTab = document.getElementById('independent-tab');
                const consultTab = document.getElementById('consult-tab');

                const centerLine = document.getElementById('center-line');
                const independentLine = document.getElementById('independent-line');
                const consultLine = document.getElementById('consult-line');

                const serviceInfo = document.getElementById('service-info');

                centerLine.classList.remove('hidden');

                centerTab.addEventListener('click', () => {
                    centerLine.classList.remove('hidden');
                    independentLine.classList.add('hidden');
                    consultLine.classList.add('hidden');

                    serviceInfo.innerHTML = `
      <h2 class="text-black text-4xl font-bold">Центар Крикни</h2>
                <p class="text-black mt-4 text-lg leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sint reiciendis minus ullam eos odio
                    illo totam architecto. Nam, ad quae tempore ratione sint ea asperiores reiciendis molestias nihil
                    numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores velit animi, suscipit
                    illum blanditiis nobis. Non tenetur aperiam velit ratione molestiae quasi cupiditate temporibus
                    totam? Dignissimos nemo alias nam eaque sed, magni nostrum eveniet ex consectetur voluptatum quae
                    laborum animi?
                </p>
    `;
                });

                independentTab.addEventListener('click', () => {
                    independentLine.classList.remove('hidden');
                    centerLine.classList.add('hidden');
                    consultLine.classList.add('hidden');

                    serviceInfo.innerHTML = `
      <h2 class="text-black text-4xl font-bold">Независни Станбени Единици</h2>
      <p class="text-black mt-4 text-lg leading-relaxed">
        Information about the Независни Станбени Единици service.
      </p>
    `;
                });

                consultTab.addEventListener('click', () => {
                    consultLine.classList.remove('hidden');
                    independentLine.classList.add('hidden');
                    centerLine.classList.add('hidden');

                    serviceInfo.innerHTML = `
      <h2 class="text-black text-4xl font-bold">Советувалиште</h2>
      <p class="text-black mt-4 text-lg leading-relaxed">
        Information about the Советувалиште service.
      </p>
    `;
                });
            </script>

    </section>
</x-app-layout>