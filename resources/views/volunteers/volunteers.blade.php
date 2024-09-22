<x-guest-layout>
    <section class="min-h-screen font-montserrat box-border bg-white">
        <div class="px-4 mx-auto max-w-screen-x1 py-24 ">
            <div class="font-mulish pt-[19px] text-center text-[56px] font-extrabold leading-[72px] text-neutral-900">
                Нашите Волонтери
            </div>
            <div class="flex items-end justify-center pt-14">
                <div class="font-mulish flex flex-wrap items-center justify-center gap-x-6 gap-y-6 text-center text-[32px] font-bold capitalize leading-[48px] text-neutral-900 min-[1910px]:flex-nowrap">
                    <div id="longTerm" class="w-[619px] flex-shrink-0 cursor-pointer">Долг Рок</div>
                    <div id="shortTerm" class="w-[619px] flex-shrink-0 cursor-pointer">Краток рок</div>
                </div>
            </div>
            <div class="flex items-end justify-center pt-3.5 w-3/5 mx-auto">
                <div class="z-0 flex items-center justify-center">
                    <div class="z-[2] h-2.5 w-[619px] flex-shrink-0 rounded-full bg-[tomato]"></div>
                    <div class="z-[1] flex w-[643px] flex-shrink-0 flex-col items-end pt-px">
                        <div class="flex h-px w-[876px] flex-shrink-0 items-end">
                            <div class="h-full w-full flex-shrink-0 -scale-y-300 bg-neutral-900"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" pt-5">
                <div class="grid grid-cols-4 pt-6 gap-5 w-4/5 mx-auto" id="volunteers">


                </div>
            </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            $.ajax({
                url: "{{ route('getAll' )}}",
                type: "GET",
                success: function(data) {

                    console.log(data);
                    $('#volunteers').empty();

                    data.data.forEach(function(volunteer) {
                        $('#volunteers').append(
                            `
                            <div class="card volunteer cursor-pointer" data-id="${volunteer.id}">
                                <div class="max-w-xs bg-white border border-gray-200 rounded-3xl shadow-md ">
                                        <img class="rounded-t-3xl" src="{{ asset('storage/') }}/${volunteer.image}" alt="" /> 
                                    <div class="p-5">
                                        <h5 class="mb-2 text-md font-bold tracking-tight ">${volunteer.name}</h5>
                                        <p class="mb-3 text-base text-gray-700 dark:text-gray-300">${volunteer.age} Години, ${volunteer.country}</p>
                                    </div>
                                </div>
                            </div>
                            `
                        );
                    });
                }
            });

            $('#longTerm').click(function() {
                $.ajax({
                    url: "{{ route('getLongTerm' )}}",
                    type: "GET",
                    success: function(data) {

                        console.log(data);
                        $('#volunteers').empty();

                        data.data.forEach(function(volunteer) {
                            $('#volunteers').append(
                                `
                            <div class="card volunteer" data-id="${volunteer.id}">
                                <div class="max-w-xs bg-white border border-gray-200 rounded-3xl shadow-md ">
                                        <img class="rounded-t-3xl" src="{{ asset('storage/') }}/${volunteer.image}" alt="" /> 
                                    <div class="p-5">
                                        <h5 class="mb-2 text-md font-bold tracking-tight ">${volunteer.name}</h5>
                                        <p class="mb-3 text-base text-gray-700 dark:text-gray-300">${volunteer.age} Години, ${volunteer.country}</p>
                                    </div>
                                </div>
                            </div>
                            `
                            );
                        });
                    }
                });
            });

            $('#shortTerm').click(function() {
                $.ajax({
                    url: "{{ route('getShortTerm' )}}",
                    type: "GET",
                    success: function(data) {

                        console.log(data);
                        $('#volunteers').empty();

                        data.data.forEach(function(volunteer) {
                            $('#volunteers').append(
                                `
                            <div class="card volunteer" data-id="${volunteer.id}">
                                <div class="max-w-xs bg-white border border-gray-200 rounded-3xl shadow-md ">
                                        <img class="rounded-t-3xl" src="{{ asset('storage/') }}/${volunteer.image}" alt="" /> 
                                    <div class="p-5">
                                        <h5 class="mb-2 text-md font-bold tracking-tight ">${volunteer.name}</h5>
                                        <p class="mb-3 text-base text-gray-700 dark:text-gray-300">${volunteer.age} Години, ${volunteer.country}</p>
                                    </div>
                                </div>
                            </div>
                            `
                            );
                        });
                    }
                });
            });

            $(document).on('click', '.volunteer', function(e) {
                e.preventDefault();
                const volunteerId = $(this).data('id');
                window.location.href = `/single-volunteer/${volunteerId}`;
            });

        });
    </script>
</x-guest-layout>