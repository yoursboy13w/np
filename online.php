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



    h1 {
      font-size: 5rem;
      color: red;
      margin: 0 0 30px 0;
    }

    button {
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 12px 30px;
      font-size: 18px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    

    /* Responsive adjustments */
    @media (max-width: 768px) {
      h1 {
        font-size: 3rem;
      }

      button {
        padding: 10px 25px;
        font-size: 16px;
      }
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 2.2rem;
        margin-top: 64px;
        text-align: center;
      }

      button {
        padding: 8px 20px;
        font-size: 14px;
        font-size: 14px;
        margin-left: 104px;
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



  .l {
      position: relative;
      width: 100%;
      height: 400px;
      background-color: #111;
      text-align: center;
      transform-style: preserve-3d;
      animation: containerPulse 8s ease-in-out infinite;
    }
    
    h1 {
      font-size: 5rem;
      margin: 0;
      text-align: center;
      font-family: 'Arial Black', sans-serif;
      position: relative;
      padding: 20px;
      background: linear-gradient(45deg, #FF6347, #6A5ACD, #FFD700, #32CD32);
      background-size: 400% 400%;
      animation: backgroundAnimation 5s ease infinite;
      -webkit-background-clip: text;
      color: transparent;
      letter-spacing: 5px;
      filter: drop-shadow(0 0 5px rgba(255,255,255,0.5));
    }
    
    .letter {
      display: inline-block;
      opacity: 0;
      transform-origin: center center;
      transform: translateY(60px) translateZ(-100px) scale(0.5) rotateX(45deg) rotateY(20deg);
      animation: advancedFadeInUp 2s forwards cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
    }
    
    .letter::before {
      content: attr(data-char);
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0.15;
      transform: translateZ(-10px) translateY(5px) scale(1.1);
      filter: blur(5px);
      color: #fff;
      z-index: -1;
    }
    
    .letter::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 100%;
      height: 4px;
      background: currentColor;
      transform: scaleX(0);
      transform-origin: left;
      animation: lineExpand 1.5s forwards ease-out;
      animation-delay: calc(0.1s * var(--index) + 1s);
      opacity: 0.7;
      border-radius: 2px;
      filter: blur(1px);
    }
    
    .letter:nth-child(1) { --index: 1; animation-delay: 0.1s; color: #FF6347; }
    .letter:nth-child(2) { --index: 2; animation-delay: 0.2s; color: #6A5ACD; }
    .letter:nth-child(3) { --index: 3; animation-delay: 0.3s; color: #FFD700; }
    .letter:nth-child(4) { --index: 4; animation-delay: 0.4s; color: #32CD32; }
    .letter:nth-child(5) { --index: 5; animation-delay: 0.5s; color: #FF4500; }
    .letter:nth-child(6) { --index: 6; animation-delay: 0.6s; color: #FF1493; }
    .letter:nth-child(7) { --index: 7; animation-delay: 0.7s; color: #00BFFF; }
    .letter:nth-child(8) { --index: 8; animation-delay: 0.8s; color: #8A2BE2; } /* Space */
    .letter:nth-child(9) { --index: 9; animation-delay: 0.9s; color: #20B2AA; }
    .letter:nth-child(10) { --index: 10; animation-delay: 1s; color: #FF69B4; }
    .letter:nth-child(11) { --index: 11; animation-delay: 1.1s; color: #7FFF00; }
    .letter:nth-child(12) { --index: 12; animation-delay: 1.2s; color: #DC143C; }
    
    .glow {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 150%;
      height: 150%;
      transform: translate(-50%, -50%);
      background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%);
      filter: blur(20px);
      z-index: -1;
      opacity: 0;
      animation: glowPulse 3s forwards infinite;
      animation-delay: calc(0.1s * var(--index) + 1s);
    }
    
    @keyframes advancedFadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px) scale(0.8) rotate(15deg) translateZ(-50px);
      }
      25% {
        opacity: 0.3;
        transform: translateY(10px) scale(1.1) rotate(10deg) translateZ(20px);
      }
      50% {
        opacity: 0.6;
        transform: translateY(-5px) scale(1.05) rotate(5deg) translateZ(10px);
      }
      75% {
        opacity: 0.9;
        transform: translateY(0) scale(1) rotate(-5deg) translateZ(5px);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1) rotate(0) translateZ(0);
      }
    }
    
    @keyframes backgroundAnimation {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    
    @keyframes lineExpand {
      0% { transform: scaleX(0); opacity: 0; }
      50% { transform: scaleX(1.2); opacity: 0.7; }
      100% { transform: scaleX(1); opacity: 0.4; }
    }
    
    @keyframes glowPulse {
      0% { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
      50% { opacity: 0.3; transform: translate(-50%, -50%) scale(1.1); }
      100% { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
    }
    
    @keyframes containerPulse {
      0% { transform: translateZ(0) rotateX(0deg); }
      25% { transform: translateZ(30px) rotateX(2deg); }
      50% { transform: translateZ(0) rotateX(0deg); }
      75% { transform: translateZ(-20px) rotateX(-2deg); }
      100% { transform: translateZ(0) rotateX(0deg); }
    }
    
    /* Added 3D particle effects */
    .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: -2;
    }
    
    .particle {
      position: absolute;
      width: 8px;
      height: 8px;
      background: rgba(255, 255, 255, 0.5);
      border-radius: 50%;
      transform-style: preserve-3d;
      filter: blur(2px);
      animation: particleFloat 15s infinite linear;
    }
    
    @keyframes particleFloat {
      0% {
        transform: translateX(0) translateY(0) translateZ(0) rotate(0deg);
        opacity: 0;
      }
      10% {
        opacity: 0.8;
      }
      90% {
        opacity: 0.4;
      }
      100% {
        transform: translateX(calc(var(--x) * 100px)) 
                   translateY(calc(var(--y) * 100px)) 
                   translateZ(calc(var(--z) * 100px)) 
                   rotate(360deg);
        opacity: 0;
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

  <div class="particles" id="particles"></div>
  <div class="l">
    <h1>
      <span class="letter" data-char="C">C</span>
      <span class="letter" data-char="O">O</span>
      <span class="letter" data-char="M">M</span>
      <span class="letter" data-char="M">M</span>
      <span class="letter" data-char="I">I</span>
      <span class="letter" data-char="N">N</span>
      <span class="letter" data-char="G">G</span>
      <span class="letter" data-char=" "> </span> <!-- Space between words -->
      <span class="letter" data-char="S">S</span>
      <span class="letter" data-char="O">O</span>
      <span class="letter" data-char="O">O</span>
      <span class="letter" data-char="N">N</span>
    </h1>
    <button onclick="location.href='index.html'">GO BACK HOME</button>
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












    document.addEventListener('DOMContentLoaded', () => {
      // Add glow elements to each letter
      const letters = document.querySelectorAll('.letter');
      letters.forEach((letter, i) => {
        const glow = document.createElement('div');
        glow.className = 'glow';
        glow.style.setProperty('--index', i+1);
        letter.appendChild(glow);
      });
      
      // Create particles
      const particlesContainer = document.getElementById('particles');
      const numParticles = 50;
      
      for (let i = 0; i < numParticles; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        // Random colors
        const colors = ['#FF6347', '#6A5ACD', '#FFD700', '#32CD32', '#FF4500', '#00BFFF', '#FF1493'];
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        particle.style.background = randomColor;
        
        // Random size
        const size = Math.random() * 6 + 2;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        
        // Random position
        const x = Math.random() * 100;
        const y = Math.random() * 100;
        particle.style.left = `${x}%`;
        particle.style.top = `${y}%`;
        
        // Random animation
        const xDir = Math.random() * 2 - 1;
        const yDir = Math.random() * 2 - 1;
        const zDir = Math.random() * 2 - 1;
        particle.style.setProperty('--x', xDir);
        particle.style.setProperty('--y', yDir);
        particle.style.setProperty('--z', zDir);
        
        // Random animation duration and delay
        const duration = Math.random() * 20 + 10;
        const delay = Math.random() * 5;
        particle.style.animationDuration = `${duration}s`;
        particle.style.animationDelay = `${delay}s`;
        
        particlesContainer.appendChild(particle);
      }
    });


  </script>
</body>
</html>