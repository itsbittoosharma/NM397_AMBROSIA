<!DOCTYPE html>
<html>
<head>    
<meta content="Department of Space, Indian Space Research Organisation (ISRO), National Remote Sensing Centre (NRSC), Indian Remote Sensing Satellites (IRS), Indian Earth Observation Visualisation, Resourcesat ,Cartosat, LISSIII, AWiFS, High Resolution Data, NRSC Data Centre (NDC), Free data, open data, data download, Spatial data, IRS, ISRO, NRSC, EO, data archive, bhuvan, NOEDA, NRSC Open EO Data Archive, Ortho, Elevation data, Thematic Services, Weather Services, Ocean Services, Collaboration, 2D, 3D, Pocket Bhuvan, Bhuvan, Visualisation, Geoportal, Map, Geospatial data, LISSIV, DEM, flood, hazard, drought, forest fire, India, Land Cover Map, Land Use Map, Remote Sensing Data, Digital Elevation Model, DEM, High Resolution Satellite Data, Geospatial Data Download, Free Maps, Flood Mapping India, Historical Flood Maps, Flood Inundation, Active Forest Fire, Flood Hazard Map, Flood Hazard Analysis, Free GIS Data, OGC web serivces, Open GIS Data, Free GIS Serivces India, Free GIS API, Archive data, crowd sourcing, add GIS data, online shapefile creation" name="keywords" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Bhuvan | ISRO's Geoportal | Gateway to Indian Earth Observation</title>
<link rel="stylesheet" href="theme/stylejq.css" type="text/css"/>   
	<link rel="stylesheet" href="theme/style.css" type="text/css"/>  
	<link rel="stylesheet" href="theme/chosen.css" type="text/css" /> 
		<link rel="stylesheet" href="css_ql/img_ql.css" type="text/css" /> 
	<link rel="stylesheet" href="css_ql/styleql.css" type="text/css"/>
	
	<style type="text/css"> 
	
		body{margin-left:0;margin-top:0;margin-right:0}
		#map{border:1px solid ##424242} 

		div.olControlZoom {
			position: absolute;
			top: 8px;
			left: 8px;
			background: rgba(255,255,255,0.4);
			border-radius: 4px;
			padding: 2px;
		}
		
		div.olControlZoom a {
			display: block;
			margin: 1px;
			padding: 0;
			color: white;
			font-size: 18px;
			font-family: 'Lucida Grande', Verdana, Geneva, Lucida, Arial, Helvetica, sans-serif;
			font-weight: bold;
			text-decoration: none;
			text-align: center;
			height: 22px;
			width:22px;
			line-height: 19px;
			background: #036; /* fallback for IE - IE6 requires background shorthand*/
			background: rgba(0, 60, 136, 0.5);
			filter: alpha(opacity=80);
		}
		
		div.olControlZoom a:hover {
			background:  #036; /* fallback for IE */
			background: rgba(0, 60, 136, 0.7);
			filter: alpha(opacity=100);
		}

		a.olControlZoomIn {
			border-radius: 4px 4px 0 0;
		}
		
		a.olControlZoomOut {
			border-radius: 0 0 4px 4px;
		}
		
		#mapnav{margin:1;padding:2px 2px;position:absolute;line-height:1.25em;top:0.5em;right:.25em;z-index:4000;text-align:center;text-decoration:none;margin-bottom:6px}
		
		.glow {
		  font-size: 12px;
		  color: #000;
		  text-align: center;
		  -webkit-animation: glow 3s ease-in-out infinite alternate;
		}

		@-webkit-keyframes glow {
		  from {
			text-shadow: 0 0 10px #ff0, 0 0 20px #ff0, 0 0 30px #ff0, 0 0 40px #ff0;
		  }
		
	
		.jssora03l, .jssora03r {
			display: block;
			position: absolute;
			/* size of arrow element */
			width: 35px;
			height: 55px;
			cursor: pointer;
			background: url(img_ql/a10.png) no-repeat;
			overflow: hidden;
		}
		.jssora03l { background-position: -23px -33px; }
		.jssora03r { background-position: -63px -33px; }
		.jssora03l:hover { background-position: -143px -33px; }
		.jssora03r:hover { background-position: -303px -33px; }
		.jssora03l.jssora03ldn { background-position: -263px -33px; }
		.jssora03r.jssora03rdn { background-position: -303px -33px; }
		
		

		
	</style>   
</head>
<body onload="init()">
	<div id="main">
		<div id="banner">
		<table width="100%" border="0" cellspacing="0" cellpadding="0"  height="60px">
			<tr>
				<td width="52%" height="60px" valign="top">
					<a href='https://bhuvan.nrsc.gov.in/bhuvan_links.php'>
						<img src="css_ql/transparent.png" class='bg-bhuvan_viewer3t3'  style='float:left; padding-left:5px;  vertical-align:middle'>
					</a>
				</td>               
				<td width="30%" height="50px"></td>
				<td width="52%" height="60px" valign="top">
					<img border=0 src="css_ql/transparent.png"   class="bg-bhuvan_viewer3t2" style='float:right; padding-right:5px; vertical-align:middle'>
				</td>               
			</tr>
		</table>
		</div>
	
		<div id="bannerstrip">
		<table width="100%" height="25px">
		<tr bgcolor="#6495ED">
			<td width="70%">
				<marquee behavior="alternate" width="100%" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><b><span style="color: yellow;font-size: 12px;text-align: center;-webkit-animation: glow 3s ease-in-out infinite alternate;text-shadow: 0 0 10px #f00, 0 0 20px #f00, 0 0 30px #f00, 0 0 40px #f00, 0 0 50px #f00, 0 0 60px #f00, 0 0 70px #f00;">Assam Floods - Space Based Inputs:</span> Near Real-time <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" title='Near Real-time Flood Mapping' style="font-family: Arial; font-size: 12px; color: white" target='_blank' >Flood</a>/<a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=cyclone" title='Near Real-time Cyclone Mapping' style="font-family: Arial; font-size: 12px; color: white" target='_blank' >Cyclone</a> Mapping, <a  href="https://bhuvan-app3.nrsc.gov.in/scsrunoff/runoffviewer.php" title='Runoff (PAN India)' style="font-family: Arial; font-size: 12px; color: white" target='_blank' >Runoff (PAN India)</a> and <a href="updates/assamflood/index.html" title='Flood Progression and Recession' style="font-family: Arial; font-size: 12px; color: white" target='_blank'>Flood Progression and Recession</a></b></marquee>
			</td>
			<td width="30%">
				<table cellpadding="0px" cellspacing="0px" border="0" style="float:right; padding-top:2px; vertical-align:middle; height:100%;font-family: Arial; font-size: 16px; color: white">
				<tr bgcolor="#6495ED">
					<td><b><a href="https://www.nrsc.gov.in" title='NRSC' style="font-family: Arial; font-size: 12px; color: white" target='_blank' >NRSC</a>&nbsp;|&nbsp;</b></td>
					<td><b><a href="https://bhuvan.nrsc.gov.in/geonetwork_data/index.php" title='Search' style="font-family: Arial; font-size: 12px; color: white" target='_blank' >Search</a>&nbsp;|&nbsp;</b></td>
					<td><b><a href="https://bhuvan-app1.nrsc.gov.in/2dresources/bhuvanstore.php" title='Store' style="font-family: Arial; font-size: 12px; color: white" target='_blank' >Bhuvan Store</a>&nbsp;|&nbsp;</b></td>
					<td><b><a href="https://bhuvan-app1.nrsc.gov.in/collaboration/" title='Collaborators' style="font-family: Arial; font-size: 12px; color: white" target='_blank'>Bhuvan Collaborators</a>&nbsp;</b></td>										
				</tr>
				</table>
			</td>
		</tr>
		</table>
		</div>
		<br>
		<div id="contentdiv">
		<div id="maincontainer">
		<div id="bhuvandiv" align="center">
			
			<div id="mainappscontainer" style='background-color:#E6E6E6; border: 2px solid #6E6E6E;'>
			<div  class="mainapps" id="pdsdiv" align="center">
			<h6 style="font-family:Arial,Helvetica,sans-serif; margin:0;" align="middle"><i>------------&nbsp;&nbsp;Visualisation & Free Download&nbsp;&nbsp;------------</i></h6>
				<ul id="quad">
					<a href="https://bhuvan-app1.nrsc.gov.in/bhuvan2d/bhuvan/bhuvan2d.php" target="_blank">
					<li>
					<img src="css_ql/transparent.png"  class="bg-2d"  style='width:45px; height:45px;'>
					<p align="center">Bhuvan-2D</p>
					</li>
					</a>
					
					<a href="https://bhuvan-app1.nrsc.gov.in/globe/3d.php" target="_blank">
					<li>
					<img src="css_ql/transparent.png"  class="bg-3D"  style='width:45px; height:45px;'>
					<p align="center" >Bhuvan-3D</p>
					<!--<i><span style="cursor:pointer;font-family:Arial, Helvetica, sans-serif; font-size:11px; color: #000000;font-weight:normal" onclick="window.open('https://bhuvan.nrsc.gov.in/globe')"><u> Plugin Free </u>&nbsp;|&nbsp;</span><span style="cursor:pointer;font-family:Arial, Helvetica, sans-serif; font-size:11px; color: #000000;font-weight:normal" onclick="SGStart()"><u>Plugin</u></span></p></center></i>-->
					</li>
					</a>
				
					<a href="https://bhuvan-app3.nrsc.gov.in/data" target="_blank">
					<li>
					<img src="css_ql/transparent.png"  class="bg-download2"  style='width:45px; height:45px;'>
					<center><p style="padding-top:10px"  >Open Data Archive<br/>
					<span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color: #000000;font-weight:normal"><i>Free Download</i></span></p></center>
					</li>
					</a>

					<a href="https://www.nrsc.gov.in/EO_Earth_Objective" target="_blank">
					<li>
					<img src="css_ql/transparent.png"  class="bg-cloud"  style='width:45px; height:45px;'>
					<center><p style="padding-top:10px" >Climate & Environment<br/>
					<span align = "center" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color: #000000;font-weight:normal"><i>EO derived Products</i></span></p></center>
					</li>
					</a>
				</ul>

				<h6 style="font-family:Arial,Helvetica,sans-serif; margin:0;" align="middle"><i>------------&nbsp;&nbsp;Maps & OGC services&nbsp;&nbsp;------------</i></h6>
				<ul id="quad">
					<a href="https://bhuvan-app1.nrsc.gov.in/thematic" target="_blank">
					<li>
					<img src="css_ql/transparent.png"  class="bg-Thematic"  style='width:45px; height:45px;'>
					<p>Thematic Services</p>
					</li>
					</a>

					<a href="https://bhuvan-app1.nrsc.gov.in/bhuvandisaster" target="_blank">
					<li>
					<img src="css_ql/transparent.png"  class="bg-disaster_services"  style='width:45px; height:45px;'>
					<p>Disaster Management Support Services</p>
					</li>
					</a>

					<a href="https://bhuvan-app1.nrsc.gov.in/bhuvan2d/bhuvan/bhuvan2d.php?toolid=ocean" target="_blank">
					<li>
					<img src="css_ql/transparent.png"  class="bg-sea"  style='width:45px; height:45px;'>
					<p>Ocean Services</p>
					</li>
					</a>
		
					<a href="#" style="cursor:default"> 
					<li>
					<img src="css_ql/transparent.png"  class="bg-map"  style='width:45px; height:45px;'>
					<center><p style="padding-top:10px" >Create a Map / GIS<br/>
					<span style="cursor:pointer;font-family:Arial, Helvetica, sans-serif; font-size:11px; color: #000000;font-weight:normal"><i> <span onclick="window.open('https://bhuvan-mapper1.nrsc.gov.in')"><u>My Map</u></span>&nbsp;|&nbsp;<span onclick="window.open('https://bhuvan-app1.nrsc.gov.in/gisviewer')"><u>My GIS</u></span></i></span></p></center>
					</li>
					</a>
				</ul>
			</div>	
			</div>
			
			<div id="governancecontainer" style='background-color:#B7C7F5; border: 2px solid #2E64FE;'>
			<div class="scrollerapps" id="governanceappsdiv" align="left" >	
			<h2>Governance/Central Ministries &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bhuvan-app1.nrsc.gov.in/sitemap/" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; color:red;">g-Governance Dashboard</a></h2>
			<div  style="width: 100%;">	

				<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 960px; height: 90px; overflow: hidden;">
					<!-- Slides Container -->
					<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 95%; height: 90px; overflow: hidden; text-align:center; left:0; right:0; margin-left:auto; margin-right:auto;">
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/culture_monuments/" target="_blank"><img src="css_ql/transparent.png"  class="bg-minar"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/culture_monuments/" target="_blank">Monuments</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/chaman/" target="_blank"><img src="css_ql/transparent.png"  class="bg-horticulture"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/chaman/" target="_blank">Chaman</a></div>
						
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/hailstorm/" target="_blank"><img src="css_ql/transparent.png"  class="bg-grass"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/hailstorm/" target="_blank">Hailstorm</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/pmksy" target="_blank"><img src="css_ql/transparent.png"  class="bg-pmksy"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/pmksy" target="_blank">PMKSY</a></div>
												
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/mowr_ganga/" target="_blank"><img src="css_ql/transparent.png"  class="bg-cleanganga"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/mowr_ganga/" target="_blank">Clean Ganga</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/aibp/aibp.php" target="_blank"><img src="css_ql/transparent.png"  class="bg-sat_aibp"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/aibp/aibp.php" target="_blank">Sat-AIBP</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/fews/" target="_blank"><img src="css_ql/transparent.png"  class="bg-disaster_services"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/fews/" target="_blank">Flood Warning</a></div>

						<div><a href="https://bhuvan-app1.nrsc.gov.in/nfvas/" target="_blank"><img src="css_ql/transparent.png"  class="bg-disaster_services"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/nfvas/" target="_blank">Flood Vulnerability Index - India</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/social_justice" target="_blank"><img src="css_ql/transparent.png"  class="bg-demographics"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/social_justice" target="_blank">Census data</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/deltas/" target="_blank"><img src="css_ql/transparent.png"  class="bg-deltas_india"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/deltas/" target="_blank">Deltas of India</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/moef/" target="_blank"><img src="css_ql/transparent.png"  class="bg-moef"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/moef/" target="_blank">Environment & Forest</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/envis" target="_blank"><img src="css_ql/transparent.png"  class="bg-envis"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/envis" target="_blank">ENVIS</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/moef_cris" target="_blank"><img src="css_ql/transparent.png"  class="bg-cris"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/moef_cris" target="_blank">CRIS</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/flycatchers" target="_blank"><img src="css_ql/transparent.png"  class="bg-flycatchers"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/flycatchers" target="_blank">Flycatchers Distribution</a></div>
							
						<div><a href="https://bhuvan-app1.nrsc.gov.in/island/mha_islands.php" target="_blank"><img src="css_ql/transparent.png"  class="bg-island"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/island/mha_islands.php" target="_blank">Island Information</a></div>
							
						<div><a href="https://bhuvan-app1.nrsc.gov.in/mhrd_ncert" target="_blank"><img src="css_ql/transparent.png"  class="bg-school"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/mhrd_ncert" target="_blank">School Bhuvan</a></div>
							
						<div><a href="https://bhuvan-app1.nrsc.gov.in/toll" target="_blank"><img src="css_ql/transparent.png"  class="bg-tollgate"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/toll" target="_blank">Toll Information</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/gwis/" target="_blank"><img src="css_ql/transparent.png"  class="bg-bore_pump"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/gwis/" target="_blank">Ground Water</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/pipeline/" target="_blank"><img src="css_ql/transparent.png"  class="bg-pipeline"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/pipeline/" target="_blank">Pipeline Grid</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/iwmp/" target="_blank"><img src="css_ql/transparent.png"  class="bg-watershed"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/iwmp/" target="_blank">Watersheds</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/urbanframesurvey/" target="_blank"><img src="css_ql/transparent.png"  class="bg-urban_growth"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/urbanframesurvey/" target="_blank">Urban Survey</a></div>
						
						<div><a href="https://bhuvan-app1.nrsc.gov.in/postal" target="_blank"><img src="css_ql/transparent.png"  class="bg-post"  style='width:45px; height:45px;'></a><br>
						<a href="https://bhuvan-app1.nrsc.gov.in/postal" target="_blank">Postal</a></div>
						
						
						
					</div>

					<!-- Arrow Left -->
					<span u="arrowleft" class="jssora03l" style="top: 123px; left: 2px;"></span>
					<!-- Arrow Right -->
					<span u="arrowright" class="jssora03r" style="top: 123px; right: 2px;"></span>
					<!--#endregion Arrow Navigator Skin End -->
				</div>
			</div>
			</div>
			
			
			</div>
			
			<div id="applicationscontainer" style='background-color:#F6D8CE; border: 2px solid #F78181;'>
			<div id="applsectors" align="left">
				<h2 style="text-align:left; border-bottom: 1px solid #CCCCCC; margin: 0px;">Application Sectors</h2>
				<div style="background-color:#F2E0F7">
				<h6 style="font-family:Arial,Helvetica,sans-serif; margin:0;" align="justify">
				<i>Collaborative applications - Platform to share your data and create governance applications</i>
				<table width="100%">
				<tr>
				<td>
				<h2 style="text-align:left; border-bottom: 1px solid #CCCCCC;"><a href="#" onclick="getAppsList('Agriculture')">Agriculture</a></h2>
				<a href="#" onmouseover="this.click();" onclick="getAppsList('Agriculture')"><img id="Agricultureimg" src="css_ql/transparent.png"  class="bg-plantation"  style='width:45px; height:45px;'></a>
				</td>
				
				<td>
				<h2 style="text-align:left; border-bottom: 1px solid #CCCCCC;"><a href="#" onclick="getAppsList('Forestry')">Forestry</a></h2>
				<a href="#" onmouseover="this.click();" onclick="getAppsList('Forestry')"><img id="Forestryimg" src="css_ql/transparent.png"  class="bg-forestry_hp"  style='width:45px; height:45px;'></a>
				</td>
				
				<td>
				<h2 style="text-align:left; border-bottom: 1px solid #CCCCCC;"><a href="#" onclick="getAppsList('E-Governance')">E-Governance</a></h2>
				<a href="#" onmouseover="this.click();" onclick="getAppsList('E-Governance')"><img id="E-Governanceimg" src="css_ql/transparent.png"  class="bg-planning"  style='width:45px; height:45px;'></a>
				</td>
				
				<td>
				<h2 style="text-align:left; border-bottom: 1px solid #CCCCCC;"><a href="#" onclick="getAppsList('Irrigation')">Water</a></h2>
				<a href="#" onmouseover="this.click();" onclick="getAppsList('Irrigation')"><img id="Irrigationimg" src="css_ql/transparent.png"  class="bg-sat_aibp"  style='width:45px; height:45px;'></a>
				</td>
				
				<td>
				<h2 style="text-align:left; border-bottom: 1px solid #CCCCCC;"><a href="#" onclick="getAppsList('Tourism')">Tourism</a></h2>
				<a href="#" onmouseover="this.click();" onclick="getAppsList('Tourism')"><img id="Tourismimg" src="css_ql/transparent.png"  class="bg-tourism"  style='width:45px; height:45px;'></a>
				</td>
				
				<td>
				<h2 style="text-align:left; border-bottom: 1px solid #CCCCCC;"><a href="#" onclick="getAppsList('Urban')">Urban</a></h2>
				<a href="#" onmouseover="this.click();" onclick="getAppsList('Urban')"><img id="Urbanimg" src="css_ql/transparent.png"  class="bg-building"  style='width:45px; height:45px;'></a>
				</td>
				
				<td>
				<h2 style="text-align:left; border-bottom: 1px solid #CCCCCC;"><a href="#" onclick="getAppsList('Rural')">Rural</a></h2>
				<a href="#" onmouseover="this.click();" onclick="getAppsList('Rural')"><img id="Ruralimg" src="css_ql/transparent.png"  class="bg-crowd"  style='width:45px; height:45px;'></a>
				</td>
				
				</tr>
				</table>			
				</h6>
				</div>
			</div>
			
			
			
			<div class="appslist" id="appslistselect" align="left">
				<div style="background-color:#BCA9F5">
				</div>
			</div>
			
			<div class="otherslist" id="specialpdsdiv" align="left">	
				
				<h2>Special Applications</h2>
				<div style="background-color:#F5ECCE">
				<!-- <h6 style="font-family:Arial,Helvetica,sans-serif; margin:0;" align="justify"><i>Bhuvan is also extending its services for rehablitation, reconstruction activities, data support during disasters</i></h6> -->
<ul id='quad'><li><a href='https://bhuvan.nrsc.gov.in/geonetwork_data/index.php' target='_blank'><img src="css_ql/transparent.png" class='bg-discover'  style='width:45px; height:45px;'></a><a href='https://bhuvan.nrsc.gov.in/geonetwork_data/index.php' target='_blank'>Data Discovery</a><p></p></li><li><a href='https://bhuvan-app1.nrsc.gov.in/thematic_dashboard' target='_blank'><img src="css_ql/transparent.png" class='bg-Thematic'  style='width:45px; height:45px;'></a><a href='https://bhuvan-app1.nrsc.gov.in/thematic_dashboard' target='_blank'>Decision Support Dashboard</a><p></p></li><li><a href='https://bhuvan-app3.nrsc.gov.in/nices/' target='_blank'><img src="css_ql/transparent.png" class='bg-nices'  style='width:45px; height:45px;'></a><a href='https://bhuvan-app3.nrsc.gov.in/nices/' target='_blank'>Hydrological Products</a><p></p></li><li><a href='https://bhuvan-app1.nrsc.gov.in/imagegallery/bhuvan.html' target='_blank'><img src="css_ql/transparent.png" class='bg-imagegallery'  style='width:45px; height:45px;'></a><a href='https://bhuvan-app1.nrsc.gov.in/imagegallery/bhuvan.html' target='_blank'>Image Gallery</a><p></p></li><li><a href='https://bhuvan-app1.nrsc.gov.in/international_disaster' target='_blank'><img src="css_ql/transparent.png" class='bg-Intdisaster'  style='width:45px; height:45px;'></a><a href='https://bhuvan-app1.nrsc.gov.in/international_disaster' target='_blank'>International Disasters</a><p></p></li><li><a href='https://bhuvan-app1.nrsc.gov.in/multilingual' target='_blank'><img src="css_ql/transparent.png" class='bg-multi'  style='width:45px; height:45px;'></a><a href='https://bhuvan-app1.nrsc.gov.in/multilingual' target='_blank'>Multilingual Translation</a><p></p></li><li><a href='https://bhuvan-mapper1.nrsc.gov.in/onlineshp' target='_blank'><img src="css_ql/transparent.png" class='bg-shapefile'  style='width:45px; height:45px;'></a><a href='https://bhuvan-mapper1.nrsc.gov.in/onlineshp' target='_blank'>Online Shapefile Creation</a><p></p></li><li><a href='https://bhuvan-app1.nrsc.gov.in/scatsat3d/viewer.php' target='_blank'><img src="css_ql/transparent.png" class='bg-oscat'  style='width:45px; height:45px;'></a><a href='https://bhuvan-app1.nrsc.gov.in/scatsat3d/viewer.php' target='_blank'>OSCAT-3D</a><p></p></li><li><a href='https://bhuvan-app1.nrsc.gov.in/vehicletracking' target='_blank'><img src="css_ql/transparent.png" class='bg-vehicle_track'  style='width:45px; height:45px;'></a><a href='https://bhuvan-app1.nrsc.gov.in/vehicletracking' target='_blank'>Smart Tracking</a><p></p></li><li><a href='https://bhuvan-suvidha1.nrsc.gov.in' target='_blank'><img src="css_ql/transparent.png" class='bg-suvidha'  style='width:45px; height:45px;'></a><a href='https://bhuvan-suvidha1.nrsc.gov.in' target='_blank'>Suvidha</a><p></p></li></ul>				</div>
			</div>


			</div>
		</div><!--bhuvandiv-->
		
		<div id="aboutdivcontainer" style='background-color:#E1EBE8; border: 2px solid #A6CFC4;'>
		<div id="aboutdiv">
		
			<div id="stateportals">
				<h2 style="text-align:left">State Portals/Applications <span style='font-family:Verdana; font-size:10px; color:#DF3A01; font-weight:bold;'>(Click on any State)</span></h2>
				<div id="statemapdiv" title="Click on any State to list State specific Applications">
					<div id="statemap" style="vertical-align:top; width:100%; height:100%" class="smallmap"></div>
				</div>
			
				<div id="statelistdiv" style="background-color:#CED8F6; border: 1px solid #2E64FE; margin-top:2px;">
				<center>
<label style='display:inline-block; width:110px; font-family:Verdana; font-size:12px; color:#084080; font-weight:bold;'>State</label><select data-placeholder='Select State...' class='chosen-select' tabindex='4' style='width:180px;' id='statelist' onchange='getStateAppsList(this.value);'><option value='AP'>ANDHRA PRADESH</option><option value='AR'>ARUNACHAL PRADESH</option><option value='AS'>ASSAM</option><option value='BR'>BIHAR</option><option value='CH'>CHHATTISGARH</option><option value='DL'>DELHI</option><option value='GA'>GOA</option><option value='GJ'>GUJARAT</option><option value='HR'>HARYANA</option><option value='HP'>HIMACHAL PRADESH</option><option value='JK'>JAMMU AND KASHMIR</option><option value='JH'>JHARKHAND</option><option value='KA'>KARNATAKA</option><option value='KL'>KERALA</option><option value='MP'>MADHYA PRADESH</option><option value='MH'>MAHARASHTRA</option><option value='MN'>MANIPUR</option><option value='ML'>MEGHALAYA</option><option value='MZ'>MIZORAM</option><option value='NL'>NAGALAND</option><option value='OR'>ODISHA</option><option value='PB'>PUNJAB</option><option value='RJ'>RAJASTHAN</option><option value='SK'>SIKKIM</option><option value='TN'>TAMIL NADU</option><option value='TS'>TELANGANA</option><option value='TR'>TRIPURA</option><option value='UK'>UTTARAKHAND</option><option value='UP'>UTTAR PRADESH</option><option value='WB'>WEST BENGAL</option></select>				</center>	
				</div>
			
				<div class="scrollerapps" id="stateappsdiv" align="left" style="padding-top: 5px; border: 1px solid #2E64FE;" >	
				<div style="background-color:#E0EEFC; width: 100%;">	

					<div id="stateportalsslider">
						<div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 420px; height: 70px; overflow: hidden;">
							<!-- Slides Container -->
							<div id="stateappslist_slides" u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 95%; height: 70px; overflow: hidden; text-align:center; left:0; right:0; margin-left:auto; margin-right:auto;">
							</div>
							
							<!-- Arrow Left -->
							<span u="arrowleft" class="jssora03l" style="top: 123px; left: 2px;"></span>
							<!-- Arrow Right -->
							<span u="arrowright" class="jssora03r" style="top: 123px; right: 2px;"></span>
							<!--#endregion Arrow Navigator Skin End -->
						</div>
					</div>
				</div>
				<div id="stateportalsinfo" style="padding:1px;" >	
				</div>
			</div>

			<div id="updates" style="background-color:#A9BCF5;">
				<div class="container">
					<ul class="tabs">
						<li class="tab-link" data-tab="tab-1" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#0029A3; font-weight: bold;">Updates</li>
						<li class="tab-link current" data-tab="tab-2" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#0029A3; font-weight: bold;">Download</li>
					</ul>

					<div id="tab-1" class="tab-content current">
						<h6 align="justify" style="padding-left:10px;font-family:Arial, Helvetica, sans-serif; font-size:12px; color: green;">
						
							<li style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color: darkgreen;">Updation of Orthorectified <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=s&s=AW" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">AWiFS</a> (Jan-May:2018) and <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=s&s=L3" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">LISS-3</a> (Rabi-2018) datasets in NOEDA Portal <b style="color:red;font-size:12px">&nbsp; New</b></li>
							
							<li style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color: darkgreen;">Assam Floods - Space Based Inputs: - Near Real Time <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=flood" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Flood</a> / <a href="https://bhuvan-app1.nrsc.gov.in/disaster/disaster.php?id=cyclone" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Cyclone</a> Mapping, <a  href="https://bhuvan-app3.nrsc.gov.in/scsrunoff/runoffviewer.php" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;" target='_blank' >Runoff (PAN India)</a>, <a  href="updates/assamflood/index.html" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;" target='_blank'>Flood Progression and Recession</a> <b style="color:red;font-size:12px">&nbsp; New</b></li>
						
							<li style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color: darkgreen;"><span class="glow"><b>Bhuvan applications for COVID-19 India - </b></span><a href="https://bhuvan-app3.nrsc.gov.in/corona/" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Geo viz</a> & <a href="https://bhuvan-app3.nrsc.gov.in/corona/corona_dashboard/dashboard/dashboard.php?type=citizen" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Dashboard</a>; Citizen Reporting and Officer <a href="https://bhuvan-app3.nrsc.gov.in/corona/" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Reporting</a>; Mobile Rythu Bazar <a href="https://bhuvan-app3.nrsc.gov.in/track/smartrack/track.php" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Tracking</a>; Home Quarantine <a href="https://bhuvan-app3.nrsc.gov.in/narayanpet/" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Tracker</a> - Narayanpet Dist; Annapurana Meal centres – <a href="https://bhuvan-app3.nrsc.gov.in/meal_center/files/GHMC_Annapurna_List.pdf" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Hyderabad</a>; Amma Unavagam – <a href="https://bhuvan-app3.nrsc.gov.in/meal_center/files/GCC_Amma_Unavagam_List.pdf" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Chennai</a>; Bihar <a href="https://bhuvan-app3.nrsc.gov.in/biharcovid/" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Health</a><b style="color:red;font-size:12px">&nbsp; New</b> ... <a href="https://bhuvan.nrsc.gov.in/updates/bhuvan_14may2020.html" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Read More<a></li>
							
							<li style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color: darkgreen;"><a href="https://bhuvan-app1.nrsc.gov.in/tr_forest/" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Tripura Forest</a> Plantation Monitoring</li>
							
							<!-- <li style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color: darkgreen;">Release of <a href="https://bhuvan-app1.nrsc.gov.in/bioenergy/" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Bhuvan JAIVOORJA</a> Portal</li>

							<li style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color: darkgreen;">Updation of Orthorectified <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=s&s=AW" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">AWiFS</a> and <a href="https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=s&s=L3" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">LISS-3</a> datasets in NOEDA Portal</li>
							
							<li style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color: darkgreen;">Visualization of <a href="http://bhuvan-app1.nrsc.gov.in/imd/index.php" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">IMD Weather Products</a></li>
							
							<li style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color: darkgreen;">Visualization of <a href="http://bhuvan-app1.nrsc.gov.in/narl/index.php" target="_blank" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;">Weather Climate Environment Modelled Products</a></li> -->
							
							<li style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color: darkgreen;"><a href="https://bhuvan-app1.nrsc.gov.in/sitemap/" style="font-family:Arial,Helvetica,sans-serif; margin:0; font-size:9pt; color:#0029A3;" target="_blank">g-Governance:</a> Dashboard</li>
						
						</h6>
					</div>
					<div id="tab-2" class="tab-content">
						<h6 align="justify" style="padding-left:10px;font-family:Arial, Helvetica, sans-serif; font-size:12px">
						
							<li>Bhuvan Locate <a href="https://bhuvan-app1.nrsc.gov.in/rtv/index.html" target="_blank" style="color:black; font-weight: bold;">Android App</a> provides real time location tracking, navigation.</li>
						
							<li>Open Source repository <a href="https://bhuvan.nrsc.gov.in/codes4all/layer_stacking.zip" target="_blank" style="color:black; font-weight: bold;">Code4all: Layer Stacking</a>&nbsp;<b style="color:red;font-size:12px">New</b></li>
						
							<li><a href="https://bhuvan.nrsc.gov.in/forum/viewtopic.php?f=3&t=247" target="_blank" style="color:black; font-weight: bold;">Bhuvan User Handbook and Others </a></li>
							
							<li>Bhuvan: Point of Interest V2.0 <a href="https://bhuvan-app3.nrsc.gov.in/mobile_app/bhuvan_mobile_app.php?proj_code=118" target="_blank" style="color:black; font-weight: bold;">Android App</a> allows mapping in an easy &amp; intuitive manner.</li>
													
							<li><a href="https://bhuvan-app3.nrsc.gov.in/mobile_app/bhuvan_mobile_app.php?proj_code=116" target="_blank" style="color:black; font-weight: bold;">Mobile Bhuvan</a> - 'Locate &amp; Track' the position besides Visualizing High Resolution datasets</li> 
						</h6>
					</div>
				</div><!-- container -->
			</div>
				
			<div id="display" style="background-color:#FFFFFF;">
				<div id="mapdiv">
					<div id="mapnav">
						<div id="radio">
							<table>
								<tr>
									<td>
										<input type="radio"  id="radio1" name="radio"  onclick="map_hybrid(true, false,true,false)"/>
										<label for="radio1">Map</label>
									</td>
									<td>
									   <input type="radio" id="radio2" name="radio" onclick="map_hybrid( false, true, false, false)" />
										<label for="radio2">Sat</label>
									</td>
									<td>
										<input type="radio" id="radio3" name="radio" onclick="map_hybrid(false, true, true, false)"/>
										<label for="radio3">Hyb</label>
									</td>
									<td>
										<input type="radio" id="radio4" name="radio" onclick="map_hybrid(false, false, false, true),setpanzoombar(9);"/>
										<label for="radio4">Ter</label>
									</td>							
								</tr>
							</table>
						</div>       
					</div>
					
					<div id="map" style="vertical-align:top; width:100%; height:100%" class="smallmap"></div>
				</div>
			</div>
		</div><!--aboutdiv-->
		</div><!--aboutdivcontainer-->
		</div> <!--maincontainer-->	
		</div> <!--contentdiv-->	
		<br><br>
		<div id="push"></div>
	</div> <!--main-->	
	
	<div id="footer">
		<table width="100%" height="20px" style="margin:0px">
			<tr width="200px" style="background-color:#D2DBEC" height="20px">
				<td style="background-color:#D2DBEC; text-align:left;" height="20px">
					<span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color: #0029A3;">&nbsp;&nbsp;&#169;&nbsp;Bhuvan: ISRO/NRSC, 2019</span>&nbsp;&nbsp;&nbsp;&nbsp;<b><a href='https://bhuvan.nrsc.gov.in/forum/' style="text-decoration: underline; cursor:pointer" target='_blank'>Discussion-Forum</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<b><a href='https://fms.nrsc.gov.in/fmsexternal/' style="text-decoration: underline; cursor:pointer" target='_blank'>Feedback</b></a>&nbsp;
				</td>
				<td width="200px" height="20px" style="background-color:#D2DBEC; text-align:right;" valign="top">
					<span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color: #0029A3;" align="right">Last Updated: 15-July-2020</span> &nbsp; &nbsp; 			
				</td>
				<td width="200px" height="20px" style="background-color:#D2DBEC; text-align:right;" valign="top">
					<span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color: #0029A3;" align="right">Icons powered by Flaticon.com</span> &nbsp; &nbsp; 			
				</td>
				<td width="250px" height="20px" style="background-color:#D2DBEC; text-align:right;" valign="top">
					<b><a href="#" style="text-decoration: underline; cursor:pointer" onclick="load_video('#contactus','contactus.php','Contact Us','350','340')">Contact us</a></b> |
					<b><a href="#" style="text-decoration: underline; cursor:pointer" onclick="load_video('#terms','terms.php','Terms','450','550')">Terms</a></b>&nbsp;			
				</td>
			</tr>
		</table>
	</div>

	<div id="contactus" style="display:none"></div>
	<div id="terms" style="display:none"></div>
</body> 

<script type="text/javascript" src="OpenLayers.js"></script>
<script type="text/javascript" src="Test-Speech.js"></script>	
<script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="lib/added.js"></script>	
<script type="text/javascript" src="lib/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="lib/ql2_sprite.min.js"></script>	
<script type="text/javascript" src="lib/jssor.slider.mini.js"></script>



<script type="text/javascript">
	
	var jssor_slider2, options2;
	
	jQuery(document).ready(function ($) {
            var options1 = {
                $AutoPlay: true,                                   
                $AutoPlaySteps: 1,                                 
                $AutoPlayInterval: 0,                            	
                $PauseOnHover: 4,                               	
                $ArrowKeyNavigation: true,   			            
				$SlideEasing: $JssorEasing$.$EaseLinear,	 		
                $SlideDuration: 3000,                               
                $MinDragOffsetToSlide: 20,                          
                $SlideWidth: 120,                                   
                $SlideHeight: 90,                                	
                $SlideSpacing: 0, 					                
                $DisplayPieces: 9,                                  
                $ParkingPosition: 0,                              	
                $UISearchMode: 1,                                   
                $PlayOrientation: 1,                                
                $DragOrientation: 1,                                
				
				$ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              	
                    $ChanceToShow: 2,                               
                    $AutoCenter: 2,                                 
                    $Steps: 4                                       
                }
            };
			
			options2 = {
                $AutoPlay: true,                                   
                $AutoPlaySteps: 1,                                 
                $AutoPlayInterval: 0,                            	
                $PauseOnHover: 4,                               	
                $ArrowKeyNavigation: true,   			            
				$SlideEasing: $JssorEasing$.$EaseLinear,	 		
                $SlideDuration: 3000,                               
                $MinDragOffsetToSlide: 20,                          
                $SlideWidth: 140,                                   
                $SlideHeight: 70,                                	
                $SlideSpacing: 0, 					                
                $DisplayPieces: 3,                                  
                $ParkingPosition: 0,                              	
                $UISearchMode: 1,                                   
                $PlayOrientation: 1,                                
                $DragOrientation: 1,                                
				
				$ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              	
                    $ChanceToShow: 2,                               
                    $AutoCenter: 2,                                 
                    $Steps: 4                                       
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options1);
			jssor_slider2 = new $JssorSlider$("slider2_container", options2);
			

            //responsive code begin
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
				{
                    var w1 = document.getElementById("governanceappsdiv").offsetWidth;
					var w2 = document.getElementById("stateappsdiv").offsetWidth;
					jssor_slider1.$ScaleWidth(Math.min(w1, 1200));
					jssor_slider2.$ScaleWidth(Math.min(w2, 420));
				
				}
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
		
		 
		  
		var config = {
		'.chosen-select'           : {},
		'.chosen-select-deselect'  : {allow_single_deselect:true},
		'.chosen-select-no-single' : {disable_search_threshold:10},
		'.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
		'.chosen-select-width'     : {width:"60%"}

		}
		for (var selector in config) {
		$(selector).chosen(config[selector]);
		}


		function load_video(name,video,tit,w,h)
		{
			$(function() {
				$(name).dialog({
					autoOpen: false,
					resizable: false,
					width: w,
					height: h,
					position: [300,125],
					close: function () {  },
					zIndex: 3000,
					title: tit
				  });
				  $(name).load(video.replace(/ /g,"%20")).dialog('open');
				   
			});
		}
		
		
	</script>	
		 
  
