<?php
	session_start();    
	$username = $_SESSION['username'];	
	//echo $username; exit;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Access-Control-Allow-Origin" content="*" />
<title>CUTV职能部门评分系统</title> 
<link media="screen" href="statics/grade.css" type="text/css" rel="stylesheet" /> 
<!-- script src="statics/jquery-latest.pack.js" type="text/javascript"></script  --> 
<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="statics/grade.js" type="text/javascript"></script> 

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="applicable-device"content="pc,mobile"/>
<link rel="stylesheet" href="./statics/response.css">

</head> 
<body> 
<header>
       <img src="./statics/cutv_logo.gif" alt="">
       <span>
           <h1>CUTV内部部门评分</h1>
       </span>
</header>

<div id="box"> 
	<h4>我的评分</h4> 
	<div class="content"> 
		<div id="myPoint">
			<span><big>5</big><small>.0</small></span> 
			<div>
				<img src="statics/star5.gif" />
				<em>(一般)</em>
			</div>
		</div> 
		<div id="doPoint"> 
			<p>请点击以下星级进行评分</p> 
		<form id="form1" name="form1" action="voteProcess.php" method="post">	
			<table cellspacing="0" cellpadding="0" border="0"> 
					<tbody> 
						<tr> 
							<th>综合部：</th> 
							<td><span class="star5" id="item1" v="5"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
							<td><strong>5</strong> <em>(一般)</em></td>
							<input id="pointV1" type="hidden" name="zhb"  />
						</tr> 
						<tr> 
							<th>财务部：</th> 
							<td><span class="star5" id="item2" v="5"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
							<td><strong>5</strong> <em>(一般)</em></td>
							<input id="pointV2" type="hidden" name="cwb"   />
						</tr> 
						<tr> 0
							<th>战略发展部(CUTV)：</th> 
							<td><span class="star5" id="item3" v="5"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
							<td><strong>5</strong> <em>(一般)</em></td>
							<input id="pointV3" type="hidden" name="zlfzb"  />
						</tr>
						<tr> 
							<th>技术部(IPTV)：</th> 
							<td><span class="star5" id="item4" v="5"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
							<td><strong>5</strong> <em>(一般)</em></td>
							<input id="pointV4" type="hidden" name="jsb"  />
						</tr>
						<tr> 
							<th>应用开发部(IPTV)：</th> 
							<td><span class="star5" id="item5" v="5"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
							<td><strong>5</strong> <em>(一般)</em></td>
							<input id="pointV5" type="hidden" name="yykfb"  />
						</tr>
					</tbody>
			</table>
		</div>		
			<!-- <input id="pointV1" type="hidden" value="5" name="pointV1" /> 
			<input id="pointV2" type="hidden" value="5" name="pointV2" /> 
			<input id="pointV3" type="hidden" value="5" name="pointV3" /> 
			<label>评论内容：<textarea id="content" name="content" rows="5" cols="50"></textarea></label> -->
			<!--<input id="pointV1" name="zhb" type="hidden" value="" />
			<input id="pointV2" name="cwb" type="hidden" value="" />
			<input id="pointV3" name="zlfzb" type="hidden" value="" />
			<input id="pointV4" name="jsb" type="hidden" value="" />
			<input id="pointV5" name="yykfb" type="hidden" value="" />-->
			<button type="submit" id="submit">提交</button> 
		</form>
	</div>
</div> 
</body>
</html>