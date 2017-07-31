
<!DOCTYPE html>
<?php require_once __DIR__ . '/php-graph-sdk-5.0.0/src/Facebook/autoload.php'; ?>
<html>
    <head>
        <style type="text/css">
            div.whole{
                margin-top: 5px;
				background-color: #D3D3D3;
				width: 500px;
                margin-left: auto;
                margin-right: auto;
            }
            div.header{
                margin: auto;
                text-align: center;
                margin-top: 20px;
            }
			.blue
			{
				background-color: #D3D3D3;
				width: 500px;
				
				
			}
			.abra
			{
				
				border:1px solid black;
				background-color: #D3D3D3;
				width:40%;
				
				border-collapse:collapse;
				
			}
            h1.title{
                margin: auto;
            }
			.hai{
				border:1px solid black;
				border-collapse:collapse;
			}
			#aba
			{
				border-collapse:collapse;
				background-color: #D3D3D3;
			}
			.complex
			{
				background-color: #D3D3D3;
				
			}
			#apple
			{
				align:center;
			}
			#a1{
			display: none;}
			#a2{
			display: none;}
			#pic0{
			display: none;
			}
			#pic1{
			display: none;
						}
			#pic2{
			display: none;}
			#pic3{
			display: none;}
			#pic4{
			display: none;
			
			}
            div.content{
                margin-top: 22px;
                border: solid;
                border-width: 1px;
				border-color: gray;
                width: 500px;
                margin-left: auto;
                margin-right: auto;
            }
			.tabl{
				border:1px solid black;
				text-align:center;
				
				border-collapse:collapse;
				align:center;
			}
			
			.hello1
			{
				border:1px solid black;
				background-color: #D3D3D3;
				width:40%;
				
				border-collapse:collapse;
				
				
			}
			.hello2
			{
				border:1px solid black;
				
				
				border-collapse:collapse;
			}
			.hello3
			{
					border:1px solid black;
					border-collapse:collapse;
				
			}
			#tab2{
					border:1px solid black;
				text-align:center;
				background-color:#D3D3D3;
				border-collapse:collapse;
				
			}
			#mat{
					border:1px solid black;
				text-align:center;
				background-color:#D3D3D3;
				border-collapse:collapse;
				
			}
				
				
           
            p.info{
                padding-left: 20px;
                margin-top: 1px;
                margin-bottom: 2px;
            }
            p.sp{
                padding-left: 20px;
                font-style:italic;
            }
            td.link{
                text-align: center;
                height: 15px;
            }
            p.thelink{
                margin-top: 1px;
                margin-bottom: 12px;
            }
            div.search{
                margin-top: 40px;
                border: solid;
                border-width: 2px;
                width: 500px;
                margin-left: auto;
                margin-right: auto;
            }
            table.result{
                width: 500px;
                border: hidden;
                padding-top: 20px;
                padding-bottom: 26px;
            }
			#mad{
			display: none;
			}
            tr.result{
                height: auto;
                text-align: center;
            }
            tr.result b{
                font-size: 20px;
            }
            tr.result img{
                width: 114px;
            }
            td.left{
                text-align: center;
            }
        </style>
       <script type="text/javascript">
            function inputValidation() {
                var key_word = document.getElementById("Keyword").value;

                var Type = document.getElementById("Type");
                var index = Type.selectedIndex;
                var TypeOpt = Type.options[index].value;
                if (key_word == ""){
                    alert("Please enter a keyword");
                    return false;
                }
                
                if(TypeOpt == ""){
                    alert("Please Select your Type");
                    return false;
                }
            }
			
			function func1(nr) {
				//alert ("hai");
				//alert("entered"); 
				var hideshow=document.getElementById('Type').value;
				//alert(hideshow);
				if(hideshow=="place"){
						document.getElementById("mad").style.display="block";
						
							}
				else{
					document.getElementById("mad").style.display="none";
				}
			}
			function show2(nr) {
				//alert("entered1"); 
				var e=document.getElementById(nr);
				if(e.style.display=='block')
					e.style.display='none';
					
				
			}
			function show(n) {
				//alert("entered"); 
				//var x="";
				//alert(nr);
				//var hideshow=document.getElementById('Type').value;
				//alert(hideshow);
				var e=document.getElementById(n);
				if(e.style.display=='block')
					e.style.display='none';
				else
					e.style.display='block';
					
							//document.getElementById("aba").style.display="block";
							
			}	
			
			
</script>
		</head>
		<body>
		
        <div class="whole">
            <div class="content">
			<div class="header">
                <h1 class="title"><I>Facebook Search</I></h1>
				<hr></hr>
            </div>
            <form id="theForm" name="threeInfo" onsubmit="inputValidation()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <table class="table" valign="middle" id="hello">
                    <tr>
                        <td>
                            Keyword:
                        
                        
                            <input type="text" id="Keyword" name="Keyword" value="<?php if(isset($_POST['Keyword'])) echo $_POST['Keyword']; if(isset($_GET['kw'])) echo $_GET['kw'];?>" />
                        </td>
                    </tr>
                  
                    <tr >
                        <td>
                            Type:
                        
                            <select id="Type" name="Type" onchange="func1(this)" >
                             
                                <option value="user" <?php if(isset($_POST['Type']) && $_POST['Type'] == 'user') echo "selected"; if(isset($_GET['ty']) && $_GET['ty'] == 'user') echo "selected"; ?>>Users</option>
                                <option value="page" <?php if(isset($_POST['Type']) && $_POST['Type'] == 'page') echo "selected"; if(isset($_GET['ty']) && $_GET['ty'] == 'page') echo "selected"; ?>>Pages</option>
                                <option value="event" <?php if(isset($_POST['Type']) && $_POST['Type'] == 'event') echo "selected"; if(isset($_GET['ty']) && $_GET['ty'] == 'event') echo "selected";?>>Events</option>
                                <option value="group" <?php if(isset($_POST['Type']) && $_POST['Type'] == 'group') echo "selected"; if(isset($_GET['ty']) && $_GET['ty'] == 'group') echo "selected";?>>Groups</option>
                               <option value="place" <?php if(isset($_POST['Type']) && $_POST['Type'] == 'place') echo "selected"; if(isset($_GET['ty']) && $_GET['ty'] == 'place') echo "selected";?>>Places</option>
                                
                           
                            </select>
							
                        </td>
						 
                    </tr>
					<tr id="mad">
						<td>Location:</td>
						<td><input type="text" name="location"  value="<?php if(isset($_POST['location'])) echo $_POST['location']; ?>"></input></td>	
						<td>Distance:</td>
						<td><input type="text" name="distance"  value="<?php if(isset($_POST['distance'])) echo $_POST['distance']; ?>"></input></td>					
					</tr>
            </form>
                    <tr>
					 
                        <td>
                            <input type="submit" name="submit" value="Search" onclick="return inputValidation()" />
                            <input type="reset" value="Clear" onclick="document.location.href='search.php';"/>
                        </td>
                    </tr>
                   
                    
                </table>
            </div>
			</div>
			<?php
		//require_once __DIR__ . 'C:\Users\nikhi\Desktop\web\php-graph-sdk-5.0.0\src\Facebook\autoload.php';
		$Keyword="";
    
    $Type = "";
    
    if(isset($_POST["submit"])) {
        $keyword = $_POST["Keyword"];
       
        $type = $_POST["Type"];
		$enkeyword = urlencode($keyword);
        
		$enType = urlencode($type);
		//echo $enkeyword;
		$fb = new Facebook\Facebook(['app_id' => '315940428804059','app_secret' => 'be4a9b768c919875eaac1cb44008857f','default_graph_version' => 'v2.8']);
		$fb->setDefaultAccessToken('EAAEfWJ0Hb9sBAF5Aeucc1w86V0XZAoN4M5l3FSZAQ6PKmngwG0KWQkJJ3gsAEaeSV5FWtcZCPvL8z569X9kCBBmZACQ5bHimGxAD3muSjCuzcflkcVSfQAhYPh0UfeUfQfuVpfkDImY9ocP4TNkQ4ZCcZBOqf6ZBXgZD');
		//echo $enType;
if($type=="place")
 {
	 $loc=$_POST["location"];
	 $dist=$_POST["distance"];
	// echo "loc".$loc;
	// echo "dis".$dist;
	
	 if($loc !="" ) {
	 $gurl="https://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($loc)."&key=AIzaSyA_ir8PYXubJP4W0k6o-VuD7-zoxduAemE";
	 $gcontent=file_get_contents($gurl);
	 $gjson=json_decode($gcontent);
	 $y=count($gjson);
	 for($u=0;$u<$y;$u++)
	 {
	 $lon=$gjson->results[$u]->geometry->location->lng;
	 $lat=$gjson->results[$u]->geometry->location->lat;
	 if($dist!=""){
	$fbURL = "/search?q=".$keyword."&type=".$type."&center=".$lat.",".$lon."&distance=".$dist."&fields=id,name,picture.width(700).height(700)";
	 }
	 else {
		 $fbURL = "/search?q=".$keyword."&type=".$type."&fields=id,name,picture.width(700).height(700)";
	 }
	 }
	 }
	 else {
		 $fbURL = "/search?q=".$keyword."&type=".$type."&fields=id,name,picture.width(700).height(700)";
	 }
	  try{
	 $response = $fb->get($fbURL);
  
  $get_data = $response->getDecodedBody();

 $data=$get_data['data'];
 
 
 $c=count($data);

echo "<div ><table class='hello1' align='center' >";
	echo "<tr class='tabl'><th>Profile Photo</th><th>Name</th><th>Details</th></tr>";
  for($i=0;$i<$c;$i++){
	$id= $data[$i]['id'];
	$name=$data[$i]['name'];
	$pic=$data[$i]['picture']['data']['url'];
	$height=$data[$i]['picture']['data']['height'];
	$width=$data[$i]['picture']['data']['width'];
	$i++;
	
                    echo "<tr class='hello2' ><td class='hello3' style:'width:60%' ><a href='$pic' height='$height' width='$width' target='_blank'><img src=".$pic." height='50' width='50'></a></td>";
					echo "<td class='hello3' style:'width:60%'>".$name."</td>";
					// echo "</table></div>";
					echo "<td class='hello3' style:'width:60%'><a href='search.php?helo=$id&kw=$keyword&ty=$type' >Details</a></td></tr>";
					
					 
	 }
	 echo "</table></div>";
	  }
	 catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
	// break;
 }
else if($type=="group" || $type=="page" || $type=="user") {
		//$fb->setDefaultAccessToken('EAAEfWJ0Hb9sBAF5Aeucc1w86V0XZAoN4M5l3FSZAQ6PKmngwG0KWQkJJ3gsAEaeSV5FWtcZCPvL8z569X9kCBBmZACQ5bHimGxAD3muSjCuzcflkcVSfQAhYPh0UfeUfQfuVpfkDImY9ocP4TNkQ4ZCcZBOqf6ZBXgZD');
		$fbURL = "/search?q=".$keyword."&type=".$type."&fields=id,name,picture.width(700).height(700)";
		
		try {
  
 $response = $fb->get($fbURL);
  //echo $response;
 // $graphNode = $response->getGraphNode();
 // echo $graphNode->getField('name');
  $get_data = $response->getDecodedBody();
 // echo $get_data;
 $data=$get_data['data'];
 $i=0;
 
 $c=count($data);
// $id= $data[0]['id'];
// echo $id;
//if($type !="event"){ 
echo "<div ><table class='hello1' align='center'>";
	echo "<tr class='tabl'><th>Profile Photo</th><th>Name</th><th>Details</th></tr>";
  for($i=0;$i<$c;$i++){
	$id= $data[$i]['id'];
	$name=$data[$i]['name'];
	$pic=$data[$i]['picture']['data']['url'];
	$height=$data[$i]['picture']['data']['height'];
	$width=$data[$i]['picture']['data']['width'];
	$i++;
	
                    echo "<tr class='hello2'><td class='hello3'><a href='$pic' height='$height' width='$width' target='_blank'><img src=".$pic." height='50' width='50'></a></td>";
					echo "<td class='hello3'>".$name."</td>";
					// echo "</table></div>";
					echo "<td class='hello3'><a href='search.php?helo=$id&kw=$keyword&ty=$type'>Details</a></td></tr>";
					 
					
				
  }
  echo "</table></div>";
  //echo $data[0]->id;
}
catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
		}
  else if($type=="event"){
	 // $place="";
	 $fbURL = "/search?q=".$keyword."&type=".$type."&fields=id,name,picture.width(700).height(700),place";
	 try{
	 $response = $fb->get($fbURL);
 
  $get_data = $response->getDecodedBody();
 
 $data=$get_data['data'];
	 $c=count($data);
	echo "<div ><table class='hello1' align='center'>";
	echo "<tr class='tabl'><th>Profile Photo</th><th>Name</th><th>Place</th></tr>";
	 for($i=0;$i<$c;$i++){
	$id= $data[$i]['id'];
	$name=$data[$i]['name'];
	$pic=$data[$i]['picture']['data']['url'];
	$height=$data[$i]['picture']['data']['height'];
	$width=$data[$i]['picture']['data']['width'];
	if(array_key_exists('place', $data[$i]))
	{
	$place=$data[$i]['place']['name'];
	}
	else{ $place="";}
	
	//echo $place;
	//$i++;
	
	
                    echo "<tr class='hello2' ><td class='hello3' style:'width:60%' ><a href='$pic' height='$height' width='$width' target='_blank'><img src=".$pic." height='50' width='50'></a></td>";
					echo "<td class='hello3' style:'width:60%'>".$name."</td>";
					// echo "</table></div>";
					echo "<td class='hello3' style:'width:60%'>".$place."</td></tr>";
	 }
	  echo "</table></div>";
	 }
 
  
		
		
		
  catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
}


		
	   
	}
	
	function runfunction($id) {
	
		//echo $id;
		
		$fb = new Facebook\Facebook(['app_id' => '850915025048443','app_secret' => '2a2daf94e118e9e4b8322d7354759225','default_graph_version' => 'v2.8']);
		$fb->setDefaultAccessToken('EAAMF5xfNU3sBAJORDW3rhZBdItb5MiZAQjnjJAzJLFa2S8WZAvmcg2Q2rpZCkxyRIHNWQnNoaRCpE6XMWG8bTSJlUoUqeXKUZCUxv7uZCDqqDsCEC99OZCKz1vSWgWZArfkdRFFrybyqNUgFR6tWEjvV1Vj8UnyX49UZD');
		
		
		$idurl="/".$id."?fields=id,name,picture.width(700).height(700),albums.limit(5){name,photos.limit(2){name, picture}},posts.limit(5)";
		try {
		 $res = $fb->get($idurl);
		$get_da = $res->getDecodedBody();
		
		//echo "<a href='#' onclick='echo /'<script>fudocument.getElementById('aba').style=/"red/" </script>;/''>Albums</a></br></th></tr>";
		//$hidevar='bat';
		echo "<div align='center' >";
		
	
			if(array_key_exists('albums', $get_da))
			{
			//echo "nik";
			echo "<br><br>";
			echo "<div >";
			echo "<a href='#' onclick='show(\"a1\");show2(\"a2\")' align:'center'><p class='blue'>Albums</p></a>";
			echo "</div>";
		echo "<div id='a1' margin:0 auto>";
			        	echo "<table id='aba' >";
					 $c1= count($get_da['albums']['data']);
					 if($c1>0)
					 {
						 
						for($j=0;$j<$c1;$j++)
							
						{
							//if(array_key_exists('name',$get_da['albums']['data'][$j]))
							 //echo "hee";
						      //$mainname=count($get_da['albums']['data'][$j]['name']);
							   //echo $mainname;
							echo "<tr class='tabl'><td class='tabl' width='480px'><a href='#' onclick=show(\"pic$j\")>".$get_da['albums']['data'][$j]['name']."</a>";
							 echo "<div id='pic$j' >";
							if(array_key_exists('photos', $get_da['albums']['data'][$j]))
								{
								//echo "hai";
							$co= count($get_da['albums']['data'][$j]['photos']['data']);
							//echo $co;
							if($co>0)
							{
								//echo "pic$j";
							
							 for($k=0;$k<$co;$k++)
							 {	
								//echo "hi";
								$picid=$get_da['albums']['data'][$j]['photos']['data'][$k]['id'];
								//echo $picid;
								//$url1="/".$picid."/picture";
								$iurll="https://graph.facebook.com/v2.8/$picid/picture?redirect=false&access_token=EAAEfWJ0Hb9sBAF5Aeucc1w86V0XZAoN4M5l3FSZAQ6PKmngwG0KWQkJJ3gsAEaeSV5FWtcZCPvL8z569X9kCBBmZACQ5bHimGxAD3muSjCuzcflkcVSfQAhYPh0UfeUfQfuVpfkDImY9ocP4TNkQ4ZCcZBOqf6ZBXgZD";
								//echo $iurll;
								//$resp=$fb->get("/".$picid."/picture?redirect=false&access_token=EAAEfWJ0Hb9sBAF5Aeucc1w86V0XZAoN4M5l3FSZAQ6PKmngwG0KWQkJJ3gsAEaeSV5FWtcZCPvL8z569X9kCBBmZACQ5bHimGxAD3muSjCuzcflkcVSfQAhYPh0UfeUfQfuVpfkDImY9ocP4TNkQ4ZCcZBOqf6ZBXgZD");
								//$response=$fb->get($iurll);
								//$pict1=$response->getDecodedBody();
							    //$imag=$pict1['data']['url'];
								//echo $imag;
								$r=file_get_contents($iurll);
								$js=json_decode($r);
								$pict1=$js->data->url;
								//$pict=$get_da['albums']['data'][$j]['photos']['data'][$k]['picture'];
								echo "<a href='$pict1' target='_blank'><img src=\"".$get_da['albums']['data'][$j]['photos']['data'][$k]['picture']."\" alt=pictobeloaded></a>";
								echo "        ";
								
							 }
							 echo "</div>";
							 
							}
						}
					 //echo $c1;
						echo "</td></tr>";
						}
						echo "</table>";
			}
			}
			else
						{
							echo "<div >";
							echo "<p class='blue'>No Albums has been found</p>";
							echo "</div>";}
			
		}
			 catch(Facebook\Exceptions\FacebookResponseException $e) {
//echo "<br><br><br>";
  echo "<div align='center' width:20px>";
  echo "<p class='blue'>No Albums has been found</p>";
  echo "</div>";
  echo "<br><br>";
  echo "<div align='center' width:20px>";
  echo "<p class='blue' >No Posts has been found</p>";
  echo "</div>";
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	
	echo "<div align='center'>";
  echo "<p class='blue'>No Albums has been found</p>";
   echo "</div>";
   echo "<br><br>";
   echo "<div align='center'>";
  echo "<p class='blue'>No Posts has been found</p>";
   echo "</div>";
   
  exit;
}
			
		
		
		echo "</div>";
		
		//echo $idurl;
		//echo "anu1";	 
	 
     
	 
	//  echo "<table align='center'><tr><td><a href=''>Posts</a></tr></td></table>";
	  echo "</div>";
      
     
    
     
     // echo "<table align='center'><tr><td><a href=''>Posts</a></tr></td></table>";
	         //echo "<a href='#' onclick='toggle_visibility('foo');'>Albums</a>";
	 //  echo "<div id='hell'>";
	 echo "<br></br>";
	   echo "<div id='bokka' align='center'>";
		
		
		
            if(array_key_exists('posts', $get_da))
            {
           echo "<div>";
		   echo "<a href='#' onclick='show(\"a2\");show2(\"a1\")' align:'center'><p class='blue'>Posts</p></a>";
		   echo "</div>";
		echo "<div id='a2' >";
	    //echo "<a href='#' onclick='show(aba)'>Posts</a>";
       // echo "<table class='tabl' align='center'><tr><th>";
		echo "<table id='tabl' align='center' >";
		echo "<th class='tabl'> <div class='blue' align='left'>Messages</div></th>";
                     $c1= count($get_da['posts']['data']);
                     if($c1>0)
                     {
						 
                        for($j=0;$j<$c1;$j++)
                           
                        {
                            //echo "hee";
                            if(array_key_exists('message', $get_da['posts']['data'][$j])) {
                                //echo "hai";
                            
                                echo "<tr class='tabl'><td class='tabl' width='480px'><div class='blue'>".$get_da['posts']['data'][$j]['message']."</div></td></tr>";
                             }
                            }
                        }
						//echo "</td></tr>";
                     //echo $c1;
                        }
						else
						{
							echo "<div align='center'>";
							echo "<p class='blue'>No Posts has been found</p>";
							echo "</div>";
							}
						   echo "</table></div>";
						echo "</div>";
						
						
            }
     
   
  

   if (isset($_GET['helo'])) {
       $t=$_GET['helo'];
       //echo $t;
     runfunction($t);
   }
?>
            
        
    <noscript>
    </body>
</html>