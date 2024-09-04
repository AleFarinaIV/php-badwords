<?php
    $paragraph = $_GET['paragrafo'];
    $badworse = $_GET['badworse'];

    function replaceInsensitiveWord($text, $word, $replacement) {

        $wordLower = strtolower($word);
        $wordCapitalized = ucfirst($wordLower);


        $text = str_ireplace($wordLower, $replacement, $text);
        $text = str_ireplace($wordCapitalized, ucfirst($replacement), $text);

        return $text;
    }

    if (preg_match('/^\S+$/', $badworse)) {
        $censored_paragraph = replaceInsensitiveWord($paragraph, $badworse, '***');
        $lenght = strlen($censored_paragraph);

    }else {
        $censored_paragraph = "Per favore, inserire solo una parola senza spazi.";
        $lenght = 0;

    };
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Badworse</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 p-5">
                <div class="mb-5">
                    <h1>
                        Questo è il tuo testo censurato
                    </h1>
                    <p class="fs-4 fst-italic"> "<?php echo $censored_paragraph ?>" </p>
                    <h6>Il tuo testo è lungo: <?php echo $lenght ?> caratteri</h6>
                </div>
                <h3>Questa invece è la parola che hai censurato: '<span class="text-danger fst-italic"><?php echo $badworse ?></span>'</h3>
            </div>
    </div>

</body>

</html>