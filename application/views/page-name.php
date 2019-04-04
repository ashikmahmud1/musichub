<!--Page Header-->
<section class="page_header padding-top"

         style="background:url(<?php echo base_url().'assets/img/city.jpg'?>) no-repeat;
                 background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">

                <?php
                if(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/artist/artists') == 0)
                {
                    echo '<h1>Artist</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Artists</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/about') == 0)
                {
                    echo '<h1>About Us</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>About Us</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/album') == 0)
                {
                    echo '<h1>Albums</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Albums</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/events') == 0)
                {
                    echo '<h1>Events</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Events</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/contact') == 0)
                {
                    echo '<h1>Contact Us</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Contact Us</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/login') == 0)
                {
                    echo '<h1>Login</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Login</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/signup') == 0)
                {
                    echo '<h1>Sign Up</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Sign Up</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/eventcalender') == 0)
                {
                    echo '<h1>Events Calender</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Events Calender</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/myupcomingalbum') == 0)
                {
                    echo '<h1>Upcoming Albums</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Upcoming Albums</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/popular') == 0)
                {
                    echo '<h1>Popular Albums</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Popular Albums</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/album/albumdetails') == 0)
                {
                    echo '<h1>Album Details</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Album Details</span>
                        </div>';
                }
                elseif(strcmp($_SERVER['REQUEST_URI'],'/Musichub/index.php/home/artistlogin') == 0)
                {
                    echo '<h1>Artist Login</h1>';
                    echo "<p>We offer the most complete house renovating services in the country</p>";
                    echo '<div class="page_nav">
                         <span>You are here:</span> 
                         <a href="#">Home</a> 
                         <span><i class="fa fa-angle-double-right"></i>Album Details</span>
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->