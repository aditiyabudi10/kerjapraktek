<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style type="text/css">
  {
    padding: 0; margin: 0;
}
h2{
    color:#50626C;
    text-align: center;
    font-family: arial;
    text-transform: uppercase;
    border: 6px solid #f1f1f1;
    padding: 5px;
    width: 490px;
    margin: auto;
    margin-bottom: 5px;
    margin-top: 20px;
}
form {
    border: 6px solid #f1f1f1;
    font-family: arial;
    width: 500px;
    margin: auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
label{
    color:#50626C;
    text-transform: uppercase;
}
button {
    background-color: #008080;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: red;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;

}
span{
    color:#50626C;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body background="gambar/bgpt.jpg">

<h2 style="background-color: black;"><font color="white">Login<br>CV. BANGKIT MANDIRI</font></h2><br>

<form action="config/loginproses.php" method="POST" style="background-color: black;">
  <div class="imgcontainer">
    <img src="gambar/ava1.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><font color="white"><b>Username</font></b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><font color="white"><b>Password</font></b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Masuk</button>
  </div>

  <div class="container" style="background-color: black;">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></button>
  </div>
</form>

</body>
</html>