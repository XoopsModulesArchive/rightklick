RightKlick
Version: 1.0

von: Jochen Gerersorfer
webmaster@gererstorfer.net
http://gererstorfer.net

-------------------------------------------------------------------------------

1 Beschreibung
2 Installation
3 Bekannte Bugs
4 Neuerungen



1 Beschreibung:
Mit mod_rechtsklick kannst Du die rechte Maustaste deaktivieren oder es
kommt eine Meldung oder ein Men�. Das letztere war auch der Grund f�r dieses
Modul.


2 Installation:
1. Entpacke die Datei "rigthklick.zip�
2. Kopiere das Komplette Verzeichnis rightklick ins Modul-Verzeichnis.
3. Damit das Modul �berhaupt funktioniert, musst Du die theme.php ab�ndern.
   Folgenden String noch dem Body-Tag kopieren:
	echo"<SCRIPT language=JavaScript src='".XOOPS_URL."/modules/rightklick/cache/rechts.js'></script>";

	Bei mir schaut das dann so aus:

	echo"</head><body>\n";
	echo"<SCRIPT language=JavaScript src='".XOOPS_URL."/modules/rightklick/cache/rechts.js'></script>";
	OpenWaitBox();

4. alle Dateien im Ordner �cache� und den Ordner selber mit CHMOD 777
hochladen.


3 Bekannte Bugs:
Momentan wurden keine Bugs gefunden.

-------------------------------------------------------------------------------------
Nachtrag:

Um "RightKlick" unter Xoops 2 zum laufen zu bringen, ist folgende �nderung notwendig:

echo"<SCRIPT language=JavaScript src='".XOOPS_URL."/modules/rightklick/cache/rechts.js'></script>";

�ndern in:

<SCRIPT language=JavaScript src="<{$xoops_url}>/modules/rightklick/cache/rechts.js"></script>

Dann am ende der "theme.html" einf�gen. Bei mir schaut es so aus:

</body>
<SCRIPT language=JavaScript src="<{$xoops_url}>/modules/rightklick/cache/rechts.js"></script>
</html>

Gru� Briese (German Support)
