<div {{ $attributes->merge(['class' => 'card'])}}>
    <div class="flex">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{$title}}</div>

            {{$slot}}
        </div>
    </div>
</div>