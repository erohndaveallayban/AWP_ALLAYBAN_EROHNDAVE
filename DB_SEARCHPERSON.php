<?php
include("DB_Config.php");
$LastName="";
$Firstname="";
$Middlename="";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY USER</title>
</head>
<body>
    <form method="post">
        <input type="text" id="User_ID" name="User_ID">
        <label for="User_ID">Person ID</label><br>
        <button type="submit"  name="search_user">SEARCH</button>
    </form>

    <input type="text" id="Firstname" name="Firstname" value="<?php echo $Firstname ?>">
    <label for="Firstname">Firstname</label><br>

    <input type="text" id="Lastname" name="Lastname" value="<?php echo $Lastname?>">
    <label for="Lastname">LastName</label><br>

    <input type="text" Middlename" name="Middlename" value="<?php echo $Middlename?>">
    <label for="Lastname">Middle Name</label><br>

    

</body>
</html>





