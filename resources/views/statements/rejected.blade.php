<x-layout>
    <x-slot:styles>@vite('resources/css/statements.css')</x-slot:styles>
    rejcted

    <div class="container">
        <livewire:sidebar />

        <div class="content">
            @if (count($statements) > 0)
                @foreach ($statements as $statement)
                    <div class="report-container">
                        <div class="form-group">
                            <label for="license-plate">Государственный номер:</label>
                            <div class="info">{{$statement->car_number}}</div>
                        </div>
                        <div class="form-group">
                            <label for="violation-description">Описание нарушения:</label>
                            <div class="info">{{$statement->description}}</div>
                        </div>
                        <div class="form-group">
                            <label for="status">Статус:</label>
                            <div class="status rejected">Отклонен</div>
                        </div>
                    </div>
                @endforeach             
            @endif
        </div>
    </div>
</x-layout>