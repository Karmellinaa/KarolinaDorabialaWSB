<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie użytkownika</title>
</head>
<body>
    <h3>Dodawanie użytkownika</h3>

    <form action="UsersController" method="post">
        @csrf
        <input type="text" name="name" placeholder="Podaj nazwę użtkownika" value="{{old('name')}}" autofocus>
        @error('name')
        {{$message}}
        @enderror<br><br>
        
        <input type="email" name="email" placeholder="Podaj email" value="{{old('email')}}">
        @error('email')
        {{$message}}
        @enderror<br><br>

        <input type="email" name="email_confirmation" placeholder="Powtórz email" value="{{old('email_confirmation')}}">
        @error('email_confirmation')
        {{$message}}
        @enderror<br><br>

        <input type="password" name="pass" placeholder="Podaj hasło" value="{{old('pass')}}">
        @error('pass')
        {{$message}}
        @enderror<br><br>

        <input type="password" name="pass_confirmation" placeholder="Powtórz hasło" value="{{old('pass_confirmation')}}">
        @error('pass_confirmation')
        {{$message}}
        @enderror<br><br>

        <input type="submit" value="Dodaj użytkownika">
    </form>
    
</body>
</html>