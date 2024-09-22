<x-app-layout>
    <section>
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start mt-24 mb-24">
                <!-- Main Image and Thumbnails -->
                <div class="lg:col-span-2 flex flex-col space-y-4">
                    <!-- Main Product Image -->
                    <img src="{{ asset($product->image1) }}" alt="{{ $product->name }}"
                        class="rounded-lg w-full h-[500px] object-cover">

                </div>

                <!-- Thumbnail Images on the right -->
                <div class="grid grid-cols-1 gap-2 flex-css">
                    <img src="{{ asset($product->image2) }}" alt="{{ $product->name }}"
                        class="thumbnail-image w-[300px]">
                    <img src="{{ asset($product->image3) }}" alt="{{ $product->name }}"
                        class="thumbnail-image w-[300px]">
                    <img src="{{ asset($product->image4) }}" alt="{{ $product->name }}"
                        class="thumbnail-image w-[300px]">
                </div>
            </div>

            <!-- Product Information Below the Images -->
            <div class="flex flex-col lg:flex-row lg:justify-between items-start mt-8 mb-12">
                <div class="lg:w-2/3 ">
                    <!-- Product Name -->
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">{{ $product->name }}</h2>

                    <!-- Product Description -->
                    <p class="text-gray-700 mb-6 text-sm md:text-base">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lobortis donec a cras feugiat
                        mattis velit venenatis.
                        Adipiscing viverra praesent tristique non. Nunc blandit turpis tellus natoque mi odio viverra
                        fermentum.
                    </p>
                </div>

                <!-- Product Price and Action Buttons -->
                <div class="lg:w-1/3 flex flex-col items-start lg:items-end space-y-4 mb-12">
                    <!-- Product Price -->
                    <p class="text-2xl md:text-3xl font-bold">{{ $product->price }} MKD</p>

                    <!-- Action Buttons -->
                    <div class="flex items-center space-x-4">
                        <!-- Like Button (optional, can be connected to a wishlist functionality) -->
                        <button class="bg-gray-100 text-red-500 py-2 px-4 rounded-full flex items-center">
                            <i class="fas fa-heart"></i>
                        </button>

                        <!-- Buy Button -->
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

</x-app-layout>