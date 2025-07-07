<?php
session_start();
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Wash Service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    #nav-menu a:hover{
        color: red;
    }

        #jstlogo{
            height: 78px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-left: 20px;
        }
        .navbar {
            background-color: white; 
            color:  #111827;
            padding: 50px 20px;
            text-align: center;
        
            position: fixed;
            width: 100%;
            z-index: 10;
            top: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }

        .logo {
           
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items:start;
            color:  #111827;
            height: 64px;
            border-radius: 5px;

        }
        #head{
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
            margin-top: 20px;
            display: flex;
            align-items:start;
            color:  #111827;
            height: 50px;
            border-radius: 5px;

        }

        .logo::before {
            font-size: 18px;
            margin-right: 8px;
            color: #1E3A8A;
        }

        .menu {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .menu a {
            margin-right: 20px;
            text-decoration: none;
            color:  #111827;
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
        }

        .menu a:hover {
            color:  #111827;
        }

        .menu .login-btn {
            background-color: #111827;
            color: white;
            margin-right: 20px;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
        }

        .menu .login-btn:hover {
            background-color: #142865;
        }

        .hamburger {
            color:  #111827;
            display: none;
            font-size: 26px;
            cursor: pointer;
            background: none;
            border: none;
            left: 50px;
            right: 20px;
            top: 20px;
            transform: translateY(-50%); background: none;
        }

        @media (max-width: 768px) {
            .menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: white;
                text-align: center;
                padding: 10px 0;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                transform: translateY(-200%);
                transition: transform 0.3s ease-in-out;
            }

            .menu a {
                display: block;
                padding: 15px;
            }

            .hamburger {
                display: block;
            }
            .menu .login-btn{
                margin-right: 10px;
                font-size: 14px;
            }

            .menu.active {
                display: flex;
                transform: translateY(0);
            }
        }   

.hero {
    background: url('https://images.unsplash.com/photo-1558981852-426c6c22a060?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
    height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    position: relative;
    padding: 20px;
}

.hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5); 
}

.hero-content {
    position: relative;
    font-family: Arial, Helvetica, sans-serif;
    max-width: 700px;
    width: 90%;
}

.hero h1 {
    font-size: 36px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 15px;
    color: rgba(255, 255, 255, 0.8); 
}

.hero p {
    font-size: 18px;
    margin-bottom: 20px;
    color: rgba(255, 255, 255, 0.9);
}


.btn {
    display: inline-block;
    background-color: #1e3a8a; 
    color: white;
    padding: 12px 24px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s ease;
}
.btn:hover {
    background-color: #0f256e;
}
        .hero button {
            margin: 10px;
            padding: 10px 20px;
            background-color:  #111827;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

    
        .services {
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }
        .service:hover{
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }
        .service-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .service {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        
        .how-it-works {
            text-align: center;
            padding: 50px;
        }

        .steps {
            display: flex;
            justify-content: center;
            gap: 20px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .step:hover{
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        .step {
            width: 200px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
      

   


        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .footer {
    background-color: #111827; 
    color: white;
    padding: 50px 20px;
    text-align: center;
}

.footer .container {
    max-width: 1200px;
    margin: auto;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    justify-content: center;
    text-align: left;
}

.footer-section{
    display: block;
    margin-left: 20px;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
    color: white;
}

.brand {
    font-size: 22px;
    font-weight: bold;
    margin-left: 10px;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 15px;
    margin-right: 60px;
}

.social-links a {
    color: #9ca3af;
    font-size: 20px;
    transition: color 0.3s;
}

.social-links a:hover {
    color: #3b82f6;
}

.footer-section h3 {
    font-size: 18px;
    margin-bottom: 12px;
    margin-right: 60px;
    text-align:center;
}

ul {
    display: flex;
    flex-direction: column; 
    align-items: flex-start; 
    gap: 5px; 
    list-style: none;
    padding: 0;
}
ul li {
    display: flex;
    align-items: center; 
    gap: 5px; 
    font-size: 16px;

}
ul li i { 
    margin-right: 2px; 
}


.footer-bottom {
    border-top: 1px solid #374151;
    margin-top: 30px;
    padding-top: 15px;
    font-size: 14px;
    text-align: center;
    color: #9ca3af;
}

@media (max-width: 768px) {
    .footer-grid {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .footer-section {
        margin-bottom: 15px;
    }

    .social-links {
        justify-content: center;
    }
}


        

    </style>
</head>
<body>
    <nav class="navbar">
    <!-- <img src="./logo1.png" alt="" id="jstlogo">
    <a href="#" class="logo">WheelWhiz Wash</a> -->
<div class="logo">
    <img src="./aa.jpg" alt="Logo" id="jstlogo" >
    <span id="head">YETRAM WATER WASH</span>
</div>
        <button class="hamburger" onclick="toggleMenu()">☰</button>
        <div class="menu" id="nav-menu">
            <a href="home.php">Home</a>
            <a href="photoscroll.php">Gallery</a>
            <!--<a href="Admine_login.php">Admin</a>-->
            <a href="<?php echo (isset($_SESSION['user']) || isset($_COOKIE['user'])) ? 'dashboard.html' : 'user_login.php'; ?>">
Book Service</a>
            <?php if (isset($_SESSION['user']) || isset($_COOKIE['user'])): ?>
    <a href="logout_confirm.php">
        <button style="background-color: #1e3a8a; color: white; padding: 12px 24px; font-size: 16px; font-weight: bold; border-radius: 5px; border: none; cursor: pointer; transition: background 0.3s ease;">
            Logout
        </button>
    </a>
<?php else: ?>
    <a href="user_login.php">
        <button style="background-color: #1e3a8a; color: white; padding: 12px 24px; font-size: 16px; font-weight: bold; border-radius: 5px; border: none; cursor: pointer; transition: background 0.3s ease;">
            Login
        </button>
    </a>
<?php endif; ?>



        </div>
    </nav>
    <div class="hero" >
        <div class="hero-content">
            <h1>PROFESSIONAL BIKE WASHING SERVICE</h1>
            <p>We provide premium bike washing services at your doorstep. Your bike deserves the best care.</p>
            <a href="<?php echo (isset($_SESSION['user']) || isset($_COOKIE['user'])) ? 'dashboard.html' : 'user_login.php'; ?>">
        <button>Book a Wash</button>
    </a>
        </div>
    </div>


    <section class="services">
        <h2>Our Services</h2>
        <div class="service-container">
            <div class="service">
                <h3>Basic Wash</h3>
                <p>A thorough exterior wash to remove dirt and grime.</p>
                <p class="price">$15</p>
            </div>
            <div class="service">
                <h3>Premium Wash</h3>
                <p>Includes chain degreasing, polishing, and detailed cleaning.</p>
                <p class="price">$25</p>
            </div>
            <div class="service">
                <h3>Pickup & Delivery</h3>
                <p>We pick up, clean, and deliver your bike back to you.</p>
                <p class="price">$35</p>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="how-it-works">
        <h2>How It Works</h2>
        <div class="steps">
            <div class="step">
                <h3>Book a Service</h3>
                <p>Select your service and schedule a convenient time.</p>
            </div>
            <div class="step">
                <h3>We Pick Up</h3>
                <p>Our dedicated team promptly arrives to collect your bike.</p>
            </div>
            <div class="step">
                <h3>Wash & delivery</h3>
                <p>Expert bike cleaning with easy pick-up and fast delivery.<p>
            </div>
          
    </section>




    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                            <h3>BikeWash</h3></span>
                    <ul>
                        <li>
                            <i data-lucide="phone" class="icon blue"></i> 
                            Professional bike washing services.
                        </li>
                           <li><i data-lucide="phone" class="icon blue"></i> 
                           We care for your bike like it's our own.
                        </li>
                        
                    </ul>

                    <div class="social-links">
                        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                          </svg><i data-lucide="facebook" class="icon"></i></a>
                        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                          </svg><i data-lucide="twitter" class="icon"></i></a>
                        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                          </svg><i data-lucide="instagram" class="icon"></i></a>
                    </div>
                </div>
                
           
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                          </svg><i data-lucide="phone" class="icon blue" ></i>+91 9452345876</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                          </svg><i data-lucide="mail" class="icon blue"></i>contact@bikewash.com</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                          </svg><i data-lucide="map-pin" class="icon blue"></i>123 Wash Street, Bike City, BC 12345</li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Working Hours</h3>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                          </svg><i data-lucide="clock" class="icon blue" class="bi bi-clock"></i>Monday - Friday: <span class="text-gray">8:00 AM - 8:00 PM</span></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                          </svg><i data-lucide="clock" class="icon blue"></i>Saturday - Sunday: <span class="text-gray">9:00 AM - 6:00 PM</span></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <span id="year"></span> BikeWash. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Chat Box -->
<div id="chat-box">
  <div id="chat-header" onclick="toggleChat()">Chat with us</div>
  <div id="chat-content">
    <p>Hi there! Need help?</p>
    <a href="https://wa.me/+918838388220" target="_blank">
      <button id="chat-button">Chat on WhatsApp</button>
    </a>
  </div>
</div>
  <!-- Custom Chatbot Widget -->
<button id="chat-toggle" class="chat-button">💬</button>

<div id="chat-window" class="chat-window hidden">
  <div class="chat-header">
    <div>Customer Support</div>
    <div>
      <button id="minimize-btn">🔽</button>
      <button id="close-btn">❌</button>
    </div>
  </div>

  <div id="messages" class="chat-messages">
    <div class="message bot">Hello! 👋 I'm your BikeWash assistant. How can I help you today?</div>
  </div>

  <div id="typing" class="typing hidden">Typing...</div>

  <div class="suggestions">
    <button onclick="handleSuggestion('Service Issues')">Service Issues</button>
    <button onclick="handleSuggestion('Payment Problems')">Payment Problems</button>
    <button onclick="handleSuggestion('Booking Help')">Booking Help</button>
    <button onclick="handleSuggestion('Contact Support')">Contact Support</button>
  </div>

  <div class="chat-input">
    <input id="user-input" type="text" placeholder="Type your message..." />
    <button onclick="sendMessage()">➤</button>
  </div>
</div>
<!-- Chatbox Styles -->
<style>
  #chat-box {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 250px;
    font-family: Arial, sans-serif;
    z-index: 999;
  }

  #chat-header {
    background-color: #25d366;
    color: white;
    padding: 10px;
    cursor: pointer;
    border-radius: 10px 10px 0 0;
    font-weight: bold;
    text-align: center;
  }

  #chat-content {
    background: white;
    padding: 10px;
    display: none;
    border: 1px solid #ccc;
    border-top: none;
    border-radius: 0 0 10px 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  #chat-content p {
    margin: 0 0 10px;
  }

  #chat-button {
    background-color: #25d366;
    color: white;
    border: none;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
  }

  #chat-button:hover {
    background-color: #1ebe57;
  }


</style>
<style>
      .chat-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #3b82f6;
  color: white;
  border-radius: 50%;
  padding: 16px;
  border: none;
  cursor: pointer;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  z-index: 1000;
}

.chat-window {
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 350px;
  height: 500px;
  background-color: white;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  display: flex;
  flex-direction: column;
  overflow: hidden;
  z-index: 1000;
}

.chat-header {
  background-color: #3b82f6;
  color: white;
  padding: 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.chat-messages {
  flex: 1;
  padding: 16px;
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.message {
  max-width: 80%;
  padding: 10px;
  border-radius: 10px;
  font-size: 14px;
}

.user {
  align-self: flex-end;
  background-color: #3b82f6;
  color: white;
  border-bottom-right-radius: 0;
}

.bot {
  align-self: flex-start;
  background-color: #f3f3f3;
  color: #333;
  border-bottom-left-radius: 0;
}

.chat-input {
  padding: 12px;
  border-top: 1px solid #ddd;
  display: flex;
  gap: 8px;
}

.chat-input input {
  flex: 1;
  padding: 10px;
  border-radius: 9999px;
  border: 1px solid #ccc;
  outline: none;
}

.chat-input button {
  background-color: #3b82f6;
  color: white;
  padding: 10px 12px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
}

.suggestions {
  border-top: 1px solid #ddd;
  padding: 10px;
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
}

.suggestions button {
  padding: 6px 10px;
  background-color: #f1f1f1;
  border: none;
  border-radius: 9999px;
  font-size: 12px;
  cursor: pointer;
}

.typing {
  font-size: 12px;
  color: #666;
  padding-left: 10px;
}

.hidden {
  display: none;
}
.minimized {
  height: 60px !important;
  overflow: hidden;
}
</style>
<!-- Chatbox Script -->
<script>
  function toggleChat() {
    var content = document.getElementById("chat-content");
    content.style.display = content.style.display === "none" ? "block" : "none";
  }

  // Auto open after delay
  setTimeout(() => {
    toggleChat();
  }, 3000);
</script>

    <script>
        
        function toggleMenu() {
            document.getElementById("nav-menu").classList.toggle("active");
        }
        document.getElementById("year").textContent = new Date().getFullYear();
        lucide.createIcons();
        function toggleMenu() {
            document.getElementById("nav-menu").classList.toggle("active");
        }
        document.getElementById("year").textContent = new Date().getFullYear();
        lucide.createIcons();

        document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".hamburger").addEventListener("click", function () {
        document.getElementById("nav-menu").classList.toggle("active");
    });
});

    </script>
    <script>
  const toggleBtn = document.getElementById('chat-toggle');
  const chatWindow = document.getElementById('chat-window');
  const closeBtn = document.getElementById('close-btn');
  const minimizeBtn = document.getElementById('minimize-btn');
  const messageContainer = document.getElementById('messages');
  const input = document.getElementById('user-input');
  const typing = document.getElementById('typing');

  let isMinimized = false;

  toggleBtn.onclick = () => {
    chatWindow.classList.remove('hidden');
    isMinimized = false;
    chatWindow.classList.remove('minimized');
    toggleBtn.classList.add('hidden');
  };

  closeBtn.onclick = () => {
    chatWindow.classList.add('hidden');
    toggleBtn.classList.remove('hidden');
  };

  minimizeBtn.onclick = () => {
    isMinimized = !isMinimized;
    chatWindow.classList.toggle('minimized', isMinimized);
    minimizeBtn.textContent = isMinimized ? '🔼' : '🔽';
  };

  function appendMessage(text, sender) {
    const div = document.createElement('div');
    div.className = `message ${sender}`;
    div.textContent = text;
    messageContainer.appendChild(div);
    messageContainer.scrollTop = messageContainer.scrollHeight;
  }

  function sendMessage() {
    const text = input.value.trim();
    if (!text) return;
    appendMessage(text, 'user');
    input.value = '';
    simulateBotResponse(text);
  }

  function handleSuggestion(text) {
    appendMessage(text, 'user');
    simulateBotResponse(text);
  }

  function simulateBotResponse(userInput) {
    typing.classList.remove('hidden');

    setTimeout(() => {
      let response = "I understand you need help. Could you please specify if it's about booking, payments, or service issues?";
      const input = userInput.toLowerCase();

      if (input.includes('payment') || input.includes('pay')) {
        response = "For payment issues, please check if your payment method is valid. If you're still having trouble, I can connect you with our payment support team.";
      } else if (input.includes('book') || input.includes('scheduling')) {
        response = "To book a service, please use our booking form in the dashboard. Make sure you're logged in first. Need help with the booking process?";
      } else if (input.includes('service') || input.includes('wash')) {
        response = "We offer various bike washing services including pickup & drop. Would you like to know more about our service packages?";
      } else if (input.includes('contact') || input.includes('support')) {
        response = "You can reach our support team at support@bikewash.com or call us at +1 (555) 123-4567 during business hours.";
      }

      appendMessage(response, 'bot');
      typing.classList.add('hidden');
    }, 1000);
  }

  input.addEventListener("keypress", function(e) {
    if (e.key === "Enter") sendMessage();
  });
</script>

  

</body>
</html>
