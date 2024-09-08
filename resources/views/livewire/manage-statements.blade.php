<div>
    @foreach ($newStatements as $statement)
        <div wire:key="{{ $statement->id }}">
            <p>{{$statement->user->full_name}}</p>
            <p>{{$statement->description}}</p>
            <p>{{$statement->car_number}}</p>

            <button type="button" wire:click="accept({{ $statement->id }})">Принять</button>
            <button type="button" wire:click="reject({{ $statement->id }})">Отклонить</button>
        </div>
        <hr>
    @endforeach

    @if (count($confirmedStatements) > 0)
        <h4>Подтвержденные заявления:</h4>
        @foreach ($confirmedStatements as $statement)
            <div wire:key="{{ $statement->id }}">
                <p>{{$statement->user->full_name}}</p>
                <p>{{$statement->description}}</p>
                <p>{{$statement->car_number}}</p>
            </div>
        @endforeach    
    @endif

    @if (count($rejectedStatements) > 0)
        <h4>Отклоненные заявления:</h4>
        @foreach ($rejectedStatements as $statement)
            <div wire:key="{{ $statement->id }}">
                <p>{{$statement->user->full_name}}</p>
                <p>{{$statement->description}}</p>
                <p>{{$statement->car_number}}</p>
            </div>
        @endforeach    
    @endif
</div>
