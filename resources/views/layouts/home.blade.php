@include('partials.start')

@include('partials.mobile')

<div class="flex">
    @include('partials.sidebar')

    <div class="content">
        @include('partials.nav')

        @yield('content')
    </div>
</div>

@include('partials.end')