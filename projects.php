<!DOCTYPE html>

<html lang="en">
<head>
    <title>Contacts</title>
    <link rel="stylesheet" href="styles.css"> 
    <script src="java.js"></script>

</head>
<header> 
    <nav>
        <ul>
            <li> <a href="index.html"><c>Homepage</c></a></li>
            <li> <a href="projects.html"><c>Projects</c></a></li>
            <li> <a href="skills.html"><c>Skills</c></a></li>
            <li> <a href="Contacts.html"><c>Contacts</c></a></li>
            <li> <a href="about.html"><c>About</c></a></li>
            
        </ul>
    </nav>
</header>


<body>
  
  <input type="text"
  placeholder="Search..." name="Search">
  <button type="submit">Search</button><br>

  <img src="Aishah.jpg" width="300px"/>

    <p id="projects">PROJECTS</p><br>
    
    <img name="slide" width="350" height="500"><br>
   <p> pink flowers</p>
      <img src="pinkflower.jpg" height="500" width="350"><br>
      <p> roses</p>
      <img src="roses.jpg" width="300px"/><br>
      <p> Sun flowers</p>
<?php
$query="SELECT Name of Projects, Description FROM projects";
$result=mysqli_query($mylogin,$query);
if(!$results){
die ("Error:".mysqli_error($mylogin));
}else{
  while($row=mysqli_fetch_assoc($result)){
    echo $row ['Name of Projects'];
    echo $row ['Description'];
  }
}
?>

      <img src="sunflower.jpg" width="300px"/><br>
 <img src="purpleflower.jpg" height="500" width="350"><br>
       <img src="roses.jpg" height="500" width="350"><br>

  <cel>+265981290300</cel>  
  <div class="progress-Bar" >
    <div class="progress">  </div>
  </div>
  <span class="loading">C programming 90%</span>
  <div class="progress-Bar" >
   <div class="progress2">  </div>
 </div>
 <span>Web Design 50%</span><br>

</body>  <Footer>
    <a href="http://facebook.com">facebook:aishahchitonyafacebook.com</a><br>
    <a href="http://email.com"></a>"Email:jamesaishah3@gmail.com<br>
    <Cel>+265981290300</Cel>

</Footer>

</html>