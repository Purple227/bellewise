
@include('layouts.partials.head')

<body>

    <div id="app">
        <main class="body">
            @include('layouts.partials.navbar')
            <div class="container">
            @yield('content')
        	</div>
            @include('layouts.partials.footer')
        </main>
    </div>



</body>
</html>
