<?php $attributes = array('id'=>'login_form','class'=>"form-horizontal")?>

<div class="auth-body">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-5">
                <br>
                <br>
                <br>
                <div class="alert alert-danger alert-danger-class" id="alert-danger">
                </div>
                <?php if($this->session->flashdata('message')):?>
                    <div class="alert alert-success">
                        <strong>Successfully registered!</strong> Now Login to place an order
                    </div>
                <?php endif; ?>
                <label style="margin-bottom: 10px">I am not an artist <a href="<?php echo base_url()?>index.php/home/login" style="color: orange;padding-left: 10px">Login here</a></label>
                <br>
                <h3 class="heading" style="border-bottom:5px solid orangered;margin-bottom: 20px">Artist Login</h3>

                <?php echo form_open('artist/login',$attributes); ?>

                <div class="form-group">

                    <?php $data = array(
                        'class'=>'form-control',
                        'name'=>'useremail',
                        'placeholder'=>'Your Email',
                        'id' => 'username-field'
                    );
                    ?>
                    <?php echo form_input($data); ?>
                </div>

                <div class="form-group">

                    <?php $data = array(
                        'class'=>'form-control',
                        'name'=>'password',
                        'placeholder'=>'Password',
                        'id' => 'password-field'
                    );
                    ?>
                    <?php echo form_password($data); ?>
                </div>
                <div class="form-group" id="forgot-password-parent">
                    <div class="checkbox">
                        <label for="rememberMe"><input type="checkbox" name="remember" id="rememberMe">Remember password</label>
                    </div>
                    <a href="https://www.findtranscript.com/forgotpassword.php" id="forgot-password"><h4>Forgot password?</h4></a>
                </div>
                <div id="button-position">
                    <div class="form-group auth-last-row clearfix">
                        <button type="button" class="btn btn-primary btn-lg" id="btn-loginid" onclick="LoginCheck()">Login</button>
                    </div>
                    <div class="form-group clearfix forgot-password">
                        <a class="btn btn-lg btn-success " id="btnregisterid" href="<?php echo base_url()?>index.php/home/signup">Register</a>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>