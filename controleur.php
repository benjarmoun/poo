<?php   

require('model.php');
$acc1 = new bank_account("Ibrahim","check account",5000);
$acc2 = new savings_account("Reda","savings account",7000);
require('viewer.php');

