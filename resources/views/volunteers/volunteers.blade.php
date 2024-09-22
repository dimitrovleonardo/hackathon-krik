<x-guest-layout>
    <section class="min-h-screen font-montserrat box-border bg-white">
        <div class="md:px-2 xl:px-4 mx-auto max-w-screen-x1 sm:py-20 xl:py-24">
            <h1 class="font-mulish pt-5 text-center font-extrabold text-neutral-900 md:text-3xl xl:text-5xl">Нашите Волонтери</h1>
            <div class="relative flex items-end justify-center xl:pt-14 sm:pt-10 w-3/4 mx-auto border-b-2 border-black">
                <div class="w-1/2 ">
                    <h2 class=" font-mulish text-center font-bold md:text-2xl xl:text-4xl cursor-pointer xl:pb-10 sm:pb-5 " id="longTerm">Долг Рок</h2>
                </div>
                <div class="w-1/2">
                    <h2 class="font-mulish text-center font-bold md:text-2xl xl:text-4xl cursor-pointer xl:pb-10 sm:pb-5" id="shortTerm">Краток Рок</h2>
                </div>
                <div id="border" class="absolute bottom-[-4px] left-[-2px] w-1/2 h-2 bg-[tomato] transition-all duration-300 rounded"></div>
            </div>
            <div class=" pt-10">
                <div class="grid grid-cols-4 gap-2 w-4/5 mx-auto" id="volunteers">


                </div>
            </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            $.ajax({
                url: "{{ route('getLongTerm' )}}",
                type: "GET",
                success: function(data) {

                    console.log(data);
                    $('#volunteers').empty();

                    data.data.forEach(function(volunteer) {
                        $('#volunteers').append(
                            `
                            <div class="card volunteer cursor-pointer mb-4 scale-100 lg:scale-100 mb-4" data-id="${volunteer.id}">
                                <div class="max-w-xs bg-white border border-gray-200 xl:rounded-3xl sm:rounded-xl shadow-md ">
                                        <img class="xl:rounded-t-3xl sm:rounded-t-xl" src="{{ asset('storage/') }}/${volunteer.image}" alt="" /> 
                                    <div class="xl:p-5 sm:p-4">
                                        <h5 class="xl:mb-2 sm:mb-0 font-bold tracking-tight text-[8px] sm: lg:text-xl">${volunteer.name}</h5>
                                        <p class="xl:mb-3 sm:mb-1 text-[6px] sm:text-sm lg:text-sm text-gray-700 dark:text-gray-300">${volunteer.age} Години, ${volunteer.country}</p>
                                    </div>
                                </div>
                            </div>
                            `
                        );
                    });
                }
            });

            $('#longTerm').click(function() {

                $('#border').css('left', 0);

                $.ajax({
                    url: "{{ route('getLongTerm' )}}",
                    type: "GET",
                    success: function(data) {

                        console.log(data);
                        $('#volunteers').empty();

                        data.data.forEach(function(volunteer) {
                            $('#volunteers').append(
                                `
                                <div class="card volunteer cursor-pointer mb-4 scale-100 lg:scale-100 mb-4" data-id="${volunteer.id}">
                                    <div class="max-w-xs bg-white border border-gray-200 xl:rounded-3xl sm:rounded-xl shadow-md ">
                                            <img class="xl:rounded-t-3xl sm:rounded-t-xl" src="{{ asset('storage/') }}/${volunteer.image}" alt="" /> 
                                        <div class="xl:p-5 sm:p-4">
                                            <h5 class="xl:mb-2 sm:mb-0 font-bold tracking-tight text-[8px] sm: lg:text-xl">${volunteer.name}</h5>
                                            <p class="xl:mb-3 sm:mb-1 text-[6px] sm:text-sm lg:text-sm text-gray-700 dark:text-gray-300">${volunteer.age} Години, ${volunteer.country}</p>
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

                $('#border').css('left', '50%');

                $.ajax({
                    url: "{{ route('getShortTerm' )}}",
                    type: "GET",
                    success: function(data) {

                        console.log(data);
                        $('#volunteers').empty();

                        data.data.forEach(function(volunteer) {
                            $('#volunteers').append(
                                `
                                    <div class="card volunteer cursor-pointer mb-4 scale-100 lg:scale-100 mb-4" data-id="${volunteer.id}">
                                        <div class="max-w-xs bg-white border border-gray-200 xl:rounded-3xl sm:rounded-xl shadow-md ">
                                                <img class="xl:rounded-t-3xl sm:rounded-t-xl" src="{{ asset('storage/') }}/${volunteer.image}" alt="" /> 
                                            <div class="xl:p-5 sm:p-4">
                                                <h5 class="xl:mb-2 sm:mb-0 font-bold tracking-tight text-[8px] sm: lg:text-xl">${volunteer.name}</h5>
                                                <p class="xl:mb-3 sm:mb-1 text-[6px] sm:text-sm lg:text-sm text-gray-700 dark:text-gray-300">${volunteer.age} Години, ${volunteer.country}</p>
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