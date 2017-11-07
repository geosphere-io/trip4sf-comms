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

    <div class="container"> 
      <div class="col-8">    
        <h1>Overview</h1>
        <p class="summary">
          The cleaning operations are performed by the Department of Public Works. Most of the residential streets are cleaned once a week. If you notice that your street is really dirty, you can request a cleaning <a href="petition.php">here</a>. 
          If you believe that the problem is recurring, call up DPW at 311 and they will provide you with details on how to get the service to be regular. 
          It is DPW's policy that if there's human liquid or solid waste on a street or a sidewalk, they will perform the street cleaning.
        </p>
        <img src="sweeper.png"/>

        <h1>Frequently Asked Questions</h1>

        <button class="accordion"><h4>How do those sweepers work?</h4></button>
        <div class="panel"> 
          <p class="answer">The majority of our fleet are Tymco 600’s and they operate on a regenerative air principle. A blower generates a constant blast of high velocity air that is directed down a tube on the left side to a pickup head.  
            The air is directed under the pickup head where it picks up refuse in its path and goes up a suction tube on the right. As the blower creates pressure, it is taking air from the hopper (storage area for debris) and it creates suction that pulls debris up the right side tube into hopper. 
            These sweepers are great for light debris like leaves and paper. Anything larger than 10” creates problems and can clog us up. Sticks, coat hangers and cardboard are the most common culprits.
          </p>
        </div>
        
        <button class="accordion"><h4>How much do the sweepers hold?</h4></button>
        <div class="panel"> 
          <p class="answer">The Tymco 600’s hopper volume is a little over 7 cubic yards. Our brooms pick up between 2,000 and 8,000 lbs on a 8 hour shift depending on where, when and what we sweep. 
            Fall is the heaviest season for us because of the many trees in San Francisco. Sand and gravel is heavy. Trash is heavy too.
            Last fiscal year, 2016 to 2017, the San Francisco sweepers swept up over 25 million lbs!               
          </p>
        </div>

        <button class="accordion"><h4>Can cars park after the sweeper goes by?</h4></button>
        <div class="panel"> 
          <p class="answer">If the sweeper sweeps by in the zone during posted times, you may park behind it. Be aware that sometimes the sweeper may drive by ( not sweeping ) and you shouldn’t park behind it.  
            In Daly City, sweeper sign times are enforced throughout the time period.              
          </p>
        </div>
        
        <button class="accordion"><h4>Why are there two steering wheels in the truck?</h4></button>
        <div class="panel"> 
          <p class="answer">The truck is manufactured with a steering wheel on the left. When the truck is converted to a sweeper, an additional steering wheel is installed on the right side because we sweep on the right side of the street 95% of the time. 
            Driving on the right allows us to see better for sweeping and avoid obstacles such as tree limbs.               
          </p>
        </div>

        <button class="accordion"><h4>How heavy are the sweepers?</h4></button>
        <div class="panel"> 
          <p class="answer">They weigh between 21,000 and 23,000 lbs empty.
          </p>
        </div>

        <button class="accordion"><h4>What kind of engines do they use?</h4></button>
        <div class="panel"> 
          <p class="answer">The engines are turbo-diesels and they run on bio-diesel fuel.              
          </p>
        </div>        
      </div>   
    </div>    

    <div class="wrapper dark"> 
      <div class="container"> 
        <h1 class="dark">Contact Us</h1>
        <form class="contact-form" action="submit_general_message.php" method="post">
          <div class="form_element">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="short">
          </div>

          <div class="form_element">
            <label for="email">Email</label>
            <input type="text" name="email" class="short">
          </div>

          <div class="form_element">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" placeholder="(xxx) xxx-xxxx" class="short">
          </div>

          <div class="form_element">
            <label for="category">Category</label>
            <select name="category">
              <option value="question">General question</option>                
              <option value="fees">Fees</option>
              <option value="cleaning-request">Cleaning request</option>
              <option value="other">Other</option>
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
    <script src="main.js"></script>
  </body>
    
</html>