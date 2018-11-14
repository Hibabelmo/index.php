<html>
<head>

<header>
 <h2>Friend book</h2>
</header>



<style>

/* Style the header */
header {
 background-color: #666;
 padding: 30px;
 text-align: center;
 font-size: 35px;
 color: white;
}
/* Style the footer */
footer {
 background-color: #777;
 padding: 10px;
 text-align: center;
 color: white;
}
</style>
</head>


<body>

<form action="index.php" method="post">
<br>Name: <input type="text" name="name">
<input type="submit">
</form>

<?php
echo "<h1>My best friends: </h1>";
    
echo "<ul>";

$filename = 'newfile.txt';

$file = fopen( $filename, "r" );
    
if( $file != false ) {
    
    while(!feof($file)){
        
        $friend = fgets($file);
        if(strlen($friend) > 0) {
            echo "<li>$friend</li>";
        }
    }
}
fclose( $file );
    
if (isset($_POST['name']) && strlen($_POST['name']) > 0) {
    $name = $_POST['name'];
    $file = fopen( $filename, "a" );
    if($file != false){
         echo "<b><li>$name</li></b>"; 
         fwrite( $file, $name . "\n" );
         fclose( $file );
    }

}
echo "</ul>";
if (isset($_POST['delete'])) {
    $indexToBeRemoved = $_POST['delete'];
    unset($friendsArray[$indexToBeRemoved]);
    $friendsArray = array_values($friendsArray);
}
?>

</body>

<footer>
 <p>Footer</p>
</footer>
</html>