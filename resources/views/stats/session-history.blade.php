<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Session History</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>
    <h1 style="margin: 0 20px">Session History</h1>
    <div class="match--grid">
    @foreach ($matches as $match)
        <div class="match--card">
            <img width="250px" src={{ $match['metadata']['characterIconUrl']['value'] }} />
            <div class="match--stat">
                <h3>Match Date</h3>
                <p>{{ $match['metadata']['endDate']['displayValue'] }}</p>
            </div>
            <div class="match--stat">
                <h3>Kills</h3>
                <p>{{ $match['stats']['kills']['value'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>