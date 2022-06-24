<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php 
    $quote = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.";
    $quoteUncensoredLength = strlen($quote);

    $quoteCensored = str_replace("dolor", "(***)", $quote);
    $quoteCensoredLength = strlen($quoteCensored); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BADWORDS</title>
</head>
<body>
    <p>Quote: <?php echo $quote ?> </p>
    <p>Length: <?php echo $quoteUncensoredLength ?></p>

    <p>Censored Quote: <?php echo $quoteCensored ?> </p>
    <p>Length Censored Quote: <?php echo $quoteCensoredLength ?></p> 
</body>
</html>
