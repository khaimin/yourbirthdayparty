<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="shortcut icon" href="{{ url('public/images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ url('public/images/favicon.ico') }}" type="image/x-icon">
<title>@yield('head.title')</title>
<link rel="stylesheet" href="{{ url('public/css/stuck.css') }}">
<link rel="stylesheet" href="{{ url('public/css/style.css') }}">
<link rel="stylesheet" href="{{ url('public/css/styleblog.css') }}">
<link rel="stylesheet" href="{{ url('public/css/touchTouch.css') }}">
<link rel="stylesheet" href="path/to/dateselector.min.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
...

<!-- Latest compiled and minified CSS -->

@yield('head.css')
</head>
<body>
	@include('client.partials.navbar')

	@yield('body.content')

	@include('client.partials.footer')


<script src="{{ url('public/js/jquery.js') }}"></script>
<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  $('.gallery .gall_item').touchTouch();

  }); 
</script>
<script src="{{ url('public/js/jquery-migrate-1.1.1.js') }}"></script>
<script src="{{ url('public/js/script.js') }}"></script> 
<script src="{{ url('public/js/superfish.js') }}"></script>
<script src="{{ url('public/js/jquery.equalheights.js') }}"></script>
<script src="{{ url('public/js/jquery.mobilemenu.js') }}"></script>
<script src="{{ url('public/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ url('public/js/tmStickUp.js') }}"></script>
<script src="{{ url('public/js/jquery.ui.totop.js') }}"></script>
<script src="{{ url('public/js/touchTouch.jquery.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
@yield('body.js')

</body>
</html>
