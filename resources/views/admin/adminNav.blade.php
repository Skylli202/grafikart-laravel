<nav class="navbar navbar-expand-lg bg-dark">
	<div class="container-fluid">
		<a href="/" class="navbar-brand">Agency</a>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item dropdown">
					<a
						@class([
							'nav-link',
							'dropdown-toggle',
							'active' => request()->routeIs('admin.realEstates.*'),
						])
						role="button"
						data-bs-toggle="dropdown"
						aria-expanded="false"
					>
						Real estate
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('admin.realEstates.index') }}">List</a></li>
						<li><a class="dropdown-item" href="{{ route('admin.realEstates.create') }}">Create</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a
						@class([
							'nav-link',
							'dropdown-toggle',
							'active' => request()->routeIs('admin.options.*'),
						])
						role="button"
						data-bs-toggle="dropdown"
						aria-expanded="false"
					>
						Options
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('admin.options.index') }}">List</a></li>
						<li><a class="dropdown-item" href="{{ route('admin.options.create') }}">Create</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
