<x-layout>
    <x-slot:title> Зарегистрироваться </x-slot:title>

    <form action="{{ route('register') }}" method="post">
        @csrf
        <label>
            <p>ФИО</p>
            <input type="text" name="full_name" value="{{ old('full_name') }}" required>
        </label>

        <label>
            <p>Логин</p>
            <input type="text" name="username" value="{{ old('username') }}" required>
        </label>

        <label>
            <p>Email</p>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </label>

        <label>
            <p>Телефон</p>
            <input type="text" name="phone" value="{{ old('phone') }}" required>
        </label>

        <label>
            <p>Пароль</p>
            <input type="password" name="password" required>
        </label>

        <p><input type="submit" value="Зарегистрироваться"></p>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>