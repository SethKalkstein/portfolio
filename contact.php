<?php 
/**
 * Contact page for Seth J kalkstein Developer
 */
?>
<?php 
    include "resources/header.php"; 
    include "resources/mainnav.php";
?>

    <form action="contact.php" method="POST">
        <input type="text" name="fullName" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="submit">
    </form>

    <a href="https://www.linkedin.com/in/seth-kalkstein">Linkedin</a>
    <a href="https://github.com/SethKalkstein">GitHub</a>
    <a href="mailto:seth@sethjkalkstein.com">Email</a>
    

<?php include "resources/footer.php"; ?>
