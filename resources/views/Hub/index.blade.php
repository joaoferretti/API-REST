<x-layout title="yeyeye">
    <a href="/Hub/adicionar">Adicionar</a>
    <ul>
        @foreach($teste as $a) 
            <li>{{$a}}</li>
        @endforeach
    </ul>
</x-layout>