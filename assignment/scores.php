<?php
session_start();
    if(isset($_SESSION["user"]))
    {
      $user=$_SESSION["user"];

    }

    $current_class_code = htmlspecialchars($_GET["code"]);
    // $user = "student@gmail.com";
	//$user = "pankti.n@somaiya.edu";
    //$user="jai.mehta@somaiya.edu";
?>
    <!DOCTYPE html>
    <html>
    

    <head>
        <title>Marks</title>
        <link rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="http://localhost/Paathshaala/teacher_dashboard/teacher_dashboard.php">PATHSHALA</a>
	  	<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
	        <a class="nav-link" href="javascript:history.go(-1)" title="Return to previous page">BACK TO CLASS<span class="sr-only">(current)</span></a>
	      </li>
  		</ul>
	</nav>
    
    </head>
    <body>
        <?php 
        
            $db = mysqli_connect('localhost','root','','Paathshaala') or die('Error connecting to MySQL server.');
            $query = "SELECT * FROM submission where class_code='$current_class_code' and email='$user'";
            $query1 = "SELECT * FROM assignment where class_code='$current_class_code'";
            $result = mysqli_query($db,$query); 
            $result1 = mysqli_query($db,$query1); 
            $row = "";
            $row1 = "";
            if ($result){
                if($result1){
                    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $row1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
                }
         
            //}//
        ?>
        
        <br>
        <br>
        <br>
        <div class=container>
        <table class="table table-hover">
            <thead>
                <tr class="bg-primary" style="color:white">
                  <th scope="col">No.</th>
                  <th scope="col">Assignment Title</th>
                  <th scope="col">Status</th>
                  <th scope="col">Total Marks</th>
                  <th scope="col">Marks Obtained</th>
                  
                  
                </tr>
            </thead>
            <tbody>
                      <?php  
                      $student_name = 'student name';
                      if($row){
                      for($i=0;$i<count($row);$i++){
                        
                          ?>
                          
                          <tr>
                        <td><?php echo ($i+1);?></td>
                        <td><?php echo $row1[$i]["title"];?></td>
                        <td><?php echo $row[$i]["status"];?></td>
                        <td><?php echo $row1[$i]["marks"];?></td>
                        <td><?php echo $row[$i]["marks"];?></td>

                        
    
                          </tr>
                      <?php 
                          }}
                      ?>
                      
                      
    
    
                      
            </tbody>
        </table>
        </div>
        <?php 
            mysqli_close($db);}
        ?>
        
        
        
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>

