
<!DOCTYPE html>
<html>
<head>
    <title>MusicHub</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/edua-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/loader.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery-ui.css">

    <link rel="icon" href="<?php echo base_url()?>assets/img/favicon.png">
</head>
<body>
<?php $this->load->view('layout/header');?>
<!--Search-->
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="Search here...."  required/>
        <button type="submit" class="btn btn_common blue">Search</button>
    </form>
</div>

<?php
if(strcmp($main_view,'main-page') == 0)
{
    $this->load->view('revolution-slider');
    $this->load->view($main_view);
}
else
{
    $this->load->view('page-name');
    $this->load->view($main_view);
}
?>


<?php $this->load->view('layout/footer');?>




<script src="<?php echo base_url()?>assets/js/jquery-2.2.3.js"></script>
<script src="<?php echo base_url()?>assets/jqueryui/jquery-ui.min.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="<?php echo base_url()?>assets/js/gmaps.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootsnav.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.appear.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery-countTo.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.parallax-1.1.3.js"></script>
<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url()?>assets/js/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url()?>assets/js/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url()?>assets/js/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url()?>assets/js/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url()?>assets/js/revolution.extension.video.min.js"></script>
<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url()?>assets/js/functions.js"></script>


<script type="text/javascript">
    $( function() {
        $( "#datepicker" ).datepicker();
    } );

    function _(el)
    {
        return document.getElementById(el);
    }
    function addevent()
    {
        var band_name = _("bandname").value;
        var location = _("location").value;
        var date = _("datepicker").value;
        var time = _("eventtime").value;
        var comment = _("eventcomment").value;

        var errors = 0;
        if (band_name ==="")
        {
            errors++;
        }
        if(location === "")
        {
            errors++
        }
        if(date == "")
        {
            errors++
        }
        if (time ==="")
        {
            errors++
        }
        if (errors == 0) {
            var xmlhttp = new XMLHttpRequest();
            var formdata = new FormData();
            formdata.append('bandname', band_name);
            formdata.append('location', location);
            formdata.append('event-date', date);
            formdata.append('event-time', time);
            formdata.append('event-comment',comment);

            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }
            };
            xmlhttp.open("POST", "<?php echo base_url()?>index.php/event/addevent", true);
            xmlhttp.send(formdata);
        }
        else
        {
            alert("All fields are required");
        }
    }
    function FollowArtist(id) {
        <?php if ($this->session->userdata('logged_in')):?>
        <?php if ($this->session->userdata('is_user')):?>
        var followbutton = _(id);
        var xmlhttp = new XMLHttpRequest();
        var formdata = new FormData();
        formdata.append('artist-id',id);
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var backgrouncolor = this.responseText;
                var attributestring = "background-color:"+backgrouncolor+";color:#fff;";
                followbutton.setAttribute("style",attributestring);
                alert(this.responseText);
            }
        };
        xmlhttp.open("POST", "<?php echo base_url()?>index.php/artist/followartist", true);
        xmlhttp.send(formdata);
        <?php else: ?>
        alert('You can not follow an artist');
        <?php endif; ?>
        <?php else: ?>
        alert('You have to logged in to follow an artist');
        <?php endif; ?>
    }
    function addalbum() {
        var errors = 0;

        var title = _("albumtitle").value;
        var files = _("upload-song").files;
        var releasedate = _("datepicker").value;
        var album_image = _("upload-album-image").files[0];
        var price = _("albumprice").value;

        if (title === "")
        {
            errors++;
        }
        if (releasedate === "")
        {
            errors++;
        }
        if (price ==="")
        {
            errors++;
        }

        if(files.length == 0)
        {
            errors++;
        }
        if (album_image === null)
        {
            errors++;
        }

        if(errors == 0)
        {
            _("album_form").submit();
        }
        else
        {
            alert("All Fields Required *")
        }

    }
    function upload_song() {
        var files = _("upload-song");
        files.click();
    }
    function upload_album_image() {
        _("upload-album-image").click();
    }
    function upload_profile_picture() {
        _("profile-picture").click();
    }
    function LoginCheck() {
        _('login_form').submit();
    }
    _("signup-button").addEventListener('click',function () {
        var errors = 0;
        var register_name = _("register-name").value;
        var register_email = _("register-email").value;
        var gender = _("gender").value;
        var phoneno = _("phoneno").value;
        var password = _("register-password").value;
        var confirm_password = _("register-confirm-password").value;
        var profile_picture = document.getElementById('profile-picture').files[0];


        if(register_name == "")
        {
            errors++;
        }
        if (register_email == "")
        {
            errors++;
        }
        if(phoneno == "")
        {
            errors++;
        }
        if (password != confirm_password)
        {
            errors++;
        }
        if (profile_picture.name == "")
        {
            errors++;
        }
        if(gender == "")
        {
            errors++;
        }
        if (errors == 0)
        {
            _("registration_form").submit();
        }

    });
    function shownotification() {
        console.log("Notification Showing");
    }
    function Going() {
        alert("You are going to the event");
    }
</script>
</body>
</html>