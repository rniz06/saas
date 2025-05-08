<button
    type="{{ $type ?? 'button' }}"
    class="btn btn-{{ $size ?? 'sm' }} btn-{{ $color ?? 'success' }} {{ $class ?? '' }}"
    @if (isset($click)) wire:click="{{ $click }}" @endif
    @disabled($disabled ?? false)
    @if (isset($id)) id="{{ $id }}" @endif
>
    @if ($icon ?? false)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>
