<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<title>Xpansify | ¡Su solicitud ha sido aceptada!</title>
	<meta property="og:title" content="Xpansify | ¡Su solicitud ha sido aceptada!" />
	<meta property="og:image" content="digital-logo.svg" /> 
	<meta property="og:description" content="Xpansify | ¡Su solicitud ha sido aceptada!">
	<meta name="description" content="Xpansify | ¡Su solicitud ha sido aceptada!"> 

	<link rel="shortcut icon" href="digital-logo.svg" type="image/x-icon">
	<style>
	:root{
	      --black:black;
	      --white:white;
	     --overlay-1:rgba(250, 125, 85,0.5);
	     --overlay-2:rgba(250, 61, 48,0.5);
	     --overlay-3:rgba(192, 139, 65,0.5);
	     --overlay-4:rgba(250, 202, 85,0.5);
	     --overlay-5:rgba(211, 49, 235,0.5);
	      --bg-col-1:rgb(250, 125, 85);
	      --bg-col-2:rgb(250, 61, 48);
	      --bg-col-3:rgb(192, 139, 65);
	      --bg-col-4:rgb(250, 202, 85);
	      --bg-col-5:rgb(211, 49, 235);
	      --btn-col-1:rgb(236, 102, 39);
	      --btn-col-2:rgb(47, 78, 69);
	      --btn-col-3:rgb(22, 53, 190);
	      --btn-col-4:rgb(129, 47, 7);
	      --btn-col-5:rgb(139, 21, 126);
	    }
	    body {
	      line-height: 1.3;
	      overflow-x: hidden;
	      background-color: white;
	      direction: ltr;
	      font-family: 'Roboto Condensed',
	      sans-serif !important;
	      font-size: 17px;
	      margin: 0;
	      padding: 0px;
	      
	    }
	html{
	  scroll-behavior: smooth;
	}
	.row{
	    margin: 0!important;
	  }
	  a {
	    text-decoration: none;
	    
	  }
	    p {
	      padding: 5px 0px;
	 margin-top:0;
	 margin-bottom:0;
	 font-size: clamp(12px,4vw,18px);
	}
	*:focus:not(.focus-visible) {
	  outline: none;
	}
	ul {
	  list-style-type: disc;
	  padding: 0;
	  margin: 0;
	}
	
	li {
	  font-size: clamp(12px, 4vw, 18px);
	  padding: 5px 0px;
	  margin: 0;
	  
	}
	    html {
	  line-height: 1.15;
	  -webkit-text-size-adjust: 100%;
	}
	body {
	  margin: 0;
	}
	main {
	  display: block;
	}
	h1, h2, h3, h4, h5, h6 {
	  color:var(--black);
	  
	  font-weight: 400; 
	}
	h5{
	  font-size: clamp(16px, 5vw, 26px);
	}
	hr {
	  box-sizing: content-box;
	  height: 0;
	  overflow: visible;
	}
	pre {
	  font-family: monospace, monospace;
	  font-size: 1em;
	}
	a {
	  background-color: transparent;
	}
	abbr[title] {
	  border-bottom: none;
	  text-decoration: underline;
	  text-decoration: underline dotted;
	}
	b,strong {
	  font-weight: bolder;
	}
	code,kbd,samp {
	  font-family: monospace, monospace;
	  font-size: 1em;
	}
	small {
	  font-size: 80%;
	}
	sub,sup {
	  font-size: 75%;
	  line-height: 0;
	  position: relative;
	  vertical-align: baseline;
	}
	sub {
	  bottom: -0.25em;
	}
	sup {
	  top: -0.5em;
	}
	img {
	  width: 100%;
	  border-style: none;
	}
	button,input,optgroup,select,textarea {
	  font-family: inherit;
	  font-size: 100%;
	  line-height: 1.15;
	  margin: 0;
	}
	button,input {
	  overflow: visible;
	}
	
	button,select {
	  text-transform: none;
	}
	button,[type="button"],[type="reset"],[type="submit"] {
	  -webkit-appearance: button;
	}
	button::-moz-focus-inner,
	[type="button"]::-moz-focus-inner,
	[type="reset"]::-moz-focus-inner,
	[type="submit"]::-moz-focus-inner {
	  border-style: none;
	  padding: 0;
	}
	button:-moz-focusring,
	[type="button"]:-moz-focusring,
	[type="reset"]:-moz-focusring,
	[type="submit"]:-moz-focusring {
	  outline: 1px dotted ButtonText;
	}
	fieldset {
	  padding: 0.35em 0.75em 0.625em;
	}
	legend {
	  box-sizing: border-box;
	  color: inherit;
	  display: table;
	  max-width: 100%;
	  padding: 0;
	  white-space: normal;
	}
	progress {
	  vertical-align: baseline;
	}
	textarea {
	  overflow: auto;
	}
	[type="checkbox"],[type="radio"] {
	  box-sizing: border-box;
	  padding: 0;
	}
	[type="number"]::-webkit-inner-spin-button,[type="number"]::-webkit-outer-spin-button {
	  height: auto;
	}
	[type="search"] {
	  -webkit-appearance: textfield;
	  outline-offset: -2px;
	}
	[type="search"]::-webkit-search-decoration {
	  -webkit-appearance: none;
	}
	::-webkit-file-upload-button {
	  -webkit-appearance: button;
	  font: inherit;
	}
	details {
	  display: block;
	}
	summary {
	  display: list-item;
	}
	template {
	  display: none;
	}
	[hidden] {
	  display: none;
	}
	.container {
	  z-index: 1 ;
	  position: relative;
	  width: 100%; 
	  max-width: 1200px; 
	  margin: 0 auto;
	  padding: 0 25px;
	  box-sizing: border-box;
	}
	.title-k2{
	  position: relative;
	  display: flex;
	  font-size: clamp(26px, 5vw, 36px);
	    font-weight: 600;
	  line-height: 1.33333;
	  justify-content: center;
	}
	.title-k23{
	  position: relative;
	  display: flex;
	  font-size: clamp(26px, 5vw, 36px);
	    font-weight: 600;
	  line-height: 1.33333;
	  justify-content: center;
	}
	.title-k2::before {
	  content: ''; 
	  position: absolute;
	  bottom: -5px; 
	  width: 0;
	  height: 2px; 
	  background-color:var(--bg-col-1); 
	  animation: expandLine 2s infinite ease-in-out;
	  transform-origin: center; 
	}
	.box-title-k2{
	      display: flex;
	    justify-content: center;
	}
	.cont-title {
	    display: inline-block; 
	}
	
	@keyframes expandLine {
	  0% {
	    width: 0; 
	  }
	  50% {
	    width: 50%; 
	  }
	  100% {
	    width: 100%; 
	  }
	}
	.svg-position-k2{
	  display: flex;
	 justify-content:  flex-end;
	
	}
	.section{
	  padding: 40px 0px;
	}
	
	
	
	.header{
	  position: absolute;
	  top: 0;
	  left: 0;
	  right: 0;
	  padding-top: 0;
	  padding-bottom: 0;
	  z-index: 999;
	  -webkit-transition: .3s;
	  transition: .3s;
	  background: transparent;
	}
	
	nav{
	  position: absolute;
	    top: 0;
	    left: 0;
	    right: 0;
	    padding-top: 0;
	    padding-bottom: 0;
	    z-index: 999;
	    -webkit-transition: .3s;
	    transition: .3s;
	background: rgba(43, 121, 144, 0.22);
	  }
	  nav .wrapper{
	    position: relative;
	    max-width: 1300px;
	    padding: 5px 15px;
	    
	    line-height: 1.3;
	    margin: auto;
	    display: flex;
	    align-items: center;
	    justify-content: space-between;
	    flex-direction: row-reverse;
	  }
	  .logo-here{
	    width: 75px;
	  }
	  @media (max-width:575px) {
	    .logo-here{
	      width: 50px;
	    }
	  }
	  .logo-site{
	    display: flex;
	    align-items: center;
	    gap: 20px;
	  }
	  
	  .wrapper .logo-site a{
	    color: #f2f2f2;
	    font-size: 24px;
	    font-weight: 600;
	    text-decoration: none;
	  }
	@media (max-width:1199px) {
	  .wrapper .logo-site a{
	    
	    font-size: 20px;
	  }
	}
	@media (max-width:575px) {
	  .wrapper .logo-site a{
	    
	    font-size: 15px;
	  }
	}
	.wrapper .nav-links{
	  display: inline-flex;
	  transition: all 0.6s ease;
	  
	}
	.nav-links li{
	  list-style: none;
	}
	.nav-links li a{
	
	  padding: 9px 10px;
	  position: relative;
	  display: inline-block;
	  color: #ffffff;
	  font-size: 13px;
	  line-height: 1.2;
	  letter-spacing: 0.05em;
	  font-weight: 600;
	  text-transform: uppercase;
	  transition: all 0.3s ease-in-out;
	}
	.nav-links li a:hover {
	color: var(--bg-col-1);
	}
	
	.nav-links li a:hover::before {
	  transform: scaleX(1);
	  color: var(--white);
	  width: 100%;
	}
	
	
	
	.nav-links .mobile-item{
	  display: none;
	}
	.nav-links .drop-menu{
	  position: absolute;
	  background: #242526;
	  width: 180px;
	  line-height: 45px;
	  top: 85px;
	  opacity: 0;
	  visibility: hidden;
	  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
	}
	.nav-links li:hover .drop-menu,
	.nav-links li:hover {
	  transition: all 0.3s ease;
	  top: 70px;
	  opacity: 1;
	  visibility: visible;
	}
	.drop-menu li a{
	  width: 100%;
	  display: block;
	  padding: 0 0 0 15px;
	  font-weight: 400;
	  border-radius: 0px;
	}
	
	
	.wrapper .btn{
	  color: #fff;
	  font-size: 34px;
	  cursor: pointer;
	  display: none;
	}
	.menu-btn-img{
	  width: 30px;
	}
	
	.wrapper .btn.close-btn{
	  position: absolute;
	  right: 30px;
	  top: 10px;
	}
	.radiobtn-menu {
	  display: none!important;
	}
	@media (min-width:992px) {
	   .mobile-vision-k2{
	    display: none;
	  }
	}
	@media screen and (max-width: 991px) {
	 
	  .wrapper .btn{
	    display: block;
	  }
	  .wrapper .nav-links{
	    position: fixed;
	    height: 100vh;
	    width: 100%;
	    max-width: 300px;
	    
	    top: 0;
	    left: -100%;
	    background: var(--bg-col-1);
	    display: block;
	    padding: 50px 10px;
	    line-height: 50px;
	    overflow-y: auto;
	    box-shadow: 0px 15px 15px rgba(0,0,0,0.18);
	    transition: all 0.3s ease;
	  }
	  ::-webkit-scrollbar {
	    width: 10px;
	  }
	  ::-webkit-scrollbar-track {
	    background: #242526;
	  }
	  ::-webkit-scrollbar-thumb {
	    background: #3A3B3C;
	  }
	  #menu-btn:checked ~ .nav-links{
	    left: 0%;
	  }
	  #menu-btn:checked ~ .btn.menu-btn{
	    display: none;
	  }
	  #close-btn:checked ~ .btn.menu-btn{
	    display: block;
	  }
	  .nav-links li{
	    margin: 15px 10px;
	  }
	
	  .nav-links .drop-menu{
	    position: static;
	    opacity: 1;
	    top: 65px;
	    visibility: visible;
	    padding-left: 20px;
	    width: 100%;
	    max-height: 0px;
	    overflow: hidden;
	    box-shadow: none;
	    transition: all 0.3s ease;
	  }
	  #showDrop:checked ~ .drop-menu,
	  #showMega:checked ~ .mega-box{
	    max-height: 100%;
	  }
	  .nav-links .desktop-item{
	    display: none;
	  }
	  .nav-links .mobile-item{
	    display: block;
	    color: #f2f2f2;
	    font-size: 20px;
	    font-weight: 500;
	    padding-left: 20px;
	    cursor: pointer;
	    border-radius: 5px;
	    transition: all 0.3s ease;
	  }
	  
	  .nav-links .mobile-item:hover{
	    background: #3A3B3C;
	  }
	  .drop-menu li{
	    margin: 0;
	  }
	  .drop-menu li a{
	    border-radius: 5px;
	    font-size: 18px;
	  }
	  
	}
	nav input{
	  display: none;
	}
	

	.block-hero12 {
	  background-image: url(bg/0_transparent-background_XglR.jpg);
	  background-size: cover;
	  background-position: center;
	  background-repeat: no-repeat;
	 min-height:100vh;
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  text-align: center;
	}
	.block-hero12 {
	  animation-name: showHero;
	  animation-duration: 1.5s;
	  animation-fill-mode: both;
	  animation-timing-function: cubic-bezier(1,0,0,1);
	}
	  @keyframes showHero {
	    0% {
	      height: 0;
	    }
	    100% {
	      min-height: 100%;
	    }
	  }
	
	
	
	.title-hero-k2{
	  color: var(--white);
	  font-size: clamp(24px,5vw,41px);
	  font-weight: 900;
	
	   
	}
	.thumb-hero-k2{
	      padding-top: 150px;
	    padding-bottom: 40px;
	  animation-name: slideUp;
	    animation-delay: .5s;
	    animation-duration: 1.5s;
	    animation-fill-mode: both;
	    animation-timing-function: cubic-bezier(1, 0, 0, 1);
	}
	.box-hero-k2{
	      display: flex;
	    justify-content: center;
	    align-items: center;
	    gap: 20px;
	}
	.hero-label-k2{
	    font-size: clamp(24px,5vw,41px);
	    color: var(--white);
	
	}
	  @keyframes slideUp {
	      0% {
	        opacity: 0;
	        transform: translateX(100%);
	      }
	      100% {
	        opacity: 1;
	        transform: translateX(0);
	      }
	    } 
	    .overlay {
	  animation-name: showBg;
	  animation-duration: 1.5s;
	  animation-fill-mode: both;
	  animation-timing-function: cubic-bezier(1,0,0,1);
	}
	.overlay {
	    content: ""; 
	    top: 0;
	    left: 0;
	    width: 100%;
	   min-height:100%;
	    background:var(--overlay-1); 
	}
	
	  @keyframes showBg {
	    0% {
	      height: 0;
	      opacity: 0;
	    }
	    100% {
	      min-height: 100%;
	      opacity:1;
	    }
	  }

	.thumb-aboutus-k2{
	display: flex;
	position: relative;
	flex-direction: row-reverse;
	}
	@media (max-width:991px) {
	  .thumb-aboutus-k2{
	    flex-direction: column;
	  }
	} 
	.thumb-aboutus-k2 p {
	text-align: center;
	}
	@media (max-width:991px) {
	   .img-position-aboutus-k2{
	  display: none;
	}
	}
	@media (min-width:992px) {
	  .img-position-aboutus-k2{
	
	  position: absolute;
	    top: 50%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	}
	}
	
	.img-position-aboutus-k2 svg{
	  width: 100px;
	  height: 100px;
	  padding: 5px;
	  background: var(--white);
	  fill: var(--bg-col-1);
	  border:1px solid var(--bg-col-1);
	  
	  animation: scaleAnimation 3s infinite;
	}
	
	
	@keyframes scaleAnimation {
	  0% {
	    transform: scale(1);
	  }
	  50% {
	    transform: scale(0.5);
	  }
	  100% {
	    transform: scale(1);
	  }
	}
	
	
	.box-aboutus-img-k2{
	  flex: 1;
	  width: 100%;
	  height: 450px;
	}
	@media (min-width:992px) {
	 .box-aboutus-img-k2{
	  
	  width: 50%;
	  
	}
	}
	.box-aboutus-img-k2 img{
	  width: 100%;
	  height: 100%;
	  object-fit: cover;
	}
	.thumb-about-us-txt-k2{
	  flex: 1;
	  margin-top: 92px;
	}
	.box-about-us-txt-k2{
	     margin: 0 auto;
	    width: 100%;
	 
	}
	@media (min-width:992px) {
	.box-about-us-txt-k2{
	     margin: 0 auto;
	    width: 60%;
	}
	}
	
	
	 .title-ab::first-word {
	        color: red;
	    }

	.section-reasons-k2{
	  position: relative;
	  padding: 40px 0px;
	    background-image: url( bg/1_transparent-background_XglR.jpg);
	
	  background-size: cover;
	  background-repeat: no-repeat;
	}
	.section-reasons-k2::after {
	    content: ""; 
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    background:var(--overlay-1); 
	}
	.thumb-reasons-k2 {
	  display: flex;
	  gap: 20px;
	  flex-direction: row-reverse;
	}
	
	@media (max-width:991px) {
	  .thumb-reasons-k2 {
	flex-direction: column;
	}
	}
	.svg-reasons-k2-main svg{
	 fill: var(--bg-col-1);
	border :1px solid var(--bg-col-1);
	  width: 100px;
	  height: 100px;
	  background: var(--white);
	  padding: 5px;
	 
	  animation: scaleAnimation 3s infinite;
	}
	
	
	
	@keyframes scaleAnimation {
	  0% {
	    transform: scale(1);
	  }
	  50% {
	    transform: scale(0.5);
	  }
	  100% {
	    transform: scale(1);
	  }
	}
	
	.box-reason-k2 {
	  flex: 1;
	}
	.box-item-reasons-k2 {
	  display: flex;
	align-items: center;
	  gap: 20px;
	}
	@media (max-width:767px) {
	  .box-item-reasons-k2 {
	flex-direction: column;
	}
	}
	.title-reasons-k2{
	      text-align: center;
	  color: var(--white);
	}
	.txt-reasons-k2{
	text-align: center;
	  color: var(--white);
	}
	.box-txt-reasons-k2 p{
	
	  color: var(--white);
	 
	
	}
	@media (max-width:767px) {
	  .box-txt-reasons-k2 p{
	
	  text-align: center;
	
	}
	}
	
	.box-svg-reasons-k2 {
	  animation: animationpulse 2s infinite;
	   -webkit-animation: animationpulse 2s ease-out;
	   -webkit-animation-iteration-count: infinite;
	}
	.box-svg-reasons-k2 svg {
	 fill: var(--white);
	  width: 100px;
	  height: 100px;
	 
	}
	
	.section-gallery-k2{
	padding: 40px 0px;
	}
	.svg-gallery-k2 svg{
	fill: var(--bg-col-1);
	border :1px solid var(--bg-col-1);
	  width: 100px;
	  height: 100px;
	  background: var(--white);
	  padding: 5px;
	  animation: scaleAnimation 3s infinite;
	}
	
	
	
	@keyframes scaleAnimation {
	  0% {
	    transform: scale(1);
	  }
	  50% {
	    transform: scale(0.5);
	  }
	  100% {
	    transform: scale(1);
	  }
	}
	
	.thumb-gallery-k2{
	  display: flex;
	  flex-wrap: wrap;
	}
	.box-gallery-k2{
	  overflow: hidden;
	  width: 100%;
	  height: 350px;
	}
	@media(min-width:575px)and (max-width:991px) {
	  .box-gallery-k2{
	  width: 50%;
	 
	}
	}
	@media (min-width:992px) {
	  .box-gallery-k2{
	  width: 25%;
	 
	}
	}
	.box-gallery-k2 img{
	  width: 100%;
	  height: 100%;
	  object-fit: cover;
	}
	.box-gallery-k2 img {
	    transition: transform 0.3s ease;
	}
	
	.box-gallery-k2:hover img {
	    transform: scale(1.1); 
	}

	 .team-grid img {
	  width: 270px;
	  height: 270px;
	  border-radius: 15em;
	  border: 15px solid var(--bg-col-1);
	}
	.team-grid {
	  position: relative;
	  text-align: center;
	  margin-top:1em; 
	    transition: all 0.9s ease; 
	}
	.team-info {
	  position: absolute;
	 top: 50%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	  width: 270px;
	    height: 270px;
	  border-radius: 10em;
	  padding:2px;
	 opacity: 0;
	     transition: all 0.9s ease; 
	}
	
	@media (max-width:767px) {
	  .team-grid div.team-info{
	  background: var(--overlay-1);
	  border-radius: 10em;
	   opacity: 1;
	}
	}
	.team-grid:hover div.team-info{
	  display: block;
	  background: var(--overlay-1);
	  border-radius: 10em;
	   transition: all 0.9s ease; 
	  opacity: 1;
	}
	.team-info h4 {
	padding: 35px 10px;
	 font-size: clamp(14px, 5vw, 21px);
	  color: #fff;
	  font-weight: 900;
	  text-transform: capitalize;
	 }
	.team-info p {
	  padding: 0px 10px;
	 font-size: clamp(12px, 5vw, 18px);
	  color: #fff;
	  font-weight: 400;
	
	 }
	.team-info img {
	  border: none;
	  margin-top:0.2em;  
	}

	.thumb-our-team-k2{
	      display: flex;
	    gap: 20px;
	    justify-content: center;
	        flex-wrap: wrap;
	}
	.svg-our-team-k2 svg{
	fill: var(--bg-col-1);
	border :1px solid var(--bg-col-1);
	  width: 100px;
	  height: 100px;
	  background: var(--white);
	  padding: 5px;
	  animation: scaleAnimation 3s infinite;
	}
	
	
	
	@keyframes scaleAnimation {
	  0% {
	    transform: scale(1);
	  }
	  50% {
	    transform: scale(0.5);
	  }
	  100% {
	    transform: scale(1);
	  }
	}

	.pricing-svg-k2 svg{
	
	fill: var(--bg-col-1);
	border :1px solid var(--bg-col-1);
	  width: 100px;
	  height: 100px;
	  background: var(--white);
	  padding: 5px;
	  animation: scaleAnimation 3s infinite;
	}
	
	
	
	@keyframes scaleAnimation {
	  0% {
	    transform: scale(1);
	  }
	  50% {
	    transform: scale(0.5);
	  }
	  100% {
	    transform: scale(1);
	  }
	}
	.wrapper{
	    display: grid;
	    grid-template-columns: repeat(3,1fr);
	    grid-gap: 15px;
	  
	
	}
	.pricing-table{
	   box-shadow: 0px 0px 18px #ccc;
	   text-align: center;
	   padding: 30px 0px;
	   border-radius: 5px;
	   position: relative;
	 
	}
	.pricing-table .head {
	    border-bottom:1px solid #eee;
	    padding-bottom: 50px;
	    transition: all 0.5s ease;
	}
	.pricing-table:hover .head{
	   border-bottom:1px solid var(--bg-col-1);
	   
	}
	
	.pricing-table .head .title{
	    margin-bottom: 20px;
	    font-size: 20px;
	    font-weight: 700;
	}
	
	.pricing-table .content .price{
	  filter:grayscale(100%);
	    background:var(--bg-col-1);
	  
	    margin: auto;
	    line-height: 90px;
	    border-radius: 0%;
	    border: 5px solid #fff;
	    box-shadow: 0px 0px 10px #ccc;
	    margin-top: -50px;
	     transition: all 0.5s ease;
	   
	     
	}
	.pricing-table:hover .content .price{
	   filter:none;
	 
	}
	.pricing-table .content .price h1{
	  margin: 0;
	    color:#fff;
	    font-size: 30px;
	    font-weight: 700;
	}
	.pricing-table .content ul{
	   list-style-type: none;
	     padding: 10px;
	}
	
	.pricing-table .content ul li{
	  border-bottom: 1px solid var(--bg-col-1);
	    margin: 20px 0px;
	    font-size: 14px;
	    color:#555;
	}
	
	.pricing-table .content .sign-up{
	    background:var(--bg-col-1);
	    border-radius: 40px;
	    font-weight: 500;
	    position: relative;
	    display: inline-block;
	}
	
	
	.pricing-table .btn {
		color: #fff;
		padding: 14px 40px;
		display: inline-block;
		text-align: center;
		font-weight: 600;
		-webkit-transition: all 0.3s linear;
		-moz-transition: all 0.3 linear;
		transition: all 0.3 linear;
		border: none;
		font-size: 14px;
		text-transform: capitalize;
		position: relative;
		text-decoration: none;
	    margin: 2px;
	    z-index: 9999;
	    text-decoration: none;
	    border-radius:50px;
	 
	}
	
	.pricing-table .btn:hover{
		box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
	}
	
	.pricing-table .btn.bordered {
		z-index: 50;
		color: #333;
	}
	.pricing-table:hover .btn.bordered{
		color:#fff !important;
	}
	
	.pricing-table .btn.bordered:after {
		background: #fff none repeat scroll 0 0;
		border-radius: 50px;
		content: "";
		height: 100%;
		left: 0;
		position: absolute;
		top: 0;
		-webkit-transition: all 0.3s linear;
		-moz-transition: all 0.3 linear;
		transition: all 0.3 linear;
		width: 100%;
		z-index: -1;	
		-webkit-transform:scale(1);
		-moz-transform:scale(1);
		transform:scale(1);
	}
	.pricing-table:hover .btn.bordered:after{
		opacity:0;
		transform:scale(0);
	}
	
	@media screen and (max-width:768px){
	   .wrapper{
	        grid-template-columns: repeat(2,1fr);
	    } 
	}
	
	@media screen and (max-width:600px){
	   .wrapper{
	        grid-template-columns: 1fr;
	    } 
	}
	
	.section-main-k2{
	  padding: 40px 0px;
	}
	.main-price-k2{
	      margin: 20px 0px;
	    text-align: center;
	    
	}
	@media (max-width:575px) {
	  .main-content li {
	  margin: 0 10px;
	}
	}
	.main-box {
		display: flex;
		flex-direction: column;
		gap: 20px;
	}
	.main-rice-k2{
	      margin: 20px 0px;
	    text-align: center;
	      animation: animationpulse 2s infinite;
	   -webkit-animation: animationpulse 2s ease-out;
	   -webkit-animation-iteration-count: infinite;
	}
	.main-images {
		width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
		height: 450px;
	}
	.main-images img {
		width: 100%;
    height: 100%;
    object-fit: contain;
	}
	.main-images-k2{
	    display: flex;
	    justify-content: center;
	    height: 480px;
	        margin: 10px 0px;
	}
	.main-images-k2 img{
	     width: 100%;
	    object-fit: contain;
	}
	.price-color-old{
	   text-decoration: line-through;
	   font-size:clamp(18px,4vw,36px);
	}
	.price-color{
	     font-size:clamp(21px,4vw,41px);
	  
	}
	.main-border-k2{
	}

	.section-contacts-k2{
	      background: #2d2d2d;
	      padding: 40px 0px;
	}
	.thumb-contacts-form-k2{
	  display: flex;
	      gap: 20px;
	}
	@media (max-width:991px) {
	  .thumb-contacts-form-k2{
	flex-direction: column;
	}
	}
	.box-contacts-form-k2{
	  flex:1;
	}
	.button-formsa12{
	  margin: 10px 0px;
	}
	.forms-contacts-k2{
	  display: flex;
	  flex-direction: column;
	  gap: 20px;
	}
	.padding-form-k2{
	  padding: 0px 30px;
	}
	.input-i9093584-name{
	  color: var(--white);
	}
	.input-i9093584{
	  	  
	  padding: 15px 24px;
	  border: 1px solid #969696;
	  font-size: 1.3em;
	  color: var(--white);
	  outline: none;
	  background: #545454;
	  font-weight: 500;
	}
	.input-i9093584::placeholder{
	  color:var(--white);
	  font-size:clamp(12px,4vw,21px);
	}
	.textarea-i9093584::placeholder{
	  color:var(--white);
	    font-size:clamp(12px,4vw,21px);
	}
	.textarea-i9093584{  
	  padding: 15px 24px;
	  border: 1px solid #969696;
	  font-size: 1.3em;
	  color: var(--white);
	  outline: none;
	  background: #545454;
	  font-weight: 500;
	}
	.google-map {
	  border-top: 14px solid var(--bg-col-1);
	  border-left: 14px solid var(--bg-col-1);
	  border-bottom: 14px solid var(--bg-col-1);
	}
	.google-map iframe {
	  width: 100%;
	  min-height: 555px;
	}
	.form-contacts-svg-k2 svg{
	
	fill: var(--bg-col-1);
	border :1px solid var(--bg-col-1);
	  width: 100px;
	  height: 100px;
	  background: var(--white);
	  padding: 5px;
	  animation: scaleAnimation 3s infinite;
	}
	
	
	
	@keyframes scaleAnimation {
	  0% {
	    transform: scale(1);
	  }
	  50% {
	    transform: scale(0.5);
	  }
	  100% {
	    transform: scale(1);
	  }
	}
	.forms-title-k2{
	  color: var(--white);
	}
	
	.checkbox-forms-k2{
	  display: flex;
	    gap: 10px;
	    align-items: center;
	}
	.politic-color-k2{
	  color: var(--bg-col-1);
	}
	.check-col-k2{
	  color: var(--white);
	}
	label{
	  color: var(--white);
	}
	
	.footer-section-k2{
	  padding: 40px 0px ;
	  background:#060606;
	}
	.thumb-footer-k2{
	  
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	}
	.adres-footer-k2 h5{
	  font-size: clamp(14px,4vw,26px);
	  color: var(--white);
	}
	.adres-footer-k2 p{
	   font-size: clamp(12px,4vw,21px);
	color: var(--white);
	}
	.adres-footer-k2 p:hover{
	color: var(--bg-col-1);
	}
	.adres-footer-k2{
	      display: flex;
	    text-align: center;
	}
	.phone-mail-foote-k2{
	  display: flex;
	      justify-content: space-between;
	}
	@media (max-width:767px) {
	  .phone-mail-foote-k2{
	    flex-direction: column;
	  }
	}
	.li-box-footer-k2{
	  text-align: center;
	}
	.li-box-footer-k2 h5{
	     font-size: clamp(12px,4vw,21px);
	color: var(--white);
	}
	.li-box-footer-k2 p{
	   font-size: clamp(12px,4vw,21px);
	color: var(--white);
	}
	.li-box-footer-k2 p:hover{
	   
	color: var(--bg-col-1);
	}
	.politic-footer-k2{
		align-items: center;
    justify-content: center;
	  display: flex;
	  margin: 25px 0px;
	  
	}
	.privacy-box-link{
	      display: flex;
	    gap: 30px;
	}
	@media (max-width:767px) {
	  .privacy-box-link{
	    flex-direction: column;
	    align-items: center;
	  }
	}
	.privacy-box-link a {
	  color: var(--bg-col-1);
	}
	.copy-title-k2{
	  text-align: center;
	  color: var(--white);
	}
	.footer-title-k2{
	  color: var(--white);
	}
	.contacts-svg-k2 svg{
	
	fill: var(--bg-col-1);
	border :1px solid var(--bg-col-1);
	  width: 100px;
	  height: 100px;
	  background: var(--white);
	  padding: 5px;
	  animation: scaleAnimation 3s infinite;
	}
	
	
	
	@keyframes scaleAnimation {
	  0% {
	    transform: scale(1);
	  }
	  50% {
	    transform: scale(0.5);
	  }
	  100% {
	    transform: scale(1);
	  }
	}

	@-webkit-keyframes animationpulse {
	  0% {
	    -webkit-box-shadow: 0 0 0 0 inherit;
	  }
	  70% {
	      -webkit-box-shadow: 0 0 0 15px rgba(0,0,0, 0);
	  }
	  100% {
	      -webkit-box-shadow: 0 0 0 0 rgba(0,0,0, 0);
	  }
	}
	@keyframes animationpulse {
	  0% {
	     transform: scale(1.0, 1.0);
	    -moz-box-shadow: 0 0 0 0 inherit;
	    box-shadow: 0 0 0 0 inherit;
	  }
	  10% {
	     transform: scale(1.1, 1.1);
	  }
	  15% {
	     transform: scale(1.0, 1.0);
	  }
	  70% {
	      -moz-box-shadow: 0 0 0 15px rgba(0,0,0, 0);
	      box-shadow: 0 0 0 15px rgba(0,0,0, 0);
	  }
	  100% {
	      -moz-box-shadow: 0 0 0 0 rgba(0,0,0, 0);
	      box-shadow: 0 0 0 0 rgba(0,0,0, 0);
	  }
	}
	@-ms-keyframes animationpulse {
	    0% {
	        -ms-transform: scale(1.0, 1.0);
	    }
	    10% {
	        -ms-transform: scale(1.1, 1.1);
	    }
	    20% {
	        -ms-transform: scale(1.0, 1.0);
	    }
	    100% {
	       -ms-transform: scale(1.0, 1.0);
	    }
	}
	@media (max-width:991px) {
	  
	  .btn-thumb-phone{
	  display: none;
	  }
	}.btn-main{
	  text-align: center;
	    display: block;
	  padding: 10px 15px;
	
	  color: var(--white);
	  font-size: clamp(12px,4vw,21px);
	  
	}
	.btn-main:hover{
	   color: var(--white);
	
	}
	.btn-1 {
	  display: inline-block;
	  outline: 0;
	  border: 0;
	  cursor: pointer;
	  will-change: box-shadow,transform;
	  background: radial-gradient( 100% 100% at 100% 0%, var(--bg-col-1) 0%, var(--bg-col-3) 100% );
	  box-shadow: 0px 0.01em 0.01em rgb(45 35 66 / 40%), 0px 0.3em 0.7em -0.01em rgb(45 35 66 / 30%), inset 0px -0.01em 0px rgb(58 65 111 / 50%);
	  border-radius: 0.3em;
	  text-shadow: 0 1px 0 rgb(0 0 0 / 40%);
	  transition: box-shadow 0.15s ease, transform 0.15s ease;
	}
	
	.btn-1:hover {
	  box-shadow: 0px 0.1em 0.2em rgb(45 35 66 / 40%), 0px 0.4em 0.7em -0.1em rgb(45 35 66 / 30%), inset 0px -0.1em 0px #3c4fe0;
	  transform: translateY(-0.1em);
	}
	
	.btn-1:active {
	  box-shadow: inset 0px 0.1em 0.6em #3c4fe0;
	  transform: translateY(0em);
	}
	.btn-2{
	  background-color:var(--bg-col-1);
	}
	.btn-2:hover{
	  background-color: var(--btn-col-1);
	
	}
	.btn-3{
	 background: var(--btn-col-1);
	 color: white;
	 border: none;
	 border-radius: 0.625em;
	 cursor: pointer;
	 position: relative;
	 z-index: 1;
	 overflow: hidden;
	}
	
	.btn-3:hover {
	 color: var(--white);
	}
	
	.btn-3:after {
	 content: "";
	 background: var(--bg-col-1);
	 position: absolute;
	 z-index: -1;
	 left: -20%;
	 right: -20%;
	 top: 0;
	 bottom: 0;
	 transform: skewX(-45deg) scale(0, 1);
	 transition: all 0.5s;
	}
	
	.btn-3:hover:after {
	 transform: skewX(-45deg) scale(1, 1);
	 -webkit-transition: all 0.5s;
	 transition: all 0.5s;
	}
	.btn-4 {
	  background: var(--bg-col-1);
	  font-weight: 900;
	  border: 3px solid black;
	  border-radius: 0.4em;
	  box-shadow: 0.1em 0.1em;
	  cursor: pointer;
	}
	
	.btn-4:hover {
	  transform: translate(-0.05em, -0.05em);
	  box-shadow: 0.15em 0.15em;
	}
	
	.btn-4:active {
	  transform: translate(0.05em, 0.05em);
	  box-shadow: 0.05em 0.05em;
	}
	.btn-5{
	background: #545454;
	    padding: 11px 1.7em;
	    border: 3px solid var(--bg-col-1);
	    margin: 0.5em 0 0 0;
	    color: #fff;
	    outline: none;
	    font-weight: 500;
	    transition: 0.5s all;
	    -webkit-transition: 0.5s all;
	    cursor: pointer;
	}
	.btn-5:hover{
	    border: 3px solid var(--btn-col-1);
	
	}
	 
	</style>  </head>

<body>
	<header class="header">
		<nav>
			<div class="wrapper">
				<div class="logo-site"> <img class="logo-here" src="digital-logo.svg" alt="" /> <a class="" href="./">Xpansify</a> </div> <input class="radiobtn-menu" type="radio" name="slider" id="menu-btn" /> <input class="radiobtn-menu" type="radio" name="slider" id="close-btn" />
				<ul class="nav-links"> <label for="close-btn" class="btn close-btn">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        </label>
					<li><a class="" href="./">Página principal </a></li> 
					
					<li><a class="" href="./#contacts">Contactos</a></li>  
					
					<li><a class="" href="./#ourteam">Nuestros empleados</a></li>
					<li class="mobile-vision-k2">  </li>
				</ul>
				<div>  </div> <label for="menu-btn" class="btn menu-btn">
                        <svg width="30" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                        </svg>
                    </label> </div>
		</nav>
	</header>
	<section class=" hero-section ">
		<div class="block-hero12 " style="overflow: hidden;">
			<div class="overlay">
				<div class="container">
					<div class="thumb-hero-k2">
						<div class="box-hero-k2"> <img class="logo-here" src="digital-logo.svg" alt="" />
							<p class="hero-label-k2">Xpansify</p>
						</div>
						<h1 class="title-hero-k2">¡Bienvenidos a Xpansify! Su confianza es nuestro valor. Estamos listos para ofrecerle no solo servicios, sino una solución integral a sus problemas financieros.</h1>
					</div>
				</div>
			</div>
		</div>
	</section> 


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-txt--dupgL--class{
		margin: 0px;
		padding: 0px;
		font-family: 'Noto Serif', sans-serif;
		width: 100%;
		font-size: 16px;
		padding: 295px 0px;
	}
	.bodyClass1-txt--dupgL--class{
		background: #fffef8;
		color: #ffffff;
	}
	.bodyClass2-txt--dupgL--class{
		background: #feffde;
		color: #fff;
	}
	.bodyClass3-txt--dupgL--class{
		background: #fff;
		color: #111;
	}
	.wrapage-block-txt--dupgL--class{
		background-size: 100%;
		width: 100%;
	}
	.box_main-txt--dupgL--class{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-txt--dupgL--class h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-txt--dupgL--class p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-txt--dupgL--class{
		text-align: center;
	}
	.mainBlock-txt--dupgL--class ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-txt--dupgL--class ul>li span{
		font-weight: bold;
	}
	.mainBlock-txt--dupgL--class{
		max-width: 1094px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 0px;
	}
	.mainBlock-txt--dupgL--class .cBlock-txt--dupgL--class{
		text-align: center;
	}

	.bodyClass3-txt--dupgL--class .mainBlock-txt--dupgL--class{
		background: none;
		border-top: 2px solid #feffde;
		border-bottom: 2px solid #feffde;
	}
	.bodyClass2-txt--dupgL--class .mainBlock-txt--dupgL--class{
		background: #200F21;
		color: #fff !important;
		box-shadow: 0px 0px 0px #200F21;
	}
	.bodyClass2-txt--dupgL--class .mainBlock-txt--dupgL--class p{
		color: #fff !important;
	}
	.bodyClass1-txt--dupgL--class .mainBlock-txt--dupgL--class{
		background: #021324;
		color: #ffffff;
		border-left: 2px solid #151515;
	}
	.bodyClass1-txt--dupgL--class .mainBlock-txt--dupgL--class p{
		color: #ffffff !important;
	}
	.order-txt--dupgL--class{
		font-size: 18px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-txt--dupgL--class p{
			padding: 0px 15px;
		  }
		  .box_main-txt--dupgL--class h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-txt--dupgL--class{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-txt--dupgL--class{
			height: 100%;
		}
	}
</style>
<div class="bodyClass3-txt--dupgL--class" id="mainWrapp-txt--dupgL--class">


	<div class="wrapage-block-txt--dupgL--class">
		<div class="box_main-txt--dupgL--class">
			<div class="mainBlock-txt--dupgL--class">
				<p>Estimado Cliente,</p>
<p>Su confianza en nuestros servicios es profundamente valorada. Hemos recibido con éxito su consulta y actualmente la estamos abordando con el mayor cuidado.</p>
<p>Tenga la seguridad de que nuestro equipo de expertos está trabajando diligentemente para cumplir con su solicitud. Esforzándonos por alcanzar la excelencia en el servicio de sus necesidades, nuestro objetivo principal es ofrecer una calidad excepcional y lograr su completa satisfacción.</p>
<p>Si tiene más preguntas o necesita ayuda adicional, no dude en comunicarse a través de su método de comunicación preferido. Apreciamos a cada cliente y siempre estamos aquí para brindar asistencia.</p>
<p class="cBlock-txt--dupgL--class">¡Saludos cordiales, el equipo!</p>
			</div>
		</div>
	</div>


</div>



	<section class="footer-section-k2" id="contacts">
		<div class="container">
			 
			<div class="svg-position-k2">
				<div class="contacts-svg-k2"> <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m480-80-10-120h-10q-142 0-241-99t-99-241q0-142 99-241t241-99q71 0 132.5 26.5t108 73q46.5 46.5 73 108T800-540q0 75-24.5 144t-67 128q-42.5 59-101 107T480-80Zm80-146q71-60 115.5-140.5T720-540q0-109-75.5-184.5T460-800q-109 0-184.5 75.5T200-540q0 109 75.5 184.5T460-280h100v54Zm-101-95q17 0 29-12t12-29q0-17-12-29t-29-12q-17 0-29 12t-12 29q0 17 12 29t29 12Zm-29-127h60q0-30 6-42t38-44q18-18 30-39t12-45q0-51-34.5-76.5T460-720q-44 0-74 24.5T344-636l56 22q5-17 19-33.5t41-16.5q27 0 40.5 15t13.5 33q0 17-10 30.5T480-558q-35 30-42.5 47.5T430-448Zm30-65Z"/></svg> </div>
			</div>
			<div class="box-title-k2">
				<div class="cont-title">
					<h2 class="title-k2 footer-title-k2">Contactos</h2>
				</div>
			</div>
			<div class="thumb-footer-k2">
				<div class="box-footer-k2">
					<div class="adres-footer-k2">
						<a href="#maps">
							<h5>Ubicación de la dirección</h5>
							<p>Técnicos 43, Del Fresno, Fraccionamiento del Fresno, 99050 Fresnillo, Zac., México</p>
						</a>
					</div>
					<div class="phone-mail-foote-k2">
						<div class="li-box-footer-k2">
							<a href="tel:+52 477 777 3935">
								<h5>Número de teléfono</h5>
								<p>+52 477 777 3935</p>
							</a>
						</div>
						<div class="li-box-footer-k2 img-4NStl-class">
							<a href="mailto:accounts-xpansify@mail.mx">
								<h5>Dirección de correo</h5>
								<p>accounts-xpansify@mail.mx</p>
							</a>
						</div>
					</div>
				</div> 
				
				<div class="politic-footer-k2 footer--YndcB--style">
					<div class="privacy-box-link"> 
						<a href="data-privacy.html">Política de privacidad</a> 
						<a href="service-terms.html">Términos y condiciones</a> 
						<a href="contentDisclaimer.html">Renuncias</a>
					 </div>
				</div>
			</div>
			<h5 class="copy-title-k2"> © Copyright <span class="privacy-site-title69">  Monitoreo Integral de Gastos e Ingresos por parte de Xpansify</span> <span> 2024</span></h5>
		</div>
	</section>
	 
	 

</body>
</html>