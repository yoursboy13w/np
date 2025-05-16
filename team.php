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




    .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .class {
            text-align: center;
            margin-bottom: 30px;
        }

        .class h1 {
            color: var(--primary-green);
            margin-top: 20px;
        }

        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
        }

        .filter-button {
            padding: 12px 20px;
            background-color: var(--primary-green);
            color: var(--white);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .filter-button:hover {
            background-color: var(--hover-green);
            transform: translateY(-3px);
        }

        .filter-button.active {
            background-color: var(--primary-red);
        }

        .filter-button.active:hover {
            background-color: var(--hover-red);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .team-card {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .team-card-image {
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .team-card-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform 0.5s ease;
            justify-content: center;
        }

        .team-card:hover .team-card-image img {
            transform: scale(1.05);
        }

        .team-card-content {
            padding: 20px;
        }

        .team-card-content h3 {
            color: var(--primary-green);
            margin-bottom: 5px;
            font-size: 1.25rem;
        }

        .team-card-content p.designation {
            color: var(--primary-red);
            font-weight: 600;
            margin-bottom: 12px;
        }

        .team-card-content p.bio {
            color: var(--dark-text);
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .hidden {
            display: none;
        }

        @media (max-width: 768px) {
            .filter-buttons {
                flex-direction: column;
                align-items: center;
            }

            .filter-button {
                width: 100%;
                max-width: 300px;
            }

            .team-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .team-grid {
                grid-template-columns: 1fr;
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

 




  <div class="container">
    <div class="class">
        <h1>Our Team</h1>
        <p>Meet the dedicated individuals working towards our goals</p>
      </div>

    <div class="filter-buttons">
        <button class="filter-button active" data-category="all">All Members</button>
        <button class="filter-button" data-category="official">Official Member</button>
        <button class="filter-button" data-category="tarun">Nepal Tarun Dal</button>
        <button class="filter-button" data-category="women">Nepal Women Dal</button>
        <button class="filter-button" data-category="student">Youth Student</button>
        <button class="filter-button" data-category="youth">Youth Nepal</button>
    </div>

    <div class="team-grid">
      <!-- Official Members -->
      
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/laxman.jpg" alt="लक्ष्मण कार्की">
        </div>
        <div class="team-card-content">
          <h3>लक्ष्मण कार्की</h3>
          <p class="designation">सभापति</p>
          <p class="bio">समुदाय विकास र राजनीतिक सक्रियतामा १५ वर्षभन्दा बढी अनुभव भएका समर्पित नेता।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/bishunu.jpg" alt="बिष्णु राज गौतम">
        </div>
        <div class="team-card-content">
          <h3>बिष्णु राज गौतम</h3>
          <p class="designation">उपाध्यक्ष</p>
          <p class="bio">गाउँ क्षेत्रमा गुणस्तरीय शिक्षामा पहुँच विस्तार गर्न लागिपरेका शैक्षिक सुधारक र नीतिशास्त्र विज्ञ।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/nirmal.jpg" alt="सिता भट्ट">
        </div>
        <div class="team-card-content">
          <h3>निर्मल राज रिमाल</h3>
          <p class="designation">उपाध्यक्ष</p>
          <p class="bio">महिला सशक्तिकरण अभियानमा सक्रिय, सामाजिक अभियन्ता।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/dipalk.jpg" alt="कृष्ण धिताल">
        </div>
        <div class="team-card-content">
          <h3>दीपक धुंगाना</h3>
          <p class="designation">सचिव</p>
          <p class="bio">आर्थिक व्यवस्थापन र परियोजना निगरानीमा दक्षता।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/krian.jpg" alt="मनोज थापा">
        </div>
        <div class="team-card-content">
          <h3>किरण कुमार केसी</h3>
          <p class="designation">सचिव</p>
          <p class="bio">संगठनात्मक विकास र कार्यक्रम सञ्चालनमा अनुभवी।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/ishor.jpg" alt="रिमा श्रेष्ठ">
        </div>
        <div class="team-card-content">
          <h3>इश्वरि बन</h3>
          <p class="designation">कोषाध्यक्ष</p>
          <p class="bio">सामाजिक परिवर्तनका लागि स्वास्थ्य सचेतना अभियन्ता।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/mira1.jpg" alt="नवराज सुनार">
        </div>
        <div class="team-card-content">
          <h3> मिरा केसी</h3>
          <p class="designation">सह-सचिव</p>
          <p class="bio">श्रमिक अधिकार र रोजगार प्रवर्द्धनमा समर्पित।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/bishnu raj sidgle.jpg" alt="आस्था लामिछाने">
        </div>
        <div class="team-card-content">
          <h3>बिष्णु राज सिद्गेल</h3>
          <p class="designation">सह-सचिव</p>
          <p class="bio">शैक्षिक सुधार र बालअधिकारमा कार्यरत।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/arjun thapa.jpg" alt="सञ्जय अधिकारी">
        </div>
        <div class="team-card-content">
          <h3>अर्जुन थापा</h3>
          <p class="designation">सदस्य</p>
          <p class="bio">सूचना प्रविधि र डिजिटल पहुँच विस्तारमा योगदान।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/j.jpg" alt="बिबेक परियार">
        </div>
        <div class="team-card-content">
          <h3>बबिता बोटे </h3>
          <p class="designation">सदस्य</p>
          <p class="bio">युवा सशक्तिकरण र उद्यमशीलता विकासमा पहल।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/hira.jpg" alt="शान्ता राना">
        </div>
        <div class="team-card-content">
          <h3>हरि लम्साल</h3>
          <p class="designation">सदस्य</p>
          <p class="bio">महिला स्वास्थ्य र पोषणमा विशेषज्ञता।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/muna.jpg" alt="गोपाल श्रेष्ठ">
        </div>
        <div class="team-card-content">
          <h3> मिना ढाहाल 
          </h3>
          <p class="designation">सदस्य</p>
          <p class="bio">ग्रामिण पूर्वाधार विकास योजनामा संलग्न।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/aajya.jpg" alt="सुनिता बुढा">
        </div>
        <div class="team-card-content">
          <h3>अजय पौडेल 
          </h3>
          <p class="designation">सदस्य</p>
          <p class="bio">सामाजिक समावेशिता र लैङ्गिक समानताका लागि क्रियाशील।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="./assets/sudha.jpg" alt="सुदीप कोईराला">
        </div>
        <div class="team-card-content">
          <h3> सुधा ज्ञवाली</h3>
          <p class="designation">सदस्य</p>
          <p class="bio">सुधारमुखी परियोजनामा अनुभवी युवा अभियन्ता।</p>
        </div>
      </div>
    
      <div class="team-card" data-category="official">
        <div class="team-card-image">
          <img src="/api/placeholder/400/320" alt="रोशन थापा">
        </div>
        <div class="team-card-content">
          <h3>रोशन थापा</h3>
          <p class="designation">सदस्य</p>
          <p class="bio">सामुदायिक नेतृत्व विकास कार्यक्रमको अगुवा।</p>
        </div>
      </div>
    
    
    
  















      <!-- Nepal Tarun Dal Members -->
      <div class="team-card" data-category="tarun">
          <div class="team-card-image">
              <img src="/api/placeholder/400/320" alt="प्रकाश थापा">
          </div>
          <div class="team-card-content">
              <h3>प्रकाश थापा</h3>
              <p class="designation">समन्वयक</p>
              <p class="bio">पर्यावरण संरक्षण र दिगो विकास अभ्यासमा केन्द्रित युवाशक्ति।</p>
          </div>
      </div>
  
      <div class="team-card" data-category="tarun">
          <div class="team-card-image">
              <img src="/api/placeholder/400/320" alt="सुनिल कार्की">
          </div>
          <div class="team-card-content">
              <h3>सुनिल कार्की</h3>
              <p class="designation">सचिव</p>
              <p class="bio">स्थानीय युवासँग सशक्त सम्बन्ध भएका समुदाय आयोजक र सशक्तिकरणमा क्रियाशील।</p>
          </div>
      </div>
  
      <!-- Nepal Women Dal Members -->
      <div class="team-card" data-category="women">
          <div class="team-card-image">
              <img src="/api/placeholder/400/320" alt="सरिता गुरुङ">
          </div>
          <div class="team-card-content">
              <h3>सरिता गुरुङ</h3>
              <p class="designation">अध्यक्ष</p>
              <p class="bio">महिला अधिकार र लैङ्गिक समानताका लागि कानुनी संरचनामा दखल राख्ने अभियन्ता।</p>
          </div>
      </div>
  
      <div class="team-card" data-category="women">
          <div class="team-card-image">
              <img src="/api/placeholder/400/320" alt="अनिता श्रेष्ठ">
          </div>
          <div class="team-card-content">
              <h3>अनिता श्रेष्ठ</h3>
              <p class="designation">सञ्चालन प्रमुख</p>
              <p class="bio">महिलाको आर्थिक सशक्तिकरणमा केन्द्रित परियोजना व्यवस्थापनमा अनुभवयुक्त।</p>
          </div>
      </div>
  
      <!-- Youth Student Members -->
      <div class="team-card" data-category="student">
          <div class="team-card-image">
              <img src="/api/placeholder/400/320" alt="रमेश केसी">
          </div>
          <div class="team-card-content">
              <h3>रमेश केसी</h3>
              <p class="designation">विद्यार्थी समन्वयकर्ता</p>
              <p class="bio">विद्यार्थी आन्दोलनलाई ठूला राजनीतिक पहलहरूसँग जोडेर युवाको आवाज बुलन्द पार्ने काममा क्रियाशील।</p>
          </div>
      </div>
  
      <div class="team-card" data-category="student">
          <div class="team-card-image">
              <img src="/api/placeholder/400/320" alt="दीपिका महार्जन">
          </div>
          <div class="team-card-content">
              <h3>दीपिका महार्जन</h3>
              <p class="designation">क्याम्पस समन्वयकर्ता</p>
              <p class="bio">शैक्षिक सुधार र विद्यार्थी कल्याण कार्यक्रमहरूमा नेतृत्वदायी भूमिका निभाउने।</p>
          </div>
      </div>
  
      <!-- Youth Nepal Members -->
      <div class="team-card" data-category="youth">
          <div class="team-card-image">
              <img src="/api/placeholder/400/320" alt="बिक्रम तामाङ">
          </div>
          <div class="team-card-content">
              <h3>बिक्रम तामाङ</h3>
              <p class="designation">युवा विकास निर्देशक</p>
              <p class="bio">ग्रामीण युवाका लागि सीप विकास र रोजगार अवसर सिर्जनामा समर्पित।</p>
          </div>
      </div>
  
      <div class="team-card" data-category="youth">
          <div class="team-card-image">
              <img src="/api/placeholder/400/320" alt="सबिना खात्री">
          </div>
          <div class="team-card-content">
              <h3>सबिना खात्री</h3>
              <p class="designation">सम्पर्क विशेषज्ञ</p>
              <p class="bio">युवालाई नागरिक क्रियाकलापमा सहभागी गराउन समुदायसँग सहकार्यमा क्रियाशील।</p>
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







    document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-button');
            const teamCards = document.querySelectorAll('.team-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const selectedCategory = this.getAttribute('data-category');

                    // Filter team cards
                    teamCards.forEach(card => {
                        if (selectedCategory === 'all') {
                            card.classList.remove('hidden');
                        } else {
                            if (card.getAttribute('data-category') === selectedCategory) {
                                card.classList.remove('hidden');
                            } else {
                                card.classList.add('hidden');
                            }
                        }
                    });
                });
            });
        });




  </script>
</body>
</html>