<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

        <h3><br>ACCOUNT 1:</h3>
        <p>NAME: <?=$acc1->get_name() ?></p>
        <p>ACCOUNT TYPE: <?=$acc1->get_type()?></p>
        <p>BALANCE: <?=$acc1->get_balance(). "DH"?></p>

        <h3><br>ACCOUNT 2:</h3>
        <p>NAME: <?=$acc2->get_name() ?></p>
        <p>ACCOUNT TYPE: <?=$acc2->get_type()?></p>
        <p>BALANCE: <?=$acc2->get_balance(). "DH"?></p>
        <p>BALANCE AFTER ADDING INTERESTS: <?=$acc2->calculate_interest($acc2->get_balance()). "DH" ?></p>

    </div>



</body>
</html>