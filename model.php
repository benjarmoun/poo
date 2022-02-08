<?php   
require_once "connect.php";
class bank_account{

    private $customer_name;
    private $account_type;
    private $balance;
    public function __construct($customer_name,$account_type,$balance){
        $this->customer_name=$customer_name;
        $this->account_type=$account_type;
        $this->balance=$balance;
    }
    public function deposite($sum){
        $this->balance += $sum;
        return $this->balance;
    }
    public function withrawal($sum){
        $this->balance -= $sum;
        return $this->balance;
    }
    public function set_name($customer_name){
        $this->customer_name = $customer_name;
    }
    public function set_type($account_type){
        $this->account_type = $account_type;
    }
    public function set_balance($balance){
        $this->balance = $balance;
    }
    public function get_name() {
        return $this->customer_name;
    }
    public function get_type(){
        return $this->account_type;
    }
    public function get_balance(){
        return $this->balance;
    }

    public function selectAccounts(){
        return [];
    }
}


class savings_account extends bank_account{
    public $interest_rate = 0.03;
    public function calculate_interest($balance){
        
        return $balance + $balance * $this->interest_rate;
    }
}
