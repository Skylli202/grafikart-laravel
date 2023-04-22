@php
	//	dump(
	//        request()->routeIs('admin.options.create'),
	//        request()->route()->getName(),
	//        route('admin.options.create'),
	//        route(request()->route()->getName()),
	//	)
@endphp

<nav class="navbar navbar-expand-lg bg-dark">
	<div class="container-fluid">
		<a href="/" class="navbar-brand">Agence</a>
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
				<li class="nav-item"><a
							href="{{ route('admin.index') }}"
							@class([
									'nav-link' => true,
									'active' => request()->routeIs('admin.*') && !request()->routeIs('admin.options.*'),
							])
					>
						Gérer les biens
					</a>
				</li>
				<li class="nav-item"><a
							href="{{ route('admin.options.index') }}"
							@class([
									'nav-link' => true,
									'active' => request()->routeIs('admin.options.*'),
							])
					>
						Gérer les options
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>