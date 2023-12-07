<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>nom du site</h1>
        <nav>
            <ul>
               <li> 
                  <a href="{{ route('main.accueil')}}">accueil</a>
                  <a href="{{ route('main.cours')}}">cours</a>
                  <a href="{{ route('main.contact')}}">contact</a>
                  <a href="{{ route('main.tarifs')}}">tarifs</a>
                  <a href="{{ route('main.mentions-legales')}}">mentions-legales</a>
               </li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>
          <li><a href="{{ route('main.mentions-legales')}}">mentions-legales</a></li>
          
    </footer>
    
</body>
</html>