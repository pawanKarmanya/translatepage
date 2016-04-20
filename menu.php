<?php include 'pass.php';?>
<!doctype html>
<html>
    
    <head><title>Translate Page</title>
    
    
        <link href="css/bootstrap.min.css" rel="stylesheet">


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav><?php include 'dashboard.php';?></nav>
        <div class="col-md-4 col-md-offset-3">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>S No</th>
                    <th>Menu</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><?php echo $lang['coffee'];?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><?php echo $lang['pizza'];?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><?php echo $lang['burger'];?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><?php echo $lang['icecream'];?></td>
                </tr><tr>
                    <td>5</td>
                    <td><?php echo $lang['rice'];?></td>
                </tr>
                
                
            </table>
            
        </div>
        </div>
    </body>
</html>