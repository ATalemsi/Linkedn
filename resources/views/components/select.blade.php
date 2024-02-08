@props(['options' => [], 'value' => null, 'label' => null])

<div>
    <x-input-label :value="$label" />
    <select {{ $attributes->merge(['class' => 'block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50']) }}>
        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ $optionValue == $value ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
</div>
