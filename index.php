<!DOCTYPE html>
<?php include `connect.php` ?>

<html lang="en">
<head>
    
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<header> 
     <script src="java.js"></script>
    <nav>
        <ul>
            <li> <a href="index.html"><c>Homepage</c></a></li>
            <li> <a href="#projects"><c>Projects</c></a></li>
            <li> <a href="#skills"><c>Skills</c></a></li>
            <li> <a href="Contacts.html"><c>Contacts</c></a></li>
            <li> <a href="about.html"><c>About</c></a></li>
             </ul>
    </nav>
    <h2 id="title"> AISHAH JAMES CHITONYA</h2>
    </header>
<body> 
    
 <p id="para1" class="greeting" ></p>

 <img src="Aishah.jpg" width="300px"/>

    <p id="projects">PROJECTS</p><br>
    <img name="slide" width="350" height="500"><br>
    <p>A beautiful picture of pink flowers</p>
      <img src="pinkflower.jpg" height="500" width="350"><br>
     
      
     <a href="projects.html"><x> click here to view all projects.....</x></a>
    <br>
    
   
<form>
    <input type="text" name="surname" placeholder="Surname" required><br>
    <input type="text" name="firstname" placeholder="Firstname" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <label for="gender">Gender:</label><br>
    <select name="gender" id="gender" required><br>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
    <button type="submit">Submit</button><br>
</form>

 <h2 id="skills">SKILLS<h2>
    <p>
        <ol>
            <li>PC Management and Mantainance</li>
            <p>I can fix and configure computers</p>
            <li>Multimedia development</li>
            <P>I have knoledge in picture editing, video editing, audio editing and animation.</P>
            <li>Web development</li>
            <p>
                I have a webpage where i advertise things i sell
                <a href="https://github.com/Yisha165/my-portfolio">My Github Account</a>
                 </p>
            <li>Programming in C and Java</li>
            <p>I can code using C and Java programming languages</p>
        </ol>
    </p>

    <h2>EXPRIENCE</h2>
    <p>  My projects in picture editing are:</p>
<img src="roses.jpg" width="300px"/><br>
<img src="sunflower.jpg" width="300px"/>
    
   <Footer id="Contacts">
    <a href="http://facebook.com">facebook:aishahchitonyafacebook.com</a><br>
    <a href="http://email.com"></a>"Email:jamesaishah3@gmail.com<br>
    <Cel>+265981290300</Cel>
    <h3> This is my Google Maps web page</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.8027895823548!2d33.992825774326704!3d-11.421855430579088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d3039d0f8ae75%3A0xf0f00e912b55adf2!2sMzuzu%20University!5e0!3m2!1sen!2smw!4v1685999853697!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</Footer>

</body>
</html>