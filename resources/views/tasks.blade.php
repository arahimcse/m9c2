
<x-layout>
    @php 
    $tasks =['a', 'b', 'c', 'd'];
    @endphp
    <x-slot:title>
        custome title 
    </x-slot>

    @foreach ($tasks as $task)
        {{ $task }}
    @endforeach
</x-layout>