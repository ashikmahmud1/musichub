<!-- eventss -->
<section id="events" class="padding-bottom">
    <div class="container">
        <?php if ($this->session->userdata('is_artist')):?>
            <!-- Trigger the modal with a button -->
            <div style="padding-top: 30px">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Album</button>
            </div>

            <!-- Modal -->
            <?php $this->load->view('addalbum')?>
            <!-- Modal -->
        <?php endif; ?>
        <div class="row">
            <?php foreach ($album->result() as $row) {?>
                <div class="col-sm-6 col-md-4">
                    <div class="events margin_top wow fadeIn" data-wow-delay="300ms">
                        <div class="image">
                            <?php $changeimageurl = base_url()."albumfiles/".$row->imageurl;
                            echo "<img src='$changeimageurl' alt='eventss' class='border_radius' >";
                            ?>
                        </div>
                        <h4 class="top30"><a href="#"><?php echo $row->title?></a></h4>
                        <div class="clearfix">
                            <ul class="comment pull-left">
                                <li><a href="#." class="facebook"><i class="fa fa-5x fa-facebook-square"></i> Facebook</a></li>
                            </ul>
                            <ul class="comment pull-right">
                                <li><a href="#." class="facebook"><i class="fa fa-4x fa-google-plus-square"></i> Google+</a></li>
                            </ul>
                            <br>
                            <ul class="text-center">
                                <li><a class="btn btn-default" href="<?php echo base_url()?>index.php/album/albumdetails/<?php echo $row->id;?>">Details</a> </li>
                            </ul>
                        </div>
                        <h4><span id="artist-album-title">Albums</span></h4>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>
<!-- events -->