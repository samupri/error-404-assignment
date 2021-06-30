<?php 

$baseUrl = "http://" . $_SERVER["HTTP_HOST"];

$pieces = explode("/", $_SERVER["REQUEST_URI"]);

$projectName = $pieces[1];

unset($pieces[0], $pieces[1]);

$gibberish = implode("/", $pieces);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Error Page</title>
        <link rel="stylesheet" <?php echo "href=\"{$baseUrl}/{$projectName}/error-404-assignment/css/style.css\"" ?>>
    </head>
    <body id="error" class="error">
        <h1>404 Error Page</h1>

        <img src="img/boy.png" alt="Boy peeping" height=300px width=auto >
    
        <section class="feedback">
        <div class="heading"><p>OOPSIE !</p></div>

        <?php echo "<p>There is no such content: <p>{$gibberish}</p>.</p> 
        <p>Back to 
        <a href=\"{$baseUrl}/{$projectName}/error-404-assignment/index.php\">Home-page</a>
        </p>"; ?></div>  

    </body>
</html>