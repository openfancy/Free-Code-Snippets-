<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();

      $username = $_POST['username'];
      $passwort = $_POST['passwort'];

      $hostname = $_SERVER['HTTP_HOST'];
      $path = dirname($_SERVER['PHP_SELF']);

      // Benutzername und Passwort werden überprüft
      if ($username == 'DEIN USER NAME' && $passwort == 'DEIN PASSWORD') {
       $_SESSION['angemeldet'] = true;
       

       // Weiterleitung zur geschützten Startseite
       if ($_SERVER['SERVER_PROTOCOL'] == 'HTTP/1.1') {
        if (php_sapi_name() == 'cgi') {
         header('Status: 303 See Other');
         }
        else {
         header('HTTP/1.1 303 See Other');
         }
        }

       header('Location: http://'.$hostname.($path == '/' ? '' : $path).'/index.php');
       exit;
       }
      }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
 <head>
  <title>Geschützter Bereich</title>
 </head>
 <body>
  <div style="background-color:#0099FF; width:100%; height:16px;">
    <span id="c1" style="font: bold 12px lucida grande; color: white;">  openfancy Plattform Live-Statistiken    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php   
$datum = date("d.m.Y");
$uhrzeit = date("H:i");
echo $datum," - ",$uhrzeit," Uhr"; 
?></span>
<table border="0"><tr>
  <form action="login.php" method="post">
    <th>Benutzername:</th> <th><input type="text" name="username" /></th> <th></th>
    <tr><th>Passwort:</th><th><input type="password" name="passwort" /></th><th><input type="submit" value="Anmelden" /></th></tr>
   
  </form>
         </table>
         
  <p>
  <?php      
        //echoscript "wirtten by Florian Bögge"
        //echo "first load database"
               
mysql_connect("SERVER", "DEIN MYAQL USERNAME","PASSWORD FOR MYSQL") or die ("Keine Verbindung moeglich");
mysql_select_db("DATENBANKNAME") or die ("Die Datenbank existiert nicht.");
    ?>  
    <span id="c1" style="font: bold 12px lucida grande; color: #0099FF;">
    Diese Seite ist den Mitarbeitern von openfancy vorbehalten. Wende dich an info@btuwiki.de um weitere Infos zu erhalten.<br> 
    Zur Zeit haben wir 
    <?php     // show me the users bitch!
  $abfrageuser = "SELECT ss_users FROM site_stats";
$ergebnisuser = mysql_query($abfrageuser);
while($row = mysql_fetch_object($ergebnisuser))
   {
   echo "$row->ss_users";
   }
    ?> registrierte User auf unserer Plattform. Hast du Bock Teil des Teams zu werden? 
    Dann bewerbe dich jetzt und schaue welcher <a href="http://46.163.105.85/btuwiki/index.php/Wir_suchen_dich!">Job</a> der Richtige f&uuml;r dich ist.</span></center>

<div style="background-color:#0099FF; width:100%; height:16px;">
 <span id="c1" style="font: bold 12px lucida grande; color: white;">
 &copy; <?php echo(date("Y")); ?> <b>Eine Florian B&ouml;gge Produktion</b>
  </span></div>
 </body>
 
</html>