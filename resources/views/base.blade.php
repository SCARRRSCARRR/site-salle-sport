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
        <nav>
            <ul>
               <li> 
                  <a href="{{ route('accueil')}}">accueil</a>
                  <a href="{{ route('cours')}}">cours</a>
                  <a href="{{ route('contact')}}">contact</a>
                  <a href="{{ route('tarifs')}}">tarifs</a>
                  <a href="{{ route('mentions-legales')}}">mentions-legales</a>
               </li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>
          <li><a href="{{ route('mentions-legales')}}">mentions-legales</a></li>
          
    </footer>
    
</body>
</html>