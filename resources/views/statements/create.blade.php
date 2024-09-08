<x-layout>
    <x-slot:styles>@vite('resources/css/statements.css')</x-slot:styles>
    <x-slot:title> Заявление </x-slot:title>

    <div class="container">

        <livewire:sidebar />

        {{session('message')}}

        <div class="content">
            <div id="form" class="report-container">
                <h2>Формирование заявления</h2>
                <form action="{{ route('store-statement') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="license-plate">Государственный номер:</label>
                        <input type="text" id="license-plate" name="car_number" required>
                    </div>
                    <div class="form-group">
                        <label for="violation-description">Описание нарушения:</label>
                        <textarea id="violation-description" name="description" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">Отправить заявление</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
