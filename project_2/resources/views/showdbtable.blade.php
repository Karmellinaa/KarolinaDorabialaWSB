<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Użytkownicy</title>
</head>
<body>
    <h3>Użytkownicy</h3>
    <table>
        <thead>
            <tr>
                <th>Nazwa użytkownika</th>
                <th>Email</th>
                <th>Data utworzenia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="show_add_userform">Dodaj użytkownika</a>
</body>
</html>