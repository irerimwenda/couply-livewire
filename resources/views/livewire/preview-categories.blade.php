<div>
    <div class="grid gap-x-12 gap-y-9 grid-cols-3 grid-rows-2 mb-11">
        @foreach($productCategories as $category)
            <div class="border-2 border-dark shadow-[4px_4px_0px_0px_#000]">
                <div class="h-[195px]">
                    <img class="w-full h-full object-cover" src="{{ $category->preview_image_path }}" alt="{{ $category->name }}"/>
                </div>
                <div class="flex">
                    <div class="mr-auto w-full">
                        <div class="bg-white py-2.5 px-4">
                            <p class="text-lg font-bold">{{ $category->name }}</p>
                        </div>
                    </div>
                    <div class="py-2.5 px-8 flex items-center justify-center text-white bg-dark font-bold text-lg">
                        {{ $category->least_price }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="#" class="block text-dark text-lg w-1/5 text-start underline">View all brands</a>
</div>
