<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/main.css">
</head>

<body>
<header>

<img src="img/header.png" alt="header"/>
</header>
<nav>

    
     <div class="menu-wrap menu">
         <ul class="clearfix">
         <a href="index.php">Home</a>
             <li>  <a href="index.php">Galleries<span class="arrow">&#9660;</span></a>
    
    <ul class="sub-menu">
                
                <li>   <a href="gallery_1.php">Example </a></li>
                
                <li>   <a href="gallery_2.php">Example </a></li>
                
                <li>   <a href="gallery_3.php">Example </a></li>
                
                <li>   <a href="gallery_4.php">Example </a></li>
                
                <li>   <a href="gallery_5.php">Example </a></li>
                
                
            </ul>
        
            </li>
            
            <a href="loginform.php">Login</a>
            
         </ul>
        
    </div>
    
</nav>

<section>

<form action="includes/log_func.php"  method="POST" name="login">
	Username:  <input type="username" name="email" placeholder="Username"><br> 
	Password:  <input type="password" name="password" placeholder="Password"><br>
	<input type="submit" id="login" value= "Login" name="login">
</form>



</section>

</body>

</html>
