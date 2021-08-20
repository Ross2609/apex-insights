<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <title>Home</title>
</head>

<body>
    <div class="centered heading" style="padding-top: 100px">
        <img src="{{ Storage::url('icons/apex-logo.png') }}" height="200px" />
        <h1 style="font-size: 80px;">Apex Legends</h1>
        <h2>STAN Tool</h2>
    </div>
    <form action="/insights" class="centered">
        <input type="submit" value="Insights" id="insights_btn" class="btn btn-light btn-lg btn-block"
            style="margin: 0 10px; padding: 10px 30px" />
    </form>
</body>

</html>
