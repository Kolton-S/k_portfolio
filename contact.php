<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolton Simpson - Back End and Front End</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">

</head>

<body>
    <section id="header">
        <div id="coloredBar"></div>
        <a href="selection.html"><img src="images/dotMenu.png" id="dotMenu" alt="Menu"></a>
        <h2 id="title">Contact</h2>
        <h2 id="goBack">Go Back</h2>
    </section>

    <section id="socialPara">
        <img src="images/headshot.jpg" alt="headshot" id="headshot">
        <p id="contactPara">Kolton Simpson currently goes to Fanshawe College for interactive media design. He has been working as a freelance developer and graphic designer for a number of years. </p>
        <div id="social">
            <a href="http://instagram.com/simpsonkolton" target="_blank"><img src="images/instagram.png" alt="instagram" class="socialIcon">
                <h2 class="socialLink">simpsonkolton</h2></a>
            <a href="http://linkedin.com/kolton-simpson" target="_blank"><img src="images/linkedin.png" alt="linkedin" class="socialIcon">
                <h2 class="socialLink">kolton-simpson</h2></a>
            <a href="mailto:hello@koltons.work" target="_blank"><img src="images/email.png" alt="email" class="socialIcon">
                <h2 class="socialLink">hello@koltons.work</h2></a>
            <a href="simpson_kolton-Resume2018" target="_blank"><img src="images/download.png" alt="download resume" class="socialIcon">
                <h2 class="socialLink">resume</h2></a>
        </div>
    </section>

    <section id="form">
        <form method="post" action="contact.php">
            <label class="formLabel">Name
                <input type="text" name="name" class="textForm" />
            </label>
            <br>
            <label class="formLabel">Email
                <input type="email" name="email" class="textForm" />
            </label>
            <br>
            <label class="formLabel">Message
                <textarea name="message" id="message"></textarea>
            </label>
            <br>
            <button class="buttonContact" type="submit" name="submit">Send</button>
        </form>
    </section>

    <script src="js/particles/particles.js"></script>
    <script src="js/particles/app.js"></script>
    <script src="js/main.js" defer="defer"></script>
    <script src="js/vendor/what-input.js"></script>

</body>
