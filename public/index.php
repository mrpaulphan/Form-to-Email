<!DOCTYPE html>
<html>
<head>
    <title>PHP Mail</title>
</head>
<body>
    <form action="send.php" method="post" class="ajax">
    <div class="error"></div>
        <div class="form-row form-row-name">
	        <label for="name">Name</label>
	        <input type="text" name="name" id="name">
            <p class="form-row-name_error"></p>

        </div>

        <div class="form-row form-row-email">
	        <label for="email">Email</label>
	        <input type="email" name="email" id="email">
            <p class="form-row-email_error"></p>
        </div>

        <div class="form-row">
			<input type="submit" value="Send">
		</div>

    </form>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> </script>
    <script src="js/script.js"></script>
</body>
</html>