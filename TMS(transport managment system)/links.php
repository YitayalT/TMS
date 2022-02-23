<html>
<head>
<link rel="stylesheet"
type="text/css"
href="css/sttyle.css">
<?php include'Language/lang.php';?>
<meta charset="utf-8">
</head>
<div id="links">
	<ul>
	<li><a href="index.php"><?php echo htmlspecialchars($lang['home']);?></a>
	</li>
	<li><a href=><?php echo htmlspecialchars($lang['t']);?></a>
	<ul>
	<li><a href="aboutorganization.php"target="myframe">About Organisation</a></li>
	<li><a href="about us.php"target="myframe">About Developer</a></li>
	</ul>
	</li>
	<!--contact us start-->
	<html>
<head><style>
.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 16;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.3);
	 opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;/*britness close and open time */
	pointer-events: none;-->
	
}
.modalDialog:target {
	opacity:1;
	pointer-events: auto; /* to close*/
}

.modalDialog > div {
	width: 650px;
	position: relative;
	margin: 7% auto;
	padding: 0px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	border:4px solid red;
}
</style>
</head>
<body>
 <li><a href="#openModal"><?php echo htmlspecialchars($lang['cus']);?></a></li>
				                    <div id="openModal" class="modalDialog">
	                                   <div>
		                                 <a href="#close" title="Close"  style="color:blue;font-family:Cambria;font-size:14;text-decoration:none;color:red"><?php echo htmlspecialchars($lang['close']);?></a>
		                                    <table width="648" height="200"bgcolor="white"><tr>
								              <td colspan="2" style="color:blue;font-family:Cambria;font-size:25"><?php echo htmlspecialchars($lang['use']);?></td>
								                </tr>
	             								   <tr>
				            				         <td><img src="images/phon-img.jpeg" width="50" height="30"><?php echo htmlspecialchars($lang['office']);?>: 0582203748</td>
								                       </tr>
									                      <tr>
								                             <td><img src="images/email.jpg" width="50" height="30"><?php echo htmlspecialchars($lang['email']);?></td>
								                                 </tr>
									                                <tr>
								                                  <td><img src="images/email.jpg" width="50" height="30"><?php echo htmlspecialchars($lang['man']);?>: 0918021958 </td>
								                               </tr>
									                        <tr>
								                         <td><img src="images/pobox.jpeg" width="50" height="30">Po Box 554 Bahir Dar</td>
    					                             </tr>
							                      <tr><td> <i><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlspecialchars($lang['ass']);?></i></b></td></tr>
							              </table>
										  <table bgcolor="#ccc"width="648">
										  <td><b><?php echo htmlspecialchars($lang['assname']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b><?php echo htmlspecialchars($lang['manname']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b><?php echo htmlspecialchars($lang['phone']);?></b></td></tr>
										 <td><?php echo htmlspecialchars($lang['tana']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['mizan']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>0918715962</td></tr>
										 <td><?php echo htmlspecialchars($lang['tiret']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['seble']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>0918720499</td></tr>
										 <td><?php echo htmlspecialchars($lang['hibr']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['mahrie']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>0918779159</td></tr>
										 <td><?php echo htmlspecialchars($lang['blen']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['melkam']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>0918560386</td></tr>
										 <td><?php echo htmlspecialchars($lang['red']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['mersha']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td>0918020084</td></tr>
										 <td><?php echo htmlspecialchars($lang['habesha']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['ashenafie']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>0974500202</td></tr>
										 <td><?php echo htmlspecialchars($lang['abayzuria']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['belay']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>0918766982</td></tr>
					
														 <td><?php echo htmlspecialchars($lang['abay']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['abayneh']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>0918340151</td></tr>
										 <td><?php echo htmlspecialchars($lang['tisabay']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['asnka']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td>0918027965</td></tr>
										 <td><?php echo htmlspecialchars($lang['alemsaga']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['andamlak']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>0918719262</td></tr>
										 <td><?php echo htmlspecialchars($lang['zenbaba']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($lang['kumander']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>0930296554</td></tr>
					 
										 </table>
	                                    </div>
                                    </div>
									</body>
									</html>
									<!--contact uc end-->
	
	<li><a href="form1/Requestform.php"target="myframe"><?php echo htmlspecialchars($lang['req']);?></a></li>
	<li><a href="#"><?php echo htmlspecialchars($lang['view']);?></a>
	<ul>
	<li><a href="Viewindividualrequest.php"target="myframe"><?php echo htmlspecialchars($lang['response']);?></a></li>
	<li><a href="uploadddd.php"target="myframe"><?php echo htmlspecialchars($lang['viewnotice']);?></a></li>
	<li><a href="ViewSchduleRequest.php"target="myframe"><?php echo htmlspecialchars($lang['schedule']);?></a></li>
	</ul>
	</li>
	<li><a href="login.php"target="myframe"><?php echo htmlspecialchars($lang['login']);?></a></li>
	<li><a><?php echo htmlspecialchars($lang['help']);?></a>
	<ul>
	<li><a href="help/vediohelp.php"target="myframe"><?php echo htmlspecialchars($lang['video']);?></a></li>
	<li><a href="help/help.php"target="myframe"><?php echo htmlspecialchars($lang['text']);?></a></li>
	</ul>
	</li>
	<style>
	.lang a{
		
	color:white;
text-decoration:none;	
	}
	</style>
	<div class="lang">
	<a href ="index.php? lang=en">English &nbsp;||</a> <a href ="index.php? lang=it">አማርኛ </a>
	</div>
	</ul>
	</html>