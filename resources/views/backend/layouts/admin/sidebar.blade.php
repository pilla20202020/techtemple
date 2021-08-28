<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="{{ route('dashboard.index') }}">
							<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="{{ route('dashboard.index') }}" class="active">
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->
						
						

						

                        <li class="gui-folder">
							<a href="{{ route('currency.index') }}" >
								<div class="gui-icon"><i class="md md-attach-money"></i></div>
								<span class="title">Currency</span>
							</a>
						</li>

						<li class="gui-folder">
							<a href="{{ route('content.index') }}" >
								<div class="gui-icon"><i class="md md-text-format"></i></div>
								<span class="title">Add Content</span>
							</a>
						</li>

                        <li class="gui-folder">
							<a href="{{ route('contact.index') }}" >
								<div class="gui-icon"><i class="md md-message"></i></div>
								<span class="title">Contact</span>
							</a>
						</li>			
					
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->