<?php 
/**
 * Summary of projects with links to those projects and to thier github repos, including this very website!
 */

    include "../resources/header.php"; 
    include "../resources/mainnav.php";
?>
<main>
    <h1>Projects</h1>
    <p>The HTML you're seeing below was automatically generated using PHP functions that I wrote to parse information in comments at the head of each projects index file.</p>
<?php 

    /**
     * Finds text in the header parses the text between the tags for that attribute
     * returns the informations inside the tags
     * 
     * @param {string} $att : the attribute being parsed
     * @param {string} $fileString : text of the file being searched 
     * 
     * @return {string} content between the header attribute tags
     *  
     */
    function parseAttribute (string $att, string $fileString): string {
        $attLength = strlen($att);
        $startPos = strpos($fileString, "^".$att."^");
        $endPos = strpos($fileString, "^/".$att."^");
        $strLen = $endPos - ($startPos + $attLength + 2);
        $attributeContent = substr($fileString, $startPos + $attLength +2, $strLen);
        return $attributeContent;
    }
/**
 * loop through each directory (they each represent a project) and pull the header information
 * to find the attributes contained within the header using the 
 * parseArtibutes funciton. 
 * @return {array[][]} $projectArray 
 * return value is a multidimentional array consisting of 
 * an indexed array whose elements are associative arrays of the form
 * $projectArray[["title" => (header content), "gitRepo" => (header content), "tech" => (header content), "highlights" => (header content), "description" => (header content), "image" => (header content), "path" => (header content), "order" => (header content), "dir" => (dir name)], ["title" => (header content), "gi...],["ti...],[...],...]
 */
    function createProjectArray(){
        $projectArray = [];
        foreach ( array_diff(scandir("."), array('..', '.')) as $dir) {
            if (is_dir($dir)) {
                // echo "<br> dir: ".$dir."<br>";
                $aProject = [];

                $projectAttributes = ["title", "gitRepo", "tech", "highlights", "description", "image", "path", "order"];
                
                $aProject["dir"] = $dir;

                $headerInfo = file_get_contents($dir."/index.php");
                
                foreach ($projectAttributes as $att){
                    $aProject[$att] = parseAttribute($att, $headerInfo);
                }
                $projectArray[] =  $aProject;
            }
        }
        return $projectArray;
    }

    
    /**
     * custom sort for the multidimentional array
     * sorder by the order key/value
     */
    function byOrder($a, $b){
        return $a["order"] > $b["order"];
    }
    /**
     * Takes the unprocessed array, sorts it, and creates HTML
     * from the information within, either directly with one line of code
     * echos, or in a function when more processing is required
     * 
     * @param {array[][]} $theProjects the multidimentional array created in the 
     * createProjectArray() function
     * 
     * no return values  
     */
    function createProjectHTML($theProjects){
        
        usort($theProjects, "byOrder");
        
        foreach($theProjects as $project){

            createImgHTML($project["image"], $project["title"]);
            echo "<h3>".$project["title"]."</h3>";
            echo "<p>Technology used: ".$project["tech"]."</p>";
            echo "<p>Project highlights: ".$project["highlights"]."</p>";
            echo "<p>Description: ".$project["description"]."</p>";
            echo '<a target="_blank" href="'.$project["gitRepo"].'">gitHub</a>';
            projectLinkHTML($project["dir"],$project["path"]);
            // echo "<a href='".$project["dir"]."/index.php'>See this project</a>";
        }
    }
    /**
     * creates the html for the project image
     * @param {string} $img
     * @param {string} $title
     */
    function createImgHTML(string $img, string $title){
        $src = '../images/projectImages/'.$img;
        $alt = 'Screenshot of the '.$title.' project.';
        echo '<br><img src="'.$src.'" alt="'.$alt.'">';
    }
    /**
     * check to see if the project is contained "here" meaning the project directory is
     * contained within this script's parent directory, or if the root of the project is
     * contained somewhere else.
     * @param {string} $dir the directory of this project
     * @param {string} $path the path of the project or "here" if it is in the project directory 
     */
    function projectLinkHTML(string $dir, string $path){
        $href = $path == "here" ? $dir."/index.php" : $path;
        echo '<a target="_blank" href="'.$href.'">See Project</a>';        
    }

    createProjectHTML(createProjectArray());

    ?>
</main>
<?php include "resources/footer.php" ?>

<a href=""></a>
<img src="" alt="">