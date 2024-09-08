<x-layout>
    <x-slot:styles>@vite('resources/css/auth/login.css')</x-slot:styles>
    <x-slot:title> Войти </x-slot:title>

    <section class="login-wrap">
        <div class="login-container">
            <h2>Войдите в аккаунт</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">Логин:</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" required>
                    <div class="error-message">{{session('error')}}</div>
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Войти</button>
            </form>
            <p>Нет аккаунта? <a href="{{ route('register-page') }}">Зарегистрируйтесь</a></p>
        </div>
    </section>

</x-layout>