<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Flawless Pool Services | Elk Grove';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?> |
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        'normalize.min',
        'milligram.min',
        'cake',
        'responsive',
        'style',
        'theme-dark',
        'magnific-popup',
        'meanmenu',
        'animate.min',
        'boxicons.min',
        'flaticon.min',
        'owl.carousel.min',
        'owl.theme.default.min',
        'bootstrap.min',
        'responsive',
        'nice-select.min'
    ])
    ?>


    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body>
    <nav class="top-nav">
         <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html"
                     class="logo">
                    <img src="assets/img/footer-logo.png"
                     alt="Logo">
                 </a>
             </div>

                <!-- Menu For Desktop Device -->
             <div class="pizi-nav main-nav">
                 <div class="col-sm-2"></div>
                    <div class="container-fluid">
                      <nav class="container-max navbar navbar-expand-md navbar-light ">
                    <div class="collapse navbar-collapse mean-menu"
                         id="navbarSupportedContent">
                        <a class="navbar-brand"
                           href="index.html">
                            <img src="assets/img/logo-white.png"
                                 style="width: 200px; height: auto;"
                                 alt="Logo">
                        </a>

                        <a class="navbar-brand-2"
                           href="index.html">
                            <img src="assets/img/logo.png"
                                 style="width: 75px; height: auto;"
                                 alt="Logo">
                        </a>

                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a href="index.html"
                                   class="nav-link active">
                                    Home

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html"
                                   class="nav-link">
                                    About
                                    <i class='bx bx-chevron-right'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="services.html"
                                   class="nav-link">
                                    Pool Cleaning
                                    <i class='bx bx-chevron-right'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="gallery.html"
                                   class="nav-link">
                                    Gallery
                                    <i class='bx bx-chevron-right'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html"
                                   class="nav-link">
                                    Contact Us
                                    <i class='bx bx-chevron-right'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="blog.html"
                                   class="nav-link">
                                    Our Blog
                                    <i class='bx bx-chevron-right'></i>
                                </a>
                            </li>
                        </ul>



                        <div class="other-side">
                            <div class="search-area">
                                <div class="other-option">
                                    <div class="search-item">
                                        <a href="#search-item"
                                           class="search-btn text-color">
                                            <i class="flaticon-search"></i>
                                        </a>
                                        <i class="close-btn bx bx-x"></i>
                                        <div class="search-overlay search-popup">
                                            <div class="search-box">
                                                <form class="search-form">
                                                    <input class="search-input"
                                                           name="search"
                                                           placeholder="Search"
                                                           type="text">
                                                    <button class="search-button"
                                                            type="submit">
                                                        <i class="flaticon-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Start Sidebar Modal -->
    <div class="sidebar-modal">
        <div class="modal left fade"
             id="myModal2"
             tabindex="-1"
             role="dialog"
             aria-labelledby="myModalLabel2">
            <div class="modal-dialog2 modal-dialog"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">
                                <i class="bx bx-x"></i>
                            </span>
                        </button>
                        <h2 class="modal-title"
                            id="myModalLabel2">
                            <a href="index.html">
                                <img src="assets/img/logo.png"
                                     alt="Logo">
                            </a>
                        </h2>
                    </div>

                    <div class="modal-body">
                        <div class="sidebar-modal-widget">
                            <h3 class="title">About Us</h3>
                            <p>Dirty pool? Flawless Pool Services has a solution! Call or text today to schedule your
                                next pool cleaning.</p>
                            <p>We currently serve the great folks of Elk Grove California and the surrounding areas.</p>
                        </div>
                        <div class="sidebar-modal-widget">
                            <h3 class="title">Blogs</h3>
                            <div class="modal-widget-blog">
                                <ul>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/1.jpg"
                                                 alt="Blog Images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/2.jpg"
                                                 alt="Blog Images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">

                                            <img src="assets/img/blog/3.jpg"
                                                 alt="Blog Images">
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/3.jpg"
                                                 alt="Blog Images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/1.jpg"
                                                 alt="Blog Images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/2.jpg"
                                                 alt="Blog Images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/3.jpg"
                                                 alt="Blog Images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/1.jpg"
                                                 alt="Blog Images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/2.jpg"
                                                 alt="Blog Images">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>


                    <div class="modal-body">
                        <h3 class="title">Connect With Us</h3>
                        <ul class="social-list">
                            <li>
                                <a href="https://www.yelp.com/biz/flawless-pool-services-sacramento-2?start=20">
                                    <i class="bx bxl-yelp"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/flawlesspoolservices/?hl=en">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Sidebar Modal -->
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>