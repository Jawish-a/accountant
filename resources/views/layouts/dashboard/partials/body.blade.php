<div class="wrapper">
    @include('layouts.dashboard.partials.sidebar')
    <div class="main-panel">
        @include('layouts.dashboard.partials.navbar')
        <div class="content">
            @yield('content')
        </div>
        @include('layouts.dashboard.partials.footer')
    </div>
</div>
@include('layouts.dashboard.partials.scripts')
