<?php 
/**
 * header file for the site
 */
?>

<?php 
//add prefix for development, none for production
    $rootPrefix = "";
    if ($_SERVER['SERVER_NAME'] == "localhost"){
        $rootPrefix = "/portfolio";
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seth Kalkstein Developer</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?php echo $rootPrefix; ?>/style/css/main.css">
    <!-- <link rel="stylesheet" href="/portfolio/style/css/main.css">        -->
</head>
<body>
