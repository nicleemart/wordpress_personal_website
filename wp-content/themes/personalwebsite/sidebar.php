<div class="header">

	<div class="name">nikki martin</div>

	<div class="socialMedia">
		<a href="https://www.facebook.com/nikki.lee.martin" target="_blank"><img src="<?php echo "$directory_prefix" . "images/fb.png" ?>" alt="Facebook" class="socialMedia__image"></a>
		<a href="https://github.com/nicleemart" target="_blank"><img src="<?php echo "$directory_prefix" . "images/github.png" ?>" alt="GitHub" class="socialMedia__image"></a>
		<a href="https://www.linkedin.com/in/nikki-martin-7b9645a2" target="_blank"><img src="<?php echo "$directory_prefix" . "images/linkedin.png" ?>" alt="LinkedIn" class="socialMedia__image"></a>
	</div>

</div>

<div class="navigation">

	<div class="navTitle">Navigation</div>

	<div class="navHeader">Main</div>

		<div <?php if ($thisPage=="Index") {echo " id=\"currentpage\"";} ?> class="navText"><a href="<?php echo "$directory_prefix" . "index.php" ?>">Home</a></div>

		<div <?php if ($thisPage=="Goals") {echo " id=\"currentpage\"";} ?> class="navText"><a href="<?php echo "$directory_prefix" . "goals.php" ?>">Goals</a></div>

		<div <?php if ($thisPage=="Dog") {echo " id=\"currentpage\"";} ?> class="navText"><a href="<?php echo "$directory_prefix" . "dog.php" ?>">Meet Rooster</a></div>

		<div class="navHeader">Articles</div>

		<div <?php if ($thisPage=="Hacking") {echo " id=\"currentpage\"";} ?> class="navText"><a href="<?php echo "$directory_prefix" . "articles/hacking.php" ?>">Hacking</a></div>

		<div <?php if ($thisPage=="Web") {echo " id=\"currentpage\"";} ?> class="navText"><a href="<?php echo "$directory_prefix" . "articles/web.php" ?>">About the Web</a></div>

		<div <?php if ($thisPage=="Paths") {echo " id=\"currentpage\"";} ?> class="navText"><a href="<?php echo "$directory_prefix" . "articles/paths.php" ?>">PHP and Paths</a></div>

		<div <?php if ($thisPage=="HTMLDoc") {echo " id=\"currentpage\"";} ?> class="navText"><a href="<?php echo "$directory_prefix" . "articles/htmldoc.php" ?>">HTML Doc Tags</a></div>

		<div class="navHeader">Projects</div>

		<div <?php if ($thisPage=="RPS") {echo " id=\"currentpage\"";} ?> class="navText"><a href="<?php echo "$directory_prefix" . "projects/rps/index.php" ?>">Rock, Paper, Scissors</a></div>

		<div <?php if ($thisPage=="TTT") {echo " id=\"currentpage\"";} ?> class="navText"><a href="<?php echo "$directory_prefix" . "projects/ttt/index.php" ?>">Tic Tac Toe</a></div>
	
</div>
