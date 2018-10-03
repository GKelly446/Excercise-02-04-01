<!doctype html>

<html>
	<head>
		<title>Scholarship</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>

	</head>

	<body>
	    
	    <?php
        //building a simple script that take the input from the html file and concatinates them together on form send
            $firstName = striplashes($_POST['fName']);
            $lastName = striplashes($_POST['lName']);
            
            echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        ?>

	</body>
	
</html>