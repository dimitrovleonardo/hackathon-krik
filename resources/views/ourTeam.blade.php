<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-4xl font-bold text-black m-24">Запознајте го Нашиот Тим</h1>

        <div class="flex justify-center items-center gap-8">
            <!-- Side Member 1 -->
            <div id="side-member-1" class="text-center">
                <img src="{{ asset('images/ourTeam/mateo-trenkoski.jpg') }}" alt="Team Member 1"
                    class="rounded-lg mx-auto mb-4" id="side-1-photo">
                <h3 id="side-1-name" class="text-black font-semibold">Матеј Трифуновски</h3>
                <p id="side-1-role" class="text-gray-600 my-10">Асистент на центар Крикни</p>
                <a class="bg-red-500 text-white px-4 py-2 m-10 rounded-full">LinkedIn</a>
            </div>

            <!-- Main Team Member with Navigation Arrows -->
            <div class="bg-white border-2 border-blue-400 rounded-lg p-6 text-center relative">
                <img id="main-member-photo" src="{{ asset('images/ourTeam/igor-dimovski.jpg') }}" alt="Main Team Member"
                    class="rounded-lg mx-auto mb-4">
                <div id="arrow-left"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 -ml-8 bg-black text-white rounded-full p-2 cursor-pointer">
                    <span class="material-icons">
                        < </span>
                </div>
                <div id="arrow-right"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 -mr-8 bg-black text-white rounded-full p-2 cursor-pointer">
                    <span class="material-icons">></span>
                </div>
                <h2 id="main-member-name" class="text-black text-2xl font-bold mt-4">Игор Димовски</h2>
                <p id="main-member-role" class="text-black text-lg my-10">Координатор за активности во ЦМА - Крикни</p>
                <a class="bg-red-500 text-white px-4 py-2 m-10 rounded-full">LinkedIn</a>
            </div>

            <!-- Side Member 2 -->
            <div id="side-member-2" class="text-center">
                <img src="{{ asset('images/ourTeam/sara-dimoska.jpg') }}" alt="Team Member 2"
                    class="rounded-lg mx-auto mb-4" id="side-2-photo">
                <h3 id="side-2-name" class="text-black font-semibold">Сара Димков</h3>
                <p id="side-2-role" class="text-gray-600 my-10">Асистент на центар Крикни</p>
                <a class="bg-red-500 text-white px-4 py-2 m-10 rounded-full">LinkedIn</a>
            </div>
        </div>

    </div>

    <h2 class="text-center text-4xl font-bold text-black my-24 ">Членови на Управниот Одбор</h2>

    <div class="divide-y divide-black">
        <!-- Board Member 1 -->
        <div class="flex items-center justify-center py-8 px-8">
            <img src="{{ asset('images/ourTeam/member1.jpg') }}" alt="Board Member 1" class="rounded object-cover mr-8"
                style="width: 150px; height: 150px;">
            <div class="pl-8">
                <h3 class="text-black text-3xl font-semibold">Лорем Ипсум Долор Сит</h3>
                <p class="text-black text-lg">Улога во организација</p>
                <p class="text-black mt-2">Lorem ipsum dolor sit amet consectetur. Eu nisl sed ullamcorper turpis odio
                    sit. Congue diam odio dis nibh malesuada bibendum ut...</p>
            </div>
        </div>
        <hr class="border-t-2 border-black mx-auto w-full">

        <!-- Board Member 2 -->
        <div class="flex items-center justify-center py-8">
            <img src="{{ asset('images/ourTeam/member2.jpg') }}" alt="Board Member 2" class="rounded object-cover mr-8"
                style="width: 150px; height: 150px;">
            <div class="pl-8">
                <h3 class="text-black text-3xl font-semibold">Лорем Ипсум Долор Сит</h3>
                <p class="text-black text-lg">Улога во организација</p>
                <p class="text-black mt-2">Lorem ipsum dolor sit amet consectetur. Eu nisl sed ullamcorper turpis odio
                    sit. Congue diam odio dis nibh malesuada bibendum ut...</p>
            </div>
        </div>
        <hr class="border-t-2 border-black mx-auto w-full">

        <!-- Board Member 3 -->
        <div class="flex items-center justify-center py-8">
            <img src="{{ asset('images/ourTeam/member3.jpg') }}" alt="Board Member 3" class="rounded object-cover mr-8"
                style="width: 150px; height: 150px;">
            <div class="pl-8">
                <h3 class="text-black text-3xl font-semibold">Лорем Ипсум Долор Сит</h3>
                <p class="text-black text-lg">Улога во организација</p>
                <p class="text-black mt-2">Lorem ipsum dolor sit amet consectetur. Eu nisl sed ullamcorper turpis odio
                    sit. Congue diam odio dis nibh malesuada bibendum ut...</p>
            </div>
        </div>
    </div>


    <script>
        // Member data
        const members = [
            {
                photo: `{{ asset('images/ourTeam/igor-dimovski.jpg') }}`,
                name: 'Игор Димовски',
                role: 'Координатор за активности во ЦМА - Крикни',
            },
            {
                photo: `{{ asset('images/ourTeam/mateo-trenkoski.jpg') }}`,
                name: 'Матеј Трифуновски',
                role: 'Асистент на центар Крикни',
            },
            {
                photo: `{{ asset('images/ourTeam/sara-dimoska.jpg') }}`,
                name: 'Сара Димков',
                role: 'Асистент на центар Крикни',
            },
        ];

        // Elements
        const mainPhoto = document.getElementById('main-member-photo');
        const mainName = document.getElementById('main-member-name');
        const mainRole = document.getElementById('main-member-role');

        const side1Photo = document.getElementById('side-1-photo');
        const side1Name = document.getElementById('side-1-name');
        const side1Role = document.getElementById('side-1-role');

        const side2Photo = document.getElementById('side-2-photo');
        const side2Name = document.getElementById('side-2-name');
        const side2Role = document.getElementById('side-2-role');

        const arrowLeft = document.getElementById('arrow-left');
        const arrowRight = document.getElementById('arrow-right');

        // Indices to keep track of positions
        let mainIndex = 0;
        let side1Index = 1;
        let side2Index = 2;

        // Function to update the member information
        function updateMembers() {
            mainPhoto.src = members[mainIndex].photo;
            mainName.textContent = members[mainIndex].name;
            mainRole.textContent = members[mainIndex].role;

            side1Photo.src = members[side1Index].photo;
            side1Name.textContent = members[side1Index].name;
            side1Role.textContent = members[side1Index].role;

            side2Photo.src = members[side2Index].photo;
            side2Name.textContent = members[side2Index].name;
            side2Role.textContent = members[side2Index].role;
        }

        // Handle left arrow click
        arrowLeft.addEventListener('click', () => {
            // Rotate indices to the left
            [mainIndex, side1Index, side2Index] = [side1Index, side2Index, mainIndex];
            updateMembers();
        });

        // Handle right arrow click
        arrowRight.addEventListener('click', () => {
            // Rotate indices to the right
            [mainIndex, side1Index, side2Index] = [side2Index, mainIndex, side1Index];
            updateMembers();
        });

        // Initialize with the current members
        updateMembers();
    </script>



</x-app-layout>