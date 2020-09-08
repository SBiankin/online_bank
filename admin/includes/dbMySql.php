<?php


define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'bank');

class DB_con
{
    public $conn;
    public $db;
 function __construct()
 {
  #$conn = @mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  $this->conn = new mysqli(DB_SERVER,DB_USER,DB_PASS);
      if($this->conn->connect_error){
           die("Connection failed: ".$conn->connect_error);
        echo "failed";
      }
  #@mysql_select_db(DB_NAME, $conn);
     $this->db = $this->conn->select_db("bank");
 }
 
 
 public function select()
 {
  #$res=@mysql_query("SELECT * FROM account_holder  ORDER BY `id` DESC");
  $res = $this->conn->query("SELECT * FROM account_holder  ORDER BY `id` DESC");
  return $res;
 }
 
  public function transin()
 {
  $res=$this->conn->query("SELECT * FROM transfer_info  ORDER BY `id` DESC");
  return $res;
 }
 
 
 public function transact()
 {
  $res=$this->conn->query("SELECT * FROM bank_transact ORDER BY `id` DESC");
  return $res;
 }
 

 

    
 
 
}
?>