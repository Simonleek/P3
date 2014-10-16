<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
	<title>@yield('title','Laravel Basics: Lorem Ipsum Generator and Random User Generator')</title>
	<link rel='stylesheet' href='/css/P3CSS.css' type='text/css'>
	@yield('head')
</head>
<body>
	<form name="mainForm" id="mainForm" method="post" >
		<div id="Header">@yield('topic')</div>
		<div id="Container"> 
			<div id="Container2">
				<div id="columnSpace">&nbsp;</div>
				<div id="main">
					@yield('content')
				</div>
			</div>
			<div id="columnSpace">&nbsp;</div>
			<div id="Footer"> <a href="http://p1.simonleetoronto.me">Copyright &copy; www.SimonLeeToronto.me 2014</a></div>
		</div>
	</div>	
	</form>
</body>
</html>