

<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="social_top pull-right">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="icon-twitter4"></i></a></li>
                    <li><a href="#."><i class="icon-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--Header-->
<header>
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
        <div class="container">
            <div class="search_btn btn_common"><i class="icon-icons185"></i></div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>index.php/home"><img src="<?php echo base_url()?>assets/img/logo-1.png" alt="logo" class="logo logo-display">
                    <img src="<?php echo base_url()?>assets/img/logo-1.png" class="logo logo-scrolled" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
                    <li class="dropdown">
                        <a href="<?php echo base_url()?>index.php/home/index" >Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/home/about">About Us</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/artist/artists">Artists</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Albums</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>index.php/home/album">Albums</a></li>
                            <li><a href="<?php echo base_url()?>index.php/home/myupcomingalbum">My Upcoming Albums</a></li>
                            <li><a href="<?php echo base_url()?>index.php/home/popular">Popular Albums</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >events</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>index.php/home/events">Events</a></li>
                            <li><a href="<?php echo base_url()?>index.php/home/eventcalender">Events Calender</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url()?>index.php/home/contact">Contact Us</a></li>
                    <li class="dropdown">
                        <a href="#" onmouseenter="shownotification()"><i class="fa fa-bell" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu shownotification" id="shownotification">
                        </ul>
                    </li>
                    <?php if($this->session->userdata('logged_in')):?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Profile</a>
                            <ul class="dropdown-menu">
                                <li style="text-transform: lowercase;"><a href="<?php echo base_url()?>index.php/users/profile"><?php echo $this->session->userdata('useremail')?></a></li>
                                <li><a href="<?php echo base_url()?>index.php/users/logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                    <li><a href="<?php echo base_url()?>index.php/home/login">Login</a></li>
                    <li><a href="<?php echo base_url()?>index.php/home/signup">Sign Up</a></li>

                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</header>