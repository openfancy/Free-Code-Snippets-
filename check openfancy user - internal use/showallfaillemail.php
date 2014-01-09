      <html>
      
 <!--Hi! schoen das du hier bist!
 Wenn du irgendetwas ueber das Script wissen willst, dann wende dich an info@btuwiki.de
 Copyright by Florian Boegge! I'm CEO, bitch! -->     
      
      
      
      
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>openfancy Live-Statistik!</title>
<!--meta http-equiv="refresh" content="30"-->
 
 <body>
      <?php      
        //echoscript "wirtten by Florian Bögge"
        //echo "first load database"
               
mysql_connect("SERVER", "DEIN MYAQL USERNAME","PASSWORD FOR MYSQL") or die ("Keine Verbindung moeglich");
mysql_select_db("DATENBANKNAME") or die ("Die Datenbank existiert nicht.");
    ?>  
     
        
     <p>

    <div style="background-color:#0099FF; width:100%; height:16px;">
    <span id="c1" style="font: bold 12px lucida grande; color: white;">  openfancy Plattform Live-Statistiken    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php   
$datum = date("d.m.Y");
$uhrzeit = date("H:i");
echo $datum," - ",$uhrzeit," Uhr"; 
?></span>
    
    </div>
       <div class="wrapper">
    <p>
     <center>
     
    
  
      
       <?php
        $result = mysql_query("SELECT user_name, user_email FROM user WHERE user_email NOT LIKE '%tu-cottbus%' order BY user_name"); 
$num_rows = mysql_num_rows($result); 
  {
// Display the results 
echo $num_rows; 
      }
       ?>
       
       <p>
  
        
        <span id="c1" style="font: bold 15px arial; color: black;">     
    <?php           // show me the total views
  $abfrageuser = "SELECT user_name, user_email FROM user WHERE user_email NOT LIKE '%tu-cottbus%' order BY user_name ";
$ergebnisuser = mysql_query($abfrageuser);                               
while($row = mysql_fetch_object($ergebnisuser))
   {
   echo "[$row->user_name  $row->user_email] <p>";
   }
    
    ?></span>
     
  </div>
 <div class="footer"><div style="background-color:#0099FF; width:100%; height:16px;">
 <span id="c1" style="font: bold 12px lucida grande; color: white;">
 &copy; <?php echo(date("Y")); ?> <b>Eine Florian B&ouml;gge Produktion</b>
  </span></div></div></center>
  </body>
</html>

 



