<?php
	$menus=array('Home'=>array('home'),'About'=>array('aboutus.php'),'Services'=>array('cloud.php','IT-service.php','mobileservices.php'),
	'Support'=>array('support.php'),'Clients'=>array('clients.php'),'Career'=>array('career.php'),'Contacts'=>array('contactus.php'));
	function getPageName($name, $array){
		foreach($array as $key => $value){
			if(is_array($value) && in_array($name, $value))
				  return $key;
			  
		}
		return 'home';
	}
	$name=explode('/', $_SERVER['REQUEST_URI']);
	$name=$name[1];
	$menuActive = $_SERVER['REQUEST_URI'] != '/' ? getPageName($name, $menus) : 'home';
 ?>


<nav class="nav">
                <div class="container">
                    <ul class="sf-menu" data-type="navbar">
                        <li <?php echo $menuActive == 'home' ? 'class="active"' : '' ?>>
                            <a href="./">Home</a>
                        </li>
                        <li <?php echo $menuActive == 'About' ? 'class="active"' : '' ?>>
                            <a href="aboutus.php">About</a>

                        </li>
                        <li <?php echo $menuActive == 'Services' ? 'class="active"' : '' ?>>
                            <a href="#">Services</a>
                            <ul>
                                <li>
                                    <a href="cloud.php">Cloud Application Services</a>
                                </li>
                                <li>
                                    <a href="IT-service.php">IT Application Services</a>
                                </li>
                                <li>
                                    <a href="mobileservices.php">Mobile Application Services</a>
                                </li>
                                <li>
                                    <a href="ecommerce.php">E-Commerce Services</a>
                                </li>
								<!---<li>
                                    <a href="#">Others</a>
                                    <ul style="width:175px">
                                        <li>
                                            <a href="#">Microsoft Application</a>
                                        </li>
                                        <li>
                                            <a href="#">Oracle Application</a>
                                        </li>
                                        <li>
                                            <a href="#">IT Solution</a>
                                        </li>
                                    </ul>
                                </li>-->
                                
                            </ul>
                        </li>
                        <li <?php echo $menuActive == 'Support' ? 'class="active"' : '' ?>>
                            <a href="support.php">Support</a>
                        </li>
                        <li <?php echo $menuActive == 'Clients' ? 'class="active"' : '' ?>>
                            <a href="clients.php">Clients</a>
                        </li>
                        <li <?php echo $menuActive == 'Career' ? 'class="active"' : '' ?>>
                            <a href="career.php">Career</a>
                        </li>
                        <li <?php echo $menuActive == 'Contacts' ? 'class="active"' : '' ?>>
                            <a href="contactus.php">Contacts</a>
                        </li>
                    </ul>

                </div>
            </nav>