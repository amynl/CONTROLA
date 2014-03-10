<?php

?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.php';?>
    
    <body class="cover">

        <div class="wrapper">

           <?php include 'includes/banner.php';?>

            <!-- BODY -->
            <div class="body">

                <?php include 'includes/menu.php';?>

                <section class="content">
                    
<ol class="breadcrumb">
    <li class="active"><i class="fa fa-home fa-fw"></i> Home</li>
</ol>

<div class="header">
    <div class="col-md-12">
        <h3 class="header-title">Update Script</h3>
        <p class="header-info">Firmware update</p>
    </div>
</div>

<!-- CONTENT -->
<div class="main-content">
	 <div class="row">
        <div class="col-md-12">
            <div class="panel ">
                <div class="panel-heading">
                    <h3 class="panel-title">Update</h3>
                </div>
                <div class="panel-body">

                	<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check-circle"></i>
                            <?php 
		                	exec("curl https://bitbucket.org/api/1.0/repositories/purplefox/hashra-public-firmware" , $out);
		                	$obj = json_decode($out[0]);
		                	
		                	$age =   getlastmod() - strtotime($obj->last_updated) ;
		                	
		                	if ($age > 0 ) {
								echo "<p>You have the most current version</p>";
								
							}else {
								echo "A newer version is available, do you want to Update? <br/>";
							}
		                	?>
		               </div>
					 <a href="doupdate.php" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Update!
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal hide fade in">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">�</a>
        <h3>Update console</h3>
    </div>
    <div class="modal-body"></div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Save"/>
    </div>
</div>
<!-- END: CONTENT -->
                </section>
            </div>
            <!-- END: BODY -->
        </div>

       <?php include 'includes/footer.php';?>
    </body>
</html>