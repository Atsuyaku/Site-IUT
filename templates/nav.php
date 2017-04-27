<a href="#menu" id="toggle"><span></span></a>
<div id="menu">
	<ul>
		<li><a href="./index.php">Accueil</a></li>
		<li><a href="./hist.php">Historique</a></li>
		<li><a href="./stat.php">Statistiques</a></li>
		<li><a href="./config.php">Configuration</a></li>
	</ul>
</div>

<script type="text/javascript">
var theToggle = document.getElementById('toggle');

// based on Todd Motto functions
// http://toddmotto.com/labs/reusable-js/

// hasClass
function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
	if (!hasClass(elem, className)) {
		elem.className += ' ' + className;
	}
}
// removeClass
function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
		while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
			newClass = newClass.replace(' ' + className + ' ', ' ');
		}
		elem.className = newClass.replace(/^\s+|\s+$/g, '');
	}
}
// toggleClass
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
	if (hasClass(elem, className)) {
		while (newClass.indexOf(" " + className + " ") >= 0 ) {
			newClass = newClass.replace( " " + className + " " , " " );
		}
		elem.className = newClass.replace(/^\s+|\s+$/g, '');
	} else {
		elem.className += ' ' + className;
	}
}

theToggle.onclick = function() {
	toggleClass(this, 'on');
	return false;
}
</script>