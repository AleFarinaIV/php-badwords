<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badworse</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 p-5">
                <form action="" method="GET">
                    <div class="w-50">
                        <label for="paragraph">Scrivi qui il tuo paragrafo</label>
                        <textarea class="form-control" name="paragrafo" id="paragraph" placeholder="Scrivi..."></textarea>
                    </div>

                    <div class="form-group mt-5">
                        <div class="w-25">
                            <label for="text">Scrivi qui la parola da censurare</label>
                            <input class="form-control" type="text" name="badworse" id="text" placeholder="Censura">
                            <button class="form-control bg-primary mt-3" type="submit">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>