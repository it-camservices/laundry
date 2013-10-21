<?php include_once("include/link-header.php"); ?>
<title>Font Office</title>
<style>
.aquater {width:32%; float:left; text-align:center}
.border{border:#CCC solid 1px;}
.haft{width:49%; float:left; text-align:center}
.button {
  margin: 10px;
  text-indent: -9999px;
  cursor: pointer;
  width: 29px;
  height: 29px;
  float: left;
  text-align: center;
  background: url(images/buttons.png) no-repeat;
  
}
.button:hover {opacity:.8;}
.dec {
  background-position: 0 -29px;
}

.buttons {
  padding: 20px 0 0 140px;
}
</style>
</head>

	<div data-role="page" class="jqm-demos" data-quicklinks="true">
	<div data-role="header" data-theme="a">
    <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>     
    <center><h1>Font Office Management</h1></center>
    <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a>
    </div>
	<div data-role="content" style="text-align:center;​">
   <form>
   
           <div class="ui-grid-b ui-responsive">
                <div class="ui-block-a">
                	<div class="ui-body ui-body-d">
                
                        <div class="haft border"> 
                            <div><img src="images/01.png"/>
                        <div class="numbers-row">
                        <div class="haft">
                        <input type="number" name="thirt" id="thirt" value="" >
                        </div>
                            
                            
                        </div>                    	
                            
                            </div>
                            
                        </div>
                        
                        <div class="haft border">
                            <div><img src="images/02.png"/>                            
                                <div class="haft">
                                    <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                                    <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                                </div>
                                <div class="haft">
                                   <input type="number"  name="trousher" id="trousher" value="" >
                                </div>                    	
                            </div>
                            
                        </div>
                    <div style="clear:both"></div>
                    <div><input type="number"  name="money-riel" id="money-riel" value="" placeholder="ទឹកប្រាក់ គិតជា​(៛)" data-clear-btn="true" >
                        <div data-role="controlgroup" data-type="horizontal" data-mini="true">
                            <a href="#" data-role="button" data-icon="plus" data-theme="e" >100</a>
                            <a href="#" data-role="button" data-icon="plus" data-theme="e" >500</a>
                            <a href="#" data-role="button" data-icon="plus" data-theme="e" >1,000</a>
                            <a href="#" data-role="button" data-icon="plus" data-theme="e" >10,000</a>
                            <a href="#" data-role="button" data-icon="plus" data-theme="e" >100,000</a>
                        </div>
                    </div>
                    <div><input type="number"  name="money-dolar" id="money-dolar" value="" placeholder="ទឹកប្រាក់ គិតជា​($)" data-clear-btn="true" >
                        <div data-role="controlgroup" data-type="horizontal" data-mini="true">
                            <a href="#" data-role="button" data-icon="plus" data-theme="e" >0.10</a>
                            <a href="#" data-role="button" data-icon="plus" data-theme="e" >1.00</a>
                            <a href="#" data-role="button" data-icon="plus" data-theme="e" >5.00</a>
                            <a href="#" data-role="button" data-icon="plus" data-theme="e">10.00</a>
                            <a href="#" data-role="button" data-icon="plus" data-theme="e">100.00</a>
                        </div>
                    
                    </div>

                    <fieldset data-role="controlgroup">
                        <input type="checkbox" name="hang" id="hang">
                        <label for="hang">បោកព្យូរ</label>
                        <input type="checkbox" name="dry" id="dry">
                        <label for="dry">បោកស្ងួត</label>
                        <input type="checkbox" name="iron" id="iron">
                        <label for="iron">អ៊ុត</label>
                        <input type="checkbox" name="strain" id="strain">
                        <label for="strain">ប្រឡាក់ច្រេះ</label>
                    </fieldset>
                    <input type="submit" value="Submit" data-iconpos="right" data-icon="check">
                	<input type="reset" value="Reset" data-iconpos="right" data-icon="refresh">
                    
                	</div>                              
                </div>
                <div class="ui-block-b"><div class="ui-body ui-body-c">                           
                
					<div class="haft border"><img src="images/01.png"/>     
						<div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    </div>
                    
                    <div class="haft border"><img src="images/02.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	                
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>     
						<div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    </div>
                    
                    <div class="haft border"><img src="images/02.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	                
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>     
						<div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    </div>
                    
                    <div class="haft border"><img src="images/02.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	                
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>     
						<div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    </div>
                    
                    <div class="haft border"><img src="images/02.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	                
                    </div>

                
                </div></div>
                <div class="ui-block-c"><div class="ui-body ui-body-c">
                
										<div class="haft border"><img src="images/01.png"/>     
						<div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    </div>
                    
                    <div class="haft border"><img src="images/02.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	                
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>     
						<div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    </div>
                    
                    <div class="haft border"><img src="images/02.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	                
                    </div>
                    
                    					<div class="haft border"><img src="images/01.png"/>     
						<div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    </div>
                    
                    <div class="haft border"><img src="images/02.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	                
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>     
						<div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    </div>
                    
                    <div class="haft border"><img src="images/02.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	
                    
                    </div>
                    
                    <div class="haft border"><img src="images/01.png"/>
                    <div class="haft"><input type="number"  name="tel-2" id="tel-2" value="" ></div>
                        <div class="haft">
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a>
                            <a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a>
                        </div>                    	                
                    </div>

                </div></div>
            </div><!-- /grid-b -->

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
