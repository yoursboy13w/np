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




    .document-card {
    background-color: #e8e8e8;
    border-radius: 4px;
    padding: 20px;
    margin: 20px auto;
    display: flex;
    flex-direction: column;
    width: 95%;
    max-width: 1200px;
    box-sizing: border-box;
}

@media (min-width: 768px) {
    .document-card {
        flex-direction: row;
        align-items: center;
    }
}

.document-image {
    width: 100%;
    max-width: 150px;
    margin-right: 20px;
    margin-bottom: 15px;
}

@media (min-width: 768px) {
    .document-image {
        margin-bottom: 0;
    }
}

.document-info {
    flex-grow: 1;
}

.document-date {
    color: #666;
    margin-bottom: 5px;
}

.document-title {
    font-size: 20px;
    margin-bottom: 10px;
    color: #333;
}

.document-subtitle {
    color: #666;
    margin-bottom: 20px;
}

.button-container {
    display: flex;
    gap: 10px;
    margin-top: 10px;
    flex-wrap: wrap;
}

@media (min-width: 768px) {
    .button-container {
        justify-content: flex-start;
        margin-left: auto;
    }
}

.view-button, .download-button {
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    color: white;
    font-weight: bold;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}

.view-button {
    background-color: #008800;
}

.download-button {
    background-color: #008800;
}

.view-button:hover, .download-button:hover {
    opacity: 0.9;
}

.icon {
    margin-right: 5px;
}

.view-count {
    color: #666;
    display: flex;
    align-items: center;
    margin-right: 10px;
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

 





  <div class="document-card">
    <img src="./assets/pp.jpg" alt="नेपाली कांग्रेस लेखापरीक्षण प्रतिवेदन" class="document-image">
    <div class="document-info">
        <p class="document-date">Friday, January 17th 2025</p>
        <h2 class="document-title">Nepali Congress Audit Report, F/Y 2080-081</h2>
        <p class="document-subtitle">नेपाली कांग्रेस लेखापरीक्षण प्रतिवेदन, आ.व. २०८०-०८१</p>
    </div>
    <div class="button-container">
        <div class="view-count">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="icon">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5
                 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>
            85
        </div>
        <a href="http://nepalicongress.org/single/documents/nepali-congress-audit-report-f-y-2080-081" class="view-button">View More</a>
        <a href="http://nepalicongress.org/single/documents/nepali-congress-audit-report-f-y-2080-081" class="download-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="icon">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
            </svg>
            Download
        </a>
    </div>
</div>

<div class="document-card">
    <img src="./assets/pi.jpg" alt="लेखापरीक्षण प्रतिवेदन" class="document-image">
    <div class="document-info">
        <p class="document-date">Sunday, May 14th 2023</p>
        <h2 class="document-title">Audit Report 2078/079</h2>
        <p class="document-subtitle">लेखापरीक्षण प्रतिवेदन २०७८/०७९</p>
    </div>
    <div class="button-container">
        <div class="view-count">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="icon">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>
            431
        </div>
        <a href="https://www.nepalicongress.org/single/documents/audit-report-2078-079" class="view-button">View More</a>
        <a href="https://www.nepalicongress.org/single/documents/audit-report-2078-079" class="download-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="icon">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
            </svg>
            Download
        </a>
    </div>
</div>

<div class="document-card">
    <img src="./assets/nc.jpg" alt="स्थानीय निर्वाचन घोषणापत्र" class="document-image">
    <div class="document-info">
        <p class="document-date">Wednesday, May 4th 2022</p>
        <h2 class="document-title">NC Local Election Manifesto - 2079 (Abridged)</h2>
        <p class="document-subtitle">नेपाली कांग्रेस स्थानीय निर्वाचन घोषणापत्र - २०७९ (संक्षिप्त)</p>
    </div>
    <div class="button-container">
        <div class="view-count">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="icon">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>
            799
        </div>
        <a href="https://www.nepalicongress.org/single/documents/nc-local-election-manifesto-2079-abridged" class="view-button">View More</a>
        <a href="https://www.nepalicongress.org/single/documents/nc-local-election-manifesto-2079-abridged" class="download-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="icon">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
            </svg>
            Download
        </a>
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