<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
    </head>
    <body class="antialiased">
        <div class="content">
            <ul>
                @foreach($people as $person)
                <li> {{$person}} </li>    
                @endforeach
            </ul>
        </div>
    </body>
</html>
