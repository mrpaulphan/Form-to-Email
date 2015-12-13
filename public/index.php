<!DOCTYPE html>
<html>
<head>
    <title>PHP Mail</title>
</head>
<body>
    <form action="send.php" method="post" class="ajax">
        <div>
	        <label for="name">Name</label>
	        <input type="text" name="name" id="name">
        </div>

        <div>
	        <label for="email">email</label>
	        <input type="email" name="email" id="email">
        </div>

        <div>
			<input type="submit" value="Send">
		</div>

    </form>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> </script>
    <script src="js/script.js"></script>
</body>
</html>