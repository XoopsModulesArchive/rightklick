<?php

   function schreibendat1()
    {
      global $breite,$schriftgr,$schriftart,$kursiv,$hintfarb,$schrfarb,$linkfarb,$linkover,$linkoverhint,$ubschhint,$uberschrfarb,$menuname,$navigat,$link1,$nlink1,$link2,$nlink2,$link3,$nlink3,$link4,$nlink4,$link5,$nlink5,$link6,$nlink6,$link7,$nlink7,$pagename;
        $text = "<? //
\$breite = \"".$breite."\";
\$schriftgr = \"".$schriftgr."\";
\$schriftart = \"".$schriftart."\";
\$kursiv = \"".$kursiv."\";
\$hintfarb = \"".$hintfarb."\";
\$schrfarb = \"".$schrfarb."\";
\$linkfarb = \"".$linkfarb."\";
\$linkover = \"".$linkover."\";
\$linkoverhint = \"".$linkoverhint."\";
\$ubschhint = \"".$ubschhint."\";
\$uberschrfarb = \"".$uberschrfarb."\";
\$menuname = \"".$menuname."\";

\$navigat = \"".$navigat."\";
\$link1 = \"".$link1."\";
\$link2 = \"".$link2."\";
\$link3 = \"".$link3."\";
\$link4 = \"".$link4."\";
\$link5 = \"".$link5."\";
\$link6 = \"".$link6."\";
\$link7 = \"".$link7."\";
\$nlink1 = \"".$nlink1."\";
\$nlink2 = \"".$nlink2."\";
\$nlink3 = \"".$nlink3."\";
\$nlink4 = \"".$nlink4."\";
\$nlink5 = \"".$nlink5."\";
\$nlink6 = \"".$nlink6."\";
\$nlink7 = \"".$nlink7."\";
\$pagename = \"".$pagename."\";
?>";

        $offnen = fopen("../cache/config.inc.php", "w+");
    	fwrite($offnen, $text);
    	fclose($offnen);


    }
function schreiben1()
{
include ("../cache/config.inc.php");
 global  $breite,$schriftgr,$schriftart,$kursiv,$hintfarb,$schrfarb,$linkfarb,$linkover,$linkoverhint,$ubschhint,$uberschrfarb,$menuname,$navigat,$link1,$nlink1,$link2,$nlink2,$link3,$nlink3,$link4,$nlink4,$link5,$nlink5,$link6,$nlink6,$link7,$nlink7,$pagename;
        $text = "
breite =".$breite.";
groesse =".$schriftgr.";
font = \"".$schriftart."\";
fett = \"normal\";
kursiv = \"".$kursiv."\";
hintergrundfarbe = \"".$hintfarb."\";
schriftfarbe = \"".$schrfarb."\";
linkfarbe = \"".$linkfarb."\";
linkhover = \"".$linkover."\";
linkhintergrund = \"".$linkoverhint."\";
headHintergrund = \"".$ubschhint."\";
headFarbe =  \"".$uberschrfarb."\";
body = \"<body>\";
document.writeln('<style type=text/css><!--');
document.writeln('#contextMenu {position: absolute; visibility: hidden; width: '+breite+'px; background-color: '+hintergrundfarbe+'; layer-background-color: '+hintergrundfarbe+'; border: 2px outset white; color: '+schriftfarbe+'; font-family: '+font+'; font-style: '+kursiv+'; font-size: '+groesse+'pt; padding: 0px;}');
document.writeln('a.menu:link, a.Menu:visited, a.Menu:active {color: '+linkfarbe+'; text-decoration: none; cursor: default;}');
document.writeln('a.menu:hover {color: '+linkhover+'; text-decoration: none; background-color: '+linkhintergrund+'; cursor: default;}');
document.writeln('\/\/\-\-\>\<\/style\>');
var menu;
function showMenu (evt) {
        if (document.all) {
                document.all.contextMenu.style.pixelLeft = event.clientX-5;
                document.all.contextMenu.style.pixelTop = event.clientY-5;
                document.all.contextMenu.style.visibility = 'visible';
                return false;
        } else if (document.layers) {
                if (evt.which == 3) {
                        document.contextMenu.left = evt.x-5;
                        document.contextMenu.top = evt.y-5;
                        document.contextMenu.onmouseout = function (evt) {this.visibility = 'hide';}
                        document.contextMenu.visibility = 'show';
                        return false;
                }
        }
        return true;
}
if (document.all) document.oncontextmenu =showMenu;
if (document.layers) {
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = showMenu;
}

document.writeln('</head>'+body);
document.writeln('<div id=\"contextMenu\" onMouseOut=\"menu=this;this.tid=setTimeout('+\"'menu.style.visibility = \\\\'hidden\\\\'', 20\"+');\" onMouseOver=\"clearTimeout(this.tid);\"><p width=100% style=\"margin-bottom:0px;\">');

ueberschrift(\"".$menuname."\");
text(\"<b>".$navigat."</b>\");
link(\"<b>".$link1."</b>\", \"".$nlink1."\");
link(\"<b>".$link2."</b>\", \"".$nlink2."\");
link(\"<b>".$link3."</b>\", \"".$nlink3."\");
link(\"<b>".$link4."</b>\", \"".$nlink4."\");
link(\"<b>".$link5."</b>\", \"".$nlink5."\");
link(\"<b>".$link6."</b>\", \"".$nlink6."\");
link(\"<b>".$link7."</b>\", \"javascript:alert('".$nlink7."')\");
text(\"<b><hr>".$pagename."</b>\");


document.writeln('</div>');

function ueberschrift (txt) {
        document.write('<p width=100% style=\"text-align: center; color: '+headFarbe+'; background-color: '+headHintergrund+'; font-weight: bold; text-decoration: underline; font-size: '+(groesse+1)+'pt; text-align: center; font-family: '+font+'; margin-bottom: 0px;\">'+txt+'</p>');
}
function text (txt) {
        document.writeln('<br>'+txt);
}
function link (txt, href, target, mailto) {
        if (!target) target = \"_self\";
        if (href.indexOf(\"javascript:\")!=0) href = \"http:\/\/\"+href;
        document.writeln('<br><a href=\"'+href+'\" target=\"'+target+'\"         class=menu>'+txt+'</a>');}";

 $offnen = fopen("../cache/rechts.js", "w+");
    	fwrite($offnen, $text);
    	fclose($offnen);
    	echo "Configuration erfolgreich<br>";
    	echo "<a href=\"index.php\">Zurück</a>";
    	exit();

}


function schreibendat2()
    {
      global $warnung;
        $text = "<? // test
\$warnung = \"".$warnung."\";?>";

     $offnen = fopen("../cache/config2.inc.php", "w+");
    	fwrite($offnen, $text);
    	fclose($offnen);
}
    function schreiben2()
    {
    include ("../cache/config2.inc.php");
          $text = "
function right(e) {
if (navigator.appName == \"Netscape\" &&
(e.which == 3 || e.which == 2))
return false;
else if (navigator.appName == \"Microsoft Internet Explorer\" &&
(event.button == 2 || event.button == 3))
{
alert (\"".$warnung."\");
return false;
}
return true;
}
document.onmousedown=right;
if (document.layers) window.captureEvents(Event.MOUSEDOWN);
window.onmousedown=right;";

      $offnen = fopen("../cache/rechts.js", "w+");
    	fwrite($offnen, $text);
    	fclose($offnen);
    	echo "Configuration erfolgreich<br>";
    	echo "<a href=\"index.php\">Zurück</a>";

}

function schreiben3()
    {
          $text = "
var message=\"\";

function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function(\"return false\")";

      $offnen = fopen("../cache/rechts.js", "w+");
    	fwrite($offnen, $text);
    	fclose($offnen);


    	echo "Configuration erfolgreich<br>";
    	echo "<a href=\"index.php\">Zurück</a>";
    	exit();
    }
function schreiben4()
    {
          $text = "//Modul Deakteviert";

      $offnen = fopen("../cache/rechts.js", "w+");
    	fwrite($offnen, $text);
    	fclose($offnen);


    	echo "Deaktevierung erfolgreich<br><br>";
    	echo "<a href=\"index.php\">Zurück</a>";
    	exit();
    }
function einstellen1()
{
  include("../cache/config.inc.php");    // Einfügen der  Konfigurationsdatei
   ?><hr><b>Menü konfiguration</b><br>
   <form method="POST" action="index.php" name="configuration1">
    <table>
    <tr>
      <td >Breite:</td>
      <td ><input type="text" name="breite" value="<? echo $breite; ?>" size="20"></td>
    </tr>
    <tr>
      <td >Schriftgröße in PX:</td>
      <td ><input type="text" name="schriftgr" value="<? echo $schriftgr; ?>" size="20"></td>
    </tr>
    <tr>
      <td >Schriftart:</td>
      <td ><input type="text" name="schriftart" value="<? echo $schriftart; ?>" size="20"></td>
    </tr>
    <tr>
      <td >kursiv:</td>
      <td ><input type="text" name="kursiv" value="<? echo $kursiv; ?>" size="20"></td>
    </tr>
    <tr>
      <td >Hintergrundsfarbe:</td>
      <td ><input type="text" name="hintfarb" value="<? echo $hintfarb; ?>"size="20"></td>
    </tr>
    <tr>
      <td >Schriftfarbe:</td>
      <td ><input type="text" name="schrfarb" value="<? echo $schrfarb; ?>"size="20"></td>
    </tr>
    <tr>
      <td >Linkfarbe:</td>
      <td ><input type="text" name="linkfarb" value="<? echo $linkfarb; ?>" size="20"></td>
    </tr>
    <tr>
      <td >Linksfarbe<br> bei MausOver:</td>
      <td ><input type="text" name="linkover" value="<? echo $linkover; ?>" size="20"></td>
    </tr>
    <tr>
      <td >Linkshintergrund <br>bei MausOver:</td>
      <td ><input type="text" name="linkoverhint" value="<? echo $linkoverhint; ?>" size="20"></td>
    </tr>

     <tr>
      <td >hintergrund bei<br>Überschrift:</td>
      <td ><input type="text" name="ubschhint" value="<? echo $ubschhint; ?>" size="20"></td>
    </tr>
     <tr>
      <td >Überschriftfarbe:</td>
      <td ><input type="text" name="uberschrfarb" value="<? echo $uberschrfarb; ?>" size="20"></td>
    </tr>
     <tr>
      <td >Menüname:</td>
      <td ><input type="text" name="menuname" value="<? echo $menuname; ?>" size="20"></td>
    </tr>
  </table>
  <hr><center><b>Links konfiguration</b></center> <br>
   <table>
   <tr>
      <td ><b>Links:</b></td>
      <td ><center><b>Name:</b></center></td>
       <td ><center><b>URL: ohne "HTTP://"</b></center></td>
    </tr>
    <tr>
     <td >Text:</td>
      <td ><input type="text" name="navigat" value="<? echo $navigat; ?>" size="20"></td>
       <td ></td>
    </tr>
      <td >1 Link:</td>
      <td ><input type="text" name="link1" value="<? echo $link1; ?>" size="20"></td>
       <td ><input type="text" name="nlink1" value="<? echo $nlink1; ?>" size="40"></td>
    </tr>
    <tr>
      <td >2 Link:</td>
      <td ><input type="text" name="link2" value="<? echo $link2; ?>" size="20"></td>
       <td ><input type="text" name="nlink2" value="<? echo $nlink2; ?>" size="40"></td>
    </tr>
    <tr>
      <td> 3 Link:</td>
      <td ><input type="text" name="link3" value="<? echo $link3; ?>" size="20"></td>
       <td ><input type="text" name="nlink3" value="<? echo $nlink3; ?>" size="40"></td>
    </tr>
    <tr>
       <td> 4 Link:</td>
      <td ><input type="text" name="link4" value="<? echo $link4; ?>" size="20"></td>
       <td ><input type="text" name="nlink4" value="<? echo $nlink4; ?>" size="40"></td>
    </tr>
   <tr>
       <td> 5 Link:</td>
      <td ><input type="text" name="link5" value="<? echo $link5; ?>" size="20"></td>
       <td ><input type="text" name="nlink5" value="<? echo $nlink5; ?>" size="40"></td>
   <tr>
       <td> 6 Link:</td>
      <td ><input type="text" name="link6" value="<? echo $link6; ?>" size="20"></td>
       <td ><input type="text" name="nlink6" value="<? echo $nlink6; ?>" size="40"></td>
    </tr>
   <tr>
       <td> 7 Link:</td>
      <td ><input type="text" name="link7" value="<? echo $link7; ?>" size="20"></td>
       <td ><input type="text" name="nlink7" value="<? echo $nlink7; ?>" size="40"></td>
    </tr>
     <tr>
       <td> Name der Page:</td>
      <td ><input type="text" name="pagename" value="<? echo $pagename; ?>" size="20"></td>
       <td ></td>
    </tr>

  </table>
  <input type="hidden" name="aktion" value="schreibendat1"><a href="index.php">zum Hauptmenü </a>
  <input type="submit" value="Speichern" name="B1"><input type="reset" value="Zurücksetzen" name="B2">
</form>
<?PHP
}

function einstellen2()
{

  include("../cache/config2.inc.php");    // Einfügen der  Konfigurationsdatei
   ?><hr><b>Warnung konfiguration</b><br>
   <form method="POST" action="index.php?aktion=schreiben2" name="einstellen2">
    <table>
    <tr>
      <td >Text der Ausgegeben wird:</td>
      <td ><input type="text" name="warnung" value="<? echo $warnung; ?>" size="60"></td>
    </tr>
    </table>
  <input type="hidden" name="aktion" value="schreiben2"><a href="index.php">zum Hauptmenü </a>
<input type="submit" value="Speichern" name="B1"><input type="reset" value="Zurücksetzen" name="B2">
</form>
<?PHP
}


?>