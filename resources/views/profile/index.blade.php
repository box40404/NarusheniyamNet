<x-layout>
    <x-slot:title> Профиль </x-slot:title>

    @if (count($newStatements) > 0)
        <h4>Ожидающие заявления:</h4>
        @foreach ($newStatements as $statement)
            <p>{{$statement}}</p>
        @endforeach    
    @endif

    @if (count($confirmedStatements) > 0)
        <h4>Подтвержденные заявления:</h4>
        @foreach ($confirmedStatements as $statement)
            <p>{{$statement}}</p>
        @endforeach    
    @endif

    @if (count($rejectedStatements) > 0)
        <h4>Отклоненные заявления:</h4>
        @foreach ($rejectedStatements as $statement)
            <p>{{$statement}}</p>
        @endforeach    
    @endif

    @auth
        <a href="{{ route('logout') }}">Выйти из акка</a>
    @endauth
    
</x-layout>