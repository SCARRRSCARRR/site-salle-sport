<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class= presentation>
        <h1>O CNAMO SPORT</h1>
        <nav>
            <ul>
               <li> 
                  <a href="{{ route('main.accueil')}}">Accueil</a>
                  <a href="{{ route('main.cours')}}">Cours</a>
                  <a href="{{ route('main.contact')}}">Contact</a>
                  <a href="{{ route('main.tarifs')}}">Tarifs</a>
                  <a href="{{ route('main.mentions-legales')}}">Mentions legales</a>
               </li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>
          <li><a href="{{ route('main.mentions-legales')}}">Mentions legales</a></li>     
    </footer>
    
</body>
</html>