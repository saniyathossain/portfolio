@forelse ($BaseLibrary->frontendJsFiles($public	= $BaseLibrary->assetsPublicPath) as $key_js => $js)
	@php
		(array) $defer_except	= ['cdn-js-progressively-v1.2.5'];
		(string) $defer			= !in_array($key_js, $defer_except) ? 'defer' : '';
	@endphp
	<script {!! $defer !!} src="{{ $js }}"></script>
@empty
@endforelse

{{-- <script defer>
	var progressivelyInit	= function() {
		if (typeof progressively != 'undefined') {
			progressively.init({
				delay: 50,
				throttle: 300,
				smBreakpoint: 600,
				onLoad: function (element) {
					console.info(element);
				},
				onLoadComplete: function() {

				}
			});
		}
	}

	progressivelyInit();
</script> --}}
