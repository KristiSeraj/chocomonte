<x-layout>
    <x-slot:heading>
        Products
    </x-slot:heading>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <div class="group relative">
                        <img src="https://i.pinimg.com/236x/8f/0f/3e/8f0f3ed4c2ba9e3094278d31c699b9d1.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="/products/{{ $product['id'] }}">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $product['title'] }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $product['style'] }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">{{ $product['price'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
