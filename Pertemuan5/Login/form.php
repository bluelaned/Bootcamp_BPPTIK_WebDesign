<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="simpan.php" method="POST">
    	<fieldset>
        	<legend>Login</legend>
            <p>
            	<label>Username :</label>
                <input type="text" name="username" placeholder="username"/>
            </p>
            <p>
            	<label>Password :</label>
                <input type="password" name="password" placeholder="password"/>
            </p>
            <p>
            	<label>
                <input type="checkbox" name="remember" value="remember"/>
                Remember Me :</label>
            </p>
            <p>
            	<input type="submit" name="submit" value="login"/>
            </p>
        </fieldset>
    </form>
</body>
</html>
