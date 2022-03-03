@props(['tile'])
<div {{ $attributes->merge(['class' => 'card bg-blue-500']) }}>
    <div class="flex">
        <div class="px-6 py-4 flex text-4xl">
            <div class="mr-2">
                {{ $slot }}
            </div>
                {{ $title }}
        </div>
    </div>
</div>
