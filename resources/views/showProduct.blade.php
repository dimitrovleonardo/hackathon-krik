<x-guest-layout>
    <section>
        <div class="container mx-auto px-4">
            <!-- Image Grid Section -->
            <div class=" justify-center grid items-center my-12">
                <div class="flex grid-cols-2 max-w-5xl items-center">
                    <!-- Large image -->
                    <div class="col-span-1 flex justify-center">
                        <img src="{{ asset($product->image1) }}" alt="Large Image" class="w-[800px] h-[600px] rounded-lg object-cover">
                    </div>

                    <!-- Stacked smaller images -->
                    <div class="col-span-1 grid grid-rows-3 gap-4">
                        <img src="{{ asset($product->image2) }}" alt="Small Image 1" class="w-[150px] h-[150px] rounded-lg object-cover mx-4">
                        <img src="{{ asset($product->image3) }}" alt="Small Image 2" class="w-[150px] h-[150px] rounded-lg object-cover mx-4">
                        <img src="{{ asset($product->image4) }}" alt="Small Image 3" class="w-[150px] h-[150px] rounded-lg object-cover mx-4">
                    </div>
                </div>
            </div>

            <!-- Product Information Below the Images -->
            <div class="flex flex-col lg:flex-row lg:justify-between items-start mb-12">
                <div class="lg:w-2/3">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">{{ $product->name }}</h2>
                    <p class="text-gray-700 mb-6 text-sm md:text-base">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lobortis donec a cras feugiat mattis velit venenatis.
                        Adipiscing viverra praesent tristique non. Nunc blandit turpis tellus natoque mi odio viverra fermentum.
                    </p>
                </div>

                <!-- Product Price and Action Buttons -->
                <div class="lg:w-1/3 flex flex-col items-start lg:items-end space-y-4">
                    <p class="text-2xl md:text-3xl font-bold">{{ $product->price }} MKD</p>
                    <div class="flex items-center space-x-4">
                        <button class="bg-gray-100 text-red-500 py-2 px-4 rounded-full flex items-center">
                            <i class="fas fa-heart"></i>
                        </button>
                        <form action="{{ route('purchase', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit"
                                    class="bg-red-500 text-white py-2 px-6 rounded-full flex items-center hover:bg-red-600 transition">
                                Купи
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
