<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/css/app.css')
    {{$styles ?? ''}}
    <title>{{$title ?? 'Страница'}}</title>
</head>
<body>
    <header>
        <a href="{{ route('home') }}" style="text-decoration: none; color: unset"> <h1>Нарушениям.Нет</h1> </a>
        <a href="{{ route('profile') }}" class="profile-icon"><i class="fas fa-user"></i></a>
    </header>
    
    {{$slot}}

    <footer>
        <p>&copy; 2024 Все права защищены</p>
    </footer>
</body>
</html>
