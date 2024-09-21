<x-app-layout>
    <section class="flex items-center justify-center h-screen">
        <!-- Container with specified max-width and centered content -->
        <div class=" container max-width: 1024px flex items-center p-6 rounded-lg max-w-2xl">
            <!-- Profile Image -->
            <div class="flex-shrink-0">
                <img src="{{ asset('images/ourTeam/igor-dimovski.jpg') }}" alt="Sara Dimoska"
                    class="rounded-xl w-60 h-60 object-cover">
            </div>
            <!-- Profile Information -->
            <div class="ml-6" style="flex-basis: 75%; margin-left:20px;">
                <h2 class="text-black text-4xl font-bold mb-3">Игор Димовски</h2>
                <p class="text-black text-m leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur. Eu morbi sed sollicitudin eu ut. Congue dictum nibh non
                    sodales est. Id dolor eu purus cursus elit. Sed eleifend facilisis morbi risus ullamcorper.
                    Dictumst viverra semper scelerisque proin nisl luctus vitae ut. Lorem ipsum dolor sit amet
                    consectetur. Eu morbi sed sollicitudin eu ut. Congue dictum nibh non sodales est. Id dolor eu
                    purus cursus elit. Sed eleifend facilisis morbi risus ullamcorper. Dictumst viverra semper
                    scelerisque proin nisl luctus vitae ut.
                </p>
            </div>
        </div>
    </section>
</x-app-layout>