<div class="{{ $col ?? 'col-4' }}">
    <label for="{{ $id ?? $name ?? $campo }}">{{ $label ?? 'Campo' }}:</label>

    <input
        type="{{ $type ?? 'text' }}"
        id="{{ $id ?? $name ?? $campo }}"
        name="{{ $name ?? $campo }}"
        class="form-control @error($name ?? $campo) is-invalid @enderror"
        placeholder="{{ $placeholder ?? '' }}"
        @if (isset($campo)) wire:model.live="{{ $campo }}" @endif
        value="{{ old($name ?? $campo) }}"
        @disabled($disabled ?? false)
    >

    @error($name ?? $campo)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
