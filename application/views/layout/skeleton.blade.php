<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Html version | Angulr</title>
  <meta name="description" content="Angularjs, Html5, Music, Landing, 4 in 1 ui kits package" />
  <meta name="keywords" content="AngularJS, angular, bootstrap, admin, dashboard, panel, app, charts, components,flat, responsive, layout, kit, ui, route, web, app, widgets" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="stylesheet" href="{{URL::base()}}/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="{{URL::base()}}/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="{{URL::base()}}/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="{{URL::base()}}/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="{{URL::base()}}/css/font.css" type="text/css" />
  <link rel="stylesheet" href="{{URL::base()}}/css/app.css" type="text/css" />


</head>
<body>
<div class="app app-header-fixed  app-aside-dock ">
  
@include("layout.header")

<div id="content" class="app-content" role="main">
	@yield('content')
</div>

@include('layout.footer')

</div>

<script src="{{URL::base()}}/js/jquery.min.js"></script>
<script src="{{URL::base()}}/js/bootstrap.min.js"></script>
<script src="{{URL::base()}}/js/core.js"></script>
</body>
</html>
