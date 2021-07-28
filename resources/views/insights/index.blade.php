<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ Storage::url('js/scripts.js') }}"></script>
    <title>Insights</title>
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