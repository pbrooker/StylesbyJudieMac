
<!DOCTYPE HTML>
<html>
<head>
  <title>Styles By JudieMac</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="css/slider.css" rel="stylesheet" type="text/css"  media="all" />
  <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>
<?php 
//function __autoload($class){
//                 require_once('classes/'.$class . '.php'); 
//             }
//                 
//        //instantiate the database handler
//        $dbh = new DbHandler();

require 'includes/config.php';
?>
</head>
<body>
	<!----start-header----->
	 <div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					<a href="/StylesbyJudieMac/"><img src="images/logo.png" title="logo" /></a>
				</div>
				<div class="social-icons">
					<ul>
						<li><a href="https://www.facebook.com/MilaBeautySalonnb/timeline"><img src="images/facebook.png" title="facebook" /></a></li>
						<li><a href="https://twitter.com/search?q=stylesbyJudieM&src=typd&lang=en"><img src="images/twitter.png" title="twitter" /></a></li>
						<li><a href="https://plus.google.com/108516905942192400805"><img src="images/google.png" title="google plus" /></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					<ul>
                                            <?php
                                                $home = array(
                                                'page'=> 'Home',
                                                'url'=> '/StylesbyJudieMac/',
                                                );
                                                
                                                $about = array(
                                                'page'=> 'About',
                                                'url'=> '/StylesbyJudieMac/about',
                                                );
                                                
                                                $services = array(
                                                'page'=> 'Services',
                                                'url'=> '/StylesbyJudieMac/services',
                                                );
                                                
                                                $styles = array(
                                                'page'=> 'Styles',
                                                'url'=> '/StylesbyJudieMac/styles',
                                                );
                                                
                                                $colours = array(
                                                'page'=> 'Colours',
                                                'url'=> '/StylesbyJudieMac/colours',
                                                );
                                                
                                                $contact = array(
                                                'page'=> 'Contact',
                                                'url'=> '/StylesbyJudieMac/contact',
                                                );
                                                
                                                $sign_in = array(
                                                'page'=> 'Sign_in',
                                                'url'=> '/StylesbyJudieMac/sign_in',
                                                );
                                            
                                               $pages = array(
                                                   'Home'=> $home,
                                                   'About'=> $about,
                                                   'Services'=> $services,
                                                   'Styles'=> $styles,
                                                   'Colours'=> $colours,
                                                   'Contact'=> $contact,
                                                   'Login'=> $sign_in,
                                               ); 
                                                
                           
                                               
                                               $this_page = $_SERVER['REQUEST_URI'];
                                               
                                                foreach($pages as $page=>$list):
                                                $url = $list['url'];
                                                echo '<li';
                                                if($this_page==$url)echo ' class="active"';
                                                   echo '><a href="'.$url.'">'.$page.'</a></li>';
                                                
                                
                                                endforeach;

                                            ?>
                                            <div class="clear"> </div>
					</ul>
				</div>
				<div class="top-nav-right">
					<div class="telephone">
						<span><i class="phone_img"><img src="images/phone.png" alt="" /></i> CALL</span><span class="number">(800) 234-5678</span>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
	</div>
         <!----End-header----->