<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar is-dark">
        <div class="navbar-brand">
            <a href="index.html" class="navbar-item"><strong>REVIO</strong></a>
    
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
    
        <div class="navbar-menu" id="main-navbar">
            
            </div>

            <div class="navbar-end">
                <div class="dropdown is-hoverable navbar-item">
                    <div class="dropdown-trigger">
                      <button class="button is-uppercase is-dark" aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>COURSES</span>
                        <span class="icon is-small">
                          <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </span>
                      </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                      <div class="dropdown-content">
                        <div class="dropdown-item">
                           
                               <a href="course-html.html" class="navbar-item">HTML</a>
                               <a href="course-css.html" class="navbar-item">CSS</a>
                               <a href="course-js.html" class="navbar-item">JAVA SCRIPT</a>
                            
                        </div>
                      </div>
                    </div>
                  </div>


                <a href="#" class="navbar-item is-uppercase">Contact</a>
            </div>
        </div>
    </nav>
    <div class="details">
        <div class="">
            <div class="heading">
                 <h1>Build Responsive Real-World Website with HTML and CSS</h1>
                <p>Learn modern HTML5, CSS3 and web design by building a stunning website for your portfolio! Includes flexbox and CSS Grid</p>
                <p>English, French [Auto]<br>
                    German [Auto], Indonesian [Auto], Italian [Auto], Polish [Auto], Portuguese [Auto], Spanish [Auto]</p>
            </div>
            <div class="learn-content">
               <h1>What you'll learn</h1> 
                <hr>
            <div class="earn-content-list">
                
                    <li>Become a modern and confident HTML and CSS developer, no prior knowledge needed!</li>
                    <li>Design and build a stunning real-world project for your portfolio from scratch</li>
                    <li>Modern, semantic and accessible HTML5</li>
                    <li>Modern CSS (previous CSS3), including flexbox and CSS Grid for layout</li>
                    <li>Important CSS concepts such as the box model, positioning schemes, inheritance, solving selector conflicts, etc.</li>
                    <li>A web design framework with easy-to-use rules and guidelines to design eye-catching websites</li>
                    <li>How to plan, sketch, design, build, test, and optimize a professional website</li>
                    <li>How to make websites work on every possible mobile device (responsive design)</li>
                    <li>How to use common components and layout patterns for professional website design and development</li>
                    <li>Developer skills such as reading documentation, debugging, and using professional tools</li>
                    <li>How to find and use free design assets such as images, fonts, and icons</li>
                    <li>Practice your skills with 10+ challenges (solutions included)</li>
                
            </div>

            </div>
            <div>
                <h1>Course content</h1>
                <div>
                    <h1>11section</h1>
                    <h1>150 lectures</h1>
                    <l1>12hours</l1>
                </div>
               
            </div>
            <div>
                <ul>
                    <li>css border</li>
                    <li>css border</li>
                    <li>css display</li>
                    <li>css cursor</li>
                    <li>css button</li>
                    <li>css float</li>
                    <li>css font</li>
                    <li>css font-family</li>
                    <li>css color</li>
                    <li>css hover</li>
                </ul>
            </div>
            
        </div>
        <div class="box">
            <h1>REGISTER HERE</h1>
            <form action="datasave.php" method="POST">
                <label>NAME:</label>
                <input type="text" name="name" placeholder="Name" class="input">
                <label>Passward:</label>
                <input type="password" name="passward" placeholder="Password" class="input">
                <input type="text" name="course" value="css" style="display: none;">
                <label>Mobile Number:</label>
                <input type="text" name="mobilenumber" placeholder="Mobile Number" class="input">
                <input type="submit" name="submit" value="Apply" class="button is-uppercase is-danger">
            </form>
           
        </div>
    </div>
    
</body>
</html>