<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"></link>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
    <title>Apex - Insights</title>
</head>
<body>
    <div class="centered--heading">
        <img src="{{ Storage::url('icons/apex-logo.png') }}" height="200px"/>
        <h1 style="font-size: 80px;">Apex Legends</h1>
        <h2>STAN Tool</h2>
    </div>
    <form action="/insights/player-stats" method="GET" class="centered" style="display: flex;">
        <input id="username" class="form-control" name="username" type="text" placeholder="Enter Username"></input>
        <select id="platform" class="form-control" name="platform">
            <option value="origin">Origin</option>
            <option value="xbox">Xbox One</option>
            <option value="ps4">PS4</option>
        </select>
        <input type="submit" class="form-control" value="Get Player Stats"></input>
    </form>
</body>
</html>