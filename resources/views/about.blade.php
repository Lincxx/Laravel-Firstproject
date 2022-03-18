
<!--
    comparing multiple possible con
-->

{{-- @switch($name)
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
@endswitch --}}

<!-- 
    for loop
    foreach loop
    for else loop
    while loop
-->

@for ($i = 1; $i <= 10; $i++)
    <p>{{ $i }}</p>
@endfor

@foreach ($names as $name)
    <h2>{{ $name }}</h2>
@endforeach

@forelse ($names as $name)
    <h2>The name is {{ $name }}</h2>
@empty
    <h2>There are no names</h2>
@endforelse

{{ $i = 0 }} <!-- not the correct way to create a variabe in a view-->
@while ($i <= 10)
    <p>{{ $i }}</p>
    {{ $i++; }}
@endwhile

