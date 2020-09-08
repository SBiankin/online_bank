<?php


define('DB_SERVER','localhost');
define('DB_USER','treasure2_bank');
define('DB_PASS' ,'Express@21');
define('DB_NAME', 'treasure2_bank');

class DB_con
{
 function __construct()
 {
  $conn = @mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  @mysql_select_db(DB_NAME, $conn);
 }
 
 
 public function select($cat_id)
 {
  $res=@mysql_query("SELECT * FROM account_holder WHERE account_holder_name='$cat_id'  ORDER BY `id` DESC");
  return $res;
 }
 
  public function transin()
 {
  $res=@mysql_query("SELECT * FROM transfer_info  ORDER BY `id` DESC");
  return $res;
 }
 
 
 public function transact($cat_id)
 {
  $res=@mysql_query("SELECT * FROM bank_transact WHERE account_holder_id='$cat_id' ORDER BY `id` DESC");
  return $res;
 }
 

 

    
 
 
}
?>