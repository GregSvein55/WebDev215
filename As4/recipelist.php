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


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Recipes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="recipestyle.css">
</head>

<body>
<header>
    <h4><a href="http://www2.cs.uregina.ca/~gds412/as1/login.php" style="color: #C4C4C4;"><?php echo $_SESSION["uname"]  ?></a></h4>
    <h1>
    Today's Top Recipes
    
    </h1>


<h2><a href="http://www2.cs.uregina.ca/~gds412/as1/post.php" style="color: black; padding: 5px;"  >Post a Recipe</a></h2>
</header>

<section>
<article>
    <img src="f1.jpg" alt="meal" height="100" width="150" class="left"/>
    <h2><a href="http://www2.cs.uregina.ca/~gds412/as1/details.php" style="color: black;">Recipe #1</a></h2>
    <h3>@chrisave</h3>
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
<article>
    <img src="f2.jpg" alt="meal" height="100" width="150" class="left"/>
    <h2><a href="http://www2.cs.uregina.ca/~gds412/as1/details.php" style="color: black;">Recipe #2</a></h2>
    <h3>@chrisblvd</h3>
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

<article>
    <img src="f3.jpg" alt="meal" height="100" width="150" class="left"/>
    <h2><a href="http://www2.cs.uregina.ca/~gds412/as1/details.php" style="color: black;">Recipe #3</a></h2>
    <h3>@chrisdr</h3>
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
</body>
</html>