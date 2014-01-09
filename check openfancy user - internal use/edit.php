
 <span id="c1" style="font: 12px lucida grande;">   <?php
mysql_connect("SERVER", "DEIN MYSQL USERNAME","PASSWORD FOR MYSQL") or die ("Keine Verbindung moeglich");
mysql_select_db("DATENBANKNAME") or die ("Die Datenbank existiert nicht.");

    ?>  <b><?php
  $abfrage = "SELECT ss_total_edits FROM site_stats";
$ergebnis = mysql_query($abfrage);
while($row = mysql_fetch_object($ergebnis))
   {
   echo "$row->ss_total_edits";
   }
?>    </span>   </b>
 



