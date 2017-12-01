<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../css/main.css">
<header>
    
    <img src="img/header.png" alt="header my sylvanian gallery">
    
    </header>
    
    
<article>
    
    <h1> Introduction </h1>
    
   <div class="columns" id="myP"> 
    
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras felis justo, vulputate ac varius sed, sollicitudin in purus. Ut id quam sed eros dignissim gravida. Aliquam scelerisque, eros vel laoreet tempus, ipsum est hendrerit neque, pharetra commodo purus nunc et mi. Suspendisse ultrices nulla eget lacus bibendum, in aliquam diam sagittis. Sed et odio nec eros suscipit rutrum. Etiam ultrices varius velit ac molestie. Aenean dictum turpis in venenatis vestibulum. Praesent vel convallis ipsum. Sed aliquam diam tempor lectus ullamcorper, a malesuada erat rhoncus. Praesent at nisi vitae sem rutrum varius. Vivamus id placerat lorem. Etiam a erat interdum ipsum laoreet cursus. Praesent eget odio accumsan, imperdiet eros sed, porttitor tellus. Integer feugiat gravida mauris eu finibus. Quisque in felis id dolor tincidunt suscipit eget nec quam. Nullam pharetra luctus dui, vel eleifend justo semper non.  

        
Sed congue tincidunt massa, at efficitur leo placerat eget. Donec mollis turpis quis sapien semper, in dictum elit ornare. Praesent tincidunt felis a lectus malesuada interdum. Ut hendrerit iaculis malesuada. Sed dignissim luctus lorem, vitae venenatis mi porttitor et. Aenean porta, ligula ac euismod bibendum, massa ipsum aliquam dui, ac lobortis tortor odio eu est. Donec ut vulputate felis, eget feugiat mauris. Phasellus consequat, enim sed tincidunt dictum, odio nibh porttitor nisi, id varius orci augue eu felis. Vestibulum vitae eleifend ipsum, sed tincidunt mauris. Suspendisse porta scelerisque ultricies. In vel turpis eget magna posuere mollis. Suspendisse malesuada tempor odio, quis bibendum ex. Pellentesque commodo ullamcorper vehicula. Proin mattis quis tellus et varius. Donec vestibulum eget justo vitae tempus. Praesent nunc massa, suscipit eget neque sit amet, facilisis dapibus elit.
    
    </div>
    
    <ul id="menu">

<a href="index.php"> <button type="button" id="purple">H</button> </a>
<button type="button" id="red" onclick="bgred()">R</button>
<button type="button" id="blue" onclick="bgblue()">B</button>
<button type="button" id="green" onclick="bggreen()">G</button>

<script>
function bgred() {
    document.body.style.backgroundColor = "red";
	
}

function bgblue() {
    document.body.style.backgroundColor = "blue";
}

function bggreen() {
    document.body.style.backgroundColor = "green";
}

</script>

<button type="button" id="width" onclick="SMALL()">S</button>
<button type="button" id="width" onclick="MEDIUM()">M</button>
<button type="button" id="width" onclick="LARGE()">L</button>
 
<script>
function SMALL() {
    document.getElementById("myP").style.fontSize = "15px";
}

function MEDIUM() {
    document.getElementById("myP").style.fontSize = "25px";
}

function LARGE() {
    document.getElementById("myP").style.fontSize = "40px";
}
</script>
    
    </ul>
    
    </article>
    
<aside>



</aside>
    
<footer>



</footer>
</html>
    