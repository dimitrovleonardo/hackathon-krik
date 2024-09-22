<x-guest-layout>
    <div class="mx-auto py-20">
        <!-- Meet Our Team Header -->
        <div class="text-center">
            <h1 class="text-black font-mulish text-5xl mt-4">Запознајте го нашиот тим</h1>
        </div>

        <!-- Team Members Carousel -->
        <div class="relative flex justify-center items-center mt-10" style="height: 700px;">
            <!-- Left Small Team Member -->
            <div id="left-small" class="absolute left-[15%] transition-all duration-500 ease-in-out text-center">
                <a id="left-link" href="#">
                    <img id="left-image" src="{{ asset('images/ourTeam/sara-dimoska.jpg') }}" alt="Left Team Member"
                         class="w-[250px] h-[250px] rounded-[15%]">
                </a>
                <div class="mt-2">
                    <p class="text-black font-medium text-sm" id="left-name">Сара Димоска</p>
                    <p class="text-black font-medium text-sm mb-2" id="left-role">Координатор во ЦМА Крик</p>
                </div>
            </div>

            <!-- Main Team Member Display -->
            <div id="main-member"
                 class="absolute left-1/2 transform -translate-x-1/2 transition-all duration-500 text-center">
                <a id="main-link" href="#">
                    <img id="member-image" src="{{ asset('images/ourTeam/igor-dimovski.jpg') }}" alt="Team Member"
                         class="w-[450px] h-[450px] rounded-[15%] mx-auto">
                </a>

                <!-- Arrows for Navigation below the image -->
                <div class="flex justify-center mt-4">
                    <!-- Left Arrow -->
                    <div id="left-arrow"
                         class="bg-black rounded-full p-3 cursor-pointer mx-4 hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </div>
                    <!-- Right Arrow -->
                    <div id="right-arrow"
                         class="bg-black rounded-full p-3 cursor-pointer mx-4 hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- Name and Role below arrows -->
                <div class="mt-4">
                    <h2 class="text-black font-mulish text-3xl font-bold" id="member-name">Игор Димовски</h2>
                    <p class="text-black font-bold text-xl mb-2" id="member-role">Координатор за волонтери во ЦМА -
                        Крик</p>
                </div>

                <!-- LinkedIn Button below name and role -->
                <a id="linkedin-link" href="#"
                   class="bg-[#FB5E3C] text-white px-3 py-2 rounded-lg flex items-center justify-between w-[55%] mx-auto mt-4">
                    <span>LinkedIn</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         class="w-6 h-6 text-white ml-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Right Small Team Member -->
            <div id="right-small" class="absolute right-[15%] transition-all duration-500 ease-in-out text-center">
                <a id="right-link" href="#">
                <img id="right-image" src="{{ asset('images/ourTeam/mateo-trenkoski.jpg') }}" alt="Right Team Member"
                     class="w-[250px] h-[250px] rounded-[15%]">
                </a>
                <div class="mt-2">
                    <p class="text-black font-medium text-sm" id="right-name">Матео Тренкоски</p>
                    <p class="text-black font-medium text-sm mb-2" id="right-role">практикант во ЦМА Крик</p>
                </div>
            </div>
        </div>

        <!-- Board Members Section -->
        <div class="w-full py-32">
            <h2 class="text-black font-heading text-5xl text-center">Членови на Управниот Одбор</h2>
            <div class="mt-16">
                <!-- Board Member 1 -->
                <hr class="my-8 border-black border-t-2 w-full">
                <div class="container mx-auto flex flex-col md:flex-row items-center justify-center py-8">
                    <div class="w-1/4 text-center">
                        <img src="{{ asset('images/ourTeam/member1.jpg') }}" alt="Board Member 1"
                             class="rounded-md mx-auto">
                    </div>
                    <div class="w-3/4 md:w-1/2 ml-8">
                        <h3 class="text-black font-heading text-3xl">Lorem Ipsum</h3>
                        <p class="text-black font-heading text-xl">Role of the Member</p>
                        <p class="text-black text-lg mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <!-- Board Member 2 -->
                <hr class="my-8 border-black border-t-2 w-full">
                <div class="container mx-auto flex flex-col md:flex-row items-center justify-center py-8">
                    <div class="w-1/4 text-center">
                        <img src="{{ asset('images/ourTeam/member2.jpg') }}" alt="Board Member 2"
                             class="rounded-md mx-auto">
                    </div>
                    <div class="w-3/4 md:w-1/2 ml-8">
                        <h3 class="text-black font-heading text-3xl">Lorem Ipsum</h3>
                        <p class="text-black font-heading text-xl">Role of the Member</p>
                        <p class="text-black text-lg mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <!-- Board Member 3 -->
                <hr class="my-8 border-black border-t-2 w-full">
                <div class="container mx-auto flex flex-col md:flex-row items-center justify-center py-8">
                    <div class="w-1/4 text-center">
                        <img src="{{ asset('images/ourTeam/member3.jpg') }}" alt="Board Member 3"
                             class="rounded-md mx-auto">
                    </div>
                    <div class="w-3/4 md:w-1/2 ml-8">
                        <h3 class="text-black font-heading text-3xl">Lorem Ipsum</h3>
                        <p class="text-black font-heading text-xl">Role of the Member</p>
                        <p class="text-black text-lg mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <hr class="my-8 border-black border-t-2 w-full">
            </div>
        </div>
    </div>

    <script>
        let teamMembers = [];
        let currentIndex = 0;

        // Fetch team members data from the API
        fetch('/api/team-members')
            .then(response => response.json())
            .then(data => {
                teamMembers = data;
                updateMemberDisplay(currentIndex); // Call the function to display the first team member
            })
            .catch(error => console.error('Error fetching team members:', error));

        function updateMemberDisplay(index) {
            if (teamMembers.length === 0) return;

            const member = teamMembers[index];
            const leftIndex = (index === 0) ? teamMembers.length - 1 : index - 1;
            const rightIndex = (index === teamMembers.length - 1) ? 0 : index + 1;

            // Update main member
            document.getElementById('member-image').src = member.image;
            document.getElementById('member-name').innerText = member.name;
            document.getElementById('member-role').innerText = member.role;
            document.getElementById('linkedin-link').href = member.linkedin;
            document.getElementById('main-link').href = `/team/${member.id}`;

            // Update left and right small members
            document.getElementById('left-image').src = teamMembers[leftIndex].image;
            document.getElementById('left-name').innerText = teamMembers[leftIndex].name;
            document.getElementById('left-role').innerText = teamMembers[leftIndex].role;
            document.getElementById('left-link').href = `/team/${member.id}`;

            document.getElementById('right-image').src = teamMembers[rightIndex].image;
            document.getElementById('right-name').innerText = teamMembers[rightIndex].name;
            document.getElementById('right-role').innerText = teamMembers[rightIndex].role;
            document.getElementById('right-link').href = `/team/${member.id}`;
        }

        document.getElementById('left-arrow').addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? teamMembers.length - 1 : currentIndex - 1;
            updateMemberDisplay(currentIndex);
        });

        document.getElementById('right-arrow').addEventListener('click', () => {
            currentIndex = (currentIndex === teamMembers.length - 1) ? 0 : currentIndex + 1;
            updateMemberDisplay(currentIndex);
        });
    </script>

</x-guest-layout>
