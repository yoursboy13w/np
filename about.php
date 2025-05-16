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




 /* Section Styles */
 .section {
    padding: 60px 0;
    position: relative;
  }

  .section-title {
    font-size: 2rem;
    color: #333;
    margin-bottom: 1.5rem;
    text-align: center;
    position: relative;
    font-weight: 700;
  }

  .section-title::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-green), var(--primary-red));
    margin: 15px auto;
    border-radius: 2px;
  }

  .section-description {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 40px;
    color: #666;
    font-size: 1.1rem;
    line-height: 1.7;
  }

  /* Hero Section */
  .hero-section {
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("/api/placeholder/1200/600") center/cover no-repeat;
    color: #fff;
    text-align: center;
    padding: 120px 0;
    position: relative;
  }

  .hero-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .hero-title {
    font-size: 2.8rem;
    margin-bottom: 20px;
    font-weight: 700;
  }

  .hero-subtitle {
    font-size: 1.2rem;
    margin-bottom: 30px;
    line-height: 1.6;
  }

  .hero-btn {
    display: inline-block;
    background-color: var(--primary-red);
    color: white;
    padding: 12px 25px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: 600;
    transition: all 0.3s ease;
    margin: 10px;
  }

  .hero-btn:hover {
    background-color: var(--hover-red);
    transform: translateY(-3px);
  }

  .hero-btn.secondary {
    background-color: transparent;
    border: 2px solid white;
  }

  .hero-btn.secondary:hover {
    background-color: rgba(255,255,255,0.2);
  }

  /* About Section */
  .about-section {
    background-color: #fff;
  }

  .about-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .about-text {
    flex: 1;
    min-width: 300px;
  }

  .about-image {
  
    min-width: 300px;
    max-width: 500px;
    height: 450px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border-radius: 10px;
    overflow: hidden;
    object-fit: contain;
  }

  .about-image img {
    width: 100%;
    height: 550px;
    display: block;
    object-fit: contain;
    transition: transform 0.5s ease;
  }

  .about-image:hover img {
    transform: scale(1.05);
  }

  /* Mission & Vision */
  .mission-vision {
    background-color: #f9f9f9;
  }

  .mission-vision-container {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .mission-box, .vision-box {
    flex: 1;
    min-width: 300px;
    background-color: white;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .mission-box:hover, .vision-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
  }

  .box-title {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: var(--primary-green);
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .box-title i {
    font-size: 1.8rem;
  }

  .box-content {
    color: #555;
    line-height: 1.7;
  }

  /* Timeline Section */
  .timeline-section {
    background-color: #fff;
    padding: 80px 0;
  }

  .timeline-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
  }

  .timeline-container::before {
    content: '';
    position: absolute;
    width: 4px;
    background-color: var(--primary-green);
    top: 0;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
  }

  .timeline-item {
    padding: 20px 40px;
    position: relative;
    width: calc(50% - 30px);
    margin-bottom: 30px;
  }

  .timeline-item::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    background-color: var(--primary-red);
    border-radius: 50%;
    top: 30px;
    z-index: 1;
    margin-left: 29px;
  }

  .timeline-item:nth-child(odd) {
    left: 0;
  }

  .timeline-item:nth-child(even) {
    left: 50%;
  }

  .timeline-item:nth-child(odd)::after {
    right: -40px;
  }

  .timeline-item:nth-child(even)::after {
    left: -40px;
  }

  .timeline-content {
    padding: 20px;
    background-color: white;
    border-radius: 6px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.1);
  }

  .timeline-date {
    font-weight: 600;
    color: var(--primary-green);
    margin-bottom: 10px;
    font-size: 1.1rem;
  }

  .timeline-title {
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: #333;
  }

  .timeline-text {
    color: #666;
    line-height: 1.6;
  }

  /* President Message */
  .president-message {
    background-color: #f9f9f9;
    padding: 5px 0;
  }

  .message-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 40px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    position: relative;
  }

  .message-header {
    display: flex;
    align-items: center;
    gap: 30px;
    margin-bottom: 30px;
  }

  .president-image {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    overflow: hidden;
    border: 5px solid #f0f0f0;
  }

  .president-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .president-info h3 {
    font-size: 1.5rem;
    color: var(--primary-green);
    margin-bottom: 5px;
  }

  .president-info p {
    color: #666;
    font-style: italic;
  }

  .message-content {
    position: relative;
    padding: 20px 0;
    color: #444;
    line-height: 1.8;
  }

  .message-content::before {
    content: '"';
    font-size: 5rem;
    font-family: 'Georgia', serif;
    color:var(--primary-green) ;
    position: absolute;
    top: -50px;
    left: -20px;
  }

  .message-content::after {
    content: '"';
    font-size: 5rem;
    font-family: 'Georgia', serif;
    color: var(--primary-green);
    position: absolute;
    bottom: -60px;
    right: 0;
  }

  /* Membership Section */
  .membership-section {
    background-color: #fff;
    padding: 80px 0;
  }

  .membership-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .membership-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
  }

  .membership-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    overflow: hidden;
    width: 330px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .membership-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
  }

  .card-header {
    background: linear-gradient(45deg, var(--primary-green), var(--primary-red));
    color: white;
    padding: 25px 20px;
    text-align: center;
  }

  .card-title {
    font-size: 1.5rem;
    margin-bottom: 10px;
  }

  .card-price {
    font-size: 2rem;
    font-weight: 700;
  }

  .card-body {
    padding: 30px 20px;
  }

  .card-features {
    list-style: none;
    margin-bottom: 30px;
  }

  .card-features li {
    padding: 8px 0;
    color: #555;
    position: relative;
    padding-left: 25px;
  }

  .card-features li::before {
    content: '✓';
    color: var(--primary-green);
    position: absolute;
    left: 0;
    font-weight: bold;
  }

  .card-button {
    display: block;
    background-color: var(--primary-red);
    color: white;
    text-align: center;
    padding: 12px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  .card-button:hover {
    background-color: var(--hover-red);
  }

  /* Responsive Styles */
  @media (max-width: 992px) {
    .timeline-container::before {
      left: 31px;
    }
    
    .timeline-item {
      width: 100%;
      padding-left: 70px;
      padding-right: 25px;
    }
    
    .timeline-item:nth-child(odd),
    .timeline-item:nth-child(even) {
      left: 0;
    }
    
    .timeline-item:nth-child(odd)::after,
    .timeline-item:nth-child(even)::after {
      left: -27px;
      right: auto;
    }
  }

  @media (max-width: 768px) {
    .section {
      padding: 0px 0;
    }
    
    .hero-section {
      padding: 80px 0;
    }
    
    .hero-title {
      font-size: 2.2rem;
    }
    
    .section-title {
      font-size: 1.8rem;
      margin-top: 25px;
    }
    
    .about-content {
      flex-direction: column-reverse;
    }
    
    .about-image {
      margin-bottom: 30px;
    }
    
    .message-header {
      flex-direction: column;
      text-align: center;
    }
    
    .president-info {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .hero-title {
      font-size: 1.8rem;
    }
    
    .hero-subtitle {
      font-size: 1rem;
    }
    
    .section-title {
      font-size: 1.5rem;
    }
    
    .timeline-text,
    .message-content {
      font-size: 0.95rem;
    }
  }







 /* Footer Styles */
 footer {
    background-color: var(--primary-green);
    color: var(--white);
    padding-top: 40px;
    margin-top: 50px;
    position: sticky;
  }
  
  .footer-c {
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

 








<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-content">
    <h1 class="hero-title">नेपाली कांग्रेस, गैंडाकोट वडा नं. ५</h1>
    <p class="hero-subtitle">राष्ट्रियता, लोकतन्त्र र समाजवादको सिद्धान्तमा आधारित, नेपालको प्रमुख राजनीतिक पार्टी</p>
    <div>
      <a href="about.html" class="hero-btn">हाम्रो बारेमा</a>
      <a href="member.html" class="hero-btn secondary">सदस्य बन्नुहोस्</a>
    </div>
  </div>
</section>

<!-- Introduction Section -->
<section class="section about-section">
  <div class="container">
    <h2 class="section-title">परिचय</h2>
    <p class="section-description">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ ले स्थानीय समुदायको विकास र सशक्तिकरणका लागि निरन्तर प्रयास गर्दै आएको छ।</p>
    
    <div class="about-content">
      <div class="about-text">
        <p>नेपाली कांग्रेस गैंडाकोट वडा नं. ५ ले स्थानीय नागरिकहरूको हित र समृद्धिका लागि विभिन्न कार्यक्रमहरू संचालन गर्दै आइरहेको छ। हामी समावेशी लोकतन्त्र, सामाजिक न्याय र आर्थिक विकासको पक्षमा छौं।</p>
        <p style="margin-top: 15px;">हाम्रो वडा समितिले स्थानीय समस्याहरू पहिचान गरी समाधानका लागि नगरपालिका र केन्द्रीय सरकारसँग समन्वय गर्दछ। हामी जनताको आवाज उठाउन र उनीहरूको अधिकारको रक्षा गर्न प्रतिबद्ध छौं।</p>
        <p style="margin-top: 15px;">हामी स्थानीय युवाहरूलाई राजनीतिक नेतृत्वमा प्रोत्साहित गर्दै समाजमा सकारात्मक परिवर्तन ल्याउन प्रयासरत छौं।</p>
      </div>
      <div class="about-image">
        <img src="./assets/hi.jpeg" alt="नेपाली कांग्रेस गैंडाकोट कार्यक्रम">
      </div>
    </div>
  </div>
</section>

<!-- History Section -->
<section class="section mission-vision">
  <div class="container">
    <h2 class="section-title">इतिहास</h2>
    <p class="section-description">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ को गौरवशाली इतिहास राष्ट्रिय इतिहासको महत्वपूर्ण अंश हो।</p>
    
    <div class="about-content">
      <div class="about-image">
        <img src="./assets/his.jpg" alt="नेपाली कांग्रेस इतिहास">
      </div>
      <div class="about-text">
        <p>नेपाली कांग्रेस पार्टीको स्थापना वि.सं. २००६ सालमा भएको थियो। सुरुवातदेखि नै यो पार्टीले नेपालमा प्रजातन्त्र, लोकतन्त्र र मानव अधिकारको लागि संघर्ष गर्दै आएको छ।</p>
        <p style="margin-top: 15px;">गैंडाकोट वडा नं. ५ मा नेपाली कांग्रेसको इकाई स्थापना भएपछि स्थानीय स्तरमा विकास र लोकतन्त्रको संस्थागत विकासमा महत्वपूर्ण भूमिका निर्वाह गर्दै आएको छ।</p>
        <p style="margin-top: 15px;">२०४६ सालको जनआन्दोलन, २०६२/६३ को जनआन्दोलन र त्यसपछिका परिवर्तनहरूमा हाम्रो वडाले महत्वपूर्ण भूमिका निर्वाह गरेको थियो। यस वडाका अनेकौं नेताहरूले राष्ट्रिय राजनीतिमा पनि योगदान पुर्‍याएका छन्।</p>
      </div>
    </div>
  </div>
</section>

<!-- Mission & Vision Section -->
<section class="section mission-vision">
  <div class="container">
    <h2 class="section-title">हाम्रो लक्ष्य र दृष्टिकोण</h2>
    <p class="section-description">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ को लक्ष्य र दृष्टिकोण स्पष्ट र जनमुखी छ</p>
    
    <div class="mission-vision-container">
      <div class="mission-box">
        <h3 class="box-title"><i class="fas fa-bullseye"></i> हाम्रो लक्ष्य</h3>
        <div class="box-content">
          <p>नेपाली कांग्रेस गैंडाकोट वडा नं. ५ को लक्ष्य समाजमा लोकतान्त्रिक मूल्य र मान्यताको संस्थागत विकास गर्दै स्थानीय नागरिकहरूको जीवनस्तर उकास्नु हो। हामी निम्न कुरामा विश्वास गर्छौं:</p>
          <ul style="margin-top: 15px; margin-left: 20px;">
            <li>स्थानीय विकासमा जनसहभागिता बढाउनु</li>
            <li>सामाजिक न्याय र समानताको प्रवर्द्धन गर्नु</li>
            <li>आर्थिक र सामाजिक विकासका लागि स्थानीय संरचना निर्माण गर्नु</li>
            <li>युवा र महिला सशक्तिकरणलाई प्राथमिकता दिनु</li>
            <li>पारदर्शी र जवाफदेही शासन प्रणालीको विकास गर्नु</li>
          </ul>
        </div>
      </div>
      
      <div class="vision-box">
        <h3 class="box-title"><i class="fas fa-eye"></i> हाम्रो दृष्टिकोण</h3>
        <div class="box-content">
          <p>हामी गैंडाकोट वडा नम्बर ५ लाई विकसित, समृद्ध र न्यायपूर्ण समाजको रूपमा विकसित गर्न चाहन्छौं जहाँ:</p>
          <ul style="margin-top: 15px; margin-left: 20px;">
            <li>प्रत्येक नागरिकले आफ्नो अधिकार र कर्तव्य बुझेर जिम्मेवार नागरिकको भूमिका निर्वाह गर्छन्</li>
            <li>आर्थिक विकास र वातावरण संरक्षणबीच सन्तुलन कायम गरिन्छ</li>
            <li>शिक्षा, स्वास्थ्य र रोजगारीको अवसरमा सबैको पहुँच सुनिश्चित गरिन्छ</li>
            <li>सामाजिक समावेशीकरण र सहभागिताको संस्कृति विकास हुन्छ</li>
            <li>लोकतान्त्रिक संस्कार र मूल्यमान्यता जनजीवनमा आत्मसात गरिन्छ</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Timeline Section -->
<section class="section timeline-section">
  <div class="container">
    <h2 class="section-title">हाम्रो यात्रा</h2>
    <p class="section-description">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ को ऐतिहासिक यात्राका महत्वपूर्ण घटनाहरू</p>
    
    <div class="timeline-container">
      <div class="timeline-item">
        <div class="timeline-content">
          <div class="timeline-date">२०४७</div>
          <h3 class="timeline-title">वडा समितिको स्थापना</h3>
          <p class="timeline-text">गैंडाकोट वडा नं. ५ मा नेपाली कांग्रेसको आधिकारिक वडा समिति स्थापना भयो।</p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="timeline-content">
          <div class="timeline-date">२०४९</div>
          <h3 class="timeline-title">पहिलो वडा अधिवेशन</h3>
          <p class="timeline-text">वडाको पहिलो अधिवेशन सम्पन्न भई स्थानीय नेतृत्वको चयन गरियो।</p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="timeline-content">
          <div class="timeline-date">२०५४</div>
          <h3 class="timeline-title">स्थानीय निर्वाचनमा विजय</h3>
          <p class="timeline-text">वडामा भएको स्थानीय निर्वाचनमा नेपाली कांग्रेसको उम्मेदवारले विजय हासिल गरे।</p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="timeline-content">
          <div class="timeline-date">२०६४</div>
          <h3 class="timeline-title">संविधानसभा निर्वाचनमा सहभागिता</h3>
          <p class="timeline-text">संविधानसभा निर्वाचनमा वडाका कार्यकर्ताहरूको सक्रिय सहभागिता रह्यो।</p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="timeline-content">
          <div class="timeline-date">२०७४</div>
          <h3 class="timeline-title">स्थानीय तहको निर्वाचन</h3>
          <p class="timeline-text">स्थानीय तहको निर्वाचनमा वडाबाट नेपाली कांग्रेसका प्रतिनिधिहरूको सहभागिता।</p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="timeline-content">
          <div class="timeline-date">२०७९</div>
          <h3 class="timeline-title">नयाँ कार्यसमिति गठन</h3>
          <p class="timeline-text">वडा अधिवेशनबाट नयाँ कार्यसमिति गठन भई वडाको नेतृत्व नयाँ टिमले सम्हाल्यो।</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- President Message Section -->
<section class="section president-message">
  <div class="container">
    <h2 class="section-title">अध्यक्षको सन्देश</h2>
    <p class="section-description">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ का अध्यक्षको सन्देश</p>
    
    <div class="message-container">
      <div class="message-header">
        <div class="president-image">
          <img src="./assets/laxman.jpg" alt="वडा अध्यक्ष">
        </div>
        <div class="president-info">
          <h3>लक्ष्मण कार्की</h3>
          <p>  नेपाली कांग्रेस गैंडाकोट वडा नं. ५-अध्यक्ष</p>
        </div>
      </div>
      
      <div class="message-content">
        <p>नमस्कार,</p>
        <p style="margin-top: 15px;">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ को अध्यक्षको हैसियतले यो वेबसाइटमार्फत सम्पूर्ण वडावासी दाजुभाइ तथा दिदीबहिनीहरूमा हार्दिक अभिवादन व्यक्त गर्न पाउँदा म अत्यन्तै हर्षित छु।</p>
        <p style="margin-top: 15px;">हामी नेपाली कांग्रेसका सिद्धान्त र मूल्य मान्यताहरूलाई आत्मसात गर्दै वडाको समग्र विकासका लागि प्रतिबद्ध छौं। हामी सबै जनप्रतिनिधि, कार्यकर्ता र आमनागरिकको सहयोगमा वडालाई समृद्ध र विकसित बनाउने लक्ष्य लिएका छौं।</p>
        <p style="margin-top: 15px;">वडा समितिले विगतमा गरेका असल कामहरूलाई निरन्तरता दिँदै नयाँ कार्यक्रमहरू सञ्चालन गर्ने हाम्रो योजना रहेको छ। हामी सबैको सक्रिय सहभागिता र रचनात्मक सुझावहरूको अपेक्षा गर्दछौं।</p>
        <p style="margin-top: 15px;">यस वेबसाइटले वडा समितिका गतिविधि र कार्यक्रमहरूबारे जानकारी प्राप्त गर्न र हामीसँग सम्पर्क गर्न सहज माध्यम बन्नेछ भन्ने विश्वास लिएको छु।</p>
        <p style="margin-top: 15px;">धन्यवाद!</p>
      </div>
    </div>







    <!-- Membership Section -->


<!-- Party History Section -->
<section class="section about-section">
  <div class="container">
    <h2 class="section-title">नेपाली कांग्रेसको इतिहास</h2>
    <p class="section-description">नेपाली कांग्रेसको गौरवशाली इतिहास नेपालको लोकतान्त्रिक आन्दोलनको महत्वपूर्ण अंश हो</p>
    
    <div class="about-content">
      <div class="about-text">
        <p><strong>स्थापना (वि.सं. २००६):</strong> नेपाली कांग्रेसको स्थापना नेपालमा लोकतन्त्र स्थापनाको उद्देश्यले भएको थियो। बी.पी. कोइराला, गणेशमान सिंह, कृष्णप्रसाद भट्टराई, लगायतका नेताहरूले पार्टीको नेतृत्व गरेका थिए।</p>
        
        <p style="margin-top: 15px;"><strong>२००७ सालको क्रान्ति:</strong> राणा शासनविरुद्ध भएको क्रान्तिमा नेपाली कांग्रेसले अग्रणी भूमिका खेल्यो, जसले नेपालमा पहिलो पटक प्रजातन्त्रको स्थापना गर्न मद्दत गर्‍यो।</p>
        
        <p style="margin-top: 15px;"><strong>पहिलो निर्वाचन (वि.सं. २०१५):</strong> नेपालको पहिलो आम निर्वाचनमा नेपाली कांग्रेसले दुई तिहाई बहुमत हासिल गरी सरकार बनायो। बी.पी. कोइराला नेपालका पहिलो निर्वाचित प्रधानमन्त्री बने।</p>
        
        <p style="margin-top: 15px;"><strong>निरंकुश पञ्चायती व्यवस्था विरुद्ध संघर्ष (२०१७-२०४६):</strong> राजा महेन्द्रले २०१७ सालमा निर्वाचित सरकार विघटन गरेपछि, नेपाली कांग्रेसले लोकतन्त्रको पुनर्स्थापनाका लागि ३० वर्षसम्म संघर्ष गर्‍यो।</p>
        
        <p style="margin-top: 15px;"><strong>जनआन्दोलन (२०४६):</strong> नेपाली कांग्रेस र वामपन्थी दलहरूको संयुक्त आन्दोलनले पञ्चायती व्यवस्थाको अन्त्य गरी बहुदलीय व्यवस्था पुनर्स्थापना गर्‍यो।</p>
        
        <p style="margin-top: 15px;"><strong>जनआन्दोलन-२ (२०६२/६३):</strong> शाही सत्ताको अन्त्य र गणतन्त्र स्थापनाका लागि भएको आन्दोलनमा नेपाली कांग्रेसले महत्वपूर्ण भूमिका निर्वाह गर्‍यो।</p>
        
        <p style="margin-top: 15px;"><strong>संविधानसभा र नयाँ संविधान:</strong> नेपालको संविधान २०७२ निर्माणमा नेपाली कांग्रेसले महत्वपूर्ण भूमिका खेल्यो, जसले नेपाललाई संघीय लोकतान्त्रिक गणतन्त्रको रूपमा स्थापित गर्‍यो।</p>
      </div>
      <div class="about-image">
        <img src="./assets/bp.jpeg" alt="नेपाली कांग्रेस इतिहास">
      </div>
    </div>
  </div>
</section>

<!-- Programs & Initiatives Section -->
<section class="section mission-vision">
  <div class="container">
    <h2 class="section-title">हाम्रा कार्यक्रमहरू</h2>
    <p class="section-description">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ द्वारा सञ्चालित कार्यक्रम तथा अभियानहरू</p>
    
    <div class="about-content">
      <div class="about-image">
        <img src="/api/placeholder/600/400" alt="नेपाली कांग्रेस कार्यक्रम">
      </div>
      <div class="about-text">
        <p><strong>वडा स्तरीय चेतनामूलक कार्यक्रम:</strong> हामी वडामा नियमित रूपमा लोकतन्त्र, नागरिक अधिकार, र राजनीतिक चेतना सम्बन्धी कार्यक्रमहरू सञ्चालन गर्दछौं।</p>
        
        <p style="margin-top: 15px;"><strong>युवा नेतृत्व विकास:</strong> स्थानीय युवाहरूलाई राजनीतिक नेतृत्वका लागि तयार पार्न नेतृत्व विकास तालिम र क्षमता अभिवृद्धि कार्यक्रमहरू सञ्चालन गरिन्छ।</p>
        
        <p style="margin-top: 15px;"><strong>सामाजिक सेवा अभियान:</strong> विपद्‌ व्यवस्थापन, स्वास्थ्य शिविर, रक्तदान कार्यक्रम, वृक्षारोपण जस्ता सामाजिक कार्यक्रमहरू नियमित रूपमा आयोजना गरिन्छ।</p>
        
        <p style="margin-top: 15px;"><strong>महिला सशक्तिकरण:</strong> महिलाहरूको राजनीतिक सहभागिता र नेतृत्व विकासका लागि विशेष कार्यक्रमहरू सञ्चालन गरिन्छ।</p>
        
        <p style="margin-top: 15px;"><strong>वडास्तरीय अन्तरक्रिया:</strong> स्थानीय समस्या र विकासका सवालहरूमा वडास्तरीय अन्तरक्रिया कार्यक्रमहरू आयोजना गरिन्छ।</p>
        
        <p style="margin-top: 15px;"><strong>नीति तथा कार्यक्रम विश्लेषण:</strong> स्थानीय, प्रदेश र संघीय सरकारका नीति तथा कार्यक्रमहरूको विश्लेषण गरी जनताको हितमा आवाज उठाउने कार्य गरिन्छ।</p>
      </div>
    </div>
  </div>
</section>

<!-- Join the Movement Section -->
<section class="section" style="background-color: #f0f5f0; padding: 80px 0;">
  <div class="container">
    <div style="text-align: center; max-width: 800px; margin: 0 auto;">
      <h2 class="section-title">हाम्रो अभियानमा सहभागी हुनुहोस्</h2>
      <p style="margin-bottom: 30px; color: #444; line-height: 1.7;">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ को अभियानमा सहभागी भई लोकतन्त्र र समाजवादको सिद्धान्तलाई अगाडि बढाउन हामीसँग सहकार्य गर्नुहोस्।</p>
      
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 30px;">
        <a href="member.html" class="hero-btn" style="background-color: var(--primary-green);">सदस्य बन्नुहोस्</a>
        <a href="online.html" class="hero-btn">अनलाइन फारम भर्नुहोस्</a>
        <a href="contact.html" class="hero-btn secondary" style="background-color: var(--primary-red); border: none;">सम्पर्क गर्नुहोस्</a>
      </div>
    </div>
  </div>
</section>

<!-- News & Updates Section -->
<section class="section about-section">
  <div class="container">
    <h2 class="section-title">समाचार तथा गतिविधिहरू</h2>
    <p class="section-description">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ का पछिल्ला गतिविधि तथा समाचारहरू</p>
    
    <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
      <!-- News Card 1 -->
      <div style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); width: 350px;">
        <div style="height: 200px; overflow: hidden;">
          <img src="/api/placeholder/350/200" alt="समाचार तस्विर" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 20px;">
          <p style="color: var(--primary-green); font-size: 0.9rem; margin-bottom: 10px;">२०८१ बैशाख ८</p>
          <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: #333;">वडा भेला सम्पन्न</h3>
          <p style="color: #666; margin-bottom: 20px; line-height: 1.6;">गैंडाकोट वडा नं. ५ को वडा भेला सम्पन्न भयो। भेलामा आगामी कार्यक्रमहरूका बारेमा छलफल गरियो।</p>
          <a href="#" style="color: var(--primary-red); font-weight: 500; text-decoration: none; display: flex; align-items: center;">
            विस्तृतमा पढ्नुहोस् <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
          </a>
        </div>
      </div>
      
      <!-- News Card 2 -->
      <div style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); width: 350px;">
        <div style="height: 200px; overflow: hidden;">
          <img src="/api/placeholder/350/200" alt="समाचार तस्विर" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 20px;">
          <p style="color: var(--primary-green); font-size: 0.9rem; margin-bottom: 10px;">२०८१ बैशाख २</p>
          <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: #333;">सरसफाई अभियान</h3>
          <p style="color: #666; margin-bottom: 20px; line-height: 1.6;">वडाका प्रमुख स्थानहरूमा सरसफाई अभियान सम्पन्न गरियो। कार्यक्रममा वडाका कार्यकर्ताहरूको सक्रिय सहभागिता रह्यो।</p>
          <a href="#" style="color: var(--primary-red); font-weight: 500; text-decoration: none; display: flex; align-items: center;">
            विस्तृतमा पढ्नुहोस् <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
          </a>
        </div>
      </div>
      
      <!-- News Card 3 -->
      <div style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); width: 350px;">
        <div style="height: 200px; overflow: hidden;">
          <img src="/api/placeholder/350/200" alt="समाचार तस्विर" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 20px;">
          <p style="color: var(--primary-green); font-size: 0.9rem; margin-bottom: 10px;">२०८१ चैत्र २५</p>
          <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: #333;">नेतृत्व प्रशिक्षण कार्यक्रम</h3>
          <p style="color: #666; margin-bottom: 20px; line-height: 1.6;">वडा कार्यालयमा युवा नेतृत्व प्रशिक्षण कार्यक्रम सम्पन्न गरियो। कार्यक्रममा २५ जना युवाहरूको सहभागिता रह्यो।</p>
          <a href="#" style="color: var(--primary-red); font-weight: 500; text-decoration: none; display: flex; align-items: center;">
            विस्तृतमा पढ्नुहोस् <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
          </a>
        </div>
      </div>
    </div>
    
    <div style="text-align: center; margin-top: 40px;">
      <a href="news.html" style="display: inline-block; padding: 10px 25px; border: 2px solid var(--primary-green); color: var(--primary-green); text-decoration: none; border-radius: 5px; font-weight: 600; transition: all 0.3s ease;">
        सबै समाचारहरू हेर्नुहोस् <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
      </a>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="section" style="background-color: #f5f5f5; padding: 80px 0;">
  <div class="container">
    <h2 class="section-title">हाम्रा कार्यकर्ताहरूको अनुभव</h2>
    <p class="section-description">नेपाली कांग्रेस गैंडाकोट वडा नं. ५ का कार्यकर्ताहरूले साझा गरेका अनुभवहरू</p>
    
    <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; margin-top: 40px;">
      <!-- Testimonial 1 -->
      <div style="background-color: white; border-radius: 10px; padding: 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); width: 350px; position: relative;">
        <div style="font-size: 3rem; font-family: 'Georgia', serif; color: rgba(0,100,0,0.1); position: absolute; top: 10px; left: 20px;">"</div>
        <p style="color: #555; line-height: 1.7; margin-bottom: 20px; position: relative; z-index: 1;">
          नेपाली कांग्रेसमा आबद्ध भएर मैले धेरै कुरा सिक्ने मौका पाएँ। यहाँ राजनीतिक चेतना र समाजसेवाको भावना दुवै विकास हुने वातावरण छ।
        </p>
        <div style="display: flex; align-items: center; gap: 15px;">
          <div style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden;">
            <img src="/api/placeholder/60/60" alt="कार्यकर्ता" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div>
            <h4 style="margin: 0; color: #333; font-size: 1.1rem;">सरिता श्रेष्ठ</h4>
            <p style="margin: 5px 0 0; color: #666; font-size: 0.9rem;">युवा कार्यकर्ता</p>
          </div>
        </div>
      </div>
      
      <!-- Testimonial 2 -->
      <div style="background-color: white; border-radius: 10px; padding: 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); width: 350px; position: relative;">
        <div style="font-size: 3rem; font-family: 'Georgia', serif; color: rgba(0,100,0,0.1); position: absolute; top: 10px; left: 20px;">"</div>
        <p style="color: #555; line-height: 1.7; margin-bottom: 20px; position: relative; z-index: 1;">
          २० वर्षदेखि नेपाली कांग्रेसमा आबद्ध छु। हाम्रो वडा समितिले सधैँ जनताको हितमा काम गर्दै आएको छ। हामी सबै एकजुट भएर लोकतन्त्रलाई बलियो बनाउँदै छौं।
        </p>
        <div style="display: flex; align-items: center; gap: 15px;">
          <div style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden;">
            <img src="/api/placeholder/60/60" alt="कार्यकर्ता" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div>
            <h4 style="margin: 0; color: #333; font-size: 1.1rem;">मोहन तामाङ</h4>
            <p style="margin: 5px 0 0; color: #666; font-size: 0.9rem;">वरिष्ठ कार्यकर्ता</p>
          </div>
        </div>
      </div>
      
      <!-- Testimonial 3 -->
      <div style="background-color: white; border-radius: 10px; padding: 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); width: 350px; position: relative;">
        <div style="font-size: 3rem; font-family: 'Georgia', serif; color: rgba(0,100,0,0.1); position: absolute; top: 10px; left: 20px;">"</div>
        <p style="color: #555; line-height: 1.7; margin-bottom: 20px; position: relative; z-index: 1;">
          नेपाली कांग्रेसको सिद्धान्त र मूल्यमान्यताले मलाई आकर्षित गर्‍यो। यहाँ हामी वडाको विकासका लागि विभिन्न कार्यक्रमहरू गर्छौं जसले समाजमा सकारात्मक परिवर्तन ल्याउँछ।
        </p>
        <div style="display: flex; align-items: center; gap: 15px;">
          <div style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden;">
            <img src="/api/placeholder/60/60" alt="कार्यकर्ता" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div>
            <h4 style="margin: 0; color: #333; font-size: 1.1rem;">कमला पौडेल</h4>
            <p style="margin: 5px 0 0; color: #666; font-size: 0.9rem;">महिला समिति सदस्य</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>













<!-- Footer Section -->
<footer>
  <div class="footer-c">
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











  // For testimonial slider (if needed in future)
  // Currently static but can be enhanced with JavaScript slider
  
  // Add smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  
  // Animation on scroll (simple implementation)
  function revealOnScroll() {
    const sections = document.querySelectorAll('.section');
    
    sections.forEach(section => {
      const sectionTop = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (sectionTop < windowHeight - 150) {
        section.style.opacity = 1;
        section.style.transform = 'translateY(0)';
      }
    });
  }
  
  // Initial styling for animation
  document.querySelectorAll('.section').forEach(section => {
    section.style.opacity = 0;
    section.style.transform = 'translateY(30px)';
    section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
  });
  
  // Run on load and scroll
  window.addEventListener('load', revealOnScroll);
  window.addEventListener('scroll', revealOnScroll);





  </script>
</body>
</html>