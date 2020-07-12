<?php
include_once("admin_header.php");
OpenTable();

  include ("functions.php");
   function startinfo()
  {
   ?><br><br><br><h6>Informationen</h6><br><br>

    <p>
    <p><table border=1><tr><td><b></b></td>
    <td>
    </td></tr>
     <tr><td><b</b></td>
    <td> Informationen üder das Modul RightKlick.
    </td></tr>
    <tr><td><b>Version: 1.0</b></td>
    <td>1. Verbesserung des <b>Adminbereiches</b>.<br>
    2. Anzeige des Pagenamens unter dem Menü.<br>
    3. Der 7 Link ist dazu da um eine Meldung anzuzeigen. Du kannst den Namen des Links und den Text, der in der Meldung erscheinen soll, jetzt ändern.<br>
    </td></tr>
    </table>
    </p>
    <a href="index.php">Zurück</a>
   <?
  }
  function startmenu()
  {
   ?><br><br><br><br><br>
    <p><table><tr><td><b>Rechtsklick<br>Konfiguration:</b></td>
    <td><a href="index.php?aktion=einstellen1">beim Rechtsklick komt Menü</a><br>
    <a href="index.php?aktion=einstellen2">beim Rechtsklick komtWarnung</a><br>
    <a href="index.php?aktion=schreiben3">beim Rechtsklick komt Nichts</a>
    </td></tr>
    <tr><td><b>Für den fall das der ADMIN<br>was im Quellcode nachschauen will:</b></td>
    <td><a href="index.php?aktion=schreiben4">Modul Deaktevieren</a><br>
        </td></tr>
    </table><br><br><br>
     <a href="index.php?aktion=info">Info</a>
    <p><table><tr><td><b>Kleine Anleitung:</b></td>
    <td>Wählen sie nur eine Kategorie aus! Den wenn Sie eine Kategorie konfiguriet haben und danach eine andere Kategorie konfigurieren möchten dann wird die 1 Kategorie von den 2 Kategorie überschrieben.
    </td></tr>
    <tr><td></td>
    <td>Zum aktivieren dieses Modules muss volgender Code in die theme.php eures Themes nach dem Body Tag kopiert werden:<br>
        echo"&lt;SCRIPT language=JavaScript src='".XOOPS_URL."/modules/rightklick/cache/rechts.js'&gt&lt;/script&gt;";<br><br>
        Bei mir schaut das dann so aus:<br><br>
          echo"&lt;/head&gt;&lt;body&gt;\n";<br>
          echo"&lt;SCRIPT language=JavaScript src='".XOOPS_URL."/modules/rightklick/cache/rechts.js'&gt;&lt;/script&gt;";<br>
          OpenWaitBox();<br>
          <br>
    </td></tr>
    <tr><td><b>Achtung:</b></td>
    <td>Nach dem schliesen dieses Fensters  MUSS die Home Page <b> AKTUALISIERT</b> werden!!!
    </td></tr>
    </table>
    </p>
   <?
  }
?>
<html><head>
<title>RightKlick</title>
</head><body>
<table align="center" height="200" width="80%" >
<tr align="center"><td align="center"><h5>RightKlick</h5></td></tr>
<tr align="center"><td align="center">

<?
  if ($aktion == "schreibendat1")
  {
   schreibendat1();
   schreiben1();
  }
  if ($aktion == "einstellen1") einstellen1();
  if ($aktion == "schreiben2")
  {
   schreibendat2();
   schreiben2();
   }
  if ($aktion == "einstellen2") einstellen2();
  if ($aktion == "schreiben3") schreiben3();
   if ($aktion == "schreiben4") schreiben4();
  if ($aktion == "info") startinfo();
  if (!$aktion) startmenu();
?>
<br><br><br>
</td></tr>
<tr align="center" ><td align="center" >
<h6>Copyright bei <a href="http://www.gererstorfer.net" target="blank">Jochen Gererstorfer</a> von Das Gererstorfer Net</h6><br></td></tr>
</table></body></html>

<?




CloseTable();

include("admin_footer.php");
?>