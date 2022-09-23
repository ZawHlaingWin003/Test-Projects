<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @if(isset($players))
            <table class="table">
                <thead>
                    <tr>
                        <th>Player Name</th>
                        <th>Suburb</th>
                        <th>Club</th>
                        <th>Country</th>
                        <th>Income</th>
                        <th>Cars</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($players as $player)
                    <tr>
                        <td>
                            {{$player->name}}
                        </td>
                        <td>
                            {{$player->suburbs->name}}
                        </td>
                        <td>
                            {{$player->suburbs->clubs->name}}
                        </td>
                        <td>
                            {{$player->suburbs->clubs->countries->name}}
                        </td>
                        <td>
                            {{$player->income}}
                        </td>
                        <td>
                            @if($player->cars)
                                @foreach($player->cars as $car)
                                    {{$car->name.'('.$car->model.' '.$car->brands->name.') ,'}}
                                    <br>
                                @endforeach
                            @endif
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        @endif
    </body>
</html>
