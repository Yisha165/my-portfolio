
   
   var j = 0; 
   var images = [];
   var time = 3000;
   
   images[0] = "purpleflower.jpg";
   images[1] = "pinkflower.jpg";
   images[2] = "roses.jpg"
   
   function changeImg(){
       document.slide.src = images[j];
       if(j < images.length -1){
          j++; 
       }
       else
       j= 0;
   
   setTimeout("changeImg()", time); }
   
   window.onload = changeImg;
   //Greeting feature
       document.addEventListener("DOMContentLoaded", function()
       {
           var currentDate = new Date();
           var currentHour =currentDate.getHours();
           var greeting;
           if(currentHour >= 0 && currentHour <=12){
               greeting ="Good Morning";
           } else if(currentHour >= 12 && currentHour <= 18){
               greeting= "Good Afternoon";
           } else {
               greeting ="Good Evening";
           }
           var greetings = document.getElementById("para1");
           greetings.textContent = greeting;
       });
       
       var fields = {};
       document.addEventListener("DOMContentLoaded", function() {
        fields.name = document.getElementById('Name');
        fields.surname= document.getElementById('surName');
        
       })
          function formSubmission(){
              if(fields.value !=="" && fields.value !== null){
                  alert('You have successfully submitted your details');
              }

            }