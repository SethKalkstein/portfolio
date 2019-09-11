<?php 
/**
 * Summary of projects with links to those projects and to thier github repos, including this very website!
 */

    include "../resources/header.php"; 
    include "../resources/mainnav.php";
?>

    <h1>This will be the projects page</h1>
    <?php 
        echo ("Hello all<br>");
/*         $testFile = fopen("personalSite/index.php","r") or die ("unable to open file... frown");
        echo fread($testFile, filesize("./personalSite/index.php"));
        fclose($testFile); */
        function parseAtt ($att, $fileString) {
            $attLength = strlen($att);
            $startPos = strpos($fileString, "^".$att."^");
            $endPos = strpos($fileString, "^/".$att."^");
            $strLen = $endPos - ($startPos + $attLength + 2);
            $attributeContent = substr($fileString, $startPos + $attLength +2, $strLen);
            return $attributeContent;
            // echo strpos($fileString, "^".$att."^")."firstly".strpos($fileString, "^/".$att."^")."laslyt";
        }

        $testFile = file_get_contents("personalSite/index.php");

        echo parseAtt("description", $testFile);

        foreach ( array_diff(scandir("."), array('..', '.')) as $dir) {
            if (is_dir($dir)) {

                echo "<br> dir: ".$dir."<br>";
                $headerInfo = file_get_contents($dir."/index.php");
                $projectTitle = parseAtt("title", $headerInfo);
                echo "<h1>".$projectTitle."</h1>";
            }
        }
        // $directories = glob('.', GLOB_ONLYDIR);

        // foreach($directories as $dir){
        //     echo $dir;
        // }

        // echo strpos($testFile, "^title^")."first".strpos($testFile, "^/title^")."last";
        
        // $testFile = token_get_all(file_get_contents("personalSite/index.php"))[1][1]."meow" ;
        // echo $testFile;
        // $testFile = token_get_all(file_get_contents("pokedex/index.php"));
        // foreach($testFile as $i=>$tokens){
        //     foreach($tokens as $j=>$ind) {
        //     echo "<br><br> outer iteration i: ".$i." Inner it j: ".$j." Content: ".$ind."<br>";
        //     }
        // }

        // $tokens = token_get_all( $testFile );

    ?>

<?php include "resources/footer.php" ?>
