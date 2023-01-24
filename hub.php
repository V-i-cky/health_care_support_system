<!DOCTYPE html>
<html>
<head>
<title>Zero Budget Club - Free Website Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    

<!-- Start Contact Section -->
 <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
  <div class="w3-content" style="max-width:600px">
    <h4 class="w3-center"><b>Contact Us</b></h4>

    <script type="text/javascript">var submitted=false;</script>
    
    <!--Update the URL for thank you page on form submit -->
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"      
    onload="if(submitted) {window.location='http://zerobudget.club/';}"></iframe> 
    
    <!-- Update the Google forms URL in action-->
    <form action="https://docs.google.com/forms/d/e/1FAIpQLSdYcwuVIa_vhLRglEmj6rvHxE7qYyw-UA31lrrFIBZIr0gzDQ/formResponse" method="post" target="hidden_iframe" onsubmit="return validateForm(); ">

      
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" placeholder="Name" id="name" required name="entry.393698244">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" placeholder="Email" id="email" required name="entry.1600284689">
      </div>
      <div class="w3-section">
        <label>Phone</label>
        <input class="w3-input w3-border" type="text" placeholder="Phone" id="phone" required name="entry.1966741460">
      </div>

      <div class="w3-section">
        <button class="w3-button w3-block w3-black w3-margin-bottom" type="submit">SEND</button>
      </div>
    </form>
</div>
</div>
    <script type="text/javascript">
    function validateName() {
            var name = document.getElementById('name').value;
            if(name.length == 0) {
              alert("Name can't be blank") ;
              return false;

            }
            if (!name.match(/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/)) {
              alert("Please enter your correct name") ;//Validation Message
              return false;
            }
            return true;
          }

          function validatePhone() {
            var phone = document.getElementById('phone').value;
            if(phone.length == 0) {
              alert("Phone number can't be blank") ;//Validation Message
              return false;
            }

            if(!phone.match(/^[0]?[789]\d{9}$/)) {
             alert("Please enter a correct phone number") ;//Validation Message
             return false;
           }

           return true;

         }

         function validateEmail () {

          var email = document.getElementById('email').value;
          if(email.length == 0) {
            alert("Email can't be blank") ;//Validation Message
            return false;

          }

          if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
            alert("Please enter a correct email address") ;//Validation Message
            return false;

          }

          return true;

        }


        function validateForm() {
          if (!validateName() || !validatePhone() || !validateEmail()) {

            alert("Form not submitted");//Validation Message
            return false;
          }
          else {
            submitted=true;
            return true;
          }
        }
        </script>

<!-- End Contact Section -->
            
</body>
</html>