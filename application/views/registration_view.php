<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to SongUniverse</title>

    <!-- Bootstrap Core CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />

    <!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/1-col-portfolio.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url("welcome/index");?>">SongUniverse</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Charts</a>
                    </li>
                    <li>
                        <a href="#">Create</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("welcome/registration");?>">Login/Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Oops! <small>Looks like you are not logged in yet, you need to log in to view this page, if you don't have an account you can simply create one below, its simple and fast. Enter your details and you are ready to go.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

    


	<?php echo form_open("welcome/login"); ?>
	<fieldset class="form-group">
	    <label for="exampleInputEmail1">Email:</label>
    	<input type="text" class="form-control" id="email" name="email" value="" />
	</fieldset>
	<fieldset class="form-group">
	    <label for="exampleInputPassword1">Password:</label>
		<input type="password" class="form-control" id="pass" name="pass" value="" />
		<br>
	<button type="submit" class="btn btn-primary">Sign in</button>
	</fieldset>
    <?php echo form_close(); ?>
<br>
<h1>Sign up for a Customer Account</h1>
<h2>It's free and anyone can join</h2>
<?php echo validation_errors('<p class="error">'); ?>
	<?php echo form_open("welcome/registration"); ?>
<fieldset class="form-group">
<label for="exampleInputEmail1">User Name:*</label>
<input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" /><span id="usr_verify" class="verify"></span>
</fieldset>
<label for="exampleInputEmail1">Your Email Address:*</label>
<input type="text" class="form-control" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" /><span id="email_verify" class="verify"></span>
<fieldset class="form-group">
<label for="exampleInputEmail1">Confirm your Email Address:</label>
<input type="text" class="form-control" id="confirm_email_address" name="confirm_email_address" value="<?php echo set_value('confirm_email_address'); ?>" /><span id="confirm_email_verify" class="verify"></span>
</fieldset>
<fieldset class="form-group">
<label for="exampleInputEmail1">Password:*</label>
<input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" /><span id="password_verify" class="verify"></span>
</fieldset>
<fieldset class="form-group">
<label for="exampleInputEmail1">Confirm Password:*</label>
<input type="password" class="form-control" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" /><span id="confrimpwd_verify" class="verify"></span>
</fieldset>
<fieldset class="form-group">
<label for="exampleInputEmail1">Address:</label>
<input type="text" class="form-control" id="address" name="address" value="<?php echo set_value('address'); ?>" /><span id="address_verify" class="verify"></span>
</fieldset>
<fieldset class="form-group">
<label for="exampleInputEmail1">City:</label>
<input type="text" class="form-control" id="city" name="city" value="<?php echo set_value('city'); ?>" /><span id="city_verify" class="verify"></span>
</fieldset>
<fieldset class="form-group">
<label for="exampleInputEmail1">Your Postcode:</label>
<input type="text" class="form-control" id="postcode" name="postcode" value="<?php echo set_value('postcode'); ?>" /><span id="postcode_verify" class="verify"></span>
</fieldset>
<button type="submit" class="btn btn-primary">Register</button>
	<?php echo form_close(); ?>   

<script type="text/javascript">
$(document).ready(function(){
	$("#user_name").keyup(function(){
		
        if($("#user_name").val().length >= 4)
        {
        
		$.ajax({
            type: "POST",
            url: "<?php echo base_url();?>index.php/user/check_user",
            data: "name="+$("#user_name").val(),
            success: function(msg){
                if(msg=="true")
                {
                    $("#usr_verify").css({ "background-image": "url('<?php echo base_url();?>images/yes.png')" });
                }
                else
			    {
                    $("#usr_verify").css({ "background-image": "url('<?php echo base_url();?>images/no.png')" });
                }
            }
        });
		 
		}
        else 
		{
            $("#usr_verify").css({ "background-image": "none" });
        }
    });
	
	$("#email_address").keyup(function(){
        var email = $("#email_address").val();
        
        if(email != 0)
        {
         
            if(isValidEmailAddress(email))
            {
               $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>images/yes.png')" });
               email_con=true;
               register_show();
            } else {
               
                $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>images/no.png')" });
            }
 
        }
        else {
            $("#email_verify").css({ "background-image": "none" });
        }

    });
	
	
	$("#password").keyup(function(){
        
        if($("#con_password").val().length >= 4)
        {
            if($("#con_password").val()!=$("#password").val())
            {
                $("#confrimpwd_verify").css({ "background-image": "url('<?php echo base_url();?>images/no.png')" }); 
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>images/no.png')" });
                pwd=false;
                register_show();
            }
            else{
                $("#confrimpwd_verify").css({ "background-image": "url('<?php echo base_url();?>images/yes.png')" }); 
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>images/yes.png')" });
            }
        }
    });
    
    $("#con_password").keyup(function(){
        
        if($("#password").val().length >=4)
        {
            if($("#con_password").val()!=$("#password").val())
            {
                $("#confrimpwd_verify").css({ "background-image": "url('<?php echo base_url();?>images/no.png')" }); 
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>images/no.png')" });
                pwd=false;
                register_show();
            }
            else{
                $("#confrimpwd_verify").css({ "background-image": "url('<?php echo base_url();?>images/yes.png')" }); 
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>images/yes.png')" });

            }
        }
    });
});
function isValidEmailAddress(emailAddress) {
 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 		return pattern.test(emailAddress);
	}
</script>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SongUniverse 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/jquery.js" />

    <!-- Bootstrap Core JavaScript -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap.min.js" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap.js" />
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/npm.js" />
</body>

</html>