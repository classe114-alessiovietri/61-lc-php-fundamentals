<?php

    $num = 5;

    if ($num > 6) {
        echo 'Il numero è maggiore di 6';
    }
    else if ($num < 4) {
        echo 'Il numero è minore di 4';
    }
    else {
        echo 'Il numero è compreso tra 4 e 6';
    }

    var_dump(null ?? 'Ciccio');

    $arr = [1, 2, 3];
    $emptyArr = [];
    $nullVar = null;
    $emptyString = '';
    var_dump(isset($arr));
    var_dump(isset($emptyArr));
    var_dump(isset($nullVar));
    var_dump(isset($emptyString));

    $initialString = 'Ciao sono';
    $firstName = 'Alessio';
    $lastName = 'Vietri';

    var_dump($initialString.' '.$firstName.' '.$lastName);

    $finalString = '';
    $finalString .= $initialString;
    $finalString .= ' ';
    $finalString .= $firstName;
    $finalString .= ' ';
    $finalString .= $lastName;

    var_dump($finalString);

    var_dump([
        1,
        2,
        3
    ]);

    var_dump([
        'A',
        'B',
        'C'
    ]);

    var_dump([
        'A',
        2,
        [
            1,
            2,
            3
        ]
    ]);

    var_dump(count([1, 2, 3, 4, 5]));

    // const person = {
    //     firstName: 'Alessio',
    //     lastName: 'Vietri'
    // };

    // person.age = 32;
    // // OPPURE
    // person['age'] = 32;

    $person = [
        'firstName' => 'Alessio',
        'lastName' => 'Vietri',
    ];

    if (array_key_exists('age', $person)) {
        var_dump('L età è stata definita');
    }
    else {
        var_dump('L età NON è stata definita');
    }

    $person['age'] = 32;

    if (array_key_exists('age', $person)) {
        var_dump('L età è stata definita');
    }
    else {
        var_dump('L età NON è stata definita');
    }

    $chiaviDiPerson = array_keys($person);
    var_dump($chiaviDiPerson);

    $valoriDiPerson = array_values($person);
    var_dump($valoriDiPerson);

    $arrayFuso = array_merge($chiaviDiPerson, $valoriDiPerson);
    var_dump($arrayFuso);

    var_dump($person);
    var_dump($person['firstName']);
    var_dump($person['lastName']);
    var_dump($person['age']);

    // Push in array
    $numbers = [78, 42, 56];
    $numbers[] = 33;

    var_dump($numbers);
    var_dump(array_search(56, $numbers));
    var_dump(array_search(123, $numbers));

    if (in_array(42, $numbers)) {
        var_dump('Il numero è presente nell array');
    }
    else {
        var_dump('Il numero NON è presente nell array');
    }

    if (in_array(123, $numbers)) {
        var_dump('Il numero è presente nell array');
    }
    else {
        var_dump('Il numero NON è presente nell array');
    }

    $mixedArray = [
        'key' => 4,             // 'key' => 4
        72,                     // 0 => 72
        [4, 5, 6],              // 1 => [4, 5, 6]
        'other-key' => 'A',     // 'other-key' => 'A'
        'third-key' => [
            1, 2, 3
        ]
    ];

    var_dump($mixedArray);
    var_dump($mixedArray[1]);
    var_dump($mixedArray[1][1]);
    var_dump($mixedArray['third-key'][2]);

    var_dump(rand(1, 3));

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>61 LC PHP Fundamentals</title>
    </head>
    <body>
        <h1>
            PHP Fundamentals
        </h1>

        <h2>
            <?php echo $initialString.' '.$firstName.' '.$lastName; ?>
        </h2>

        <h2>
            <?php echo $finalString; ?>
        </h2>

        <ul>
            <?php
                for ($i = 1; $i <= 10; $i++) { 
            ?>
                <li>
                    <?php echo $i; ?>
                </li>
            <?php
                }
            ?>
        </ul>

        <ul>
            <?php
                for ($i = 1; $i <= 10; $i++) { 
                    echo '<li>'.$i.'</li>';
                }
            ?>
        </ul>

        <div>
            <h3>
                Lista della spesa
            </h3>

            <?php
                $groceryList = [
                    'Pane',
                    'Acqua',
                    'Schifezze varie',
                ];

                $groceryListTwo = [
                    'elem-1' => 'Pane',
                    'elem-2' => 'Acqua',
                    'elem-3' => 'Schifezze varie',
                ];
            ?>
            <ul>
                <?php
                    foreach ($groceryList as $ind => $singleListProduct) {
                        echo '<li>'.$ind.') '.$singleListProduct.'</li>';
                    }
                ?>
            </ul>

            <ul>
                <?php
                    foreach (
                        $groceryListTwo             // Elemento su cui iterare
                        as
                        $pippo                      // Indice OPPURE chiave del singolo elemento iterato
                        =>
                        $singleListProduct          // Valore del singole elemento iterato
                    ) {
                ?>
                    <li>
                        <?php echo $pippo; ?>)
                        <?php echo $singleListProduct; ?>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <!-- <script>
            const arr = [1, 2, 3];

            arr.forEach((elem, i, wholeArray) => {

            });
        </script> -->
    </body>
</html>