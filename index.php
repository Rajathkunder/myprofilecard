<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style type="text/css">
    .btn5:hover{
  box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px red;
  border: 3px solid #00d7c3;

}
.btn5{
  height: 17%;
  width:20%;
}
    .about{
  opacity: 0.9;
  height: 220px; 
  background-color: rgba(204,210,230,0.97);

  place-items: center;  
  text-align: center;
  margin-top: 1px;
  margin-left: 52px;
   border-radius: 30px;
   width: 800px;
   border: 2px solid blue;
   
}
.abou{
  font-size: 25px;
  color: black;
  text-align: center;
  font-weight: 700px;  
  padding-top: 20px;

}

    .txt{
      background: transparent;
      height: 30%;
      width:130%;
      margin-left:-35%;
      color: lightblue;

    }
    .btn{
      border-radius: 30px;
      height: 23%;
       margin-left:97%;
       margin-top: -8%;
       color: lightblue;
       background: transparent;
       border-color: lightblue;
       cursor :pointer;
       width:22%;

    }
    .b2{
      border-radius: 30px;
      height: 23%;
       margin-left:123%;
       margin-top: -8%;
       color: lightblue;
       background: transparent;
       border-color: lightblue;
       cursor :pointer;
       width:22%;
    }
    
.box{
  height:20%;
width:30%;
margin-left:42%;
color:lightblue;

}


  </style>
  
  <title>SHARE THOUGHTS :)</title>
</head>
<body>

  
  <div class="box">
    <h2> SHARE YOUR THOUGHTS</h2>
    <form action="config.php">
      <div class="input-box">
        <input type="text" name="password"  placeholder="'Your thoughts' -by 'Your name'"  class="txt" autocomplete="off" required>
       
      </div>
        <input type="submit" class="btn" value="SHARE">
        <button class="b2" type="button" >ABOUT</button>
    </form>

<div class="about">
    <p class="abou">This is a simple static webpage , here we are storing data in text file and retrieving it. here we are not using any Database.
     <br> <br><b>Gmail : rajath2322@gmail.com</b>
</p><button class="btn5" onclick="document. location. reload()">Close</button>
  </div>

  </div>
  <script type="text/javascript"> 
      document.querySelector('.about').style.display = 'none';
      document.querySelector('.b2').addEventListener('click', showBtn1);

      function showBtn(e) { 
        document.querySelector('.container').style.display = 'block'; 
       e.preventDefault(); 
      } 
      function showBtn1(e1) { 
      document.querySelector('.about').style.display = 'block';
       e1.preventDefault(); 
      } 
      </script>
</body>
</html>

<?php
     $string=file_get_contents("form-save.txt");
     //echo $string;
//$string = "Hello world. Beautiful day today.";
 $token = strtok($string, "`");
 
while ($token !== false)
   {
   echo '
<html>
<head>
<style>
body {background-color: black;}
.dd{
overflow:hidden;
height:20%;
width:80%;
margin-left:10%;

text-align:center;
overflow:hide;

font-family: cursive, sans-serif;
      background-color: black;
      color: lightblue;
      padding: 10px;
      border-radius: 40px;
      box-shadow: 2px 2px 20px 20px #7fecad;
}

blockquote {
    border:none;
    font-family:Georgia, "Times New Roman", Times, serif;
    margin-bottom:-30px;
    quotes: "\201C""\201D""\2018""\2019";
}

blockquote h2 {
font-size:21px;
}

blockquote h2:before { 
content: open-quote;
font-weight: bold;
font-size:50px;
color:#889c0b;
} 
blockquote h2:after { 
content: close-quote;
font-weight: bold;
font-size:50px;
color:#889c0b;
  
}



</style>
</head>
<body>
<div class="dd"><blockquote><h2> '.
   $token.'</h2></blockquote><br></div><br>
   </body>
   </html>';
   $token = strtok("`");
   
   }
?>





