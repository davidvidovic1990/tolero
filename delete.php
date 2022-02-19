
<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
        include_once 'db_connection.php';
        $conn = OpenCon();

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }

        $sql = "DELETE FROM `blog` WHERE `blog`.`ID` = '" . $_GET["passID"] . "'";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
                header("Location: adminpage.php"); 

            echo nl2br("\n$naslov\n $text\n "
                . "$datum");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>