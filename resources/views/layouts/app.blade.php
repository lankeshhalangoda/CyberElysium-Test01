<!DOCTYPE html>
<html lang="en">

<head>
    @include('libraries.style')

</head>

<body class="g-sidenav-show   bg-gray-100">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('components.sidebar')
    <main class="main-content position-relative border-radius-lg ">

        @include('components.navbar')


        @yield('content')


        <div class="mt-5"></div>
        @include('components.footer')
        </div>
    </main>


    @include('libraries.script')
</body>

</html>
