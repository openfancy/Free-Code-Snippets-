
  <?php
mysql_connect("SERVER", "DEIN MYSQL USERNAME","PASSWORD FOR MYSQL") or die ("Keine Verbindung moeglich");
mysql_select_db("DATENBANKNAME") or die ("Die Datenbank existiert nicht.");

    ?> <span id="c1" style="font: 11px lucida grande;">   <?php
  $select = mysql_query("SELECT page_id, page_title,Comment_Username, Comment_Page_ID, Comment_Date,Comment_Text FROM page, comments WHERE Comment_Parent_ID = '0' AND Comment_Page_ID = page_id order by Comment_Date DESC");
                                                                                                                      
       

echo("<table border=\"1\">");
while( $show = mysql_fetch_array($select)) {

echo("<tr>");
  echo("<td>$show[Comment_Username] fragt</li></td>");
  echo ("<td><a href=www.openfancy.com/openfancy/index.php/$show[page_title] target=_blank>$show[page_title]</a>" );
  echo ("</td><td>$show[Comment_Text]</td>");
echo("</tr>");
 }
echo("</table>");
 
?>    </span>   
 



                                             