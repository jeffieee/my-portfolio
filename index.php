<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
    
   <!-- <nav>
    <div class="logo">Jefferson Bual</div>
    <div>
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav> -->

  <nav id="hamburger-nav">
    <!-- <div class="logo">Jefferson Bual</div> -->
    <div class="hamburger-menu">
      <div class="hamburger-icon" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu-links">
        <ul>
          <li><a href="#profile" onclick="toggleMenu()">Home</a></li>
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <section id="profile">
      <!-- <div class="section__pic-container">
        <img src="./assets/profile-pic.png" alt="Jefferson Bual profile picture" />
      </div> -->
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Jefferson Bual</h1>
        <p class="section__text__p2">Thank you for visiting my portfolio. I am an aspiring backend developer and software engineer with a strong interest in data science.</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('./assets/resume-example.pdf')"
          >
            Curriculum Vitae
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Information
          </button>
        </div>
        <div id="socials-container">
          <img
            src="./assets/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='https://www.linkedin.com/in/jefferson12'"
          />
          <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/jeffieee'"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="./assets/about-pic-3.png"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="./assets/experience.png"
                alt="Experience icon"
                class="icon"
              />
              <h3>Internship</h3>
              <p>3+ months <br />Backend Development</p>
            </div>
            <div class="details-container">
              <img
                src="./assets/education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Education</h3>
              <p>Bachelor of Science in<br />Computer Science</p>
            </div>
          </div>
          <div class="text-container">
            <p>
              With a strong work ethic and commitment to excellence, I have demonstrated my ability to multitask, work autonomously, and meet deadlines effectively across various projects. I am highly adaptable, continuously seeking growth opportunities, and consistently striving for superior results. My participation in the 12th IT Olympics 2023 as a Quiz Bee participant reflects my dedication to both academic and professional development. Additionally, I hold a certification from the Wadhwani Foundation in Core Employability Skills, further enhancing my readiness for diverse professional challenges.
            </p>
          </div>
        </div>
      </div>
      <!-- <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      /> -->
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
         <div id="experience" class="details-container">
         <p class="section__text__p1">Pixel8 Web Solutions and Consultancy Inc.</p>
          <h2 class="experience-sub-title">Backend Developer</h2>
          
          <!-- <p class ="description">I focused on backend development, 
            ensuring systems aligned with tasks requirements. 
            Managed Git version control on GitLab for error-free 
            collaboration. Developed robust backend APIs, 
            conducted thorough PHPUnit testing, and documented 
            request handling. Applied object-oriented PHP principles
            for efficient coding.<br></br></p>  -->
    <div class="article-container">
        <article>
            <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
            <div>
                <h3>SQL</h3>
                <p>Intermediate</p>
            </div>
        </article>
        <article>
            <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
            <div>
                <h3>OOP</h3>
                <p>Intermediate</p>
            </div>
        </article>
        <article>
            <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
            <div>
                <h3>PHP</h3>
                <p>Experienced</p>
            </div>
        </article>
        <article>
            <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
            <div>
                <h3>PHP Unit</h3>
                <p>Experienced</p>
            </div>
        </article>
        <article>
            <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
            <div>
                <h3>Gitlab</h3>
                <p>Experienced</p>
            </div>
        </article>
        <article>
            <img src="./assets/checkmark.png" alt="Experience icon" class="icon" />
            <div>
                <h3>Restful API</h3>
                <p>Experienced</p>
            </div>
        </article>
    </div>
</div>

          <div class="details-container">
          <p class="section__text__p1">Agile 360 Lazada</p>
            <h2 class="experience-sub-title">Officer in Charge</h2>
            <!-- <p class ="description">I managed manpower to optimize operations, 
              ensuring efficiency. Facilitated team communication to 
              align with business strategies. Implemented streamlined 
              operational strategies for enhanced efficiency. 
              Oversaw manpower allocation to meet workload demands 
              effectively. Ensured smooth operations by aligning 
              manpower activities with business objectives.<br></br></p>  -->
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Microsoft Excel</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Team Leadership</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                <h3>Communication Skills</h3>
                <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                <h3>Time Management</h3>
                <p>Experienced</p>
                </div>
              </article>
              
            </div>
          </div>
          
        </div>
      </div>
      <!-- <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      /> -->
    </section>

    
    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/baya.png"
                alt="Project 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">
            BayaScript: Convolutional Neural Networks Driven Character Recognition In a Mobile Application for Learning BayBayin</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/jeffieee/My-Projects/blob/6be6e8515f639191dcf9e1639eae90423b0fb31f/README.md'"
              >
                Github
              </button>
              
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/sapms.png"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">
            Web-Based Student Academic Performance Monitoring System for Banay-Banay Elementary School</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/jeffieee/My-Projects/blob/66a6c4ee6f056c0c5780781fa12cf9b96973adf7/README.md'"
              >
                Github
              </button>
              
            </div>
          </div>
          
          
        </div>
      </div>

      
      <!-- <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects-1'"
      /> -->
    </section>


    <section id="projects-1">
      <div class="experience-details-container">
        <div class="about-containers">
          
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/cnn.png"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">LeNet with Incecption Model of CNN for Learning Baybayin Script from Scratch</h2>
            </h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/jeffieee/My-Projects/blob/8a48d7c822aa201e2f15606f02b1520d2c46ea47/model.py'"
              >
                Github
              </button>
              
            </div>
          </div>
          
          
        </div>
      </div>

      
      <!-- <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contact'"
      /> -->
    </section>


    

    
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="./assets/email.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><a href="mailto:bualjefferson64@gmail.com">bualjefferson64@gmail.com</a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/linkedin.png"
            alt="LinkedIn icon"
            class="icon contact-icon"
          />
          <p><a href="https://www.linkedin.com/in/jefferson12/">LinkedIn</a></p>
        </div>
      </div>
    </section>
    <footer>
      <nav id="desktop-nav"> 
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#profile">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2024 Jefferson Bual. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
