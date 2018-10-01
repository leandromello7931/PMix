<!DOCTYPE html>
<html lang="br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		@include('template.base.css')
    </head>
    <body class=" ">
		<div class="wrapper ">
        	@include('template.sidebar')
        	<div class="main-panel">
				@include('template.navbar')
				<div class="content">
					<div class="row">
						@yield('content')
					</div>
				</div>
				{{-- @include('template.footer') --}}
        	</div>
        </div>
    	
		@include('template.base.scripts')
	</body>
</html>
