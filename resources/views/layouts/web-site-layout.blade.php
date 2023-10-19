<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <!-- Visible Menu -->
            <nav>
                <div>
                    <a href="#">
                        <img class="w-[100px]" src="{{ url('images/bitly_logo.svg') }}" alt="bitly-logo">
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="#">Products</a>
                        <!--Submenu-->
                        <div class="hidden">
                            <div>
                                <a href="#">
                                    <div><img src="#" alt=""></div>
                                    <div>
                                        <h5>Link Management</h5>
                                        <h5>Customoze, Share, and track links</h5>
                                    </div>
                                </a>
                                <a href="#">
                                    <div><img src="#" alt=""></div>
                                    <div>
                                        <h5>QR Codes</h5>
                                        <h5>Dynamic solutions to fit every business need</h5>
                                    </div>
                                </a>
                                <a href="#">
                                    <div><img src="#" alt=""></div>
                                    <div>
                                        <h5>Link-in-bio</h5>
                                        <h5>Curate and track links for social media profiles</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--End Submenu-->
                    </li>
                    <li><a href="#">Pricing</a></li>
                    <li>
                        <a href="#">Resources</a>
                        <!--Submenu-->
                        <div class="hidden">
                            <div>
                                <div>
                                    <a href="#">
                                        <div>
                                            <h5>Developers</h5>
                                            <h5>API documentation and resources</h5>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div>
                                            <h5>App Connectors</h5>
                                            <h5>Optmize Bitly with App Connectors</h5>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <div>
                                            <h5>Resource Library</h5>
                                            <h5>Ebooks and webinars</h5>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div>
                                            <h5>BLog</h5>
                                            <h5>Tips, best practices and more</h5>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <div>
                                            <h5>Trust Center</h5>
                                            <h5>Policies, resources and tools to keep you safe</h5>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div>
                                            <h5>Support</h5>
                                            <h5>FAQs and help articles</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End Submenu-->
                    </li>
                </ul>
                <ul class="block w-full bg-blue-950 ">
                    <li class="text-center text-base"><a class="text-white" href="#">Log in</a></li>
                    <li class="text-center text-base"><a class="text-white" href="#">Sign up Free</a></li>
                    <li class="text-center text-base"><a class="text-white" href="#"><button class="w-[280px] rounded-sm bg-blue-500" type="button">Get a Quote</button></a></li>
                </ul>
                <div>
                    <!--Hamburger Menu Button-->
                    <div>
                        <img src="{{ url('/images/feather-icon-menu.svg') }}" alt="">
                    </div>
                    <!--Close Menu Button-->
                    <div>
                        <img src="{{ url('images/feather-icon-x.svg') }}" alt="">
                    </div>
                </div>
            </nav>
        </header>
        <main>
            
            {{ $slot }}
        </main>
        <footer>

        </footer>
    </body>
</html>
