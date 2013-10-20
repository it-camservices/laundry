<?php include_once("include/link-header.php"); ?>
<title>Washing Department</title>
</head>
<div data-role="page" class="jqm-demos" data-quicklinks="true">

	<div data-role="header" data-theme="a">
    <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>    
    <center><h1>Washing Department</h1></center>
    <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a>
    </div>
    
	<div data-role="content">
  
  
  <form>
    <fieldset data-role="controlgroup" data-type="horizontal">
    
    
    	<?php	for($i=1; $i<=40; $i++){ ?>
				<input name="choose" id="<?php echo $i ?>"  value="<?php echo "value".$i ?>" type="radio">
        		<label for="<?php echo $i ?>" style="min-width:100px; margin:5px 0; line-height:50px;"><?php echo 500+$i ?></label>
	<?php	} ?>
    </fieldset>
    
    <input data-theme="b"   data-icon="grid" data-iconpos="top" data-inline="true" value="View" type="submit">
    <input data-theme="d"   data-icon="check" data-iconpos="top" data-inline="true" value="Submit" type="submit">
    <input  data-icon="refresh" data-iconpos="top" data-inline="true" value="Reset" type="reset">
</form>
  
  
  
  
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
