@props(['rows', 'title' => 'Tarifs', 'note' => null])
<div {{ $attributes->merge(['class' => 'rounded-3xl bg-white p-7 ring-1 ring-line md:p-9']) }}>
    <h3 class="text-lg font-bold">{{ $title }}</h3>
    <ul class="mt-3 divide-y divide-line">
        @foreach($rows as [$label, $price])
            <li class="flex items-baseline justify-between gap-3 py-3 text-lg">
                <span>{{ $label }}</span>
                <span class="leader" aria-hidden="true"></span>
                <span class="whitespace-nowrap font-extrabold">{{ $price }}</span>
            </li>
        @endforeach
    </ul>
    @if($note)
        <p class="mt-4 text-ink-soft">{{ $note }}</p>
    @endif
    <x-call-button class="mt-6 w-full text-lg"/>
</div>
