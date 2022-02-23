
<html>
<head>
<META Http-Equiv="Cache-Control" Content="no-cache"/>
<META Http-Equiv="Pragma" Content="no-cache"/>
<META Http-Equiv="Expires" Content="0"/>
<meta charset="utf-8">
<title> index</title>
<link rel="stylesheet"
type="text/css"
href="css/sttyle.css">
<script>
 function preventBack(){
	 window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onclick=function()
	{null};
</script>
</head>
<body >
<div id="container">
<header><table border="4px" color="white"><tr><td>
<img src="images/b2.jpg" height="50px"width="150px"/>
</td></br><td><img src="images/33.png" width="1050" height="70px"/></td>
<td><img src="images/b4.jpg" height="70px" width="150px"/></td></tr></table>
</header>
	<?php include'links.php';
	?>
	</div>
	<div id="main">
	<div id="sidebar1">
	
            </br>
	<div id="selectid">
<form method="post" action="Searchavaliablebus.php" target="myframe">
	
	<img src="images/29.jpg"/>
<p><b><?php echo htmlspecialchars($lang['passenger']);?></b></p>
    <p><b><?php echo htmlspecialchars($lang['sourse']);?>:</b>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cc" required="required">
<option></option>
	<option>Bahir Dar</option>
</select><p></b></br>
<p><b><?php echo htmlspecialchars($lang['desti']);?>:
	<select name="ccc" required="required">
  <option></option>
<option>Adiss Abeba</option>
<option>Gondar</option><option>Dbre Markos</option></option><option>Mekele</option><option>Alefa</option>
<option>Takusa</option><option> Weldya</option><option> Manbuck</option><option> Dessie</option>
<option> Enjbara</option><option> Kosober</option><option> Kesa</option><option> Tilili</option><option> Burie</option>
<option> Mankusa</option><option> Finote Seleam</option><option> Jiga</option><option> Yechereka</option><option> Denbecha</option>
<option> Amanual</option><option> Chemoga</option><option> Amber</option><option> Lomamie</option><option> Wejel</option>
<option> Dejen</option><option> Gaynt</option><option> Woldya</option><option> Estie</option><option> Nekemt</option>
<option> Gmijabet</option><option> Dilamo</option><option> Delego</option><option>Bichena</option><option> Lalibela</option>
<option>Washira</option><option>Debre Brhan</option></br></br>
<option>Metema</option></select><p></br>
<b><?php echo htmlspecialchars($lang['lev']);?>:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="level" required="required">
  <option></option>
<option>Level 1</option>
<option>Level 2</option>
<option>Level 3</option>
</select></br></br>	
<div id="btnof">
<input type="submit" name="search"value="<?php echo htmlspecialchars($lang['search']);?>"/>
<input type="reset" name="Button1"value="<?php echo htmlspecialchars($lang['reset']);?>"/>
</div>
</form>
</div>
<style>
#assocation{
  text-align:center;
  width:50%;
  font-size:18px;
  opacity:0.9;
  font-family:Cambria;
  padding-top:48px;
  
  }
#assocation ul {
 margin:0;
 padding:3;
 list-style:none;
 position:relative;
 margin-left:20px;
 background:#BCC6CC;
 width:240px;
}
#assocation ul li a{
 display:block;
 padding:10px;
 text-decoration:none;
 width:240px;
 color:black;

}
#assocation ul:after {
content:"";clear: both;
display:block;
	}
#assocation ul li {
margin-right:1px;
float:left;
list-style:none;

	 }
#assocation ul li:hover{
background-color:white;
 width:240px;

		}
#assocation ul li a:hover{
color:black;
		}
</style>
</head>
	<div id="assocation">
	<ul>
	<li><a href="generalassoinfo.php"target="myframe"><?php echo htmlspecialchars($lang['ass']);?></a></li>
	</ul>
	<ul>
	<li><a href="level1.php"target="myframe"><?php echo htmlspecialchars($lang['level1']);?></a></li>
	</ul>
	<ul>
	<li><a href="level2.php"target="myframe"><?php echo htmlspecialchars($lang['level2']);?></a></li>
	</ul>
	<ul>
	<li><a href="level3.php"target="myframe"><?php echo htmlspecialchars($lang['level3']);?></a></li>
	</ul>
</div>
	</div>
	<div id="sidebar2">
			<?php 
			include 'timecalendar.php';
			?> <br/></br>            
<div id="marq"><table border="0px"><tr><td>
<object bgcolor="#BCC6CC"width="850" height="168">
  <param name="movie" value="project.swf" />
  <embed bgcolor="#BCC6CC"src="project.swf"
         quality="high"
         type="application/x-shockwave-flash"
         width="270"
         height="166"
          />
</object>
 </td></tr></table></div>
 </br>
	<?php 
	include 'indeximage.php';
	?>
	</div>
	<div id="column1"> 
	<?php 
	include 'iframforindex.php';
	?>
	</div>
	</div>
	</body>
    <footer>
	<?php 
	include 'footer.php';
	?>
	</footer>
</html>