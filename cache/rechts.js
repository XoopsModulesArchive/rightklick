
function right(e) {
if (navigator.appName == "Netscape" &&
(e.which == 3 || e.which == 2))
return false;
else if (navigator.appName == "Microsoft Internet Explorer" &&
(event.button == 2 || event.button == 3))
{
alert ("Na na ;) das wollen wir doch nicht machen !!");
return false;
}
return true;
}
document.onmousedown=right;
if (document.layers) window.captureEvents(Event.MOUSEDOWN);
window.onmousedown=right;