<?php
if(isset($_REQUEST['clientId']))
{
	$dir = dirname(__FILE__)."/docx";
	echo "<ul>";
	$files = array_diff(scandir($dir), array(".", ".."));
	foreach($files as $value) {
		$path = $dir."/".$value;
		$value = iconv("windows-1251", "utf-8", $value);//
		if (is_dir($path)) {
			echo "<li>".$value;
			recursive_directory_traversal($path);
			echo "</li>";
		} else {
			echo "<li data-jstree='{\"icon\":\"http://jstree.com/tree.png\"}'>".$value."</li>";
		}
	}
	echo "</ul>";
	
}

?>