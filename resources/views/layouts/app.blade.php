<!DOCTYPE HTML>
<!--
    Future Imperfect by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Icelandic Blog</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                    <header id="header">
                        <h1><a href="{{ url('/threads') }}">Icelandic Blog</a></h1>
                        <nav class="links">
                            <ul>
                                <li><a href="{{ url('/threads/create') }}">Create Post</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <nav>
                        @guest
                        <div align="right">
                            <a href="{{ route('login') }}">Login &zwnj; &zwnj; &zwnj; &zwnj; </a>
                            <a href="{{ route('register') }}">Register &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; </a>
                        </div>
                        @else
                            
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} &zwnj; &zwnj; &zwnj; &zwnj;  <span class="caret"></span>
                                </a>

                                    
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; 
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    
                                
                           
                        @endguest
                        </nav>
                    </header>

                <!-- Menu -->
                    <section id="menu">

                        <!-- Links -->
                            <section>
                                <ul class="links">
                                    <li>
                                        <a href="#">
                                            <h3>Lorem ipsum</h3>
                                            <p>Feugiat tempus veroeros dolor</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h3>Dolor sit amet</h3>
                                            <p>Sed vitae justo condimentum</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h3>Feugiat veroeros</h3>
                                            <p>Phasellus sed ultricies mi congue</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h3>Etiam sed consequat</h3>
                                            <p>Porta lectus amet ultricies</p>
                                        </a>
                                    </li>
                                </ul>
                            </section>

                        <!-- Actions -->
                            <section>
                                <ul class="actions vertical">
                                    <li><a href="#" class="button big fit">Log In</a></li>
                                </ul>
                            </section>

                    </section>

                @yield('content')




                                

                            </article>

                        <!-- Pagination -->


                    </div>

                <!-- Sidebar -->
                    <section id="sidebar">

                        <!-- Intro -->
                            <section id="intro">
                                <a href="#" class="logo"><img src="/images/logo.jpg" alt="" /></a>
                                <header>
                                    <h2>Icelandic Blog</h2>
                                    <p >Welcome to the Icelandic blog where adventurous people share their Icelandic experience.</p>
                                </header>
                            </section>

                        <!-- Mini Posts -->
                           

                        <!-- About -->
                            <section class="blurb">
                                <h2>About</h2>
                                <p>We are community made out of adventurous people that love exploring Iceland. 
                                We value the icelandic nature very highly. 
                                What you will find on this blog are posts of adventures from 
                                people traveling to every corner of Iceland.</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">Learn More</a></li>
                                </ul>
                            </section>

                        <!-- Footer -->
                            <section id="footer">
                                <ul class="icons">
                                    <li><a href="https://twitter.com/icelandair" class="fa-twitter"><span class="label">Twitter</span></a></li>
                                    <li><a href="https://www.facebook.com/Icelandair/" class="fa-facebook"><span class="label">Facebook</span></a></li>
                                    <li><a href="https://www.instagram.com/icelandair/?hl=en" class="fa-instagram"><span class="label">Instagram</span></a></li>
                                    <li><a href="{{ url('/contact') }}" class="fa-envelope"><span class="label">Email</span></a></li>
                                </ul>
                                <p class="copyright">&copy; Icelandic Blogg. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
                            </section>

                    </section>
            
            </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>