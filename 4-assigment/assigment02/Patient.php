<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Patient
 *
 * @author Le Vinh Chi
 */
class Patient {

    //put your code here
    #1. Properties

    private $server = "localhost"; //default port 3306
    private $account = "root";
    private $password = "";
    private $database = "PatientDB";
    public $conn;

    #2. Constructor

    public function __construct() {
        $this->conn = new mysqli($this->server, $this->account, $this->password, $this->database);
        if (mysqli_connect_error()):
            trigger_error(mysqli_connect_error());
        else:
            return $this->conn;
        endif;
    }

    #3. Function
    #3.1. Read

    public function readData() {
        $query = "select * from Patient";
        $rs = $this->conn->query($query);

        if ($rs->num_rows > 0):
            $data = [];
            while ($row = $rs->fetch_array()):
                $data[] = $row;
            endwhile;
            return $data;
        else:
            echo 'Records not found!';
        endif;
    }

    #3.2. Create

    public function createData($post) {
        if (!empty($_POST['txtID']) and !empty($_POST['txtName']) and !empty($_POST['txtCountry']) and !empty($_POST['txtEmail'])):
            $id = $this->conn->real_escape_string($_POST['txtID']);
            $name = $this->conn->real_escape_string($_POST['txtName']);
            $country = $this->conn->real_escape_string($_POST['txtCountry']);
            $email = $this->conn->real_escape_string($_POST['txtEmail']);

            $query = "INSERT INTO Patient (PatientID, PatientName, Country, Email) VALUES
('{$id}', '{$name}', '{$country}', '{$email}')";
            $rs = $this->conn->query($query);

            if (!$rs):
                header('location: Index.php?msgError=Nothing to update');
            else:
                header('location: Index.php?msgOK=New Data is added to database!');
            endif;
        endif;
        header('location: Register.php?error=All fields can not empty!');
    }

    #3.3. Update

    public function updateData($code) {
        $id = $this->conn->real_escape_string($_POST['txtID']);
        $name = $this->conn->real_escape_string($_POST['txtName']);
        $country = $this->conn->real_escape_string($_POST['txtCountry']);
        $email = $this->conn->real_escape_string($_POST['txtEmail']);

        //Query
        $query = "UPDATE `Patient` SET `PatientID`='{$id}',`PatientName`='{$name}',`Country`='{$country}',`Email`='{$email}' WHERE PatientID='{$code}'";
        $rs = $this->conn->query($query);
        if (!$rs):
            header('location: Index.php?msgError=" Nothing to update "');
        else:
            header('location: Index.php?msgOK=" Data is updated to database!"');
        endif;
    }

    #3.4. Delete
    #4. Filter by Code

    public function filterByCode($code) {
        //Query
        $query = "select * from Patient where PatientID = '{$code}'";
        $rs = $this->conn->query($query);

        if ($rs->num_rows > 0):
            $data = [];
            while ($row = $rs->fetch_array()):
                $data[] = $row;
            endwhile;
            return $data;
        else:
            echo 'Record not found';
        endif;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
