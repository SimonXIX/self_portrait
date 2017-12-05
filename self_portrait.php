<?php
# @name: self_portrait.php
# @version: 0.1
# @license: The MIT License <https://opensource.org/licenses/MIT>
# @purpose: Produce self-portraits
# @author: Simon Barron <simonxix@riseup.net>
# @acknowledgements: 
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>self-portrait</title>

    <link href="css/self_portrait.php.css" rel="stylesheet">

  </head>

<body>
<section class="text-center">
  <div class="header">
    <h3><a href="/self/index.html">TRY AGAIN</a></h3>
  </div>
</section>
<div class="portrait">
<?php
$dog_male="INSERT ASCII ART HERE";

$dog_female="INSERT ASCII ART HERE";

$dog_intersex="INSERT ASCII ART HERE";

$male_non_long="INSERT ASCII ART HERE";

$male_non_short="INSERT ASCII ART HERE";

$male_non_none="INSERT ASCII ART HERE";

$male_woman_long="INSERT ASCII ART HERE";

$male_woman_short="INSERT ASCII ART HERE";

$male_woman_none="INSERT ASCII ART HERE";

$male_man_long="INSERT ASCII ART HERE";

$male_man_short="INSERT ASCII ART HERE";

$male_man_none="INSERT ASCII ART HERE";

$female_non_long="INSERT ASCII ART HERE";

$female_non_short="INSERT ASCII ART HERE";

$female_non_none="INSERT ASCII ART HERE";

$female_woman_long="INSERT ASCII ART HERE";

$female_woman_short="INSERT ASCII ART HERE";

$female_woman_none="INSERT ASCII ART HERE";

$female_man_long="INSERT ASCII ART HERE";

$female_man_short="INSERT ASCII ART HERE";

$female_man_none="INSERT ASCII ART HERE";

$inter_non_long="INSERT ASCII ART HERE";

$inter_non_short="INSERT ASCII ART HERE";

$inter_non_none="INSERT ASCII ART HERE";

$inter_woman_long="INSERT ASCII ART HERE";

$inter_woman_short="INSERT ASCII ART HERE";

$inter_woman_none="INSERT ASCII ART HERE";

$inter_man_long="INSERT ASCII ART HERE";

$inter_man_short="INSERT ASCII ART HERE";

$inter_man_none="INSERT ASCII ART HERE";

if($_POST["species"] == "dog"){
	if($_POST["sex"]=="male"){
		echo $dog_male;
	}
	elseif($_POST["sex"]=="female"){
		echo $dog_female;
	}
	elseif($_POST["sex"]=="intersex"){
		echo $dog_intersex;
	}
}
elseif($_POST["species"]=="human"){
	if ($_POST["sex"] == "male"){
		if($_POST["gender"]=="non"){
			if($_POST["hair"]=="long"){
				echo $male_non_long;
			}
			elseif($_POST["hair"]=="short"){
				echo $male_non_short;
			}
			elseif($_POST["hair"]=="none"){
				echo $male_non_none;
			}
		}
		elseif($_POST["gender"]=="woman"){
			if($_POST["hair"]=="long"){
				echo $male_woman_long;
			}
			elseif($_POST["hair"]=="short"){
				echo $male_woman_short;
			}
			elseif($_POST["hair"]=="none"){
				echo $male_woman_none;
			}
		}
		elseif($_POST["gender"]=="man"){
			if($_POST["hair"]=="long"){
				echo $male_man_long;
			}
			elseif($_POST["hair"]=="short"){
				echo $male_man_short;
			}
			elseif($_POST["hair"]=="none"){
				echo $male_man_none;
			}
		}
	}
	elseif($_POST["sex"] == "female"){
		if($_POST["gender"]=="non"){
			
			if($_POST["hair"]=="long"){
				echo $female_non_long;
			}
			elseif($_POST["hair"]=="short"){
				echo $female_non_short;
			}
			elseif($_POST["hair"]=="none"){
				echo $female_non_none;
			}
		}
		elseif($_POST["gender"]=="woman"){
			
			if($_POST["hair"]=="long"){
				echo $female_woman_long;
			}
			elseif($_POST["hair"]=="short"){
				echo $female_woman_short;
			}
			elseif($_POST["hair"]=="none"){
				echo $female_woman_none;
			}
		}
		elseif($_POST["gender"]=="man"){
			
			if($_POST["hair"]=="long"){
				echo $female_man_long;
			}
			elseif($_POST["hair"]=="short"){
				echo $female_man_short;
			}
			elseif($_POST["hair"]=="none"){
				echo $female_man_none;
			}
		}
	}
	elseif($_POST["sex"]=="intersex"){
		if($_POST["gender"]=="non"){
			
			if($_POST["hair"]=="long"){
				echo $inter_non_long;
			}
			elseif($_POST["hair"]=="short"){
				echo $inter_non_short;
			}
			elseif($_POST["hair"]=="none"){
				echo $inter_non_none;
			}
		}
		elseif($_POST["gender"]=="woman"){
			
			if($_POST["hair"]=="long"){
				echo $inter_woman_long;
			}
			elseif($_POST["hair"]=="short"){
				echo $inter_woman_short;
			}
			elseif($_POST["hair"]=="none"){
				echo $inter_woman_none;
			}
		}
		elseif($_POST["gender"]=="man"){
			
			if($_POST["hair"]=="long"){
				echo $inter_man_long;
			}
			elseif($_POST["hair"]=="short"){
				echo $inter_man_short;
			}
			elseif($_POST["hair"]=="none"){
				echo $inter_man_none;
			}
		}
	}
}
?>
</div>
</body>
</html>