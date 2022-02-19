<input
    x-data
    x-ref="input"
    x-init="new Pikaday({ field: $refs.input,format: 'D MMM YYYY'})"
    type="text"
    wire:ignore
    {{$attributes}}
/>
