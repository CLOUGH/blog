<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title></title>
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/vendor.css') }}">
	<script type="text/javascript" src="{{ asset('/js/vendor.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
	<base href="/blog/public/">
</head>
<body ng-cloak style="background:#F5F5F5;">
	<ui-view></ui-view>
	<script type="text/javascript">
		$(document).foundation();
	</script>
</body>
</html> 