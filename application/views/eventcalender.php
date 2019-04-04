

<!-- eventss -->
<section id="events" class="padding-bottom">
    <div class="container">
        <!-- Trigger the modal with a button -->
        <div style="padding-top: 30px">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Event</button>
        </div>

        <!-- Modal -->
        <?php $this->load->view('addevent')?>
        <!-- Modal -->
        <div class="row">
            <?php foreach ($event->result() as $row) {?>
                <div class="col-sm-6 col-md-4">
                    <div class="events margin_top wow fadeIn" data-wow-delay="300ms">
                        <div class="image">
                            <img src="<?php echo base_url()?>assets/img/latestedevent.jpg" alt="eventss" class="border_radius">
                        </div>
                        <h4 class="top30"><a href="#"><?php echo $row->bandname?></a></h4>
                        <div class="clearfix">
                            <ul class="comment pull-left">
                                <li><a href="#." class="facebook"><i class="fa fa-location-arrow"></i> <?php echo $row->location?></a></li>
                            </ul>
                            <ul class="comment pull-right">
                                <li><a href="#." class="facebook"><i class="fa fa-clock-o"></i> <?php echo $row->datetime?></a></li>
                            </ul>
                            <br>
                            <ul class="text-center">
                                <li><button class="btn btn-default" id="<?php echo $row->id;?>" onclick="Going(this.id)">Going</button> </li>
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