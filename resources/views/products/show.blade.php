<x-layout>
    <x-slot:heading>
        {{ $product['title'] }}
    </x-slot:heading>
    <div class="bg-white">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Earring Specifications</h2>
                <p class="mt-4 text-gray-500">Each pair of handcrafted clay earrings is designed with precision and creativity. Made from high-quality polymer clay, these earrings are lightweight, durable, and stylish for any occasion.</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Material</dt>
                        <dd class="mt-2 text-sm text-gray-500">Premium polymer clay with hypoallergenic stainless steel posts</dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Style</dt>
                        <dd class="mt-2 text-sm text-gray-500">{{ $product['style'] }}</dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Size</dt>
                        <dd class="mt-2 text-sm text-gray-500">Varies per design (Approx. 1-2 inches)</dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Category</dt>
                        @foreach($product->categories as $category)
                            <dd class="mt-2 text-sm text-gray-500"> {{ $category['name'] }} </dd>
                        @endforeach
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Includes</dt>
                        <dd class="mt-2 text-sm text-gray-500">1 pair of handcrafted earrings + a gift box</dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Price</dt>
                        <dd class="mt-2 text-sm text-gray-500">${{ $product['price'] }}</dd>
                    </div>
                </dl>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="https://i.pinimg.com/236x/8f/0f/3e/8f0f3ed4c2ba9e3094278d31c699b9d1.jpg" alt="Handcrafted clay earrings displayed elegantly." class="rounded-lg bg-gray-100">
                <img src="https://i.pinimg.com/236x/8f/0f/3e/8f0f3ed4c2ba9e3094278d31c699b9d1.jpg" alt="Close-up view of detailed clay earring design." class="rounded-lg bg-gray-100">
                <img src="https://i.pinimg.com/236x/8f/0f/3e/8f0f3ed4c2ba9e3094278d31c699b9d1.jpg" alt="Backside view showing hypoallergenic stainless steel post." class="rounded-lg bg-gray-100">
                <img src="https://i.pinimg.com/236x/8f/0f/3e/8f0f3ed4c2ba9e3094278d31c699b9d1.jpg" alt="Earrings packed in a premium gift box." class="rounded-lg bg-gray-100">
            </div>
        </div>
    </div>

</x-layout>
