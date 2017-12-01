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
         <a href="index.php">Home</a>
             <li>  <a href="index.php">Upload<span class="arrow">&#9660;</span></a>
    
    
<ul class="sub-menu">
                
                <li>   <a href="gallery_1.php"> Upload to Cat Families </a></li>
                
                <li>   <a href="gallery_2.php"> Upload to Dog Families </a></li>
                
                <li>   <a href="gallery_3.php"> Upload to Rabbit Families </a></li>
                
                <li>   <a href="gallery_4.php"> Upload to Bear Families </a></li>
                
                <li>   <a href="gallery_5.php"> Upload to Other </a></li>
               
               				
            </ul>
        
            </li>
            
            <a href="logout.php">Logout</a>
            
         </ul>
        
    </div>
    
</nav>
    
<article>

<form action="php/filecheck-2.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <br><input type="file" name="image" id="image"><br>
    <br><input type="submit" value="Upload Image" name="submit"><br>
</form>  


</article>
    
</body>
</html>  