<?php
$file_dir="C:\\";

foreach($_FILES as $file_name=>$file_array)
{
	echo "<br/>path=".$file_array['tmp_name'];
	echo "<br/>name=".$file_array['name'];
	echo "<br/>type=".$file_array['type'];
	echo "<br/>size=".$file_array['size'];

if(is_uploaded_file($file_array['tmp_name']))
{                      
move_uploaded_file($file_array['tmp_name'],"$file_dir/".$file_array['name']
);
echo "<br/>ok";
}
}   ?>
