


 <span id="c1" style="font: 12px lucida grande;">   <?php
mysql_connect("SERVER", "DEIN MYAQL USERNAME","PASSWORD FOR MYSQL") or die ("Keine Verbindung moeglich");
mysql_select_db("DATENBANKNAME") or die ("Die Datenbank existiert nicht.");

    ?>  <b><?php
  $abfrage = "SELECT CommentID FROM comments order by CommentID DESC LIMIT 0, 1";
$ergebnis = mysql_query($abfrage);
while($row = mysql_fetch_object($ergebnis))
   {
   echo "$row->CommentID";
   }
?>    </span>   </b>
 




 



                                             