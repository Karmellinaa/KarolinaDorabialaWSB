<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownik</title>
</head>
<body>
    <h3>Dane użytkownika</h3>
    @if($errors->any()) 
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    
    <form action="UserFormController" method="get">
        <input type="text" name="firstName" placeholder="Podaj imię" autofocus required><br><br>
        <input type="text" name="lastName" placeholder="Podaj nazwisko" autofocus><br><br>
        <input type="email" name="email" placeholder="Podaj email"><br><br>

        <input type="submit" value="zatwierdź">

    </form>
</body>
</html>