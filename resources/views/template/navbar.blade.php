
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent   ">
	<div class="container-fluid">
    	<div class="navbar-wrapper">
      		<div class="navbar-toggle d-inline">
        		<button type="button" class="navbar-toggler">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
        		</button>
      		</div>
      		<a class="navbar-brand" href="/">Dashboard</a>
    	</div>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-bar navbar-kebab"></span>
			<span class="navbar-toggler-bar navbar-kebab"></span>
			<span class="navbar-toggler-bar navbar-kebab"></span>
    	</button>
    	<div class="collapse navbar-collapse" id="navigation">
      		<ul class="navbar-nav ml-auto ">
				<div class="search-bar input-group">
					<button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i></button>
				</div>       
        		<li class="dropdown nav-item">
          			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<div class="photo">
							<img src="../assets/img/anime3.png">
						</div>
						<b class="caret d-none d-lg-block d-xl-block"></b>
						<p class="d-lg-none">
							Log out
						</p>
          			</a>
          			<ul class="dropdown-menu dropdown-navbar">
						<!-- <li class="nav-link">
						<a href="#" class="nav-item dropdown-item">Profile</a>
						</li>
						<li class="nav-link">
						<a href="#" class="nav-item dropdown-item">Settings</a>
						</li>
            			<div class="dropdown-divider"></div> -->
            			<li class="nav-link">
							<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
					        	{{ __('Logout') }}
				 			</a>

         					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              					{{ csrf_field() }}
            				</form> 
						</li>
  					</ul>
				</li>
			</ul>
		</div>
	</div>

	<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="tim-icons icon-simple-remove"></i>
				</button>
			</div>
			<div class="modal-footer">
		</div>
	</div>
	</div>
</nav>
<!-- End Navbar -->