<?php 

?>

<?php 

include('dbh.php');
header('content-type:application-json');



// if (isset($_POST['firstname1'])){
// //fetching values sent from ajax.
//     $firstName = $_POST['firstname1'];
//     $lastName = $_POST['lastname1'];
    
//     if($_POST['firstname1']){

// write code to compare the data sent from ajax with the database, if rowCount() > 0 json_encode $error to ajax.

//SELECT firstname FROM users1 where firstname = $firstName

//if($query->rowsCount() > 0 )

// echo json_encode(Array("data" => "error")

// else { insert data in my database.

//     $sql = $conn->prepare("INSERT INTO users1(firstName, lastName)  VALUES (:firstname, :lastname)");
//     $sql->bindValue(':firstname', $firstName);
//     $sql->bindValue(':lastname', $lastName);
//     $sql->execute();

//     }
// }

if(isset($_GET['page'])) {

    if($_GET['page'] == 'insert') { // add user form
     $name = $_GET['name'];
     $lastname = $_GET['lastname'];
    
    $sql = $conn->prepare("INSERT INTO users1(firstName, lastName)  VALUES (:firstname, :lastname)");
    $sql->bindValue(':firstname', $name);
    $sql->bindValue(':lastname', $lastname);
    $sql->execute();
    
    if ($sql == true) {
        $insert = Array("data" => "insert");
        echo json_encode($insert);
    }
    else {
        $insert = Array("data" => "fail");
        echo json_encode($insert);
    
}
        // $insert = Array("data" => "insert");
        // echo json_encode($insert);
}


    elseif($_GET['page'] == 'update'){
        $update = Array("data" => "update");
        echo json_encode($update);
        
    }

    elseif($_GET['page'] == 'delete'){
        $delete = Array("data" => "delete");
        echo json_encode($delete);        
        
    }


    elseif($_GET['page'] == 'select'){
        $selectOne = Array("data" => "select");
        echo json_encode($selectOne);
        
    }



    elseif($_GET['page'] == 'selectall'){
        $selectAll = Array("data" => "selectall");
        echo json_encode($selectAll);
    
    }

    else{

        $error = Array("data" => "ERROR NOT POSSIBLE TO LOAD THE PAGE");
        echo json_encode($error);
    }

    } 
    else {
        $error = Array("data" => "ERROR NOT POSSIBLE LOAD THE PAGE");
        echo json_encode($error);
    }


//functions

// function selectOne(){
//     $userID = $_GET['userID'];

//     $sth = $conn->prepare("SELECT * FROM users WHERE userID = $userID");
//     $sth->execute();
//     $result = $sth-> fetchall();

// }

// function selectAll(){
    
//     $sth = $conn->prepare("SELECT * FROM users");
//     $sth->execute();
//     $result = $sth-> fetchall();
    
//     }


// function insert(){

//     $sth = $conn->prepare("INSERT INTO users(email, firstName, lastName) VALUES (:email, :firstname, :lastname) ");
//     $sth->execute();
    
// }
    

// function delete(){

//     $userID = $_GET['userID'];
//     $sth = $conn->prepare("DELETE FROM users WHERE userID = $userID");
//     $sth->execute();

// }

// function delete(){
//     $userID = $_GET['userID'];
    
//     $sth = $conn->prepare("UPDATE users SET email = :email, firstName = :firstname, lastName = :lastname WHERE userID = $userID");
//     $sth->execute();

// }


?>