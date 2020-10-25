@props(['items' => [], 'default' => [], 'empty' => '-- Select item --'])

<select class="form-select" multiple name="select" aria-label="Multiple select example">
    @foreach ($items as $key => $name)
        <option value="{{ $key }}" @if (in_array($key, $default)) selected @endif>
            {{ $name }}
        </option>
    @endforeach
</select>
