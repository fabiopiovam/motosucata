<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MotoSucata - Administração</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }
        </style>
        <link href="/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="/ico/favicon.png">
        @yield('head')
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="/admin">MotoSucata</a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            Logged in as <a href="#" class="navbar-link">Username</a>
                        </p>
                        <ul class="nav">
                            <li class="active">
                                <a href="/admin/products">Produtos</a>
                            </li>
                            <li>
                                <a href="/admin/categories">Categorias</a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    @yield('content')
                </div><!--/span-->
            </div><!--/row-->

            <hr>

            <footer>
                <p>
                    <a href="/">&copy; motosucata.biz</a>
                </p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/bootstrap-alert.js"></script>
        <script src="/js/bootstrap-modal.js"></script>
        <script src="/js/bootstrap-dropdown.js"></script>
        <script src="/js/bootstrap-scrollspy.js"></script>
        <script src="/js/bootstrap-tab.js"></script>
        <script src="/js/bootstrap-tooltip.js"></script>
        <script src="/js/bootstrap-popover.js"></script>
        <script src="/js/bootstrap-button.js"></script>
        <script src="/js/bootstrap-collapse.js"></script>
        <script src="/js/bootstrap-carousel.js"></script>
        <script src="/js/bootstrap-typeahead.js"></script>
        @yield('script')
    </body>
</html>
