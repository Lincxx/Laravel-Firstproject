
<!--
    comparing multiple possible con
-->

@switch($name)
    @case('Jeremy')
        <h2>Name is {{ $name }}</h2>
        @break
    @case('Mary')
        <h2>Name is {{ $name }}</h2>
        @break
    @case('Bill')
        <h2>Name is {{ $name }}</h2>
        @break
    @default
        <h2>Name is {{ $name }}</h2>
@endswitch