<!-- Artist -->

<section id="events" class="padding-bottom">
    <div class="container">
        <div class="row">
            <?php foreach ($artist->result() as $row) {?>
            <div class="col-sm-6 col-md-4">
                <div class="events margin_top wow fadeIn" data-wow-delay="300ms">
                    <div class="image">
                        <img src="<?php echo $row->imageurl?>" alt="eventss" class="border_radius">
                    </div>
                    <h4 class="top30"><a href="#"><?php echo $row->name?></a></h4>
                    <div class="clearfix">
                        <ul class="comment pull-left">
                            <li><a href="#." class="facebook"><i class="fa fa-5x fa-facebook-square"></i> Facebook</a></li>
                        </ul>
                        <ul class="comment pull-right">
                            <li><a href="#." class="facebook"><i class="fa fa-4x fa-google-plus-square"></i> Google+</a></li>
                        </ul>
                        <br>
                        <ul class="text-center">
                            <li><button class="btn btn-default" id="<?php echo $row->id;?>" onclick="FollowArtist(this.id)">Following</button> </li>
                        </ul>
                    </div>
                    <h4><span id="artist-album-title">Albums</span></h4>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<!-- Artist -->