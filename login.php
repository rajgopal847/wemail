<?php
ob_start();
error_reporting(1);
session_start();
include_once('connection.php');
//var_dump($_POST);
if(isset($_POST['pwd']))
{
  //echo 'here';
	if($_POST['id']=="" || $_POST['pwd']=="")
	{
	  $err="Enter your id and password";
	}
	else
	{
	$d=mysqli_query($con,"SELECT * FROM userinfo where user_name='{$_POST['id']}'");
	$row=mysqli_fetch_object($d);
		$fid=$row->user_name;

		$fpass=$row->password;
		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
		{
		$_SESSION['sid']=$_POST['id'];
		header('Location:HomePage.php');
		//exit();
		//echo "<form actixon='HomePage.php'>";
		}
		else
		{
		$err="Invalid id or password";
		}
	}
}
?>

     
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="jQsrc.js" ></script>
    <style type="text/css">
    
    #main {
      background-color: #CCFFFF;
      background-size: cover;
      height: auto;

      overflow: hidden;
    }

      .jumbotron{
        background-color: transparent;
      padding-top: 100px;
        margin-left: auto;
        margin-right: auto;
        color: black;
        
        
      }
      
      .form-group{
        
        width: 340px;
        margin-left: auto;
        margin-right: auto;
       
        
        
      }

      .alert{
      
        width: 400px;
        display: none;
        margin-left: auto;
        margin-right: auto;
        
      }
      
      .nav-item{
      padding-left: 55px;
      
    }
      
      
      
      
      
    </style>
<body>

    <div id="main">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WeMail</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php" class="headings">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="aboutus.php" class="headings">About Us</a>
      </li>
    
     <li class="nav-item active">
        <a class="nav-link" href="login.php" class="headings">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="regis.php" class="headings">NewUser?</a>
      </li>
     
     
      
    </ul>
  
    
  </div>
</nav>
<style>
.buttonStyle:hover { background: #0000ff;
color: #ffffff; 
font-size="12px";}

</style>

<style>
.button {
  border-radius: 4px;
  background-color: #660066;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button :after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover  {
  padding-right: 25px;
}

.button:hover  {
	background: #0000ff;
color: #ffffff; 
  opacity: 1;
  right: 0;
}
</style>
      <div class="jumbotron text-center ">
        
        <div class="alert alert-warning alert-dismissible fade show" role="alert"  >
        <?php    
       echo $alert;
        ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
        <h1 class="display-4" style="font-weight:600;">WeMail</h1>
        <h4 class="lead" style="font-weight:600;"></h4>
       
        
        
        
        
        
        
    <form method="post" id="loginForm">
          <div class="form-group">
          <p>Log in using your username and password.</p>
          <p><center><font color="#FF0000"><?php echo @$err; ?></font></center></p>
          <input type="text" name="id" class="form-control" id="id"  placeholder="Enter username">
          <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
          </div>
          <div class="form-group">
          
          <input type="password" name="pwd" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-check">
          <input type="checkbox" class="form-check-input" id="stayloggedin" name="stayloggedin">
          <label class="form-check-label" for="stayloggedin">Stay logged in</label>
          </div><br>
          
          
          <button type="submit" name="submit" class="btn btn-primary" name="signIn">Login</button>
          
          <p>&nbsp;</p>
      <p>&nbsp;</p>
          
        </form>
        
    
        
        
      </div>
<!-- <form action="" method="post"><br>
<br><br><h2 style="background:#99FF33;padding:5px" style= "font-family: Calibri" align="center">Login</h2><style>p.small {  line-height: 2;}</style><br><br>
<table width="100%" border="1" align="center">
  	
		<Td colspan="2" align="center"> <font color="#FF0000"><?php echo @$err; ?></font></Td>
	
  <tr>
    <th  scope="row">Enter your id </th>
    <td >
		<input type="text" name="id" />
	</td>
  </tr>
  <tr>
    <th scope="row">Enter your password </th>
    <td>
			<input type="password" name="pwd" />
	</td>
  </tr>
  <tr>
    <th colspan="2" scope="row">
	<input type="submit" class="button" value="Sign in" name="signIn"/><br>
		</th>
  </tr>
</table>
</form> -->
</div>

</body>