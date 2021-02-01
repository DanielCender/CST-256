<html lang="en">
	<head>
    <title>@yield('title')</title>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
		<script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</head>
	<body>
		@include('layouts.header')
    <div align="center">
        @yield('content')
		</div>
		@include('layouts.footer')
</body>
</html>
