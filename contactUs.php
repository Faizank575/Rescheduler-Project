<?php
 require './includes/header.php';
 ?>
 <head>
    <link rel="stylesheet" href="./css/contact.css">
 </head>

 <div>
    <div class="contact-container">  
        <h2>We'd Love to help You</h2>
            <p>We like to create things with fun, open-minded people. Feel free to say hello</p>
        <form id="contact" action="" method="post">
          <fieldset>
            <input placeholder="Your name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Your Email Address" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
          </fieldset>
          <fieldset>
            <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>
      </div>
</div>

 <?php
 require './includes/footer.php';
?>