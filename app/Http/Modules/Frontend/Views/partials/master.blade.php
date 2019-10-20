<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	@includeIf($BaseLibrary->moduleFrontendViewPartialHead)

	@hasSection('content')
		@yield('content')
	@endif

	{{-- @includeIf($BaseLibrary->moduleFrontendViewPartialFooter) --}}

</html>