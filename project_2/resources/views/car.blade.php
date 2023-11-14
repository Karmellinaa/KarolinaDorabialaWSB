    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Samochody</title>
    </head>
    <body>
        <h3>Samochody</h3>
        <!-- {{print_r($car)}} -->
        <table class="table">
            <thead>
                <tr>
                    <td>Marka</td>
                    <td>Model</td>
                    <td>Pojemność</td>
                </tr>
            </thead>

            <tbody>
                @foreach($car as $x)
                <tr>
                    <td>{{$x->brand}}</td>
                    <td>{{$x->model}}</td>
                    <td>{{$x->capacity}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $car->links('pagination::bootstrap-5') }}

        <a href="addUser">Dodaj samochód</a>
    </body>
    </html>