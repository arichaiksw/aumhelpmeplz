<?php
class Controller{
    private $db;

    function __construct($con){
        $this->db=$con;
    }
    
    function Insert($username, $password, $fname, $lname) {
        print_r($fname);
        try{
            $sql1 = "INSERT INTO login(username,password) VALUE (:username,:password)";
            $stmt1=$this->db->prepare($sql1);
            $stmt1->bindParam(":username",$username);
            $stmt1->bindParam(":password",$password);
            $stmt1->execute();

            $sql2 = "INSERT INTO member(fname,lname) VALUE (:fname,:lname)";
            $stmt2=$this->db->prepare($sql2);
            $stmt2->bindParam(":fname",$fname);
            $stmt2->bindParam(":lname",$lname);
            $stmt2->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getTables(){
        try{
            $sql = "SELECT * FROM login a INNER JOIN member b ON a.id = b.id";
            $result=$this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}

?>