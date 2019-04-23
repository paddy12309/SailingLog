<?php
Class pagetemp
{
	
	private $title;
	private $me;
	private $year;
	
    function __construct($titleIn, $meIn, $yearIn)
    {
        $this->title=$titleIn;
        $this->me=$meIn;
        $this->year=$yearIn;
    }
	
	function open()
	{
		echo "<!DOCTYPE html>";
		echo "<html lang='en''>";

	}
	
	function head()
	{
		echo "<head>";
		echo "<title>".$this->title."</title>";
		echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
		echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>";
		echo "<script src'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
		echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>";
		echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>";
		echo "</head>";
	}
	
	function body()
	{
		echo "<body>";
		echo "<div class='jumbotron text-center'>";
		echo "<h1>Solent Night Out</h1>";
		echo "<p>The definitive place to find the best night out destinations!</p>";
        echo "<nav class='navbar navbar-expand-sm bg-dark navbar-dark'>";
        echo "<ul class='navbar-nav'>";
        echo "<li class='nav-item'>";
        echo "<a nav-link active' href='index.php'>--Home--</a>";
        echo "</li>";
        echo "<li class='nav-item'>";
        echo "<a nav-link active' href='loginwebpage.php'>--login--  </a>";
        echo "</li>";
        echo "<li class='nav-item'>";
        echo "<a nav-link active' href='searchpage.php'>  --search--  </a>";
        echo "</li>";
        echo "<li class='nav-item'>";
        echo "<a nav-link active' href='logout.php'>  --logout--  </a>";
        echo "</li>";
        echo "<li class='nav-item'>";
        echo "<a nav-link active' href='newListing.php'>  --new listing--  </a>";
        echo "</li>";
		echo "<li class='nav-item'>";
        echo "<a nav-link active' href='approveR.php'>  --admin--  </a>";
        echo "</li>";
        echo "</ul>";
        echo "</nav>";
		echo "</div>";
	}
	
	function foot()
	{
		echo "<div class='jumbotron text-center' style='margin-bottom:0'>";
		echo "<p>DFTI Project copywrite (c) ". $this->me." ".$this->year."</p>";
		echo "</div";
    }

}
?>
