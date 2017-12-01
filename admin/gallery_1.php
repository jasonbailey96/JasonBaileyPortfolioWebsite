<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
<link rel="stylesheet" href="../css/main.css">
</head>

<body>
<header>

<img src="../img/header.png" alt="header"/>
</header>
<nav>

    
     <div class="menu-wrap menu">
         <ul class="clearfix">
         <a href="../index.php">Home</a>
             <li>  <a href="../index.php">Galleries<span class="arrow">&#9660;</span></a>
    
    
<ul class="sub-menu">
                
                <li>   <a href="../gallery_1.php"> Gallery One </a></li>
                
                <li>   <a href="../gallery_2.php"> Gallery Two </a></li>
                
                <li>   <a href="../gallery_3.php"> Gallery Three </a></li>
                
                <li>   <a href="../gallery_4.php"> Gallery Four </a></li>
                
                <li>   <a href="../gallery_5.php"> Gallery Five </a></li>
                
                <li>   <a href="../gallery_6.php"> Gallery Six </a></li>
				
            </ul>
        
            </li>
            
            <a href="logout.php">Logout</a>
            
         </ul>
        
    </div>
    
</nav>
    
    
<article>

<form action="php/filecheck.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <br><input type="file" name="image" id="image"><br>
    <br><input type="submit" value="Upload Image" name="submit"><br>
</form>  

</article>
    
<footer>



</footer>
</html>  