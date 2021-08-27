<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Callback') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Here Your Authorization Code:</p>
                    <p style="line-break: anywhere;">{{ app('request')->input('code') }}</p>
                        <p>Client ID:</p>
                        <div class="py-3 text-gray-900">
                            <h3 class="text-lg text-gray-500">1</h3>
                        </div>
                        <p>Client Secret:</p>
                        <div class="py-3 text-gray-900">
                            <h3 class="text-lg text-gray-500">GVN4tR2IHBVkstYTjiUqj9H8M01IWw69SRJkuSoX</h3>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>