@props(['items' => [], 'default' => '', 'empty' => '-- Select item --'])

<select class="form-select" name="select" aria-label="Default select example">
    @if ($empty)
        <option>{{ $empty }}</option>
    @endif
    @foreach ($items as $key => $name)
        <option value="{{ $key }}" @if ($key === $default) selected @endif>
            {{ $name }}
        </option>
    @endforeach
</select>
