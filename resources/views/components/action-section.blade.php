<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <div class="flex flex-col">
        @yield('menu')
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 mb-2 sm:p-6 bg-white dark:bg-gray-900 da shadow sm:rounded-lg">
            {{ $content }}
        </div>
    </div>
</div>
