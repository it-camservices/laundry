<?php include_once("include/link-header.php"); ?>
<title>Washing Viewer</title>
<style>
div>a img {float:left}
</style>
</head>
	<div data-role="page" class="jqm-demos" data-quicklinks="true">
	<div data-role="header" data-theme="a">
    <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>     
    <center><h1>Washing View</h1></center>
    <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a>
    </div>
	<div data-role="content" style="text-align:center;​">
   
           <div class="ui-grid-b ui-responsive">
                <div class="ui-block-a">
                	<div class="ui-body ui-body-d">
                
                        <div style="width:50%; float:left; text-align:center"> 
                            <div><img src="images/01.png"/></div>
                            <div><div class="ui-bar ui-bar-c">10</div></div>
                        </div>
                        
                        <div style="width:50%; float:left">
                            <div><img src="images/02.png"/></div>
                            <div><div class="ui-bar ui-bar-c">5</div></div>
                        </div>
                        
                        <div>                            
                            <div style="width:33%; float:left"><div class="ui-bar ui-bar-b">Hanger</div></div>
                            <div style="width:34%; float:left"><div class="ui-bar ui-bar-e">Dry Washing</div></div>
                            <div style="width:33%; float:left"><div class="ui-bar ui-bar-e">Stain</div></div>                           
                        </div>
                    
                	</div>
                </div>
                <div class="ui-block-b"><div class="ui-body ui-body-c">
                
                
                 	    <div style="width:33.33%; float:left; text-align:center"> 
                            <div data-role="controlgroup">
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0 </a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/02.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/02.png"/>0</a>
                            </div>
                        </div>
                         <div style="width:33.33%; float:left; text-align:center"> 
                            <div data-role="controlgroup">
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" ><img src="images/02.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/02.png"/>0</a>
                            </div>
                        </div>
                        
                        <div style="width:33.33%; float:left">
                            <div data-role="controlgroup">
                                <a href="#" data-role="button"><img src="images/02.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/02.png"/>0</a>
                            </div>
                        </div>
                
                	

                
                </div></div>
                <div class="ui-block-c"><div class="ui-body ui-body-c">
                
                
                
                	    <div style="width:33.33%; float:left; text-align:center"> 
                            <div data-role="controlgroup">
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/02.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/02.png"/>0</a>
                            </div>
                        </div>
                         <div style="width:33.33%; float:left; text-align:center"> 
                            <div data-role="controlgroup">
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/02.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/02.png"/>0</a>
                            </div>
                        </div>
                        
                        <div style="width:33.33%; float:left">
                            <div data-role="controlgroup">
                                <a href="#" data-role="button"><img src="images/02.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/01.png"/>0</a>
                                <a href="#" data-role="button" class="ui-disabled"><img src="images/02.png"/>0</a>
                            </div>
                        </div>
                
                	
                
                </div></div>
            </div><!-- /grid-b -->
    
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
