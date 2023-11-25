<?php
class db{
    function openConn(){
        $conn=oci_connect('c##scott','tiger','orcl');
        if($conn)
            echo "Connection established";
        else{
            echo "Connection failed";
            $err = oci_error();
        }
        return $conn;
    }

    function customerLogin($conn, $table, $username, $password){
        $sqlQuery= "SELECT * FROM ".$table." WHERE username='".$username."' AND password='".$password."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function adminLogin($conn, $table, $username, $password){
        $sqlQuery= "SELECT * FROM ".$table." WHERE ADMIN_ID='".$username."' AND password='".$password."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function getUserbyUsername($conn, $table, $username){
        $sqlQuery= "SELECT * FROM ".$table." WHERE username='".$username."'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function createNewUser($conn, $table, $username, $firstname, $lastname, $email, $mobile, $dob, $gender, $password){
        $sqlQuery = "INSERT INTO $table (username, first_name, last_name, email, mobile, dob, gender, password, interest) VALUES ('$username', '$first_name', '$last_name', '$email', '$mobile', '$dob', '$gender', '$password', '$interest')";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function updateUser($conn, $table, $username, $first_name, $last_name, $email, $mobile, $password, $dob, $gender, $address){
        $sqlQuery = "UPDATE $table SET first_name = '$first_name', 
                                       last_name= '$last_name', 
                                       email= '$email', 
                                       mobile= '$mobile', 
                                       password= '$password',
                                       dob= '$dob', 
                                       gender= '$gender', 
                                       address= '$address',
                                       WHERE username='$username'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function deleteUser($conn, $table, $username, $first_name, $last_name, $email, $mobile, $dob, $gender, $password, $address){
        $sqlQuery = "DELETE FROM $table WHERE username='$username'";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }

    function showAll($conn){
        $sqlQuery = "SELECT * FROM customer";
        $result = oci_parse($conn, $sqlQuery);
        return $result;
    }
    
    function closeConn($conn){
        $conn->close();
    }

}

?>
