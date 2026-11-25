@props(['ping' => false])
@php
    $now = now('Europe/Paris');
    [$opens, $closes] = $now->isWeekend() ? [9, 18] : [8, 20];
    $isOpen = $now->hour >= $opens && $now->hour < $closes;
@endphp
<p {{ $attributes->merge(['class' => 'inline-flex items-center gap-2.5 font-semibold']) }}>
    <span class="relative flex size-3 shrink-0" aria-hidden="true">
        @if($ping)
            <span class="absolute inline-flex size-full animate-ping rounded-full bg-call opacity-60 motion-reduce:hidden"></span>
        @endif
        <span class="relative inline-flex size-3 rounded-full bg-call"></span>
    </span>
    <span>{{ $isOpen ? "Ouvert maintenant, jusqu'à {$closes} h" : 'Disponible pour les urgences, 7 j/7' }}</span>
</p>
