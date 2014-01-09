
  <?php
mysql_connect("SERVER", "DEIN MYAQL USERNAME","PASSWORD FOR MYSQL") or die ("Keine Verbindung moeglich");
mysql_select_db("DATENBANKNAME") or die ("Die Datenbank existiert nicht.");
    ?> <span id="c1" style="font: 11px lucida grande;"> 
    
    <?php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 120; URL=$url"); 
?>
  <?php
  $select = mysql_query("SELECT user_real_name, user_name,user_id FROM user order by user_id DESC LIMIT 0, 20");
                                                                                                                      
       

echo "<table table border='0'; style='font-size: 110%;font-weight: bold;'>"; 
echo("<tr>");
echo ("<th align=left>Userzahl</th>");
echo ("<th align=left>Name</th>");
//echo ("<th align=left>Real Name</th>");
echo("</tr>");
while( $show = mysql_fetch_array($select)) {

echo("<tr>");
  echo("<td align=center>$show[user_id]</li></td>");
  echo ("<td ><a href=/index.php/Benutzer:$show[user_name] target=_blank>$show[user_name]</a>" );
  //echo ("</td><td>$show[user_real_name]</td>");
echo("</tr>");
 }
echo("</table>");
 
?>    </span>   
 



                                             