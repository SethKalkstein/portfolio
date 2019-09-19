<?php 
/**
 * 
 * Navigation for the main portion of the site.
 * 
 * Some of the projects may have different navigation, 
 * so I'm seperating this out in case there is another 
 * nav later
 * 
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
    $listOfLinks = ["About" => "/portfolio/index.php", "Projects" => "/portfolio/projects/index.php", "Resume" => "/portfolio/resume.pdf", "Contact" => "/portfolio/contact.php"];

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