<!-- 
Milestone 1:

Creiamo una tabella trains tramite una migration
Ogni treno dovrà avere:
 Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
Potete inizialmente inderire dei dati a mano tramite PhpMyAdmin.
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

Milestone 2:

Aggiungiamo un seeder per la classe Train e usiamo FakerPHP per generare dei dati fittizzi.
 -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="bg-primary">
        <h1 class="mb-0">Treni !</h1>
    </header>

    <main class="bg-dark py-4">
        <div class="container">
            <div class="row row-cols-md-5 g-4">
                @foreach($trains as $train)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3>Partenza da: {{$train->departure_station}}</h3>
                            <h3>Destinazione: {{$train->arrival_station}}</h3>
                            <p>Orario partenza: {{$train->departure_time}}</p>
                            <p>Orario arrivo: {{$train->arrival_time}}</p>
                            <p>In orario: {{$train->on_time === 1 ? "si" : "no"}}</p>
                            <p>Cancellato: {{$train->cancelled === 1 ? "si" : "no"}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <footer class="bg-primary py-2">
        <h1 class="mb-0">Footer !</h1>
    </footer>

</body>

</html>