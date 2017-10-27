<?php

/*
   Plugin Name: BBcode
   Description: Un plugin BBcode pour le développement sous WordPress
   Version: 0.1
   Author: Lefranc jérémy
   License: GPL3
 */

function shortcode($atts,$content) {


   $css="
   <style>
   a{ 
    color:#4c0ed8; 
  } 
  a:hover,a:focus{
    color:#000;
  }
  a span{ 
    position:absolute;
    margin-top:25px; 
    margin-left:-25px;
    color:#fff; 
    background:rgba(0, 0, 0, 0.5); 
    padding:25px; 
    border-radius:3px; 
    transform:scale(0) rotate(-180deg);
    transition:all .25s;
    opacity:0;
  }
  a:hover span, a:focus span{ 
    transform:scale(1) rotate(0);
    opacity:1;
  }
  </style>";
  // var_dump("toto:",$atts);
  $lien = $atts['url'];
  $name = $atts['name'];
  return $css . '<a href="' . $lien . '"> '. $name .' <span>' . $content . '</span></a>' ;
}
add_shortcode( 'infobulle', 'shortcode' );
