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

<body style="background-image: url('/storage/backgrounds/apex-background.jpg');">
    <div class="row justify-content-end" style="padding-top: 20vh">
            <div class="col-5">
                <div class="flex--container" style="gap: 15px">
                    <img style="align-self: center" src="{{ Storage::url('icons/apex-logo.png') }}" height="200px" />
                    <!-- <h1 style="font-size: 80px; text-align: center">Apex Legends</h1> -->
                    <h1 style="font-size: 80px; text-align: center" >STAN Tool</h1>
                    <form class="result--buttons" action="/insights" style="align-self: center">
                        <input type="submit" value="Insights" id="insights_btn" class="btn btn-light btn-lg btn-block"
                            style="margin: 0 10px; padding: 10px 30px;" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
