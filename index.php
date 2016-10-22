<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Podeanu Alexandru - Freelancer Webdesinger and Front-end Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/front.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
 
  <script src="js/custom.js"></script>
  <script src="js/typed.js"></script>
  <script>
    $(function(){
        $("#hiim").typed({
          strings: ["^3000 a Web Designer ^500", "a Front-End developer ^500", "a UX/UI designer ^500", "a dreamer ^500", "a problem... ^1000 solver", "Alex"],
          typeSpeed: .2,
          startDelay: 1,

        });
    });
  </script>
</head>
<body id="home">
 <div class="container-fluid">
     <div class="row">

        <div class="introducer"> 
         <header>
            <div id="logo">
              <a href="index.php" class="logoSvg" title="Podeanu Alexandru - Passionate WebDesigner and Front-End Developer!">
                  <?php //include("img/logoSvg.svg"); ?>
                  <h1>Podeanu Alexandru</h1>
              </a>
            </div>
            <div id="mainMenu">
               <ul>
                   <li><a href="index.php"> Home </a></li>
                   <li><a href="index.php"> About </a></li>
                   <li><a href="index.php"> Portfolio </a></li>
                   <li><a href="index.php"> Blog </a></li>
                   <li><a href="index.php"> Contact </a></li>
               </ul>
            </div> <!-- /.mainMenu -->
           </header> 
          <div class="darkness"></div>
          <div class="content homeDescription">
              <h2>Hi! I'm <span id="hiim"></span></h2>
              <p>My name is <b>Alexandru-Nicolae Podeanu</b> and I am a freelance <b>Front-end Developer and Web Designer</b> living in Southampton, United Kingdom, originally from Targoviste, Romania.</p>

               <p>My web career began in 2008 when I successfully built my first project which became my springboard in this journey. Since then, I have been working, improving my skills and making connections which contributed to enlarging my vision. </p>
          </div> <!-- /.text-content --> 
          <div class="arrow bounce"></div>
        </div> <!-- /.introducer -->
      </div> <!-- .row -->
         
      <section>
         <div class="row">
           <article class="project">
                <div class="content col-md-7 col-sm-12">
                     <h3>
                        <a href="#">Soccer Schools UK</a>
                     </h3>
                     <p>
                          This project was made for the biggest clinique in London. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <ul class="">
                            <li>UI and UX design</li>
                            <li>Website design</li>
                            <li>App development</li>
                    </ul>
                    <a href="project.php" class="link"> View project </a>
                </div>
            <div class="image col-md-5 col-sm-12">
              <img class="img-responsive" src="img/code-proje.png" alt="">
            </div>
           </article>
           
            
           <article class="project">
                           <div class="image col-md-5 col-sm-12">
              <img class="img-responsive" src="img/code-proje.png" alt="">
            </div>
                <div class="content col-md-7 col-sm-12">
                     <h3>
                        <a href="#">Soccer Schools UK</a>
                     </h3>
                     <p>
                          This project was made for the biggest clinique in London. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                       <a href="project.php" class="link"> View project </a>
                </div>

           </article>
           
           
            <article class="project">
                <div class="content col-md-7 col-sm-12">
                     <h3>
                        <a href="#">Soccer Schools UK</a>
                     </h3>
                     <p>
                          This project was made for the biggest clinique in London. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <ul class="">
                            <li>UI and UX design</li>
                            <li>Website design</li>
                            <li>App development</li>
                    </ul>
                    <a href="project.php" class="link"> View project </a>
                </div>
            <div class="image col-md-5 col-sm-12">
              <img class="img-responsive" src="img/code-proje.png" alt="">
            </div>
           </article>
         </div> <!-- end .ROW -->
        <div class="row">
            <div class="miniSection col-md-12 col-ms-12 triggerCall">
                <a href="contact.php" class="calltoaction">More Projects</a>
            </div>
        </div>
      </section>
  </div>
  <section>
    
  </section> 
  
  <footer>
     <div class="row">
        <div class="copyright">
           <p>Copyright &copy; 2016</p>
        </div>
     </div>
  </footer>
     
</body>
</html>