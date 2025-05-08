<div class="card {{ $cardClass ?? '' }}">
    <div class="card-body {{ $bodyClass ?? '' }}">
        {{ $slot }}
    </div>

    @if (isset($buttons))
        <div class="card-footer {{ $footerClass ?? '' }}">
            {{ $buttons }}
        </div>
    @endif
</div>
