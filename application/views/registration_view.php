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
                       <a href="<?php echo site_url("welcome/addjobForm");?>">Add song</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("welcome/allSongs");?>">All songs</a>
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

