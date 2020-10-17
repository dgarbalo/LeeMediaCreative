<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Contact') }}
    </h2>
</x-slot>

<div class="relative">
    <div class="absolute inset-0">
        <div class="absolute inset-y-0 left-0 w-1/2"></div>
    </div>
    <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
        <div class="py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
            <div class="max-w-lg mx-auto">
                <h2 class="text-xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
                    Let's Chat<span class="text-red-700">.</span>
                </h2>
                <p class="mt-3 text-lg leading-6 text-gray-500">
                    Hand-crafted Artisan Media
                </p>
                <dl class="mt-8 text-base leading-6 text-gray-500">
                    <div>
                        <dd>
                            <p>Servicing Phoenix & Chicago Metro Areas.</p>
                            <p>Willing to fly for booze.</p>
                        </dd>
                    </div>
                    <div class="mt-6">
                        <dt class="sr-only">Phone number</dt>
                        <dd class="flex">
                            <x-heroicon-o-phone class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" />
                            <span class="ml-3">
                                +1 (424) 210-7368
                            </span>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
            <div class="max-w-lg mx-auto lg:max-w-none">
                <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                    <div>
                        <label for="full_name" class="sr-only">Full name</label>
                        <div class="relative rounded-md shadow-sm">
                            <x-input.text wire:model="full_name" id="full_name" placeholder="Full name" />
                        </div>
                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <div class="relative rounded-md shadow-sm">
                            <x-input.text wire:model="email" id="email" type="email" placeholder="Email" />
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="sr-only">Phone</label>
                        <div class="relative rounded-md shadow-sm">
                            <x-input.text wire:model="phone" id="phone" placeholder="Phone" />
                        </div>
                    </div>
                    <div>
                        <label for="message" class="sr-only">Message</label>
                        <div class="relative rounded-md shadow-sm">
                            <x-input.textarea wire:model="message" id="message" rows="4" placeholder="Message" />
                        </div>
                    </div>
                    <div class="">
                        <span class="inline-flex rounded-md shadow-sm">
                            <x-button.primary type="submit">
                                Submit
                            </x-button.primary>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

