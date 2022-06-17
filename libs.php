<?php

if(isset($_GET['page'])) {

    $page = $_GET['page'];
    switch ($page) {

        case 'home' :
            include 'views/home.html';
            break;

        case 'fphphoto' :
            include 'views/fph_photography.html';
            break;
        
        case 'fphtypo' :
           include 'views/fph_typography.html';
            break;  
        
        case 'link' :
            include 'views/linksocmed.html';
            break;
            
        case 'maintenance' :
            include 'views/maintenance.html';
            break;
        
        case 'contact-us' :
            include 'views/contact-us.html';
            break;

    }
}else{

    include 'views/home.html' ;

}

?>