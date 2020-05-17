<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TESA Major Project</title>

    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                               <!-- Templatemo style -->

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row"> 
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Third Eye System Assistant</h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
                            <p>T.E.S.A is a motor vehicle safety Technology which helps prevent accidents caused by the driver getting drowsy.</p>        
                        </div>                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">

                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Welcome</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                        <div class="product__description">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Welcome</h2>        
                                                </div>
                                            </div>                                        
                                            <div class="row">
                                                <!-- <div class="grid__item" id="home-link"> -->
                                    <!-- <div class="product"> -->
<div class="tm-nav-link">
    <i class="fas fa-home fa-3x tm-nav-icon"></i>
    <span class="tm-nav-text">Welcome</span>
    <div class="product__bg"></div>        
</div>  
            <div>
                <a href="reg2.html"><button>HEllos</button></a>
            </div>
            <div>
                <a href="pop.html"><button>pop</button></a>
            </div>


                                      
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Login</span>
                                            <div class="product__bg"></div>            
                                        </div>                                     
                                            <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
<div class="col-12">
    <h2 class="tm-page-title">Login</h2>        
</div>
                                                </div>
                                                <div class="row tm-reverse-sm">
                                                    <div class="row">
                                                        <div class="col-12">

<?php
if (@$_GET['registered'] == 'true')
    echo "<script>alert('You have registered successfully!')</script>";
    
?>


<form action="mastercontroller.php" method="post" class="contact-form">
    <div  class="row">
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
            <input type="text" id="contact_name" name="log_user" class="form-control" placeholder="Username"  required/>
        </div>
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
            <input type="password" id="contact_name" name="log_pass" class="form-control" placeholder="Password"  required/>
        </div>
    </div>
    <button type="submit" class="btn btn-primary tm-btn-submit" name="logsub">LOGIN</button>
    <a href="#"><font color="white"> Forget Password?</font></a>
                
</form>
                                                            </div>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Officer Register</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
<h2 class="tm-page-title">Officer Register</h2>        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
<?php
if (@$_GET['offreg'] == 'true')
    echo "<script>alert('You have registered successfully!')</script>";
?>                                                       
<form action="mastercontroller.php" method="post" class="contact-form">
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
            <input type="text" id="contact_name" name="reg_username" class="form-control" placeholder="Username"  required/>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
            <input type="password" id="contact_name" name="reg_pass1" class="form-control" placeholder="Password"  required/>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
            <input type="password" id="contact_name" name="reg_pass2" class="form-control" placeholder="Re-enter Password"  required/>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
            <input type="text" id="contact_name" name="reg_name" class="form-control" placeholder="Name"  required/>
        </div>
    </div>
    
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
            <select name="reg_type" id="contact_name" class="form-control" style="height: 25%;">
                            <option name="reg_veh" value="officer">Vehicle Officer</option>
                            <option name="reg_off" value="trafficpolice">Traffic police</option>
            </select>
        </div>
    <div class="row">
        <div class="form-group col-md-6 col-lg-6 col-xl-6">
            <input type="Email" id="contact_name" name="reg_email" class="form-control" placeholder="Email"  required/>
        </div>
    </div>
       
                        
    <button type="submit" class="btn btn-primary tm-btn-submit" name="offsub">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                </div>




<?php
// if (@$_GET['userreg'] == 'true')
//     echo "<script>alert('You have registered successfully!')</script>";
// if (@$_GET['username'] == 'false')
//     echo "<script>alert('Username already taken!')</script>";
// if (@$_GET['email'] == 'false')
//     echo "<script>alert('Email already taken!')</script>";


?>
                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
<span class="tm-nav-text">Register</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                              
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
<h2 class="tm-page-title">Register Here</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        
<form action="mastercontroller.php" method="post" class="contact-form">


        <div class="row" >
                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                    <input type="text" id="contact_name" name="reg_username" class="form-control" placeholder="Username"  required/>
                </div></div>
                
            <div class="row" ><div class="form-group col-md-6 col-lg-6 col-xl-6">        
                    <input type="password" id="contact_name" name="reg_pass1" class="form-control" placeholder="Password"  required/>
                </div></div>
            <div class="row" ><div class="form-group col-md-6 col-lg-6 col-xl-6">
                    <input type="password" id="contact_name" name="reg_pass2" class="form-control" placeholder="Re-enter Password"  required/>
                </div></div>
            
            <div class="row" ><div class="form-group col-md-6 col-lg-6 col-xl-6">
                    <input type="text" id="contact_name" name="reg_name" class="form-control" placeholder="Name"  required/>
            </div></div>
                    
            <div class="row" ><div class="form-group col-md-6 col-lg-6 col-xl-6">
                    <input type="email" id="contact_email" name="reg_email" class="form-control" placeholder="Email"  required/>
            </div></div>
            
            <button type="submit" class="btn btn-primary tm-btn-submit" name="regsub">Submit</button>
        </div>
            </form>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 

                        </div>                       
                    </div>
                </div>                
            </div>

<?php
function sss($s)
{
    //if($s==2)
    //{
    echo "<script>alert('Successfully logout');</script>";
//}
}
?>






            <footer>
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2020</span> A Project by Team 
                
                R.A.G</p>
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->    
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="js/anime.min.js"></script>                     <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>  
    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>             

</body>
</html>