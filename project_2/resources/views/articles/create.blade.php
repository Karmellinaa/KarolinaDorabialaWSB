<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('articles.store')}}" method="post">
        @csrf
        <div>
            <label for="title">Tytuł:</label>
            <input type="text" name="title" required><br><br>
        </div>
        <div>
            <label for="body">Treść:</label>
            <textarea name="body" cols="30" rows="10" required></textarea>
        </div>
        <button type="submit">Dodaj artykuł</button>
    </form>
</body>

</html>