<?php 
/**
 * Contact page for Seth J kalkstein Developer
 */
?>
<?php 
    include "resources/header.php"; 
    include "resources/mainnav.php";
?>
<main id="contact-main">
    <section id="location">
        <h2>Find Me Here</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6118.675055975244!2d-75.16417492009839!3d39.93383916336471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c6194cea361f%3A0xa9f834d0a175373d!2sSouth%20Philadelphia%2C%20Philadelphia%2C%20PA%2019147!5e0!3m2!1sen!2sus!4v1567205320365!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6118.675055975244!2d-75.16417492009839!3d39.93383916336471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c6194cea361f%3A0xa9f834d0a175373d!2sSouth%20Philadelphia%2C%20Philadelphia%2C%20PA%2019147!5e0!3m2!1sen!2sus!4v1567205320365!5m2!1sen!2sus" width="700" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
    </section>

    <section id="write-me">
        <h3>Think we'd be a good fit or have a question?</h3>
        <form id ="contact" action="" method="POST">
        <fieldset>
            <legend>Contact Info</legend>
            <input type="text" id="fullName" name="fullName" tabindex="0" placeholder="Name" required>
            <input type=" text" id="subject" name="subject" tabindex="-1" placeholder="Dear screen reader users, please leave this completely empty. It it is only here to prevented automated filling of this form.">
            <input type="email" id="email" name="email" tabindex="0" placeholder="Email" required>
            <textarea id="message" name="message" tabindex="0" placeholder="Your Message" cols="30" rows="10" required></textarea>

            <input type="submit" id="submit" name="submit" value="SUBMIT">
        </fieldset>
        </form>
    </section>

    <section id="contact-links">
        <a target="_blank" href="https://www.linkedin.com/in/seth-kalkstein"><img src="images/LI-In-Bug.png" alt="LinkedIn Logo" title="Visit My LinkedIn Profile"></a>
        <a target="_blank" href="https://github.com/SethKalkstein"><img src="images/GitHub-Mark-Light-120px-plus.png" alt="GitHub Logo" title="Check Out My Code on GitHub"></a>
        <a href="mailto:seth@sethjkalkstein.com"><img src="images/icons8-important-mail-100.png" alt="Email Logo" title="Send Me an Email"></a>
    </section>
    </main>
<script src="js/noSpam.js"></script>
<?php include "resources/footer.php"; ?>
<!-- 
<form id="myformid" action="/myformaction">
    Real fields
    <label for="nameaksljf">Your Name</label>
    <input type="text" id="nameksljf" name="nameksljf" placeholder="Your name here" required maxlength="100">
    <label for="emaillkjkl">Your E-mail</label>
    <input type="emaillkjkl" id="emaillkjkl" name="emaillkjkl" placeholder="Your e-mail here" required>
    H o n e y p o t
    <label class="ohnohoney" for="name"></label>
    <input class="ohnohoney" autocomplete="off" type="text" id="name" name="name" placeholder="Your name here">
    <label class="ohnohoney" for="email"></label>
    <input class="ohnohoney" autocomplete="off" type="email" id="email" name="email" placeholder="Your e-mail here">
</form> -->
