   <html>
   <head>
        <link rel="stylesheet" href="../public/header.css">
        <link rel="stylesheet" href="../public/annimation.css">
        <link rel="stylesheet" href="../public/login.css">
        <link rel="shortcut icon" type="image/ico" href="../public/img/favicone/favicon.png"/>
        
       </head>
       <body>
         <!---------- start poppup----------------->

             <?php
         include "../class/user_admin.php";
         if(isset($_POST['Register'])){
         $nome = $_POST['nom'];
         $prenom = $_POST['prenom'];
         $email = $_POST['email'];
         $telephone = $_POST['telephone'];
         $password = $_POST['Passworde'];

         $register=new user();
         $register->insertUsers($nome,$prenom,$email,$telephone,$password);

                           }
            ?>
            <?php
    
      if(isset($_POST['Login'])){
           $nome = $_POST['nome'];
           $passwordr = $_POST['Passworde'];
          $object = new user();
          $object->Login($nome,$passwordr);
      }
            ?>
                      <div class="hero2">
                      <div class="from-box2" >
                          <div class="close2">+</div>
                          <div class="button-box2">
                              <div id="btn2"></div>
                              <button type="button" class="toggle-btn2" onclick="Signin2()">Log in</button>
                              <button type="button" class="toggle-btn2" onclick="login2()">S'scrire</button>   
                           </div>
                           <img src="../images/6.png" alt="heeeey " style="height: 105px;width: 150px;margin: -149px 0px 0px 481px;z-index: 77;position: fixed;transform: rotate(157deg);">
                          <form  method="POST" action="">
                          <div id="login2" class="input-group2">
													<img class="avatar1" src="../images/user.png" style="position:absolute;height:102px;top:-96px;right:98px"><br><br>
													<center>
													<input  id="user" type="text" name="nome" class="input" class="form-control"   placeholder="Entre Votre nome" style="border: none;border-bottom: 1px solid #fff;background: transparent;outline: none;height: 40px;color: #5aef50;font-size: 16px;" required /><br><br>
													<input  id="pass" type="password" name="Passworde" class="input" class="form-control"  placeholder="Entre Le Mot De Passe" style="border: none;border-bottom: 1px solid #fff;background: transparent;outline: none;height: 40px;color: #5aef50;font-size: 16px;" value=""required /><br><br>
													<span style="color:white">Me souvenir du mot de passe : </span>
													<input type="checkbox" class="check-box2" name="confirmPassword"  placeholder="confirm le Mot De Passe"><br><br> 
												   <button  type="submit" class="submit-btn2"  name="Login" >Log in</button>
														</center>
												   </div>
												   </form>

                          <form  method="POST" action="">
                          <div id="Signin2" class="input-group2">
												  <img class="avatar1" src="../images/sign-up-icon.png" style="position:absolute;height:115px;top:-100px;right:89px"><br><br>
												            <center>
                          <input  type="text" name="nom" id="use" class="input" class="form-control"  placeholder=" Entre Votre Nom" style="border: none;border-bottom: 1px solid #fff;background: transparent;outline: none;height: 40px;color: #fff;font-size: 16px;" required /><br>
                          <input  type="text" name="prenom" id="use" class="input" class="form-control"  placeholder=" Entre Votre prenom" style="border: none;border-bottom: 1px solid #fff;background: transparent;outline: none;height: 40px;color: #fff;font-size: 16px;" required /><br>
                          <input type="text" id="pass" name="email" class="input" class="form-control"  placeholder=" Entre Votre Email" style="border: none;border-bottom: 1px solid #fff;background: transparent;outline: none;height: 40px;color: #fff;font-size: 16px;" required /><br> 
                          <input type="text" id="pass" name="telephone" class="input" class="form-control"  placeholder=" Entre Votre numero de téle" style="border: none;border-bottom: 1px solid #fff;background: transparent;outline: none;height: 40px;color: #fff;font-size: 16px;" required /><br>
												  <input type="password"  id="pass" name="Passworde" class="input" class="form-control" placeholder="Entre Votr Mot De Passe" style="border: none;border-bottom: 1px solid #fff;background: transparent;outline: none;height: 40px;color: #fff;font-size: 16px;" required/><br><br>
												  <input type="submit" name="Register"   class="submit-btn2" value="Register">
															</center>
												</div>
												</form>
												 
													</div>
												</div>

<!---------- end poppup----------------->
       
     <header>
        <!------------- start text typing ------------->
         
         <div class="covid">
        <p><span style="color:white;background:#7621a7;height:10px;background:#7621a7;height:26px;border:2px solid #7621a7;border-left: 5px;padding: 12px 37px;">Flash Info</span> &nbsp;&nbsp;&nbsp; COVID-19, Situation des départs <span style="color:#7621a7;font-size: 15px;">&nbsp; plus d'informations </span></p>
         </div>
        <!------------- End text typing ------------->
       <!------------- start navigation ------------->

         <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <h1 style="font-size:17px"><span style="color:#03018c;font-size:20px"><a href="index.php" class="logo"><img src="../images/logoheader.png" style=" position: absolute;top: -14px;left: 194px;width: 129px;background-size:cover" alt="#" /></a>N</span> ° 1 MONDIAL DU RESTAURATION RAPIDE</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon" ></span>
    </button>
  
<form action="" method="POST">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
     <li class="nav-item active" >
          <a class="nav-link" href="index.php">Home</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="offers.php" >Nos Produits</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item">
          <a class="nav-link" href="reservation.php" >Reservation</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="nav-link" href="panier.php">Panier</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
        <a class="nav-link"  id="inscription1">Login</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
        </li>&nbsp;&nbsp;&nbsp;&nbsp;
        
            </ul>
            </div>
            </div>
            </nav>
            </form>
       <!------------- END navigation ------------->
       <!------------- start video ------------->
             <div class="vd1">
                <h1 style="color:white"><svg fill="orange" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.879 5.172a.5.5 0 0 0-.707.707l4.096 4.096H6.5a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.5a.5.5 0 0 0-1 0v2.768L5.879 5.172z"/>
                </svg> &nbsp;&nbsp;En Bref</h1>
                <p class="pse1">Des plats faits-maison, variés et équilibrés Des produits frais, de saison, issus de producteurs locaux Une installation gratuite et rapid</p>
             </div>
            <video autoplay muted loop class="vde1" >
            <source src="../images/vd1.webm" type="video/mp4" id="myVideo" style="background:black">
            </video>
            <div class="vd2">
                <h1 style="color:white"><svg fill="red" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm4 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                </svg>&nbsp;&nbsp;Bienvenue chez nous</h1>
                <p class="pse2">Une cuisine certifiée par l’ONSSA dans le plus grand respect des normes sanitaires internationales</p>
             </div>
            <video autoplay muted loop class="vde2" >
            <source src="../images/vd2.webm" type="video/mp4" id="myVideo">
            </video> 
            <div class="vd3">
                <h1 style="color:white"><svg fill="green" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                </svg>&nbsp;&nbsp;PIZZA BIO-HOTEL</h1>
                <p class="pse3">Le BIO-HOTEL du Maroc,nouveau concept de restauration rapide avec l’installation de distributeur de repas ou de buvette pour les entreprises et les écoles.</p>
             </div>
            <img src="../images/6.jpg" class="vde3"  id="myVideo" style="background-position: center;background-repeat: no-repeat;background-size: cover;">
              
            <!------------- End video ------------->
</header>







<script>
					
					 var x = document.getElementById ("login2");
					var y = document.getElementById ("Signin2");
					var z = document.getElementById ("btn2");
			
					function login2(){
						x.style.left = "-400px";
						y.style.left = "50px";
						z.style.left = "110px";
					}
					function Signin2(){
						x.style.left = "50px";
						y.style.left = "450px";
						z.style.left = "0";
					}
					
					document.getElementById ("inscription1").addEventListener('click',
					function(){
						document.querySelector('.hero2').style.display = 'flex' ;
					});
					document.querySelector('.close2').addEventListener('click',
					function(){
					document.querySelector('.hero2').style.display = 'none';
					});



					document.getElementById ("inscription5").addEventListener('click',
					function(){
						document.querySelector('.loginbox').style.display = 'flex' ;
                    });
                    document.querySelector('.close3').addEventListener('click',
					function(){
					document.querySelector('.loginbox').style.display = 'none';
					});


                </script>

            
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>