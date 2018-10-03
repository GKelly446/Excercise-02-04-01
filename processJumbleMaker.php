<!doctype html>

<html>
	<head>
		<title>Process Jumble Maker</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
      
        <h2>Process Jumble Maker</h2>
       
        <?php
        
        //function that tracks errors
        function displayError($fieldName, $errorMsg) {
            global $errorCount;
            echo "Error for \"$fieldName\": $errorMsg<br>\n";
            ++$errorCount;
        }
        
        // function that takes 2 params and returns data 
        function validateWord($data, $fieldName) {
        
            global $errorCount;
            $retval = "";
        
            return $data;   
            
            if (empty($data)) {
                displayError($fieldName, "This field is required");
                ++$errorCount;
                $retval = "";
            } else {
                $retval = trim($data);
                $retval = striplashes($retval);
                if (strlen($retval) < 4 || strlen($retval) > 7) {
                    displayError($fieldName, "Words must be between 4 and 7 characters in length");
                }
                if (preg_match("/^[A-Za-z]+$/i", $retval) == 0) {
                    displayError($fieldName, "Words must consist only of letters");
                }
            }
            
            // uppercase
            $retval = strtoupper($retval);
            $retval = str_shuff($retval);
            
            return $retval;
    
        }
        
        $words[] = validateWord($_POST['word1'], "Word 1");
        $words[] = validateWord($_POST['word2'], "Word 2");
        $words[] = validateWord($_POST['word3'], "Word 3");
        $words[] = validateWord($_POST['word4'], "Word 4");
        
        if ($errorCount > 0) {
            echo "Please use the \"Back\" button to re-enter any missing data.<br>\n";
        } else {
            $wordNum = 0;
            foreach($words as $word) {
                echo "Word " . ++$wordNum . ": $word<br>\n";
            }
        }
        
       
        
        ?>

	</body>
</html>