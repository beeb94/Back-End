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
                <h1 class="page-header">Thanks <small>for registering. Now you can login with your email address and password.</small>
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