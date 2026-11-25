<a href="{{ config('site.whatsapp') }}" target="_blank" rel="noopener" {{ $attributes->merge(['class' => 'btn btn-whatsapp']) }}>
    <x-icon name="chat" class="size-[1.1em] text-[#1C9E4C]"/>
    <span>{{ $slot->isEmpty() ? 'WhatsApp' : $slot }}</span>
</a>
