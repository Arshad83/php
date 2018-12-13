<?php
class DBManager
{
  private $selectables = array();
  private $table;
  private $whereClause;
  private $limit;

  public function select()
  {
    var_dump(func_get_args());
    $this->selectables=func_get_args();
    var_dump($this->selectables);
    var_dump($this);
    return $this;
    

  }

  public function from($table)
  {
    $this->table = $table;
    var_dump($this->table);
    return $this;
    
  }

  public function where($clause)
  {
    $this->whereClause = $clause;
    return $this;
  }

  public function limit($limit)
  {
    $this->limit = $limit;
    return $this;
  }

  public function result()
  {
    $query = "SELECT ".join(",",$this->selectables)." FROM 
                                           {$this->table}";
    if (!empty($this->whereClause))
    $query .= " WHERE {$this->whereClause}";

    if (!empty($this->limit))
    $query .= " LIMIT {$this->limit}";	

    echo "The generated Query is : \n".$query."\n";
  }

}
$db= new DBManager();
var_dump($db);
$db->select("id","name");
$db->from("users");
$db->select("id","name")->from("users")->where("id=1")->limit(1)->result();

foreach(spl_classes() as $key=>$value)
  {
    echo $value."\n";
  }
?>