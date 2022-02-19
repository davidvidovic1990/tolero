
<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        include 'db_connection.php';
        $conn = OpenCon();

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $naslov =  $_REQUEST['naslov'];
        $text = $_REQUEST['text'];

        $myDate = date('m/d/Y');
        $datum =  $myDate;

          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO `blog` (`ID`, `naslov`, `text`, `date`) VALUES (NULL,'$naslov','$text','$datum')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
                header("Location: blog.php"); 

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