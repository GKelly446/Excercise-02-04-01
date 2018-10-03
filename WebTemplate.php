<!doctype html>

<html>
	<head>
		<title>Web Template</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
       <?php include("inc_header.html");  ?>
        
      <div style="width: 20%; text-align: center; float: left;">
            <?php include("inc_buttonnav.html"); ?>
        </div>
        <!-- Start of dynamic content area -->
        <?php
        if (isset($_GET['content'])) {
            switch ($_GET['content']) {
                case 'About Me':
                    include("inc_about.html");
                    break;
                case 'Contact Me';
                    include ("inc_contact.html");
                    break;
                case 'Home':
                    //a vluae of home means to display the default page
                default;
                    include("inc_home.html");
                    break;
            }
        }
        else {
            include("inc_home.html");
        }
        ?>
        <!-- End of dynamic content area-->
        <?php include("inc_footer.php"); ?>

	</body>
</html>