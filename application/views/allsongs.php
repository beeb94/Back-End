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
                <h1 class="page-header">Welcome User<small><a href="<?php echo site_url("welcome/addjobForm");?>">Add song</a><a href="<?php echo site_url("welcome/allSongs");?>">All songs</a></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
<table class="table table-condensed">
    <thead>
  <tr>
 <th>ID</th>
<th>Song Title</th>    
<th>Artist</th>    
<th>Album</th>
<th>BBHOT100</th>
<th>UKTOP40</th>
<th>Delete</th>
</tr>
    </thead>

	<?php 

      foreach($jobs->result() as $row) 
{
 echo "<tr>";
 echo "<td>".$row->song_id."</td>";
 echo "<td>".$row->song_title."</td>";
 echo "<td>".$row->artist."</td>";
 echo "<td>".$row->album."</td>";
 echo "<td>".$row->BBHOT100."</td>";
 echo "<td>".$row->UKTOP40."</td>";
 echo "<td>". anchor('welcome/del/'.$row->song_id,'Delete') ."</td>"; 

      }echo "</tr>";
      
echo "</ul>";?>
 </table>