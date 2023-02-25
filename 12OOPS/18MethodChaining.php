<?php
class QueryClas{
  public $Query;
  public function select($val)
  {
    $this->Query = "SELECT $val";
    return $this;
  }  
  public function from($tbl)
  {
    $this->Query .= " FROM $tbl";
    return $this;
  }  
  public function where($id)
  {
    $this->Query .= " WHERE userid = $id";
    return $this;
  }  
}
$D = new QueryClas();
// echo $D -> select('*') -> Query;
// echo $Q;
// echo $Q = $D -> select("uername,password") -> Query;
// echo $D -> select("uername,password")->from("users"); // Uncaught Error: Object of class QueryClas could not be converted to string in
// echo $D -> select("uername,password")->from("users")->Query; 
// print_r($Q->Query);
// echo  $D -> select("*")->from("users") ->where(45)-> Query;
// echo $D -> where(45)-> Query;
 echo $Q = $D -> select("*")->from("users") ->where(5)-> Query;
?>
