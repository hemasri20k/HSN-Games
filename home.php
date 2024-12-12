<?php

   if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){

        $conn = mysqli_connect('localhost','root','','logins') or die("Connection Failed");
        $new="connected";
        if(isset($_POST['username']) && isset($_POST['password']))
        {

            $username=$_POST['username'];
            $password=$_POST['password'];
            $sql = "INSERT INTO logindetails VALUES ('$username','$password')" ;
           if(mysqli_query($conn,$sql))
           
           {
            echo "connected";
           }else{
            echo "error";
           }

        }
      
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSN games</title>
    <link rel="icon" href="backgrounds/logo.png">
    <style>
        body{
            background-color: rgb(24, 24, 24);
            overflow-y: scroll;
        }
    
       
  div img {
    height: 35px;
    float: left;
  }
       fieldset{
        background-color: rgb(60, 60, 60);
        border: 0px;
       
        position: sticky;
        height: 56px;
      
        
       }
       div input{
        margin-top: 5px;
        border-radius: 5px;
        height:22px;
        float:right;
        width: 250px;
       }
    

     table .games{
        height:300px;
        margin-left: 100px;
        margin-top: 0px;
        width:250px;
       box-shadow: 0 0 40px ;
        border-radius: 10px;
        transition: 0.5s;
        display: inline;
   
        
       }
      
       table .games:hover{
        height: 320px;
        width:270px ;
        box-shadow: 0 0 50px #ff3333 ;
        cursor: pointer;
       }
  
       #sidenav{
        border:0px;
        height:700px;
        width:200px;
        border-radius: 0px;
        margin-left: 20px;
        float: left;
        display: inline;
        box-shadow: 0 0 10px #ff3393;
       height: 500px;
       
       }
       .sidenavtext{
        text-decoration: none;
        
       }
       #gamesdisplay{
        border-radius: 10px;
        display: inline-table;
        width:60%;
        height:500px;
        box-shadow: 0 0 30px #ff3333;
        background-image: url(backgrounds/snakegame.jpg);
        background-size: cover;
        margin-left: 0px;
       }
       #navbuttonleft{
        height:100px;
        width:50px;
        display: inline-table;
        margin-left: 230px;
        padding-left: 30px;
       font-size: xx-large;
       border-radius: 10px;
        color: whitesmoke;
        background-color: rgb(9, 128, 33);
       }
       #navbuttonright{
        height:100px;
        width:50px;
        display: inline-table;
        font-size: xx-large;
        border-radius: 10px;
        color: whitesmoke;
        margin-left: 15px;
        padding-left: 30px;
        background-color: rgb(9, 128, 33);
       }
      
      
       table{
        border: 0px;
      
       }
       tr{
        height:340px;
       }
     ul{
        color: whitesmoke;
        font-size: larger;
        
     }
     li{
        
        color:rgb(39, 231, 249);
        font-size: large;
        transition: 0.9s;
        list-style:disc;
        transition: 0.2s;
        list-style-type: georgian;
     }
     li:hover{
        font-size: larger;
        color: whitesmoke;
        cursor: pointer;
    }
    button  {
  position: relative;
  background: #444;
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  border: none;
  letter-spacing: 0.1rem;
  font-size: 1rem;
  padding: 1rem 3rem;
  transition: 0.2s;
  height:50px;
  width: min-content;
}

button:hover {
  letter-spacing: 0.2rem;
  padding: 1.1rem 3.1rem;
  background: var(--clr);
  color: var(--clr);
  /* box-shadow: 0 0 35px var(--clr); */
  animation: box 3s infinite;
}

button::before {
  content: "";
  position: absolute;
  inset: 2px;
  background: #272822;
}

button span {
  position: relative;
  z-index: 1;
}
button i {
  position: absolute;
  inset: 0;
  display: block;
}

button i::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 2px;
  left: 80%;
  top: -2px;
  border: 2px solid var(--clr);
  background: #272822;
  transition: 0.2s;
}

button:hover i::before {
  width: 15px;
  left: 20%;
  animation: move 3s infinite;
}

button i::after {
  content: "";
  position: absolute;
  width: 10px;
  height: 2px;
  left: 20%;
  bottom: -2px;
  border: 2px solid var(--clr);
  background: #272822;
  transition: 0.2s;
}

button:hover i::after {
  width: 15px;
  left: 80%;
  animation: move 3s infinite;
}

@keyframes move {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(5px);
  }
  100% {
    transform: translateX(0);
  }
}

@keyframes box {
  0% {
    box-shadow: #27272c;
  }
  50% {
    box-shadow: 0 0 25px var(--clr);
  }
  100% {
    box-shadow: #27272c;
  }
}
#login{
    float: right;
}
 
    </style>
</head>
<body >
    <fieldset>
        <div class="navigation">
            <button style="--clr:#39FF14" id="login" onclick=openlogin()><span>Login</span><i></i></button>
            <button style="--clr:#FF44CC"><span>Store</span><i></i></button>
            <button style="--clr:#0FF0FC"><span>About</span><i></i></button>
            <button style="--clr:#8A2BE2" onclick="scrollToEnd()"><span>Contact</span><i></i></button>
            
        </div></fieldset><br>
        <marquee style=" color: rgb(246, 255, 0) ;font-size: x-large;" scrollamount="10"><b>Welcome to HSN games........</b></marquee><br>
    <div>
      
            <button id="navbuttonleft" onclick="changeimageleft()" ><span><b><</b></span><i></i></button>
        <fieldset id="gamesdisplay" >
            <legend style="color:white;font-size: X-large;text-align: center; letter-spacing: 0.1rem; font-family:sans-serif;"><b>NOW AVAILABLE</b></legend>
    </fieldset><button id="navbuttonright" onclick="changeimageright()"><span><b>></b></span><i></i></button>
    </div>
  <br>
       <marquee style="font-family:sans-serif; color: whitesmoke ;font-size: x-large;background-color: rgb(60, 60, 60) ;height: 30px; " scrollamount="10"><b>“Play is our brain’s favorite way of learning.” – Diane Ackerman<span style="margin-left: 300px;">“Play is the highest form of research.” – Albert Einstein</span><span style="margin-left: 300px;">“Whoever wants to understand much must play much.” – Gottfried Benn</span><span style="margin-left: 300px;">“To give a child a mechanical toy is equivalent to playing for him” – Walter Wood</span><span style="margin-left: 300px;">“Nothing lights up a child’s brain like play.” – Dr. Stuart Brown</span></b></marquee>
    <br>
<h3 style="color: whitesmoke; margin-left: 300px;font-family:sans-serif;">NEW ARRIVALS:</h3><br>
<div>
<fieldset id="sidenav">
    <table>
<ul>
    MOST PLAYED:
    <tr><a href="games\mariorun.html" target="_blank" class="sidenavtext"><li>Mario run</li></a></tr>
    <tr><a href="games\tetris.html" target="_blank" class="sidenavtext"><li>Tetris</li></a></tr>
    <tr><a href="games\planetdefence.html" target="_blank" class="sidenavtext"><li>Planet Defence</li></a></tr>
    <tr><a href="games\bouncingball.html" target="_blank" class="sidenavtext"><li>Bouncing Ball</li></a></tr>
</ul>
<ul>CHAT BUSTERS:
    <tr><a href="games\cointoss.html" target="_blank" class="sidenavtext"><li>Coin Toss</li></a></tr>
    <tr><a href="games\snake.html" target="_blank" class="sidenavtext"><li>Snake</li></a></tr>
    <tr><a href="games\wackamole.html" target="_blank" class="sidenavtext"><li>Wack-a-mole</li></a></tr>
    <tr><a href="games\memorygame.html" target="_blank" class="sidenavtext"><li>Memory game</li></a></tr>
</ul>
<ul>RUNNERS:
    <tr><a href="games\floppybird.html" target="_blank" class="sidenavtext"><li>Floppy Bird</li></a></tr>
    <tr><a href="games\mariorun.html" target="_blank" class="sidenavtext"><li>Mario Run</li></a></tr>
    <tr><a href="games\planetdefence.html" target="_blank" class="sidenavtext"><li>Planet Defence</li></a></tr>
    <tr><a href="games\memorygame.html" target="_blank"  class="sidenavtext"><li>Memory game</li></a></tr>
</ul>

    </table>

</fieldset>

<table>
    <tr>
        

        <td><a href="games\menja.html" target="_blank"><img src="backgrounds/menja.png" alt="" class="games"></a></td>
        <td><a href="games\planetdefence.html" target="_blank"><img src="backgrounds/planetdefence.jpg" alt="" class="games"></a></td>
        
        <td><a href="games\snake.html" target="_blank"><img class="games" src="backgrounds/snakegame.jpg"></a></td>

          
       </tr>
       <tr>
        <td><a href="games\2048.html" target="_blank"><img class="games" src=" backgrounds\2048.webp" target="_blank"></a></td>
        <td><a href="games\tictactoe.html" target="_blank"><img class="games" src="backgrounds/tictactoe.webp"></a></td>
        <td><a href="games\quiz.html" target="_blank"><img class="games" src="backgrounds\quiz.jpeg" alt=""></a></td>
    </tr>


</table><br>
<h3 style="color: whitesmoke; margin-left: 300px;font-family:sans-serif;">ON TOP DEMAND:</h3><br>
<table>
    <tr>
        

            
        <td> <a href="games\mariorun.html" target="_blank"><img src="backgrounds/mariorun.webp" alt="" class="games"></a> </td>

            

       
        <td>
            
            <a href="games\pong.html" target="_blank"><img class="games" src="backgrounds/pong.jpg"></a>
        </td>
        <td>
            <a href="games\hangingman.html" target="_blank"><img src="backgrounds/hangman.jpg" alt="" class="games"></a>
        </td>
        <td>

            <a href="games\floppybird.html" target="_blank"><img src="backgrounds/floppybird.jpg" alt="" class="games"> </a>

            

        </td>
    </tr>
    <tr>
        <td>
            <a href="games\tetris.html" target="_blank"><img src="backgrounds/tetris.png" alt="" class="games"></a>
        </td>
        <td>
            <a href="games\wackamole.html" target="_blank"><img src="backgrounds/wackamole.webp" alt="" class="games"></a>
        </td>
        <td>
            <a href="games\memorygame.html" target="_blank"><img src="backgrounds/memorygame.webp" alt="" class="games"></a>
        </td>
        <td>
            <a href="games\trafficracing.html" target="_blank"><img src="backgrounds/trafficracing.jpeg" alt="" class="games"></a>
        </td>
    </tr>

</table>
</div>

</div>
<script>
    function openlogin(){
        window.open("login.html");
    }
    var count=0;
    function display(button){
        if(button=="left"){
        count=count-1;
        if(count<-3)
        count=-3;
    }
    else{
        count=count+1; 
        if(count>3)
        count=3; 
    }
    var b=document.getElementById("gamesdisplay");
    switch (count){
        case -1:
            {
                b.style.backgroundImage='url(backgrounds/tetris.png)';
            b.style.backgroundSize='cover';
            b.style.boxShadow= '0 0 30px #031eff'; 
                break;
            }
        case -2:{
            b.style.backgroundImage='url(backgrounds/pong.jpg)';
            b.style.backgroundSize='cover';
            b.style.boxShadow= '0 0 30px #f6ff33';
            break;
        }
        case -3:{
            b.style.backgroundImage='url(backgrounds/quizz.jpg';
            b.style.backgroundSize='cover';
            b.style.boxShadow= '0 0 30px #ff3333';
            break;
        }
        case 1:{
            b.style.backgroundImage='url(backgrounds/bouncingball.png)';
            b.style.backgroundSize='cover';
            b.style.boxShadow= '0 0 30px #f6ff33';
            break;
        }
        case 2:{
            b.style.backgroundImage='url(backgrounds/wackamole.webp)';
            b.style.backgroundSize='cover';
            b.style.boxShadow= '0 0 30px #ff3f33';
            break;
        }
        case 3: {
            b.style.backgroundImage='url(backgrounds/memorygame.webp)';
            b.style.backgroundSize='cover';
            b.style.boxShadow= '0 0 30px #ff3393';
            break;
        }
     
        default:{
            b.style.backgroundImage='url(backgrounds/snakegame.jpg)';
                b.style.backgroundSize='cover';
                b.style.boxShadow= '0 0 30px #ff3333';
            
        }
    }
}
function scrollToEnd() {
            // Get the height of the entire document
            var documentHeight = Math.max(
                document.body.scrollHeight,
                document.documentElement.scrollHeight
            );

            // Scroll to the end of the page
            window.scrollTo({
                top: documentHeight,
                behavior: 'smooth' // Optional: adds a smooth scrolling effect
            });
        }
    
function changeimageleft()
{
var button="left";
display(button);
}
function changeimageright()
{
var button="right";
display(button);
}
</script><br><br><br><br><br>
<footer>
    <div style=" text-align: center;height:300px;box-shadow: 0 0 10px rgb(149, 255, 0);">
 
    </div>
</footer>
</body>
</html>