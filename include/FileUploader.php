<?php

	if ((($_FILES["file"]["type"] == "application/octet-stream")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/png"))&& ($_FILES["file"]["size"] < 2000000))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			echo "Type: " . $_FILES["file"]["type"] . "<br />";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

			if (file_exists("../UPLOAD_FILES/" . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . " already exists. ";
			}else{
				move_uploaded_file($_FILES["file"]["tmp_name"], "../UPLOAD_FILES/" . $_FILES["file"]["name"]);
				echo "Stored in: " . "../UPLOAD_FILES/" . $_FILES["file"]["name"];
			}
		}
	}else{
		echo "Invalid file";
	}
?>