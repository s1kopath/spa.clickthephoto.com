<?php include('login_header.php'); ?>

<body>


    <div class="container">
	
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel panel panel-red">
				
				<div class="text-center">
                <span style="color:blue; font-size:18px;"><img src="img/itm.png" alt="" />
				<br>YOUR SMART SOFTWARE PARTNER</bold></span><br><br>
                </div>
				
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="fa fa-times-circle"></span> Access Failed</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <h3 class="alert alert-danger"><center><span class="fa fa-exclamation-triangle"></span> Login Invalid</center></h3>
                                </div>
                                <a href="index.php" class="btn btn-lg btn-danger btn-block"><span class="fa fa-repeat"></span> Try again</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('scripts.php'); ?>
	
</body>

</html>
