<!DOCTYPE html>
<html lang="ne">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/flag np.jpg" type="Np Nepali Congress Logo">
  <!-- Nepali Meta Tags -->
<meta name="description" content="गैंडाकोट वडा नम्बर ५ नेपाली कांग्रेसको आधिकारिक वेबसाइट">
<meta name="keywords" content="नेपाली कांग्रेस, गैंडाकोट, वडा नम्बर ५, राजनीतिक दल, नेपाल">

<!-- English Meta Tags -->
<meta name="description" content="Official website of Nepali Congress, Gaindakot Ward No. 5, Nepal">
<meta name="keywords" content="Nepali Congress, Gaindakot, Ward No. 5, Political Party, Nepal">

  <title>गैंडाकोट वडा नम्बर ५ - नेपाली कांग्रेस</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    :root {
      --primary-green: #006400;
      --primary-red: #c32126;
      --hover-green: #00a000;
      --hover-red: #e42a2a;
      --white: #ffffff;
      --dark-text: #333;
      --light-bg: #f8f9fa;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-bg);
    }


    a{
      text-decoration: none;
    }
    
    /* Top bar styles */
    .top-bar {
      background: linear-gradient(90deg, var(--primary-green), var(--primary-red));
      color: var(--white);
      text-align: center;
      padding: 8px;
      font-size: 1rem;
      font-weight: 500;
    }
    
    .top-bar span {
      display: block;
      margin: 3px 0;
    }
    
    /* Header styles */
    header {
      background-color: var(--white);
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }
    
    /* Navbar styles */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 0;
    }

    /* Logo styles */
    .logo-container {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    
    .logo-img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      border: 2px solid var(--primary-red);
      padding: 2px;
      object-fit: cover;
    }
    
    .logo-text {
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--primary-green);
    }
    
    /* Menu styles */
    .nav-menu {
      display: flex;
      align-items: center;
    }
    
    .nav-links {
      display: flex;
      list-style: none;
    }
    
    .nav-links li {
      position: relative;
    }
    
    .nav-links a {
      text-decoration: none;
      color: var(--dark-text);
      font-weight: 700;
      padding: 10px 15px;
      display: block;
      transition: color 0.3s;
      font-size: 13px;
    }
    
    .nav-links a:hover {
      color: var(--primary-green);
    }
    
    .nav-links a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 50%;
      background-color: var(--primary-green);
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }
    
    .nav-links a:hover::after {
      width: 70%;
    }
    
    /* Button styles */
    .membership-btn {
      background-color: var(--primary-red);
      color: var(--white);
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.3s;
      text-decoration: none;
      margin-left: 15px;
    }
    
    .membership-btn:hover {
      background-color: var(--hover-red);
    }
    
    /* Mobile menu button */
    .menu-toggle {
      display: none;
      cursor: pointer;
      background: none;
      border: none;
      padding: 5px;
    }
    
    .menu-toggle span {
      display: block;
      width: 25px;
      height: 3px;
      margin: 5px 0;
      background-color: var(--primary-green);
      transition: all 0.3s ease;
    }
    
    /* Responsive styles */
    @media (max-width: 992px) {
      .nav-links a {
        padding: 10px 12px;
      }
    }
    
    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }
      
      .nav-menu {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: var(--white);
        flex-direction: column;
        align-items: flex-start;
        padding: 10px 0;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
      }
      
      .nav-menu.active {
        max-height: 500px;
      }
      
      .nav-links {
        flex-direction: column;
        width: 100%;
      }
      
      .nav-links li {
        width: 100%;
      }
      
      .nav-links a {
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
      }
      
      .nav-links a::after {
        display: none;
      }
      
      .membership-btn {
        margin: 15px;
        display: inline-block;
        text-align: center;
      }
    }
    
    @media (max-width: 576px) {
      .logo-text {
        font-size: 0.9rem;
      }
      
      .top-bar {
        font-size: 0.9rem;
      }
    }




    .gallery-container {
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .gallery-title {
      text-align: center;
      margin-top: 40px;
      font-size: 28px;
      color:var(--primary-green);
    }
    
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 15px;
    }
    
    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 4px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      aspect-ratio: 1/1;
      background-color: #eee;
    }
    
    .gallery-item:hover {
      transform: translateY(-5px);
    }
    
    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: block;
    }
    
    /* Responsive adjustments */
    @media screen and (max-width: 900px) {
      .gallery {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      }
    }
    
    @media screen and (max-width: 600px) {
      .gallery {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 10px;
      }
    }
    
    @media screen and (max-width: 400px) {
      .gallery {
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
      }
    }









/* Enhanced gallery styles for fancybox integration */
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    aspect-ratio: 1/1;
    cursor: pointer;
  }
  
  .gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  }
  
  .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }
  
  .gallery-item:hover img {
    transform: scale(1.05);
  }
  
  /* Fancybox custom styling */
  .fancybox-bg {
    background: rgba(0, 0, 0, 0.9);
  }
  
  .fancybox-button {
    background: rgba(30, 30, 30, 0.6);
  }
  
  .fancybox-button:hover {
    background: var(--primary-green);
  }
  
  .fancybox-caption {
    background: linear-gradient(to bottom, 
      rgba(0, 0, 0, 0) 0%, 
      rgba(0, 0, 0, 0.8) 100%);
    padding: 30px 0;
    font-family: 'Poppins', sans-serif;
  }
  
  /* Mobile responsive adjustments */
  @media screen and (max-width: 768px) {
    .fancybox-thumbs {
      width: 70px;
    }
    
    .fancybox-show-thumbs .fancybox-inner {
      right: 70px;
    }
    
    .fancybox-thumbs__list a {
      max-width: 60px;
      max-height: 45px;
    }
  }
  
  @media screen and (max-width: 480px) {
    .fancybox-caption {
      padding: 15px 0;
    }
    
    .fancybox-button {
      padding: 10px;
    }
  }
























 /* Footer Styles */
 footer {
    background-color: var(--primary-green);
    color: var(--white);
    padding-top: 40px;
    margin-top: 50px;
  }
  
  .footer-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
  }
  
  .footer-top {
    text-align: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  .footer-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 15px;
  }
  
  .footer-logo-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid var(--primary-red);
    padding: 2px;
    background-color: var(--white);
  }
  
  .footer-logo-text {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--white);
  }
  
  .footer-slogan {
    font-size: 0.9rem;
    opacity: 0.9;
  }
  
  .footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    margin-bottom: 40px;
  }
  
  .footer-section {
    flex: 1;
    min-width: 200px;
  }
  
  .footer-section h4 {
    font-size: 1.1rem;
    margin-bottom: 15px;
    position: relative;
    padding-bottom: 10px;
  }
  
  .footer-section h4::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 40px;
    height: 2px;
    background-color: var(--primary-red);
  }
  
  .footer-links {
    list-style: none;
  }
  
  .footer-links li {
    margin-bottom: 8px;
  }
  
  .footer-links a {
    color: var(--white);
    text-decoration: none;
    transition: opacity 0.3s;
    display: inline-block;
    opacity: 0.8;
  }
  
  .footer-links a:hover {
    opacity: 1;
    padding-left: 5px;
  }
  
  .footer-section p {
    margin-bottom: 8px;
    font-size: 0.9rem;
    opacity: 0.8;
  }
  
  .footer-section p i {
    margin-right: 8px;
    color: var(--primary-red);
  }
  
  .social-icons {
    display: flex;
    gap: 12px;
    margin-top: 15px;
    margin-bottom: 20px;
  }
  
  .social-icons a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: rgba(255, 255, 255, 0.1);
    color: var(--white);
    border-radius: 50%;
    transition: all 0.3s;
  }
  
  .social-icons a:hover {
    background-color: var(--primary-red);
    transform: translateY(-3px);
  }
  
  .footer-membership-btn {
    display: inline-block;
    background-color: var(--primary-red);
    color: var(--white);
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    transition: background-color 0.3s;
    margin-top: 15px;
  }
  
  .footer-membership-btn:hover {
    background-color: var(--hover-red);
  }
  
  .footer-bottom {
    background-color: rgba(0, 0, 0, 0.2);
    padding: 15px 0;
    text-align: center;
    font-size: 0.85rem;
  }
  
  .footer-bottom .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .footer-bottom a {
    color: var(--white);
    text-decoration: none;
    opacity: 0.8;
    transition: opacity 0.3s;
  }
  
  .footer-bottom a:hover {
    opacity: 1;
  }
  
  /* Responsive styles */
  @media (max-width: 992px) {
    .footer-content {
      gap: 20px;
    }
    
    .footer-section {
      min-width: 170px;
    }
  }
  
  @media (max-width: 768px) {
    .footer-content {
      gap: 40px;
    }
    
    .footer-section {
      flex: 0 0 calc(50% - 20px);
    }
    
    .footer-bottom .container {
      flex-direction: column;
      gap: 10px;
    }
  }
  
  @media (max-width: 576px) {
    .footer-section {
      flex: 0 0 100%;
    }
    
    .footer-logo {
      flex-direction: column;
      text-align: center;
    }
    
    .footer-top {
      margin-bottom: 20px;
    }
    
    .footer-content {
      gap: 30px;
    }
  }
    
  </style>
</head>
<body>
  <!-- Hidden SEO text for search engines -->
  <div style="display:none">
    Nepali Congress Gaindakot Ward No 5 Official Website. Political Party of Nepal focused on democracy, socialism and nationalism.
  </div>
  
  <!-- Top Bar -->
  <div class="top-bar">
    <span>राष्ट्रियता, लोकतन्त्र, समाजवाद</span>
    <span>हाम्रो सिद्धान्त, हाम्रो शक्ति</span>
  </div>
  
  <!-- Header with Navbar -->
  <header>
    <div class="container">
      <nav class="navbar">
        <div class="logo-container">
          <img src="./assets/flag np.jpg" alt="नेपाली कांग्रेस लोगो" class="logo-img">
          <div class="logo-text">गैंडाकोट वडा नं. ५ - नेपाली कांग्रेस</div>
        </div>
        
        <button class="menu-toggle" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </button>
        
       
        <div class="nav-menu" id="navMenu">
          <ul class="nav-links">
            <li><a href="index.php">गृहपृष्ठ</a></li>
            <li><a href="about.php">हाम्रो बारेमा</a></li>
            <li><a href="team.php">हाम्रो टिम</a></li>
            <li><a href="member.php">सदस्यता</a></li>
            <li><a href="high.php">नेतृत्व</a></li>
            <li><a href="resource.php">स्रोतहरू</a></li>
            <li><a href="pic.php">ग्यालरी</a></li>
            <li><a href="contact.php">सम्पर्क</a></li>
          </ul>
          <a href="online.php" class="membership-btn">अनलाइन सदस्यता</a>
        </div>
      </nav>
    </div>
  </header>

 






<!-- Gallery Section with Fancybox -->
<div class="gallery-container">
  <h1 class="gallery-title">ग्यालरी-गैंडाकोट वडा नं. ५ - नेपाली कांग्रेस</h1>
  <br>
  <br>
  <div class="gallery">
    <!-- Gallery Items with Fancybox -->
    <div class="gallery-item">
      <a href="./assets/0.jpg" data-fancybox="gallery" data-caption="Gallery Image 1">
        <img src="./assets/0.jpg" alt="Gallery Image 1">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/a.jpg" data-fancybox="gallery" data-caption="Gallery Image 2">
        <img src="./assets/a.jpg" alt="Gallery Image 2">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/e.jpg" data-fancybox="gallery" data-caption="Gallery Image 3">
        <img src="./assets/e.jpg" alt="Gallery Image 3">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/i.jpg" data-fancybox="gallery" data-caption="Gallery Image 4">
        <img src="./assets/i.jpg" alt="Gallery Image 4">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/kaka.jpg" data-fancybox="gallery" data-caption="Gallery Image 5">
        <img src="./assets/kaka.jpg" alt="Gallery Image 5">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/laxman.jpg" data-fancybox="gallery" data-caption="Gallery Image 6">
        <img src="./assets/laxman.jpg" alt="Gallery Image 6">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 42.jpg" data-fancybox="gallery" data-caption="Gallery Image 7">
        <img src="./assets/np 42.jpg" alt="Gallery Image 7">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/q.jpg" data-fancybox="gallery" data-caption="Gallery Image 8">
        <img src="./assets/q.jpg" alt="Gallery Image 8">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/r.jpg" data-fancybox="gallery" data-caption="Gallery Image 9">
        <img src="./assets/r.jpg" alt="Gallery Image 9">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/s.jpg" data-fancybox="gallery" data-caption="Gallery Image 10">
        <img src="./assets/s.jpg" alt="Gallery Image 10">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/t.jpg" data-fancybox="gallery" data-caption="Gallery Image 11">
        <img src="./assets/t.jpg" alt="Gallery Image 11">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/u.jpg" data-fancybox="gallery" data-caption="Gallery Image 12">
        <img src="./assets/u.jpg" alt="Gallery Image 12">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/w.jpg" data-fancybox="gallery" data-caption="Gallery Image 13">
        <img src="./assets/w.jpg" alt="Gallery Image 13">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/y.jpg" data-fancybox="gallery" data-caption="Gallery Image 14">
        <img src="./assets/y.jpg" alt="Gallery Image 14">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np.jpg" data-fancybox="gallery" data-caption="Gallery Image 15">
        <img src="./assets/np.jpg" alt="Gallery Image 15">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np1.jpg" data-fancybox="gallery" data-caption="Gallery Image 16">
        <img src="./assets/np1.jpg" alt="Gallery Image 16">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np3.jpg" data-fancybox="gallery" data-caption="Gallery Image 17">
        <img src="./assets/np3.jpg" alt="Gallery Image 17">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np5.jpg" data-fancybox="gallery" data-caption="Gallery Image 18">
        <img src="./assets/np5.jpg" alt="Gallery Image 18">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 6.jpg" data-fancybox="gallery" data-caption="Gallery Image 19">
        <img src="./assets/np 6.jpg" alt="Gallery Image 19">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 7.jpg" data-fancybox="gallery" data-caption="Gallery Image 20">
        <img src="./assets/np 7.jpg" alt="Gallery Image 20">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 8.jpg" data-fancybox="gallery" data-caption="Gallery Image 21">
        <img src="./assets/np 8.jpg" alt="Gallery Image 21">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 9.jpg" data-fancybox="gallery" data-caption="Gallery Image 22">
        <img src="./assets/np 9.jpg" alt="Gallery Image 22">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 10.jpg" data-fancybox="gallery" data-caption="Gallery Image 23">
        <img src="./assets/np 10.jpg" alt="Gallery Image 23">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 11.jpg" data-fancybox="gallery" data-caption="Gallery Image 24">
        <img src="./assets/np 11.jpg" alt="Gallery Image 24">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 39.jpg" data-fancybox="gallery" data-caption="Gallery Image 25">
        <img src="./assets/np 39.jpg" alt="Gallery Image 25">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 12.jpg" data-fancybox="gallery" data-caption="Gallery Image 26">
        <img src="./assets/np 12.jpg" alt="Gallery Image 26">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 14.jpg" data-fancybox="gallery" data-caption="Gallery Image 27">
        <img src="./assets/np 14.jpg" alt="Gallery Image 27">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 40.jpg" data-fancybox="gallery" data-caption="Gallery Image 28">
        <img src="./assets/np 40.jpg" alt="Gallery Image 28">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np1.jpg" data-fancybox="gallery" data-caption="Gallery Image 29">
        <img src="./assets/np1.jpg" alt="Gallery Image 29">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 17.jpg" data-fancybox="gallery" data-caption="Gallery Image 30">
        <img src="./assets/np 17.jpg" alt="Gallery Image 30">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 18.jpg" data-fancybox="gallery" data-caption="Gallery Image 31">
        <img src="./assets/np 18.jpg" alt="Gallery Image 31">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 19.jpg" data-fancybox="gallery" data-caption="Gallery Image 32">
        <img src="./assets/np 19.jpg" alt="Gallery Image 32">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 20.jpg" data-fancybox="gallery" data-caption="Gallery Image 33">
        <img src="./assets/np 20.jpg" alt="Gallery Image 33">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 23.jpg" data-fancybox="gallery" data-caption="Gallery Image 34">
        <img src="./assets/np 23.jpg" alt="Gallery Image 34">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 24.jpg" data-fancybox="gallery" data-caption="Gallery Image 35">
        <img src="./assets/np 24.jpg" alt="Gallery Image 35">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 25.jpg" data-fancybox="gallery" data-caption="Gallery Image 36">
        <img src="./assets/np 25.jpg" alt="Gallery Image 36">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 26.jpg" data-fancybox="gallery" data-caption="Gallery Image 37">
        <img src="./assets/np 26.jpg" alt="Gallery Image 37">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 27.jpg" data-fancybox="gallery" data-caption="Gallery Image 38">
        <img src="./assets/np 27.jpg" alt="Gallery Image 38">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 28.jpg" data-fancybox="gallery" data-caption="Gallery Image 39">
        <img src="./assets/np 28.jpg" alt="Gallery Image 39">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 29.jpg" data-fancybox="gallery" data-caption="Gallery Image 40">
        <img src="./assets/np 29.jpg" alt="Gallery Image 40">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 30.jpg" data-fancybox="gallery" data-caption="Gallery Image 41">
        <img src="./assets/np 30.jpg" alt="Gallery Image 41">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 31.jpg" data-fancybox="gallery" data-caption="Gallery Image 42">
        <img src="./assets/np 31.jpg" alt="Gallery Image 42">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 32.jpg" data-fancybox="gallery" data-caption="Gallery Image 43">
        <img src="./assets/np 32.jpg" alt="Gallery Image 43">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 33.jpg" data-fancybox="gallery" data-caption="Gallery Image 44">
        <img src="./assets/np 33.jpg" alt="Gallery Image 44">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 34.jpg" data-fancybox="gallery" data-caption="Gallery Image 45">
        <img src="./assets/np 34.jpg" alt="Gallery Image 45">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 35.jpg" data-fancybox="gallery" data-caption="Gallery Image 46">
        <img src="./assets/np 35.jpg" alt="Gallery Image 46">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 36.jpg" data-fancybox="gallery" data-caption="Gallery Image 47">
        <img src="./assets/np 36.jpg" alt="Gallery Image 47">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 37.jpg" data-fancybox="gallery" data-caption="Gallery Image 48">
        <img src="./assets/np 37.jpg" alt="Gallery Image 48">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 39.jpg" data-fancybox="gallery" data-caption="Gallery Image 49">
        <img src="./assets/np 39.jpg" alt="Gallery Image 49">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 41.jpg" data-fancybox="gallery" data-caption="Gallery Image 50">
        <img src="./assets/np 41.jpg" alt="Gallery Image 50">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 42.jpg" data-fancybox="gallery" data-caption="Gallery Image 51">
        <img src="./assets/np 42.jpg" alt="Gallery Image 51">
      </a>
    </div>
    <div class="gallery-item">
      <a href="./assets/np 38.jpg" data-fancybox="gallery" data-caption="Gallery Image 52">
        <img src="./assets/np 38.jpg" alt="Gallery Image 52">
      </a>
    </div>
  </div>
</div>





<!-- Footer Section -->
<footer>
  <div class="footer-container">
    <div class="footer-top">
      <div class="footer-logo">
        <img src="./assets/flag np.jpg" alt="नेपाली कांग्रेस लोगो" class="footer-logo-img">
        <div class="footer-logo-text">गैंडाकोट वडा नं. ५ - नेपाली कांग्रेस</div>
      </div>
      <p class="footer-slogan">राष्ट्रियता, लोकतन्त्र, समाजवाद - हाम्रो सिद्धान्त, हाम्रो शक्ति</p>
    </div>
    
    <div class="footer-content">
      <div class="footer-section">
        <h4>लिङ्कहरू</h4>
        <ul class="footer-links">
          <li><a href="index.html">गृहपृष्ठ</a></li>
          <li><a href="about.html">हाम्रो बारेमा</a></li>
          <li><a href="team.html">हाम्रो टिम</a></li>
          <li><a href="member.html">सदस्यता</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h4>अन्य लिङ्कहरू</h4>
        <ul class="footer-links">
          <li><a href="high.html">नेतृत्व</a></li>
          <li><a href="resource.html">स्रोतहरू</a></li>
          <li><a href="pic.html">ग्यालरी</a></li>
          <li><a href="contact.php">सम्पर्क</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h4>सम्पर्क</h4>
        <p><i class="fas fa-map-marker-alt"></i> गैंडाकोट वडा नं. ५, नवलपरासी, नेपाल</p>
        <p><i class="fas fa-phone"></i> +977 XXXXXXXXXX</p>
        <p><i class="fas fa-envelope"></i> info@nepaligaindakot5.org.np</p>
      </div>
      
      <div class="footer-section">
        <h4>हामीलाई फलो गर्नुहोस्</h4>
        <div class="social-icons">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
        <a href="online.html" class="footer-membership-btn">अनलाइन सदस्यता लिनुहोस्</a>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
    <div class="container">
      <p>&copy; २०८१ - नेपाली कांग्रेस गैंडाकोट वडा नं. ५ | सर्वाधिकार सुरक्षित</p>
      <p>
        <a href="https://himalshahithakuri.com.np/" target="_blank" style="color: black; background-color: yellow; padding: 5px 10px; border-radius: 5px; text-decoration: none; font-weight: bold;">
          Designed and Developed by Himal Shahi Thakuri
        </a>
        | 
        <a href="#">Supported by Laxman Karki</a>
      </p>
    </div>
  </div>
</footer>









  <script>
    // Mobile menu toggle
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    
    menuToggle.addEventListener('click', function() {
      navMenu.classList.toggle('active');
      
      // Animate menu icon
      const spans = this.querySelectorAll('span');
      if (navMenu.classList.contains('active')) {
        spans[0].style.transform = 'rotate(45deg) translate(5px, 6px)';
        spans[1].style.opacity = '0';
        spans[2].style.transform = 'rotate(-45deg) translate(5px, -6px)';
      } else {
        spans.forEach(span => {
          span.style.transform = 'none';
          span.style.opacity = '1';
        });
      }
    });
    
    // Close menu when clicking on links
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        const spans = menuToggle.querySelectorAll('span');
        spans.forEach(span => {
          span.style.transform = 'none';
          span.style.opacity = '1';
        });
      });
    });









    $(document).ready(function() {
    // Initialize Fancybox
    $('[data-fancybox="gallery"]').fancybox({
      buttons: [
        "zoom",
        "slideShow",
        "fullScreen",
        "download",
        "thumbs",
        "close"
      ],
      loop: true,
      animationEffect: "fade",
      transitionEffect: "slide",
      protect: true,
      touch: {
        vertical: true,
        momentum: true
      },
      mobile: {
        clickContent: function(current, event) {
          return current.type === "image" ? "toggleControls" : false;
        },
        clickSlide: function(current, event) {
          return current.type === "image" ? "toggleControls" : "close";
        }
      }
    });
  });







  </script>
</body>
</html>