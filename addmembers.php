<html>
<head>
	<link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">House Rental Management System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Houses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="houses.php">Houses</a></li>
            <li><a href="rating.php">Rating</a></li>
          </ul>
        </li>

        <li><a href="owner.php">Owners</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tenants<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tenant.php">Tenants</a></li>
            <li><a href="members.php">Members</a></li>
          </ul></li>
        <li><a href="booking.php">Booking</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

         
        <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<center>
<br>
<div class="card" style="width: 45rem;border-radius: 35px;background-color:#f0f5f5">
<br>
 <div class="card-body">
<h1 class="card-title" style="text-align:center"><B>Add Member</B></h1><br>
<form name="Form2" action="addmembers.php" method="get" enctype="multipart/form-data">

<table>
	<tr>
		<td><b>Tenant ID: </b></td>
		<td> <input type=number name="t" value="" size=25></td>
	</tr>
	<tr>
		<td><b>First Name: </b></td>
		<td> <input type=textbox name="f" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Last Name: </b></td>
		<td> <input type=textbox name="l" value="" size=25></td>
	</tr>
	<tr>
	
		<td><b>Occupation: </b></td>
		<td> <input type=textbox name="o" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Gender: </b></td>
		<td> <input type=textbox name="g" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Date of birth: </b></td>
		<td> <input type=date name="d" value="" size=25></td>
	</tr>
	<tr>
		<td><b>Relationship with tenant: </b></td>
		<td> <input type=textbox name="r" value="" size=25></td>
	</tr>
</table>
<br><br>
<input type=submit value="Add" class="btn btn-danger" name="submit">
</form><br>
</div></div>
</body>

</html>
