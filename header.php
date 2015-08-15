<!doctype html>
<html>

<head>
    <title>Contact Manager</title>
    <link rel="stylesheet" href="/contact_manager/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/contact_manager/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/contact_manager/assets/css/style.css">

</head>

<body>
    <!--   Main Container-->
    <div class="wrapper container-fluid">
        <!--       Header-->
        <header>
            <div class="container-fluid">
                <!--                Navigation Main-->
                <nav class="navbar navbar-default nav-main navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-content">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#" class="navbar-brand brand-custom">CM</a>
                        </div>
                        <!--                        Navigation Contents-->
                        <div class="collapse navbar-collapse" id="nav-content">
                            <ul class="nav navbar-nav navbar-center col-sm-8">
                                <li class="col-sm-12">
                                    <form class="navbar-form navbar-form-custom" role="search">
                                        <div class="form-group input-group input-group-lg  col-sm-10">
                                            <!--
                                                                      Search Field-->
                                            <input type="text" class="form-control" placeholder="Search Contacts..." id="search_input" name='search'>
                                            <span class="input-group-btn input-custom">
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>

                                            <!--<div class="search-result">-->

                                            <!--                                                <h2>Testing</h2>-->
                                        </div>
                                    </form>
                                    <div class="search-result">
                                        <ul>
                                            <li><a href="#">No Suggestion</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--                            Nav-Log-->
                            <ul class="nav navbar-nav navbar-custom">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#login">
                                        <i class="fa fa-sign-in fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#register">
                                        <i class="fa fa-user-plus fa-2x"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--        Sidebar-->
        <div class="sidebar">
            <div class="sidebar-container">
                <div class="sidebar-content">
                    <div data-toggle="tooltip" title="Home"><a href="#"><i class="fa fa-home"></i></a>
                    </div>
                    <div data-toggle="tooltip" title="Add Contact"><a href="#" data-toggle="modal" data-target="#add-contact"><i class="fa fa-user-plus"></i></a>
                    </div>
                    <div data-toggle="tooltip" title="View All"><a href="#"><i class="fa fa-users"></i></a>
                    </div>
                    <div data-toggle="tooltip" title="Import"><a href="#"><i class="fa fa-file"></i></a>
                    </div>
                    <div data-toggle="tooltip" title="Backup"><a href="#"><i class="fa fa-history"></i></a>
                    </div>
                </div>
            </div>
            <!--            toggle view-->
            <div class="options" data-toggle="tooltip" title="Toggle Sidebar"><a href="#"><i class="fa fa-arrow-left"></i></a>
            </div>
        </div>
