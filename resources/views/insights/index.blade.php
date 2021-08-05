<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ Storage::url('js/scripts.js') }}"></script>
    <title>Insights</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
    <title>Apex - Insights</title>
</head>
<body>
    <form action="/player-stats" method="GET">
        <input id="username" name="username" type="text" placeholder="Enter Username"></input>
        <select id="platform" name="platform">
            <option value="origin">Origin</option>
            <option value="xbox">Xbox One</option>
            <option value="ps4">PS4</option>
        </select>
        <input type="submit" value="Get Player Stats"></input>
    </form>
</body>
</html>