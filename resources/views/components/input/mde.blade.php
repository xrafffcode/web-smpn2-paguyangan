@push('plugin-styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endpush


<div class="mb-3">
    <label for="{{ $attributes->get('name') }}" class="form-label">{{ $attributes->get('label') }}</label>
    <textarea name="{{ $attributes->get('name') }}" id="mde" cols="30" rows="10"
        {{ $attributes->merge(['class' => 'form-control' . ($errors->has($attributes->get('name')) ? ' is-invalid' : '')]) }}>{{ $attributes->get('value') }}</textarea>

    @if ($errors->has($attributes->get('name')))
        <div class="invalid-feedback">
            {{ $errors->first($attributes->get('name')) }}
        </div>
    @endif
</div>


@push('plugin-scripts')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
@endpush

@push('custom-scripts')
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("mde"),
        });
    </script>
@endpush
