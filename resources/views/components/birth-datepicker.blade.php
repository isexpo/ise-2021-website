<input
    x-data
    x-ref="input"
    x-init="new Pikaday({ field: $refs.input,format: 'D MMM YYYY',maxDate:new Date(2005,0,1),yearRange:[1960,2005],defaultDate:new Date(2005,0,1)})"
    type="text"
    wire:ignore
    {{$attributes}}
/>
