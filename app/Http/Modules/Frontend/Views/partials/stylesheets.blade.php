@forelse ($BaseLibrary->frontendCssFiles($public = $BaseLibrary->assetsPublicPath) as $key_css => $css)
	{{-- <link rel="preload" as="style" onload="this.rel='stylesheet'" href="{{ $css }}"> --}}
	<link rel="stylesheet" href="{{ $css }}">
@empty
@endforelse

<style>
	.progressive {
		background: transparent;
	}
	#colorlib-aside .colorlib-footer ul {
		background: #444 !important;
	}
</style>

<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
