<?php
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="document.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Downlist BSOD </title>

  <style>
 html{
    background-color: SlateBlue;
    text-align: center;
    color: white;
    font-family: Arial;




 }

 .head{
    color: black;



 }
h4{
 font-size: 50px;
}


#box {
  background-color: green;
  padding: 10px ;
  border: 1px solid black ;
  margin-right: 500px;
  margin-left: 500px;
}
#box3 {
  background-color: #ffe6f9;
  padding: 10px ;
  border: 1px solid black ;
  align-content: center;
  width: 150px;

}

#box2 {
 color: black;
 background-color: #ff66ff;
 padding: 30px;
 border: 3px solid black;
 margin-right: 200px;
 margin-left: 200px;
 height: 100px;
}


  </style>
</head>

<body>

<h4 class="head"> BlueScreenViewer Guide </h4>

 <a style="color:white" href="https://www.dropbox.com/s/auaaqxmi7eu7sht/bluescreenview.zip?dl=1" id="box">Download BlueScreen Viewer</a>

<h1>Be sure to check if there are any DMP files in C:\Windows\Minidump </h1>

<h1> --> Otherwise this isn't necessary to download! <-- </h1>
<h3>When you open the program it will come up some files like this.   </h3>
<p> Good thing I made my PC crash on purpose :) Woohoo </p>
<img src="unknown.png">

<h2>This is the part you save the .DMP file as a TXT file </h2>
<p> (Which is good cause I can't read all DLL files) </p>
<img src="BSOD.gif" alt="bsod gif">
<h2> Be sure to name it so you can remember it, I named mine BSOD.txt</h2>
<h2> The orginal location is in Documents. </h2>




<img src="textfile.png" alt="txtfile">
<h1 style="font-weight: 900"> Upload the file to me down below here! </h1>
<!--
<form action="upload.php" method="post" enctype="multipart/form-data" id="box2">
     <p> You can only upload TXT files!</p>
     Select File to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
-->

<form id="box2" enctype="multipart/form-data" action="upload.php" method="POST">
<p> You can upload any files here! </p>
Select File to upload: <input name="uploaded" type="file" /><br />
<br>

<input id="box3" type="submit" value="Upload" />
</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




</body>




</html>
?>
