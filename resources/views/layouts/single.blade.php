<!DOCTYPE HTML>
<!--
	Twenty 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>{{config('app.name')}} - @yield('title')</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keyword')"/>
    @include('.includes.js_css')
</head>
<body class="left-sidebar loading">

<!-- Header -->
@include('.includes.header')

<!-- Main -->
<article id="main">

    <header class="special container">
        <span class="icon fa-laptop"></span>
        <h1>@yield('theme', 'Тема ....')</h1>
    </header>

    <!-- One -->
    <section class="wrapper style4 container">

        <div class="row oneandhalf">
            <div class="12u skel-cell-important">

                <!-- Content -->
                <div class="content">
                    @section('content')
                        Нет новостей :(
                    @show
                </div>

            </div>
        </div>
    </section>

    <!-- Two -->
    <section class="wrapper style1 container special">
        <div class="row">
            <div class="4u">

                <section>
                    <header>
                        <h3>This is Something</h3>
                    </header>
                    <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec
                        nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                    <footer>
                        <ul class="buttons">
                            <li><a href="#" class="button small">Learn More</a></li>
                        </ul>
                    </footer>
                </section>

            </div>
            <div class="4u">

                <section>
                    <header>
                        <h3>Also Something</h3>
                    </header>
                    <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec
                        nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                    <footer>
                        <ul class="buttons">
                            <li><a href="#" class="button small">Learn More</a></li>
                        </ul>
                    </footer>
                </section>

            </div>
            <div class="4u">

                <section>
                    <header>
                        <h3>Probably Something</h3>
                    </header>
                    <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec
                        nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                    <footer>
                        <ul class="buttons">
                            <li><a href="#" class="button small">Learn More</a></li>
                        </ul>
                    </footer>
                </section>

            </div>
        </div>
    </section>

</article>

<!-- Footer -->
@include('includes.footer')

</body>
</html>