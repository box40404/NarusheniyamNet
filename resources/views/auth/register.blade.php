<x-layout>
    <x-slot:title> Зарегистрироваться </x-slot:title>
    <x-slot:styles>@vite('resources/css/auth/register.css')</x-slot:styles>

    <section class="register-wrap">
        <div class="register-container">
            <h2>Зарегистрируйтесь</h2>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="full_name">ФИО</label>
                    @error('full_name')
                        <div class="error-message"> {{ $message }} </div>
                    @enderror
                    <input type="text" name="full_name" value="{{ old('full_name') }}" required>
                    <div class="error-message">{{session('error')}}</div>
                </div>

                <div class="form-group">
                    <label for="username">Логин</label>
                    @error('username')
                        <div class="error-message"> {{ $message }} </div>
                    @enderror
                    <input type="text" name="username" value="{{ old('username') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Почта</label>
                    @error('email')
                        <div class="error-message"> {{ $message }} </div>
                    @enderror
                    <input type="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="phone">Телефон</label>
                    @error('phone')
                        <div class="error-message"> {{ $message }} </div>
                    @enderror
                    <input type="text" name="phone" value="{{ old('phone') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    @error('password')
                        <div class="error-message"> {{ $message }} </div>
                    @enderror
                    <input type="password" name="password" required>
                </div>
               
                <button type="submit" class="btn">Зарегистрироваться</button> 
            </form>
        </div>
    </section>

</x-layout>