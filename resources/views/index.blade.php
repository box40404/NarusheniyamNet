<x-layout>
    <x-slot:styles>@vite('resources/css/home.css')</x-slot:styles>
    <x-slot:title> Home </x-slot:title>

    <section class="hero">
        <h2>Добро пожаловать</h2>
        <p>Портал сознательных граждан «Нарушениям.Нет» представляет 
            собой информационную систему для помощи полиции по 
            своевременной фиксации нарушений правил дорожного движения.</p>
    </section>
    <section class="apply-now">
        <h2>Оставьте заявление прямо сейчас</h2>
        <a href="{{ route('leave-statement') }}" class="btn btn-apply">Оставить заявление</a>
    </section>

    @auth
        <a href="{{ route('logout') }}">Выйти из акка</a>
    @endauth

</x-layout>