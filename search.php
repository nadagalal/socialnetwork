
<?php include('server.php')?>

<html>
    <head>
	<title>2</title>
	<link rel="stylesheet" type="text/css" href="Style1.css">
     
</head>
<body>
    
     <h3> Search Results </h3>
    <?php
    

if (isset($_POST['searchbutton']))
{
    $output='';
    $searchbar= mysqli_real_escape_string($db, $_POST['searchlabel']);
  //echo $searchbar;
    $querysearch="select * from users WHERE FirstName like '%$searchbar%' or LastName like '%$searchbar%' or Email like '%$searchbar%' or HomeTown like '%$searchbar%'";
$result6 = mysqli_query($db, $querysearch);
     
    if((mysqli_num_rows($result6) ==0))
        
    {
       echo'no results found';
    }
    else
    {
          $count= mysqli_num_rows($result6);
    $str2="results were found";
    echo $count. " ".$str2;
        while($row = mysqli_fetch_array($result6, MYSQLI_ASSOC))
        {
            
            echo  '<h5> '.$row['FirstName'].'  '.$row['LastName'].'</h5>';
        }
    }
   
}
        
   

?>
    </body>
</html>