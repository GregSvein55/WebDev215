<?php
session_start();

if(isset($_SESSION["uname"]))
	{
		echo "Welcome";	
	}
	else
	{	
		header("Location: login.php");
				
    }

    $validate = true;
    $rating = -1;
    
    if (isset($_POST["submitted"]) && $_POST["submitted"]) {
        $rating = trim($_POST["rating"]);
    
        $db = new mysqli("localhost", "gds412", "Iamgreg5", "gds412");
        if ($db->connect_error) {
            die ("Connection failed: " . $db->connect_error);
        }
        
        if($rating == null || $rating < 0) {
            $validate = false;
            echo "rating";
        }
    
        if($validate == true) {
            $user = $_SESSION["uname"];

            $q2 = "INSERT INTO rating (user_name, rating)
                   VALUES ('$user', '$rating')";
            
            if ($db->query($q2) === true) {
                header("Location: details.php");
                $db->close();
                exit();
            }else {
                echo "Error: " . $q2 . "<br>" . $db->error;
              }
    
        } else {
            echo "Email address is not available. Signup failed.";
            $db->close();
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Recipe #1</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="recipestyle.css">
<script type="text/javascript" src="details.js"></script>
</head>

<body>
<header>
    <h4><a href="http://www2.cs.uregina.ca/~gds412/as1/login.php" style="color: #C4C4C4;"><?php echo $_SESSION["uname"]  ?></a></h4>
    <h1>
    Recipe #1
    </h1>


<h2><a href="http://www2.cs.uregina.ca/~gds412/as1/recipelist.php" style="color: black; padding: 5px;"  >Browse other recipes</a></h2>
</header>

<section>
<article>
    <img src="f1.jpg" alt="meal" height="150" width="225" class="left"/>
    <h2><a href="http://www2.cs.uregina.ca/~gds412/as1/details.php" style="color: black;">Recipe #1</a></h2>
    <h3>@chrisave</h3><br><br>
    <h5><button type="button" class="button button2 button3" id="plus" style="float: left;">+</button>
        <button type="button" class="button button2 button3" id="minus" style="float: left;">-</button>Rate this meal:</h5>

    <form action="details.php" method="post">
    <input type="hidden" name="submitted" value="1">
    <input type="number" id="rating" name = "rating" value="0" max="5" min="0">
    <button type="submit" class=" button2" >Rate</button>
    </form>
<br>
    <h3>Ingredients</h3>
<ul>
   <li> 1 (3 pound) beef chuck roast</li>

   <li>salt and ground black pepper to taste</li>

   <li>4 (10.5 ounce) cans condensed beef broth (such as Campbell's®)</li>

   <li>1 cup water</li>

   <li>1 white onion, cut into large wedges</li>

   <li>5 cloves garlic</li>

   <li>1 (16 ounce) package carrots, peeled</li>

   <li>1 sprig fresh rosemary</li>

<li>Mashed Potatoes:</li>

<li>5 pounds Yukon Gold potatoes, peeled and diced</li>

<li>1 (12 ounce) can evaporated milk, or as needed</li>

<li>½ cup butter</li>

<li>salt to taste</li>
</ul>

<h3>Instructions</h3>

<p>Check out my cool recipe I made.
    Step 1.
    Season chuck roast with salt and black pepper; sear in a large, deep skillet or Dutch oven over medium heat until browned, about 10 minutes per side.
    
    Step 2.
    Pour beef broth and water into the skillet with roast. Arrange onion wedges and garlic cloves around the meat. Spread carrots atop roast and place sprig of rosemary atop carrots. Turn heat to medium-low and simmer until tender, about 6 hours.
    
    Step 3.
    Cover potatoes with water in a large pot and bring to a boil; reduce heat to low and simmer until tender, about 30 minutes. Drain. Mash potatoes with butter and half the evaporated milk until smooth; slowly mash remaining evaporated milk into potatoes to achieve the desired consistency. Season with salt.

    Step 4.
    Remove 1 or 2 cloves of garlic from skillet and mash cloves on top of the roast; serve with mashed potatoes.</p>
</article>

</section>

<footer>
<p>&copy; 2021 Greg Sveinbjornson</p>
</footer>
<script type="text/javascript" src="details-r.js"></script>
</body>
</html>