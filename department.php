<?php include_once("include/link-header.php"); ?>
<title>Department Choosing</title>
</head>
<div data-role="page" class="jqm-demos" data-quicklinks="true">
	<div data-role="header" data-theme="a">
    <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>     
    <center><h1>Department</h1></center>
    <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a>
    </div>
	<div data-role="content" style="text-align:center;​">
   
    <div class="ui-body-d ui-body">
        <h3>Department Choosing</h3>
        <div data-role="navbar">
            <ul>
                <li><a href="#" data-icon="grid">ទទួល</a></li>
                <li><a href="washing.php" data-icon="star">បោក</a></li>
                <li><a href="iron.php" data-icon="gear" target="_self">អ៊ុត</a></li>
            </ul>
            <ul>
                <li><a href="#" data-icon="arrow-l">បត់</a></li>
                <li><a href="#" data-icon="arrow-l">បញ្ចប់</a></li>
                <li><a href="login.php" data-icon="arrow-r" data-rel="dialog">រដ្ដបាល</a></li>
            </ul>
        </div><!-- /navbar -->
    </div><!-- /container -->
    </div>
        
	<div data-role="footer" data-theme="a" class="ui-bar">
    <?php include_once("include/footer-info.php"); ?>
        <div data-role="popup" id="popupLogin" data-theme="c" class="ui-corner-all">
            <form>
                <div style="padding:15px 20px;">
                    <h3>Please sign in</h3>
                    <label for="un" class="ui-hidden-accessible">Username:</label>
                    <input name="user" id="un" value="" placeholder="username" data-theme="c" type="text">
                    <label for="pw" class="ui-hidden-accessible">Password:</label>
                    <input name="pass" id="pw" value="" placeholder="password" data-theme="c" type="password">
                    <button type="submit" data-theme="c" data-icon="check">Sign in</button>
                </div>
            </form>
        </div>
    </div>  
<?php include_once("include/menu-left-panel.php"); ?>
<?php include_once("include/menu-right-panel.php"); ?>

</div>
</body>
</html>
