<x-app-layout>
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Title -->
            <h1 class="text-center text-4xl font-bold text-black mb-24">E-shop КРИК на младите</h1>

            <!-- Featured Images (Top Carousel Section) -->
            <div class="grid grid-cols-12 gap-2 mb-24 featured-images">
                <img src="{{ asset('images/E-shop/1-1.jpg') }}" alt="Product 1" class="featured-image col-span-3">
                <img src="{{ asset('images/E-shop/1-2.jpg') }}" alt="Product 2" class="featured-image col-span-2">
                <img src="{{ asset('images/E-shop/1-3.jpg') }}" alt="Product 3" class="featured-image col-span-2">
                <img src="{{ asset('images/E-shop/1-4.jpg') }}" alt="Product 4" class="featured-image col-span-3">
                <img src="{{ asset('images/E-shop/1-5.jpg') }}" alt="Product 5" class="featured-image col-span-2">
                <img src="{{ asset('images/E-shop/1-6.jpg') }}" alt="Product 6" class="featured-image col-span-4">
                <img src="{{ asset('images/E-shop/1-7.jpg') }}" alt="Product 7" class="featured-image col-span-3">
                <img src="{{ asset('images/E-shop/1-8.jpg') }}" alt="Product 8" class="featured-image col-span-5">
            </div>

            <!-- Subheading -->
            <h2 class="text-2xl font-semibold text-center mb-24">Рачно изработен накит</h2>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($products as $product)
                    <div class="product-card mb-10">
                        <!-- Link to Product Detail Page -->
                        <a href="{{ route('showProduct', $product->id) }}">
                            <img src="{{ asset($product->image1) }}" alt="{{ $product->name }}" class="product-image">
                        </a>
                        <div class="p-4">
                            <a href="{{ route('showProduct', $product->id) }}"
                                class="text-lg font-semibold block">{{ $product->name }}</a>
                            <p class="text-gray-500">{{ $product->description }}</p>
                            <p class="text-black font-bold mt-2">{{ $product->price }} MKD</p>
                            <!-- Button also links to the product detail page -->
                            <a href="{{ route('showProduct', $product->id) }}" class="buy-button">Купи</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View More Button -->
            <div class="mt-8 text-center mb-10">
                <button class="view-more-button">
                    Види Повеќе Продукти
                </button>
            </div>
        </div>
    </section>
</x-app-layout>