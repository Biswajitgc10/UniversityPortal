<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University style website Contact Us</title>
    <link rel="stylesheet" href="graph.css">
</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="image/logo.png"></a>
            <div class="nav-links">
                <i class="fa fa-times" aria-hidden="true"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="new about us.html">ABOUT</a></li>
                    <li><a href="COURSE.html">COURSE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact_form.php">CONTACT US</a></li>
			<li><a href="login.php">LOGIN</a></li>

                </ul>
            </div>
        </nav>
        <h1>Conatct Us</h1>
    </section>
<section class="contact-us">
<div class="row">
    <div class="contact-col">
        <div>
            <i class="fa fa-instagram"></i>
            <span>
                <h5>Ambicapatty, Silchar, Assam</h5>
                <p>Monday to Saturday, 10am to 5pm </p>
            </span></div>
            <div>
            <i class="fa fa-instagram"></i>
            <span>
                 <h5>You can reach us to:-</h5>
                 <p>03842-12345</p>
            </span></div>
             <div>
                <i class="fa fa-instagram"></i>
                <span>
                <h5>info@alphabeta.com</h5>
                <p>Email Us your Query</p></span>
            </div>
    </div>
    <div class="contact-col">
        <form action="insert.php" method="post">
            <input type="text" name="first_name" placeholder="Enter your name:" required>
            <input type="email" name="email" placeholder="Enter email address" required>
            <input type="text" name="comment" placeholder="Enter your Subject" required>
            <textarea rows="8" name="subject" placeholder="Type your message..." required></textarea><br><br>
            <button type="submit" class="hero">Send Message</button>


        </form>
    </div>
</div>
</section>
</body>

</html>