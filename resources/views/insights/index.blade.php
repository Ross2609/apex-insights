<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <title>Apex - Insights</title>
</head>

<body>
    <div class="container" style="max-width: 90vw; padding-top: 50px">
        <div class="flex--container">
            <img style="align-self: center" src="{{ Storage::url('/icons/apex-logo.png') }}" width="175px"/>
            <h1 style="font-size: 80px; text-align: center" >Apex Legends</h1>
        </div>
        <div style="padding-top: 10vh">
            <div style="padding: 25px; border: 5px rgb(255, 255, 255) solid; box-shadow: 3px 3px 10px rgb(112, 112, 112)">
                <h2 class="centered-text" style="font-size: 3rem; margin-bottom: 30px">STAN Tool</h2>
                <div>
                    <h3 class="centered-text">Player Stats</h3>
                    <form method="GET">
                        <div class="input--group">
                            <input id="username" class="form-control" name="username" type="text"
                                placeholder="Enter Username" />
                            <select id="platform" class="form-control" name="platform">
                                <option value="origin">Origin</option>
                                <option value="xb1">Xbox One</option>
                                <option value="psn">PS4</option>
                            </select>
                        </div>
                        <div class="result--buttons">
                            <input type="submit" formaction="insights/player-stats" class="form-control"
                                value="Stats" />
                            <input type="submit" formaction="insights/player-segmented-stats" class="form-control"
                                value="Segmented Stats" />
                            <input type="submit" formaction="insights/player-session-history" class="form-control"
                                value="Session History" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
