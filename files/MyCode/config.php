<?php
// Application configuration file

$_SESSION['PLUGIN_ICON'] = "mis_imagenes"; // Location of the icons
$_SESSION['PREF_LINK'] = "http://localhost/forum/files/";  // Pre URL for the location of User images


// Configuration editor "Innovation"
$_SESSION["UserID"] = $_SESSION["id_user"];      // User ID
$_SESSION['EDITOR_BaseVirtual0'] = "/forum/assets"."/".$_SESSION["UserID"]; 
$_SESSION['EDITOR_Base'] = "C:/Apache24/htdocs/forum/assets";
$_SESSION['EDITOR_Base0'] = $_SESSION['EDITOR_Base']."/".$_SESSION["UserID"];
$_SESSION['EDITOR_UrlBase'] = "http://localhost/forum/assets";
// Control diretory of images of User
$name_dir = $_SESSION['EDITOR_Base0']."/";

// Create Directory of images of the connected User
if (isset($_SESSION["id_user"]) ) { // A user is connected?
	if (!file_exists($name_dir)) {
			mkdir($name_dir, 0700);;
	}
}



?>