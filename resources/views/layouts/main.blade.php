 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="shortcut icon" href="assets/images/pfbci-logo-128x128-128x128.png" type="image/x-icon">
 	<meta name="description" content="PHILIPPINE FOUNDATION FOR BREAST CARE, INC.">
 	
     {{-- CSS imports --}}
     @include('layouts.includes.header')

 	<title>PFBCI</title>
 </head>
 <body>

    {{-- Navbar --}}
 	@include('layouts.includes.navbar')

 	@yield('content')

    {{-- JS imports --}}
 	@include('layouts.includes.footer')
 </body>
 </html>

