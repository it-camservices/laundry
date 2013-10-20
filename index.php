<?php include_once("include/link-header.php"); ?>
<title>Welcome To Modern Launtry .::. The first one of the best services of launtry in cambodia</title>
</head>

<div data-role="page" class="jqm-demos" data-quicklinks="true">

	<div data-role="header" data-theme="a">
    <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>    
    <center><h1>Welcome To Modern Laundry</h1></center>
    <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a>
    </div>
    
	<div data-role="content">
   
   <table data-role="table" id="table-custom-2" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="d" data-column-btn-text="Columns to display..." data-column-popup-theme="c">
         <thead>
           <tr class="ui-bar-d">
             <th>លេខសំគាល់</th>
             <th data-priority="2">បោក</th>
             <th data-priority="3">អ៊ុត</th>
             <th data-priority="4">បត់</th>
             <th data-priority="5">លុយកក់</th>
             <th data-priority="6">លុយនៅសល់</th>
             <th data-priority="1">សរុប</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <th>500</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>1,100</td>
             <td>1,000</td>
             <td>2,1000</td>
           </tr>
           <tr>
             <th>501</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>64</td>
           </tr>
           <tr>
             <th>502</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>87</td>
           </tr>
           <tr>
             <th>503</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>87</td>
           </tr>
           <tr>
             <th>504</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>87</td>
           </tr>
           <tr>
             <th>505</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>74</td>
           </tr>
           <tr>
             <th>506</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>122</td>
           </tr>
           <tr>
             <th>507</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>72</td>
           </tr>
           <tr>
             <th>508</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>85</td>
           </tr>
           <tr>
             <th>509</th>
             <td>OK</td>
             <td>OK</td>
             <td>OK</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>78</td>
           </tr>
         </tbody>
       </table> 
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
