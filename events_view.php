<!DOCTYPE html> 

<html>
<head>
<title>Donate Blood</title>
<link href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet" type="text/css">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link href="main.css" rel="stylesheet" >
<link href="responsive.css" rel="stylesheet" media="screen and(max-width: 960px)">

<link rel="stylesheet" type="text/css" href="DataTables-1.9.4/examples/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="DataTables-1.9.4/media/css/demo_table_jui.css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="DataTables-1.9.4/media/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	oTable=$('#tableeg').dataTable({
		"bJQueryUI":true,
		"sPaginationType":"full_numbers"
	});
		
	
	});
</script>
</head>
<body>
<div class="wrapper">

<?php include 'header.php'; ?>
<section>
<h3 style="color:white;">Events View </h3>
<h1 >Events View </h1>
        <table id="tableeg" class="display" style="font-size:14px; font-family:Arial, Helvetica, sans-serif" >
        <thead>
                    <tr>	
                        <th scope="col">Event Name</th>
                        <th scope="col">Event Date</th>
                        <th scope="col">Location</th>
                        <th scope="col">Event Description</th>
                    </tr>
        </thead>
        <tbody> <?php
                //make the database connection
                            include_once('config.php');
                            $conn  = db_connect();
                            //create an insert query 	
                            $sql = "SELECT * FROM events";
                            //echo 'here'; die();
                            $results = $conn->query($sql);
                
            while($data = $results->fetch_assoc()){;?> 
                
                    <tr>
                    
                        <td><?php echo $data['event_name'];?></td>
                        <td><?=$data['event_date'];?></td>
                        <td><?=$data['location'];?></td>
                        <td><?=$data['event_desc'];?></td>
                
                    </tr>
                 
          <?php };?>           
        </tbody>
        </table>
 
 </section>
<footer><h3>Blood donation is our human duty</h3>
</footer>
</div>

</body>
</html>
 


