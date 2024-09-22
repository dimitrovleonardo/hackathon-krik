<x-guest-layout>
    <section class="main font-montserrat">
        <div class="bg-black">
            <div class="mx-auto w-4/5 pt-20 uppercase">
                <img src="{{ asset('images/Frame 417.png') }}">
            </div>
        </div>

        <div class="relative w-4/5 mx-auto">
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-black"></div>

            @foreach ($projectsByMonth as $index => $projectMonth)
                @php
                    $monthName = \Carbon\Carbon::createFromDate($projectMonth->year, $projectMonth->month, 1)->translatedFormat('F, Y');
                    $monthNameURL = \Carbon\Carbon::createFromDate($projectMonth->year, $projectMonth->month, 1)->translatedFormat('F');

                @endphp

                @if ($index % 2 == 0)
                    <div class="flex items-start mb-[150px]">
                        <div class="w-1/2 p-4 text-right flex items-center justify-end mt-[150px]">
                            <div>
                                <a href='{{route('newsletter.index', ['newsletter' => $monthNameURL])}}'><h2 class="font-bold text-3xl pb-4">{{ $monthName }}</h2></a>
                                <p>There were {{ $projectMonth->count }} projects in this month.</p>
                            </div>
                        </div>
                        <div class="relative w-8 h-8 flex items-center justify-center mt-[150px]">
                            <span class="absolute w-5 h-5 rounded-full bg-orange-500 left-1/2 transform -translate-x-1/2"></span>
                        </div>
                        <div class="w-1/2 pl-16 flex items-center justify-start mt-[150px]">
                            <img class="filter grayscale rounded-lg w-80 h-80" src="{{ asset('images/newsletter_1.png') }}" alt="">
                        </div>
                    </div>
                @else
                    <div class="flex items-start mb-[150px]">
                        <div class="w-1/2 pr-16 flex items-center justify-end">
                            <img class="filter grayscale rounded-lg w-80 h-80" src="{{ asset('images/newsletter_2.png') }}" alt="">
                        </div>
                        <div class="relative w-8 h-8 flex items-center justify-center">
                            <span class="absolute w-5 h-5 rounded-full bg-orange-500 left-1/2 transform -translate-x-1/2"></span>
                        </div>
                        <div class="w-1/2 p-4 text-left flex items-center">
                            <div>
                                <a href='{{route('newsletter.index', $monthNameURL)}}'><h2 class="font-bold text-3xl pb-4">{{ $monthName }}</h2></a>
                                <p>There were {{ $projectMonth->count }} projects in this month.</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </section>
</x-guest-layout>
