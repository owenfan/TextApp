<?php
    $pid = addslashes($_REQUEST['pid']);
   
         $link = mysql_connect('db512462049.db.1and1.com','XXXXXXXX','XXXXXXXX'); 
        if (!$link) { 
            die('Could not connect to MySQL: ' . mysql_error()); 
        }
       
       
          $db_select = mysql_select_db("db512462049",$link); 
                    if (!$db_select) { 
                          die("Database selection failed:: " . mysql_error()); 
                         } 
        $sel_stmt = "INSERT INTO collectors values('".$pid."');";
        $result = mysql_query($sel_stmt, $link); 
        if(!$result) {
            
           die('Error: ' . mysql_error($link));
           
        }
        else {
            echo stripslashes($pid); 
        }
?>