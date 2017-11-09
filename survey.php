<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SF Street Cleaning</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">    
    <link href="./styles/styles.css" type="text/css" rel="stylesheet"></link>
  </head>
  <body>
    <span class="accent"><span>          
    <div class="navbar">
      <div class="nav-container">
        <a class="title" href="index.php">SF Street Cleaning</a>
        <div class="nav-links">
            <li><a href="index.php">FAQs</a></li>
            <li><a href="survey.php">Survey</a></li>
            <li><a href="petition.php">Petition</a></li>
        </div>
      </div>
    </div> 

    <div class="wrapper light"> 
      <div class="container"> 
        <h1>Survey</h1>
        <form class="contact-form" action="submit_survey.php" method="post">
        <div class="form_element">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="short">
          </div>

          <div class="form_element">
            <label for="address">Address</label>
            <input type="text" class="connected" name="address_line_1">
            <input type="text" name="address_line_2">
          </div>

          <div class="form_element">
            <label for="satisfaction">How satisfied are you?</label>
            <select name="satisfaction_level">
              <option value="very">Very</option>
              <option value="somewhat">Somewhat</option>
              <option value="notatall">Not at all</option>
            </select>
          </div>
          <div class="form_element">
            <label for="message">Message</label>
            <textarea name="message" rows="4" cols="50"></textarea>
          </div>
          <button>Submit</button>
        </form>
      </div>        
    </div>      
  </body>
    
</html>