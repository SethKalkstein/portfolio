<?php 
/**
 * Contact page for Seth J kalkstein Developer
 */
?>
<?php 
    include "resources/header.php"; 
    include "resources/mainnav.php";
    include "resources/contactTransmittion.php";
?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6118.675055975244!2d-75.16417492009839!3d39.93383916336471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c6194cea361f%3A0xa9f834d0a175373d!2sSouth%20Philadelphia%2C%20Philadelphia%2C%20PA%2019147!5e0!3m2!1sen!2sus!4v1567205320365!5m2!1sen!2sus" width="700" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <h3>Thnik we'd be a good fit or have a question?</h3>
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
