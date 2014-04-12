
<!--  subscribe -->
@include('partials.sidebarpartial.subscribe')

<!-- fixture -->
@if(!isset($fixtures))
    @include('partials.sidebarpartial.fixtureSidebar')
@else
    @include('partials.sidebarpartial.articleSidebar')
@endif

<!-- weather -->
@include('partials.sidebarpartial.weather')
