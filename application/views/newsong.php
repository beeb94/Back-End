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
                <a class="navbar-brand" href="<?php echo site_url("welcome/index_in");?>">SongUniverse</a>
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
                    <a href="<?php echo site_url("welcome/logout");?>">Logout</a>
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
                <h1 class="page-header">Welcome User<small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
<?php echo validation_errors('<p class="error">'); ?>
	<?php echo form_open("welcome/addsong"); ?>
        <fieldset class="form-group">
	<label for="exampleInputEmail1">Song Title:</label>
	<input type="text" class="form-control" id="song_title" name="song_title" value="<?php echo set_value('song_title'); ?>" /></fieldset>
	<fieldset class="form-group">
	<label for="exampleInputEmail1">Artist:</label>
	<input type="text" class="form-control" id="artist" name="artist" value="<?php echo set_value('artist'); ?>" />
	</fieldset>
	<fieldset class="form-group">
	<label for="exampleInputEmail1">Name of Album:</label>
	<input type="text" class="form-control" id="album" name="album" value="<?php echo set_value('album'); ?>" />
	</fieldset>
	<fieldset class="form-group">
	<label for="exampleInputEmail1">Billboard Hot 100 Position:</label>
	<input type="text" class="form-control" id="BBHOT100" name="BBHOT100" value="<?php echo set_value('BBHOT100'); ?>" />
	</fieldset>
	<fieldset class="form-group">
	<label for="exampleInputEmail1">UK Top 40 Position:</label>
	<input type="text" class="form-control" id="UKTOP40" name="UKTOP40" value="<?php echo set_value('UKTOP40'); ?>" />
	</fieldset>
			<input type="submit" class="btn btn-primary" value="Submit" />
	<?php echo form_close(); ?>