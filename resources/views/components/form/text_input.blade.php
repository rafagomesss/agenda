<div class="mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label ?? '' }}
    </label>
    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ !empty($type) ? $type : 'text' }}"
        {{ !empty($required) ? 'required' : '' }}
        placeholder="{{ $placeholder ?? '' }}"
        value="{{ $value ?? '' }}"
        class="form-control {{ $class ?? '' }}"
    >
</div>
