<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Error 404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin &amp; Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    <style type="text/css" id="s./node_modules/css-loader/index.js!./node_modules/sass-loader/lib/loader.js!./package/src/animation.scss-0">
        .eva-animation {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .eva-infinite {
            animation-iteration-count: infinite;
        }

        .eva-icon-shake {
            animation-name: eva-shake;
        }

        .eva-icon-zoom {
            animation-name: eva-zoomIn;
        }

        .eva-icon-pulse {
            animation-name: eva-pulse;
        }

        .eva-icon-flip {
            animation-name: eva-flipInY;
        }

        .eva-hover {
            display: inline-block;
        }

        .eva-hover:hover .eva-icon-hover-shake,
        .eva-parent-hover:hover .eva-icon-hover-shake {
            animation-name: eva-shake;
        }

        .eva-hover:hover .eva-icon-hover-zoom,
        .eva-parent-hover:hover .eva-icon-hover-zoom {
            animation-name: eva-zoomIn;
        }

        .eva-hover:hover .eva-icon-hover-pulse,
        .eva-parent-hover:hover .eva-icon-hover-pulse {
            animation-name: eva-pulse;
        }

        .eva-hover:hover .eva-icon-hover-flip,
        .eva-parent-hover:hover .eva-icon-hover-flip {
            animation-name: eva-flipInY;
        }

        @keyframes eva-flipInY {
            from {
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                animation-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                animation-timing-function: ease-in;
            }

            60% {
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                opacity: 1;
            }

            80% {
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            }

            to {
                transform: perspective(400px);
            }
        }

        @keyframes eva-shake {

            from,
            to {
                transform: translate3d(0, 0, 0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translate3d(-3px, 0, 0);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translate3d(3px, 0, 0);
            }
        }

        @keyframes eva-pulse {
            from {
                transform: scale3d(1, 1, 1);
            }

            50% {
                transform: scale3d(1.2, 1.2, 1.2);
            }

            to {
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes eva-zoomIn {
            from {
                opacity: 1;
                transform: scale3d(0.5, 0.5, 0.5);
            }

            50% {
                opacity: 1;
            }
        }
    </style>
</head>


<body data-new-gr-c-s-check-loaded="8.900.0" data-gr-ext-installed="">

    <!-- <body data-layout="horizontal"> -->

    <div class="min-vh-100" style="background: url(assets/images/bg-2.png) top;">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center py-5 mt-5">
                        <div class="position-relative">
                            <h1 class="error-title error-text mb-0">404</h1>
                            <h4 class="error-subtitle text-uppercase mb-0">Opps, page not found</h4>
                            <p class="font-size-16 mx-auto text-muted w-50 mt-4">It will be as simple as Occidental in fact, it will Occidental to an English person</p>
                        </div>
                        @auth
                        <div class="mt-4 text-center">
                            <a class="btn btn-primary" href="{{route('home')}}">Back to Dashboard</a>
                        </div>
                        @endauth

                        @guest
                        <div class="mt-4 text-center">
                            <a class="btn btn-primary" href="{{route('welcome')}}">Back to Home</a>
                        </div>
                        @endguest
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end authentication section -->

    <!-- JAVASCRIPT -->
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/eva-icons/eva.min.js"></script>



</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
