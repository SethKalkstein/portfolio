<?php 
/**
 * 
 * Navigation for the main portion of the site.
 * 
 */
?>

<?php
/**
 * find the file that this script was called from
 * return the name
 */
function getCurrentFile(){
    $stack = debug_backtrace();
    $firstFrame = $stack[count($stack) - 1];
    $initialFile = $firstFrame['file'];
    $prefix = 13;
    return substr($initialFile, $prefix, strlen($initialFile)-$prefix);
}
/**
 * create link and add id for current page
 * 
 */
function makeListTags(){
    //add prefix for production
    $rootPrefix = "";
    if ($_SERVER['SERVER_NAME'] == "localhost"){
        $rootPrefix = "/portfolio";
    }

    $listOfLinks = ["About" => $rootPrefix."/index.php", "Projects" => $rootPrefix."/projects/index.php", "Resume" => $rootPrefix."/resume.pdf", "Contact" => $rootPrefix."/contact.php"];

    foreach($listOfLinks as $lTitle => $lLink){
        $idText = "";
        if (getCurrentFile() ==  $lLink){
            $idText = 'id="currentPage"';
        }
        echo '<li><a '.$idText.' href="'.$lLink.'">'.$lTitle.'</a></li>';
    }
}
?>

<!-- the content -->
<header>
        <nav>
            <ul>
                <!-- dynamically generated above -->
                <?php makeListTags();  ?>

            </ul>
        </nav>
        <h1>Seth J Kalkstein</h1>
        <h3>Software Developer</h3>
    </header>


    
    <!-- <li><a href="/portfolio/index.php">About</a></li>
                <li><a href="/portfolio/projects/index.php">Projects</a></li>
                <li><a href="/portfolio/resume.pdf">Resume</a></li>
                <li><a href="/portfolio/contact.php">Contact</a></li> -->