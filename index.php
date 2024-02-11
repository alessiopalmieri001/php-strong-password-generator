<?php

$alphabetic = [
'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'
];
$numeric = [
'1','2','3','4','5','6','7','8','9','0'
];
$symbolic = [
'!','?','&','%','$','<','>','^','+','-','*','/','(',')',']','[','{','}','@','#','_','='
];

//var_dump(array_keys($alphabetic));
//var_dump(array_keys($numeric));
//var_dump(array_keys($symbolic));
$full_array = array_merge($alphabetic, $numeric, $symbolic);
//var_dump($full_array);

function getPassword($full_array) {
    $password = '';
    for ($i=0; $i<$_GET['pwlength']; $i++) {
        $password .= $full_array[rand(0, count($full_array) - 1)];
    }
    echo $password;
};

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
    </head>
    <body>

        <div class="container">

            <div class="card mt-5">
                <h1>Password Generator</h1>
                <div class="card-body">
                <h3>Scegli una password di minimo 8 e massimo 32 caratteri</h3>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                <form action="index.php" method="GET">
                    <input class="form-control my-3 w-25" type="number" placeholder="Lunghezza Password"  name="pwlength" aria-label="default input example">

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Si Ripetizioni
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                    No Ripetizioni
                    </label>

                    <div class="form-check mt-2 p-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Lettere
                        </label>
                    </div>
                    <div class="form-check p-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        Numeri
                        </label>
                    </div>
                    <div class="form-check mb-2 p-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        Simboli
                        </label>
                    </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </form>
                </div>
            </div>
            <div class="card-body">
                <?php  if(!empty($_GET['pwlength'])) : ?>
                    <h2>La tua password è:<br> <?php getPassword($full_array); ?></h2>
                <?php  endif; ?>
            </div>
        </div>
        
</body>
</html>