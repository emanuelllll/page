<?php
include 'files/form_name.php';
$servername = "localhost";
 $username = "recon_qss";
 $password = "recon_qss";
 $database = "database1";
 // Create connection 
 $link = mysql_connect("$hostname", "$username", "$password");
if ($database) { 
    $dbcheck = mysql_select_db("$database");
        if (!$dbcheck) {
            echo mysql_error();
        }else{
            echo "<p>Successfully connected to the database '" . $database . "'</p>\n";
            // Check table formular
	    echo "This is table name: ". $form_name;
            $formular = $form_name;
            $sql = "SELECT id, text, timestamp, ispic FROM`$formular`";
            $result = mysql_query($sql);
            if (mysql_num_rows($result) > 0) {
                echo "<p>Available forms:</p>\n";
                echo "<pre>\n";
                while ($row = mysql_fetch_row($result)) {
                    echo $row[0] . ", " . $row[2] . "   ";
		    echo '<form action="delete_item.php" method="post" id="'.$row[0].'"><label>'. $row[1].'</label> <input type="hidden" name="to_edit" value="'.$row[0].'"><input type="hidden" name="form_name" value="'.$formular.'"><button type="submit" form="'.$row[0].'" name ="remove" value="Remove">Remove</button><button type="submit" form="'.$row[0].'" name="edit" value="Edit">Edit</button></form>';
                    if ($row[3] == 1) {echo "<img src='".$row[1]."' alt='Picture' >"; }
		    echo "</br>";
                }
                echo "</pre>\n";
            } else {
                echo "<p>The database '" . $database . "' contains no tables.</p>\n";
                echo mysql_error();
            }

	    	
        }
   
}

?>
