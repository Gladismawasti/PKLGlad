<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style type="text/css">
body{margin:0;padding:0;}
#contact {
    position:absolute;
    right:10px;
    bottom:10px;
    font-size:12px;
    margin-right: 10px;
}
#contact #button{
    position:relative;
    right:0;
    bottom:0;
    padding:0 0 0 450px;
}
#contact #button a{
    padding-left:5px;
    padding-right:5px;
    padding-top:5px;
    text-align:right;
    background: #eeffee;
    cursor:pointer;
    font-size: 15px;
}
#contact form{
    border:1px solid #666;
    background:#dfdfdf;
    padding:10px;
    display:none;
}


form label {float:left;width:80%;}
form input[type=text] {float:left;width:80%;}
form input[type=text] {float:left;width:80%;}       
    </style>

</head>
<body background="<?php echo base_url('/assets/images/login.jpg'); ?>">
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card text-white bg-info mb-3" style="margin-top: 100px">
      			<div class="card-body">
					<h2><center>Masuk Administrasi</center></h2>
					<form action="/siap/index.php/mycontroller/">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Pengguna</label>
					    <input type="text" class="form-control" required="required" id="exampleInputEmail1" placeholder="Masukan Nama Pengguna">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Kata Sandi</label>
					    <input type="password" class="form-control" required="required" id="exampleInputPassword1" placeholder="Masukkan Kata Sandi">
					  </div>
			  			<button type="submit" class="btn btn-warning">Masuk</button>
					</form>
				    </div>
				</div>
			</div>
	</div>
</body>
</html>



 <script type="text/javascript">
	$(document).ready(function(){
    $('#contact a').on('click',function(){
        $('#contact form').slideToggle('slow');
    });
});
</script>

</body>
</html>
