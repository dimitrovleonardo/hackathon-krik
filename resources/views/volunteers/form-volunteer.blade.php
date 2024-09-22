<x-guest-layout>
    <section class="min-h-screen max-w-screen-x1 font-montserrat box-border bg-[#FBF8F4]">
        <div class="px-4 mx-auto  py-24  w-4/5 ">
            <div class="font-mulish pt-[19px] text-center text-[48px] font-extrabold leading-[72px] text-neutral-900">
                Волонтирај Сега!
            </div>
            <div class="flex justify-center items-center w-full mt-10">
                <form action="{{ route('storeApplicant') }}" id="addApplicant" method="POST" class="mx-auto w-full max-w-2xl p-10 rounded-3xl bg-white shadow">
                    @csrf
                    <div class="flex space-x-8">
                        <div class="w-1/2">
                            <div class="mb-2">
                                <label for="name" class="block mb-2 text-sm font-bold">Име на волонтер*</label>
                                <input type="text" id="name" name="name" class="w-full p-2 border-2 border-black rounded-3xl " placeholder="Example Namington">
                            </div>
                            <div class="mb-2">
                                <label for="country" class="block mb-2 text-sm font-bold">Адреса*</label>
                                <input type="text" id="country" name="country" class="w-full p-2 border-2 border-black rounded-3xl" placeholder="Example Street 24">
                            </div>
                            <div class="mb-2">
                                <label for="number" class="block mb-2 text-sm font-bold">Телефонски број*</label>
                                <input type="text" id="number" name="number" class="w-full p-2 border-2 border-black rounded-3xl" placeholder="+38900000000">
                            </div>
                            <div class="mb-2">
                                <label for="email" class="block mb-2 text-sm font-bold">Email*</label>
                                <input type="email" id="email" name="email" class="w-full p-2 border-2 border-black rounded-3xl" placeholder="example@email.com">
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="mb-2">
                                <p class="block mb-2 text-sm font-bold">Возраст*</p>
                                <div class="flex space-x-6 mb-10">
                                    <div class="flex items-center border-2 border-black rounded-3xl">

                                        <label for="age_under_18" class=" px-10 ms-2 text-xs  cursor-pointer">Под 18 години
                                            <input id="age_under_18" type="radio" value="under_18" name="age" class="hidden" />
                                        </label>
                                    </div>
                                    <div class="flex items-center border-2 border-black rounded-3xl">
                                        <input id="age_over_18" type="radio" value="over_18" name="age" class="hidden" />
                                        <label for="age_over_18" class=" px-10 ms-2 text-xs  cursor-pointer">Над 18 години</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="relative mb-10">
                                    <label for="expiriance" class="block mb-2 text-sm font-bold">Искуство со волонтирање*</label>
                                    <input id="expiriance" name="expiriance" type="range" value="1" min="1" max="10" class="w-full h-2 bg-white rounded-lg appearance-none cursor-pointer border-2 border-black accent-orange-500">

                                    <div class="flex justify-between absolute left-0 right-0 -bottom-6">
                                        <span class="text-sm">1</span>
                                        <span class="text-sm">2</span>
                                        <span class="text-sm">3</span>
                                        <span class="text-sm">4</span>
                                        <span class="text-sm">5</span>
                                        <span class="text-sm">6</span>
                                        <span class="text-sm">7</span>
                                        <span class="text-sm">8</span>
                                        <span class="text-sm">9</span>
                                        <span class="text-sm">10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <p class="block mb-2 text-sm font-bold">Волонтерски интереси*</p>
                                <div class="flex space-x-6 mb-3">
                                    <div class="flex items-center border-2 border-black rounded-3xl">
                                        <input id="interests_construction" type="radio" value="construction" name="interests" class="hidden" />
                                        <label for="interests_construction" class="py-2 px-10 ms-2 text-[10px]  cursor-pointer">Construction</label>
                                    </div>
                                    <div class="flex items-center border-2 border-black rounded-3xl">
                                        <input id="interests_sports" type="radio" value="sports" name="interests" class="hidden" />
                                        <label for="interests_sports" class="py-2 px-10 ms-2 text-[10px]  cursor-pointer">Sports</label>
                                    </div>
                                </div>
                                <div class="flex space-x-6 ">
                                    <div class="flex items-center border-2 border-black rounded-3xl">
                                        <input id="interests_advocacy" type="radio" value="advocacy" name="interests" class="hidden" />
                                        <label for="interests_advocacy" class="py-2 px-10 ms-2 text-xs  cursor-pointer">Advocacy</label>
                                    </div>
                                    <div class="flex items-center border-2 border-black rounded-3xl">
                                        <input id="interests_fundraising" type="radio" value="fundraising" name="interests" class="hidden" />
                                        <label for="interests_fundraising" class="py-2 px-10 ms-2 text-[10px]  cursor-pointer">Fundraising</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-9">
                        <input type="submit" class="text-center bg-[tomato] text-white py-2 px-8 rounded-3xl border  mt-9 mx-auto" value="Пријави Се">
                    </div>

                </form>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#addApplicant').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{{ route('storeApplicant') }}",
                    data: $('#addApplicant').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('form')[0].reset();
                        console.log(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseJSON.errors); // Log validation errors
                    }
                });
            });
        });
    </script>
</x-guest-layout>