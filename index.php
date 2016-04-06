<!DOCTYPE html>

<html>
<head><title>Chat client</title></head>
<body>

	<!-- box that displays chat -->
	<div id="chat"><?php if(file_exists("log.html") && filesize("log.html") > 0)
	{
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);

    echo $contents;
	}
	?></div>

	<!-- form that handles user input -->
	<form name = "msg" onSubmit="submitMessage.php">
		<input name = "inputMsg" type = "textbox" id="inputMsg">
		<input name = "submitMsg" type = "submit" id="submitMsg">
	</form>

</body>
</html>
