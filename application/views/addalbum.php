<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Album</h4>
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
                                <form id="album_form" action="<?php echo base_url()?>index.php/album/addalbum" method="post" enctype="multipart/form-data">

                                <div class="form-group">

                                    <?php $data = array(
                                        'class'=>'form-control',
                                        'name'=>'albumtitle',
                                        'placeholder'=>'Title',
                                        'id' => 'albumtitle'
                                    );
                                    ?>
                                    <?php echo form_input($data); ?>
                                </div>
                                    <div class="form-group">
                                        <select name="genre" id="genre" class="form-control">
                                            <option value="1">Folk</option>
                                            <option value="2">Classical</option>
                                            <option value="3">Hip Hop</option>
                                            <option value="4">Pop</option>
                                            <option value="5">Rapping</option>
                                        </select>
                                    </div>
                                <div class="form-group"style="display: none">
                                    <input type="file" id="upload-album-image" name="upload-album-image" required class="form-control" >
                                </div>
                                <div class="form-group">
                                    <button type="button" id="btn-upload-image" class="btn btn-lg btn-success" onclick="upload_album_image()" style="width: 100%">Upload Album Image</button>
                                </div>
                                <div class="form-group"style="display: none">
                                    <input type="file" name="upload-song[]" id="upload-song" multiple required class="form-control" >
                                </div>
                                <div class="form-group">
                                    <button type="button" id="btn-upload-song" class="btn btn-lg btn-primary" onclick="upload_song()" style="width: 100%">Upload Songs</button>
                                </div>

                                <div class="form-group">
                                    <input name="releasedate" type="text" placeholder="Release Date" id="datepicker" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="albumprice" id="albumprice" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <textarea id="album-comment" class="form-control" rows="5" placeholder="Anything About This Album"></textarea>
                                </div>
                                <div class="form-group clearfix">
                                    <button type="button" class="btn btn-primary btn-lg" style="width: 50%;" onclick="addalbum()">Save</button>
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

