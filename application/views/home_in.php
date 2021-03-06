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
                        <a href="<?php echo site_url("welcome/addjobForm");?>">Add song</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("welcome/allSongs");?>">All songs</a>
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
                <h1 class="page-header">SongUniverse
                    <small>Welcome to SongUniverse, a place for you to find out how your favourite songs are performing on the charts around the world. These charts include the Billboard Hot 100, The official UK top 40 and the Canadian Hot 100. Register for an account today to be able to submit your song.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->