@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex">
            <div class="w-3/5 border-r border-dark pt-28 pb-10">
                <div class="relative flex">
                    <h1 class="text-dark text-5xl font-bold mb-10 w-4/5">
                        Shopping with coupons, applied automatically!
                    </h1>
                    <img src="/images/stars.svg" alt="Stars" class="absolute left-[80%] bottom-[90px]"/>
                </div>
                <p class="text-dark mb-10">Used by over 500, 000</p>

                <div class="flex items-center">
                    <div class="flex items-center mr-10">
                        <div class="w-10 h-10 rounded-full -mx-2">
                            <img class="w-full h-full" src="/images/avatar1.svg" alt="Avatar">
                        </div>
                        <div class="w-10 h-10 rounded-full -mx-2">
                            <img class="w-full h-full" src="/images/avatar2.svg" alt="Avatar">
                        </div>
                        <div class="w-10 h-10 rounded-full -mx-2">
                            <img class="w-full h-full" src="/images/avatar3.svg" alt="Avatar">
                        </div>
                        <div class="w-10 h-10 rounded-full -mx-2">
                            <img class="w-full h-full" src="/images/avatar4.svg" alt="Avatar">
                        </div>
                        <div class="w-10 h-10 rounded-full -mx-2">
                            <img class="w-full h-full" src="/images/avatar5.svg" alt="Avatar">
                        </div>
                    </div>

                    <div class="bg-white rounded-32 py-1.5 px-2 flex">
                        <div class="w-10 h-10 rounded-full mr-2">
                            <img class="w-full h-full" src="/images/avatar6.svg" alt="Avatar">
                        </div>
                        <div>
                            <p>Wow, I saved $500</p>
                            <p class="text-xs font-bold">Johny Doe</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-2/5 pt-28 pb-10 pl-[80px]">
                <div class="mb-11">
                    <div class="flex mb-6">
                        <div class="bg-dark rounded-full text-white h-6 w-6 text-xs flex items-center justify-center mr-4">1</div>
                        <p class="w-[300px]">Download the Extension for Chrome or Firefox.</p>
                    </div>

                    <div class="flex items-center mb-6">
                        <div class="bg-dark rounded-full text-white h-6 w-6 text-xs flex items-center justify-center mr-4">2</div>
                        <p>Visit your favourite online retailers.</p>
                    </div>

                    <div class="flex items-center">
                        <div class="bg-dark rounded-full text-white h-6 w-6 text-xs flex items-center justify-center mr-4">3</div>
                        <p>Save! Apply coupons from the store.</p>
                    </div>
                </div>

                <button class="py-2.5 px-3.5 border-2 font-bold text-lg border-dark bg-primary-300 rounded shadow-[4px_4px_0px_0px_#000]">Install Extension</button>
            </div>
        </div>
    </div>

    <div class="bg-dark pt-9 h-[330px]">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-[73px]">
                <div class="flex items-center justify-between w-4/5">
                    <img src="/images/amazon_logo.svg" alt="Logo"/>
                    <img src="/images/best_buy_logo.svg" alt="Logo"/>
                    <img src="/images/shopify_logo.svg" alt="Logo"/>
                    <img src="/images/walmart_logo.svg" alt="Logo"/>
                </div>

                <a href="#" class="block text-white text-lg w-1/5 text-end underline">View all brands</a>
            </div>

            <livewire:preview-categories/>
        </div>
    </div>

    <div class="bg-white h-[500px] border-b border-dark"></div>
@endsection
