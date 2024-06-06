<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./style.css">
    <style>/* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    text-align: center;
}

/* Container */
.container {
    width: 80%;
    margin: 0 auto;
}

/* Header Styles */
header {
    background: #333;
    color: #fff;
    padding: 1rem 0;
}

header h1 {
    text-align: center;
    margin-bottom: 1rem;
}

header nav ul {
    list-style: none;
    text-align: center;
}

header nav ul li {
    display: inline;
    margin: 0 1rem;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}

/* Section Styles */
section {
    padding: 2rem 0;
    border-bottom: 1px solid #ccc;
}

section h2 {
    text-align: center;
    margin-bottom: 1rem;
}

/* Article Styles */
article {
    margin-bottom: 1rem;
}

article h3 {
    margin-bottom: 0.5rem;
}

/* Social Media Links */
.social-media {
    text-align: center;
    margin-top: 1rem;
}

.social-media a {
    color: #333;
    text-decoration: none;
    margin: 0 0.5rem;
}

.social-media a:hover {
    text-decoration: underline;
}

/* Footer Styles */
footer {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
}

footer p {
    margin: 0;
}
</style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1><?php echo $title = "sai blog"; ?></h1>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- About Section -->
        <section id="about">
            <div class="container">
                <h2>About Me</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vehicula lacus nec risus volutpat, at dictum mi blandit.</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/yourprofile" target="_blank">Facebook</a> |
                    <a href="https://www.instagram.com/yourprofile" target="_blank">Instagram</a> |
                    <a href="https://www.linkedin.com/in/yourprofile" target="_blank">LinkedIn</a>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects">
            <div class="container">
                <h2>Projects</h2>
                <article>
                    <h3>Project One</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit cum corporis fugiat in repellat voluptatum eos quaerat sit at? Tenetur iste assumenda ipsum, incidunt laborum omnis numquam natus cupiditate voluptate dolorum perspiciatis hic, officia iure recusandae temporibus doloremque! Repellat consequatur provident aperiam corporis aliquid modi maiores, dignissimos possimus atque, aliquam impedit perferendis unde soluta! Quis qui, ut provident repellat accusantium eaque aliquam, aspernatur consectetur fuga sit voluptatum maxime. Dolores saepe harum placeat, facilis autem porro vero quas, eius, adipisci ad tempora tenetur ipsam obcaecati non doloremque dolore ipsa deserunt est sapiente. Provident impedit eligendi quis, porro doloribus atque quae non.</p>
                </article>
                <article>
                    <h3>Project Two</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit cum corporis fugiat in repellat voluptatum eos quaerat sit at? Tenetur iste assumenda ipsum, incidunt laborum omnis numquam natus cupiditate voluptate dolorum perspiciatis hic, officia iure recusandae temporibus doloremque! Repellat consequatur provident aperiam corporis aliquid modi maiores, dignissimos possimus atque, aliquam impedit perferendis unde soluta! Quis qui, ut provident repellat accusantium eaque aliquam, aspernatur consectetur fuga sit voluptatum maxime. Dolores saepe harum placeat, facilis autem porro vero quas, eius, adipisci ad tempora tenetur ipsam obcaecati non doloremque dolore ipsa deserunt est sapiente. Provident impedit eligendi quis, porro doloribus atque quae nonLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </article>
                <article>
                    <h3>Project Three</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit cum corporis fugiat in repellat voluptatum eos quaerat sit at? Tenetur iste assumenda ipsum, incidunt laborum omnis numquam natus cupiditate voluptate dolorum perspiciatis hic, officia iure recusandae temporibus doloremque! Repellat consequatur provident aperiam corporis aliquid modi maiores, dignissimos possimus atque, aliquam impedit perferendis unde soluta! Quis qui, ut provident repellat accusantium eaque aliquam, aspernatur consectetur fuga sit voluptatum maxime. Dolores saepe harum placeat, facilis autem porro vero quas, eius, adipisci ad tempora tenetur ipsam obcaecati non doloremque dolore ipsa deserunt est sapiente. Provident impedit eligendi quis, porro doloribus atque quae nonLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </article>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education">
            <div class="container">
                <h2>Education</h2>
                <article>
                    <h3>Master's in Information Systems</h3>
                    <p>Dakota State University</p>
                </article>
                <article>
                    <h3>Bachelor's in Computer Science & Engineering</h3>
                    <p>JNTUK</p>
                </article>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <h2>Contact</h2>
                <p>If you would like to get in touch, please email me at <a href="mailto:example@example.com">example@example.com</a>.</p>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 My Portfolio. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
