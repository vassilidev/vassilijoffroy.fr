<a href="tel:{{ config('site.phone_e164') }}" {{ $attributes->merge(['class' => 'btn btn-call']) }}>
    <x-icon name="phone" class="size-[1.1em]"/>
    <span>{{ $slot->isEmpty() ? config('site.phone') : $slot }}</span>
</a>
