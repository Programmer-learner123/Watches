<?php

    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, 'watchland');

    if(isset($_POST['insertdata'])){


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "INSERT INTO user(`fname`, `lname`, `email`, `pass`) VALUES('$fname', '$lname', '$email', '$pass')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {

            echo '<script> alert("Data Saved"); </script>';
            header('Location: index.html');
        }
        else

        {
            echo '<script> alert("Data not saved"); </script>';
        }
    }


?>
