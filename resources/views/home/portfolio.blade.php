<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sai Srungavarapu Portfolio</title>
 <link rel="stylesheet" href="/assets/css/style.css">

  <!--
    - custom css link
  -->


  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="/assets/images/my-avatar.png" alt="Sai Srungavarapu" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Sai Srungavarapu">Sai Srungavarapu</h1>

          <p class="title">Web developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:saisrungavarapu.work@gmail.com" class="contact-link">saisrungavarapu.work@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+15127665661" class="contact-link">+1 (512) 766-5661</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Experience</p>

              <time>9+ Years</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Austin, Texas, USA</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

         <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li> 

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li> 

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            I'm Creative <b>Web Application Developer</b>, with strong interest in Web Application Development.
            I enjoy turning complex problems into simple, beautiful and intuitive designs.
          </p>

          <p>
            My job is to build websites so that it is functional and user-friendly but at the same time attractive.
            Moreover, I
            add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to bring
            across your
            message and identity in the most creative way. I created web design for many famous brand companies.
          </p>
          <p>I have experience with <b>HTML, CSS, JavaScript, React.js, Symfony, MySQL, PHP, and AWS</b>. Beyond my work, I find satisfaction in stretching my horizons in terms of knowledge, keeping up with daily technical advancements, and exploring new places.</p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="/assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  The most modern and high-quality design made at a professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="/assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="/assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Mobile apps</h4>

                <p class="service-item-text">
                  Professional development of applications for iOS and Android.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="/assets/images/icon-photo.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Photography</h4>

                <p class="service-item-text">
                  I make high-quality photos of any category at a professional level.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="/assets/images/avatar-1.png" alt="Gopibabu" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Gopibabu</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Sai was hired to create a corporate identity. We were very pleased with the work done. He has a
                    lot of experience
                    and is very concerned about the needs of client. As a PHP Web Developer, they consistently deliver robust web app interfaces, showcasing expertise in Laravel and React.js. Their commitment to quality, evident in comprehensive test cases, and proficiency in optimizing customer experiences make sai an invaluable asset. Their contributions significantly enhance project success.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="/assets/images/avatar-4.png" alt="Vamsi S" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Vamsi S</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Sai Krishna is an exceptional UI Developer specializing in React.js and Laravel's Blade Templating Engine for Chemical Data Management. Their contributions include enhancing internal user engagement through responsive UI design and optimizing API response time with efficient Laravel, Swagger, and Redis. With proficiency in Postgres, He streamlines data retrieval for Risk Assessment and Reporting. Their commitment to quality, thorough testing, and collaborative work methodologies significantly elevate project success.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="/assets/images/avatar-2.png" alt="Lakshmi J" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Lakshmi J</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Collaborating with Sai has been exceptional. As an experienced Full Stack Web Developer, they excel in creating visually appealing interfaces and elevating user satisfaction through enhanced features. Notably, He played a key role in optimizing transaction processing speed and reducing data retrieval time. Their commitment to quality, comprehensive testing, and proficiency in security compliance contribute significantly to project success. He is a valuable team member, consistently delivering impactful contributions in Agile environments, conducting thorough code reviews, and ensuring seamless feature integration.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="/assets/images/avatar-3.png" alt="Divya J" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Divya J</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Working along with Sai Krish has been exceptional. As a dynamic Web Application Developer, they excel in crafting intuitive WordPress interfaces and implementing robust User Authentication and Roles. Sai Krish demonstrated efficiency in developing web services, optimizing database models, and executing comprehensive testing. Their deployment of scalable applications showcases cost-cutting initiatives, enhancing overall project effectiveness.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="/assets/images/avatar-1.png" alt="Gopi S" width="80" data-modal-img>
              </figure>

              <img src="/assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Gopi S</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Sai was hired to create a corporate identity. We were very pleased with the work done. He has a
                  lot of experience
                  and is very concerned about the needs of client.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Clients</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="#">
                <img src="/assets/images/Nationwide.png"width ="150px", height="150px" alt="client logo" class="clients-image">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="/assets/images/3E logo.jpeg"width ="150px", height="150px" alt="client logo" class="clients-image">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="/assets/images/mint mobile.jpeg"width ="150px", height="150px" alt="client logo" class="clients-image">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="/assets/images/greenesol.jpeg"width ="150px", height="150px" alt="client logo" class="clients-image">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="/assets/images/ghrianTechnologieslogo.png"width ="150px", height="150px" alt="client logo" class="clients-image">
              </a>
            </li>
          </ul>

        </section>

      </article>
      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Dakota State University</h4>

              <!-- <span>2007 — 2008</span> -->

              <p class="timeline-text">
                Masters in Information Systems-Data Management(Madison, SD)
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">JNTUK</h4>

              <!-- <span>2006 — 2007</span> -->

              <p class="timeline-text">
                Bachelors in Computer Science & Engineering(Kakinada, India)
              </p>

            </li>

            <!-- <li class="timeline-item">

              <h4 class="h4 timeline-item-title">SFS High School</h4> -->

              <!-- <span>2002 — 2004</span> -->

              <!-- <p class="timeline-text">
                SFS High School(Nagulapalem, India)
              </p>

            </li> -->

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Nationwide,NE</h4>

              <h4 class="h4 timeline-item-title">PHP Web Developer</h4>

              <span>December 2022 – Present</span>

              <p class="timeline-text">
                Accomplished PHP Web Developer at Nationwide, NE, specializing in PHP, React.js, and HTML5 for robust web app interfaces. Proficient in Laravel's Blade Templating Engine and Eloquent ORM, optimizing customer experiences. Implemented React.js's Unidirectional Data Flow. Developed efficient web services with nodejs, improving transaction processing speed. Expert in MySQL for effective database management. Wrote comprehensive test cases, reducing bug resolution time. Integrated payment systems, which increase successful transactions. Deployed applications on AWS, and achieved a reduction in server response time.
              </p>

            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">3E Company, OH</h4>
              <h4 class="h4 timeline-item-title">PHP Web Developer</h4>

              <span>Oct 2020 - Nov 2022</span>

              <p class="timeline-text">
                Experienced UI Developer specializing in React.js and Laravel's Blade Templating Engine for Chemical Data Management. Enhanced internal user engagement through responsive UI design. Developed efficient restful APIs using Laravel, Swagger, and Redis, optimizing API response time. Proficient in Postgres for Database Management, streamlining data retrieval for Risk Assessment and Reporting. Implemented thorough test suites with PHPUnit for comprehensive API and UI validation. Contributed to Agile methodologies, fostering effective communication within cross-functional teams. Successfully deployed applications on Azure, prioritizing scalability and security for improved performance. Maintained coding standards, conducted code reviews, and encouraged a culture of continuous improvement in a collaborative work environment.
              </p>

            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Mint Mobile, CA</h4>
              <h4 class="h4 timeline-item-title">Full-stack Developer</h4>

              <span>Mar 2018 - Aug 2020</span>

              <p class="timeline-text">
                Experienced Full Stack Web Developer proficient in React.js, Bootstrap CSS, and Tailwind CSS, creating visually appealing interfaces. Enhanced Customer Segmentation features, elevating user satisfaction. Developed efficient web services for Mint Mobile's plans, and achieved a boost in transaction processing speed. Optimized database models, reducing data retrieval time. Executed comprehensive test cases, resulting in a 30% reduction in bug resolution time. Deployed applications on Azure, collaborated in Agile environments and implemented design patterns for robust feature implementation. Skilled in PHP, Symfony, and Drupal, ensuring security compliance. Conducted code reviews and maintained version control for seamless feature integration.
              </p>

            </li>
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Greenesol Power Systems Pvt Ltd,IND</h4>
              <h4 class="h4 timeline-item-title">Software Application Developer</h4>

              <span>Jan 2015 - Nov 2016</span>

              <p class="timeline-text">
                Dynamic Software Application Developer skilled in crafting intuitive WordPress interfaces with Widgets and Plugins. Implemented robust User Authentication and Roles, resulting in a decrease in security incidents. Developed efficient web services in PHP and WordPress, and achieved a reduction in response time. Designed optimized database models, enhancing Document Management with improvement in data retrieval speed. Executed comprehensive testing, reducing post-deployment issues. Deployed scalable applications on AWS, cutting hosting costs. Proficient in Git version control, Linux backend management, and Jenkins pipelines. Collaborative team player improving project dashboard effectiveness. Utilized PHP, JavaScript, HTML, CSS, and jQuery for dynamic, responsive UI features.
              </p>

            </li>
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Ghrian Technologies Pvt Ltd, IND</h4>
              <h4 class="h4 timeline-item-title">PHP/Front-End Developer</h4>

              <span>Nov 2012 - Dec 2014</span>

              <p class="timeline-text">
                Experienced PHP/Front-End Developer skilled in PHP, Symfony, jQuery, Bootstrap, CSS, and JavaScript. Drove enhancements on Abhibus.com, achieving a user base increase and reducing bounce rates. Integrated MySQL for streamlined data management, employed Git for version control and executed deployments on Linux servers. Implemented Jenkins for automated code deployment, reducing deployment time. Engineered interactive features such as a virtual seat selection system, leading to an increase in user satisfaction and a reduction in booking confirmation time. Ensured mobile responsiveness, resulting in an increase in mobile bookings and a rise in overall platform accessibility.
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web Application Development</h5>
                <data value="100">100%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 100%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">PHP</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Larvel</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Symfony</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">MySQL</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">JavaScript</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Reactjs</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">AWS</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/assets/images/project-1.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Finance</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/assets/images/project-2.png" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Orizon</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/assets/images/project-3.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Fundo</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Brawlhalla</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/assets/images/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">DSM.</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/assets/images/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">MetaSpark</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/assets/images/project-7.png" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Summary</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/assets/images/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="/assets/images/blog-1.jpg" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                  <p class="blog-text">
                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="/assets/images/blog-2.jpg" alt="Best fonts every designer" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                  <p class="blog-text">
                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="/assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #80</h3>

                  <p class="blog-text">
                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="/assets/images/blog-4.jpg" alt="UI interactions of the week" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                  <p class="blog-text">
                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="/assets/images/blog-5.jpg" alt="The forgotten art of spacing" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                  <p class="blog-text">
                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="/assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.231803651844!2d-97.70993802449829!3d30.401164501581516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cd72f888e4c3%3A0xbcc4633ea5a4b0b3!2s11900%20Stonehollow%20Dr%2C%20Austin%2C%20TX%2078758!5e0!3m2!1sen!2sus!4v1707415888305!5m2!1sen!2sus" width="600" height="450" width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>