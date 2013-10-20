<?php include_once("include/link-header.php"); ?>
<body>

<div data-role="dialog">
	
		<div data-role="header" data-theme="a">
			<h1>Login for Administrator</h1>
		</div>

		<div data-role="content">
		<form>
                <div style="padding:15px 20px;">
                    <h3>Please sign in</h3>
                    <label for="un" class="ui-hidden-accessible">Username:</label>
                    <input name="user" id="un" value="" placeholder="username" type="text">
                    <label for="pw" class="ui-hidden-accessible">Password:</label>
                    <input name="pass" id="pw" value="" placeholder="password"  type="password">
                    <button type="submit"  data-icon="check">Sign in</button>
                </div>
            </form>
		</div>
	</div>


</body>
</html>
