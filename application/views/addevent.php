<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Event</h4>
            </div>
            <div class="modal-body">
                <?php $attributes = array('id'=>'login_form','class'=>"form-horizontal")?>

                <div class="auth-body">
                    <div class="container">
                        <?php if($this->session->flashdata('errors')): ?>
                            <?php echo $this->session->flashdata('errors') ?>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('message')): ?>
                            <div class="alert alert-danger">
                                <strong>You are not registered!</strong> Try using another email
                            </div>
                        <?php endif; ?>
                        <div class="row" style="padding: 45px">
                            <div class="col-xs-12 col-md-6 col-lg-5">
                                <?php echo form_open('users/registration',$attributes); ?>

                                <div class="form-group">

                                    <?php $data = array(
                                        'class'=>'form-control',
                                        'name'=>'name',
                                        'placeholder'=>'Band Name',
                                        'id' => 'bandname'
                                    );
                                    ?>
                                    <?php echo form_input($data); ?>
                                </div>
                                <div class="form-group">

                                    <?php $data = array(
                                        'class'=>'form-control',
                                        'name'=>'event-location',
                                        'placeholder'=>'Location',
                                        "required"=>"required",
                                        'id' => 'location'
                                    );
                                    ?>
                                    <?php echo form_input($data); ?>
                                </div>

                                <div class="form-group">
                                    <input name="event-date" placeholder="Date" id="datepicker" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="time" id="eventtime" class="form-control" value="13:00">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="eventcomment" rows="5" placeholder="Anything About Your Event"></textarea>
                                </div>
                                <div class="form-group clearfix">
                                    <button type="button" class="btn btn-primary btn-lg" style="width: 50%;" onclick="addevent()">Save</button>
                                </div>

                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

