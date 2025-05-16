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








    :root {
      --primary: #1e40af;
      --primary-light: #3b82f6;
      --secondary: #0f172a;
      --accent: #f59e0b;
      --light: #f8fafc;
      --dark: #0f172a;
      --shadow: rgba(0, 0, 0, 0.1);
    }








    .v {
      background: linear-gradient(135deg, var(--primary), var(--primary-light));
      color: white;
      text-align: center;
      padding: 4rem 2rem;
      position: relative;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      margin-bottom: 3rem;
    }
    
    .v::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='white' fill-opacity='0.1' d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z'%3E%3C/path%3E%3C/svg%3E");
      opacity: 0.3;
    }
    
    .v h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      font-weight: 700;
      position: relative;
      z-index: 1;
    }
    
    .header p {
      font-size: 1.25rem;
      max-width: 700px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }
    

    
    .team-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 2.5rem;
      padding: 0 2rem 4rem;
      max-width: 1400px;
      margin: 0 auto;
    }
    
    .member-card {
      background-color: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      transition: all 0.4s ease;
      position: relative;
      z-index: 1;
    }
    
    .member-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    
    .member-card:hover .card-bg {
      height: 100%;
    }
    
    .member-card:hover .role {
      color: white;
    }
    
    .member-card:hover .quote {
      color: rgba(255, 255, 255, 0.9);
    }
    
    .card-bg {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 40%;
      background: linear-gradient(135deg, #1e40af, #3b82f6);
      transition: height 0.4s ease;
      z-index: -1;
    }
    
    .card-content {
      padding: 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      z-index: 2;
    }
    
    .img-container {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      padding: 5px;
      background-color: white;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 1.5rem;
      position: relative;
      overflow: hidden;
    }
    
    .img-container img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #3b82f6;
      transition: transform 0.5s ease;
    }
    
    .member-card:hover .img-container img {
      transform: scale(1.1);
    }
    
    .name {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color:#0f172a;
      transition: color 0.3s ease;
    }
    
    .member-card:hover .name {
      color: white;
    }
    
    .role {
      font-size: 1rem;
      font-weight: 500;
      color: var(--primary);
      margin-bottom: 3rem;
      transition: color 0.3s ease;
    }
    
    .quote {
      text-align: center;
      font-size: 0.95rem;
      color: whitesmoke;
      transition: color 0.3s ease;
    }
    
    .social-icons {
      display: flex;
      gap: 1rem;
      margin-top: 1.5rem;
    }
    
    .social-icon {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: rgba(255, 255, 255, 0.9);
      color: var(--primary);
      font-size: 1.2rem;
      transition: all 0.3s ease;
      cursor: pointer;
    }
    
    .social-icon:hover {
      background-color: var(--accent);
      color: white;
      transform: translateY(-3px);
    }
    
    @media (max-width: 768px) {
      .v h1 {
        font-size: 2.5rem;
      }
      
      .team-container {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 2rem;
        padding: 0 1.5rem 3rem;
      }
    }
    
    @media (max-width: 480px) {
      .v h1 {
        font-size: 2rem;
      }
      
      .header p {
        font-size: 1rem;
      }
      
      .team-container {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 0 1rem 2rem;
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

 








  <div class="v">
    <h1>सदस्यहरूको टिम</h1>
    <p>हाम्रो समुदायमा सक्रिय र समर्पित सदस्यहरू</p>
  </div>
  

  
  <div class="team-container">
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="लक्ष्मण कार्की">
        </div>
        <h3 class="name">लक्ष्मण कार्की</h3>
        <h4 class="role">अध्यक्ष</h4>
        <p class="quote">"समाजको समृद्धिका लागि खेलकुद अनिवार्य छ।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="सिता गुरुङ">
        </div>
        <h3 class="name">सिता गुरुङ</h3>
        <h4 class="role">उपाध्यक्ष</h4>
        <p class="quote">"महिला सहभागिता खेलकुदमा बढाउनुपर्छ।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="./assets/laxman.jpg" alt="राम थापा">
        </div>
        <h3 class="name">राम थापा</h3>
        <h4 class="role">महासचिव</h4>
        <p class="quote">"युवाहरूलाई नेतृत्वका लागि प्रेरित गरौं।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>

    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="./assets/laxman.jpg" alt="गीता शर्मा">
        </div>
        <h3 class="name">गीता शर्मा</h3>
        <h4 class="role">कोषाध्यक्ष</h4>
        <p class="quote">"पारदर्शिता नै संस्थाको बलियो आधार हो।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="दिपक खत्री">
        </div>
        <h3 class="name">दिपक खत्री</h3>
        <h4 class="role">प्रशिक्षण प्रमुख</h4>
        <p class="quote">"खेलकुदमा सिकाइ निरन्तर हुनुपर्छ।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="सरिता पौडेल">
        </div>
        <h3 class="name">सरिता पौडेल</h3>
        <h4 class="role">सदस्य</h4>
        <p class="quote">"सामूहिक भावनाले हरेक लक्ष्य पूरा हुन्छ।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="अजय श्रेष्ठ">
        </div>
        <h3 class="name">अजय श्रेष्ठ</h3>
        <h4 class="role">विभागीय प्रमुख</h4>
        <p class="quote">"प्रतिस्पर्धात्मक भावनाले उन्नति गर्छौं।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="अन्जली तामाङ">
        </div>
        <h3 class="name">अन्जली तामाङ</h3>
        <h4 class="role">संयोजक</h4>
        <p class="quote">"समावेशी खेलकुद नीति आवश्यक छ।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="बिनोद बस्नेत">
        </div>
        <h3 class="name">बिनोद बस्नेत</h3>
        <h4 class="role">योजना प्रमुख</h4>
        <p class="quote">"सोच राम्रो भए योजना सफल हुन्छ।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="सुमन राई">
        </div>
        <h3 class="name">सुमन राई</h3>
        <h4 class="role">प्रचार प्रमुख</h4>
        <p class="quote">"प्रभावकारी सञ्चारले सफलता ल्याउँछ।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="मनिषा अधिकारी">
        </div>
        <h3 class="name">मनिषा अधिकारी</h3>
        <h4 class="role">सदस्य</h4>
        <p class="quote">"विविधता नै हाम्रो शक्ति हो।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
      </div>
    </div>
    
    <div class="member-card">
      <div class="card-bg"></div>
      <div class="card-content">
        <div class="img-container">
          <img src="/api/placeholder/400/400" alt="सुरेश विक">
        </div>
        <h3 class="name">सुरेश विक</h3>
        <h4 class="role">सल्लाहकार</h4>
        <p class="quote">"अनुभवलाई सम्मान गरौं, सिकाइलाई बढाऔं।"</p>
        <div class="social-icons">
          <div class="social-icon">f</div>
          <div class="social-icon">in</div>
          <div class="social-icon">@</div>
        </div>
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
          <li><a href="conatct.html">सम्पर्क</a></li>
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
  </script>
</body>
</html>