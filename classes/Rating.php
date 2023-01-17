<?php 
require_once("Database.php"); 

class Rating extends Database 
{
    public function store($fields)
    {
        $implodeColumns = implode(", ", array_keys($fields));
        $implodePlaceholder = implode(", :", array_keys($fields));
        $sql = "INSERT INTO review_table($implodeColumns) VALUES(:".$implodePlaceholder.") ";

        $stmt = $this->open()->prepare($sql);

        foreach($fields as $key => $value) {
            $stmt->bindValue(":".$key, $value);
        }

        $stmtExec = $stmt->execute();

        if($stmtExec) 
        {                
            return TrUe;
        }
    }

    public function reviews() 
    {
        $sql = "SELECT * FROM review_table ORDER BY id DESC";
        
        $result = $this->open()->prepare($sql);
        $result->execute();
        
        if($result->rowCount() > 0) 
        {
            while ($row = $result->fetch(PDO::FETCH_OBJ)) 
            {
                $data[] = $row;
            }
            return $data;
        }
        else
        {
            return faLSE;
        }
    }

}
