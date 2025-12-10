<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dingo Rush | Free Social Casino & Outback Adventures</title>
    <style>
        /*
        Color Palette (Kept consistent with previous generation):
        --color-primary: #1D9A6C (Green used for buttons/accents)
        --color-secondary: #E9F7EF (Light Sand/Background Accent)
        --color-text-dark: #333333 (Dark Jungle Text)
        --color-text-light: #F8F8F8 (Off-White)
        --color-background: #FFFFFF (Pure White)
        --color-accent-hover: #167e55 (Darker Green)
        */

        :root {
            --color-primary: #1D9A6C;
            --color-secondary: #E9F7EF;
            --color-text-dark: #333333;
            --color-text-light: #F8F8F8;
            --color-background: #FFFFFF;
            --color-accent-hover: #167e55;
            --font-main: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-main);
            color: var(--color-text-dark);
            background-color: var(--color-background);
            line-height: 1.6;
        }

        /* --- Global Styles --- */

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        h1, h2, h3 {
            color: var(--color-primary);
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--color-primary);
            color: var(--color-text-light);
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .btn:hover {
            background-color: var(--color-accent-hover);
        }

        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        /* --- Header/Navigation --- */

        header {
            background-color: var(--color-background);
            padding: 15px 0;
            border-bottom: 1px solid var(--color-secondary);
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 900;
            color: var(--color-primary);
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li a {
            color: var(--color-text-dark);
            text-decoration: none;
            padding: 0 15px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: var(--color-primary);
        }

        /* --- Hero Section --- */

        #hero {
            background-color: var(--color-secondary);
            text-align: center;
            padding: 100px 20px;
            min-height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: var(--color-text-dark);
        }

        #hero h1 span {
            color: var(--color-primary);
        }

        #hero p {
            font-size: 1.2em;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        /* --- Metrics/Stats Section --- */

        #metrics {
            padding: 60px 0;
        }

        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .metric-item h3 {
            font-size: 3em;
            margin-bottom: 5px;
        }

        .metric-item p {
            color: #6C757D;
            font-weight: 500;
        }

        /* --- Mission Section --- */

        #mission {
            padding: 80px 0;
            background-color: var(--color-background);
        }

        .mission-content {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .mission-text {
            flex: 2;
        }
        
        .mission-text h2 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .mission-text p {
            margin-bottom: 20px;
            color: #6C757D;
        }

        .mission-values {
            flex: 1;
            padding: 20px;
            background-color: var(--color-secondary);
            border-left: 5px solid var(--color-primary);
        }

        .mission-values h3 {
            color: var(--color-text-dark);
            margin-top: 0;
        }

        .mission-values ul {
            list-style: none;
        }

        .mission-values li {
            padding: 5px 0;
            font-weight: 500;
        }

        /* --- Services Section (Featured Games) --- */

        #services {
            padding: 80px 0;
            background-color: var(--color-secondary);
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background-color: var(--color-background);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card h3 {
            color: var(--color-primary);
            margin-top: 15px;
        }

        .service-card p {
            color: #6C757D;
        }
        
        /* --- Contact/CTA Section --- */

        #contact {
            padding: 80px 0;
        }

        .contact-content {
            display: flex;
            justify-content: space-between;
            gap: 40px;
        }

        .contact-form-container {
            flex: 2;
        }

        .contact-info {
            flex: 1;
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-info-block {
            margin-bottom: 25px;
            padding-left: 10px;
            border-left: 3px solid var(--color-primary);
        }
        
        .contact-info-block h3 {
            margin-bottom: 5px;
        }

        .contact-info-block p {
            color: #6C757D;
        }


        /* --- Footer --- */

        footer {
            background-color: var(--color-text-dark);
            color: var(--color-text-light);
            padding: 40px 0 20px 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-logo {
            font-size: 20px;
            font-weight: 900;
            color: var(--color-text-light);
            margin-bottom: 10px;
        }

        footer h4 {
            color: var(--color-primary);
            margin-bottom: 15px;
            font-size: 16px;
        }

        footer ul {
            list-style: none;
        }

        footer ul li a {
            color: var(--color-text-light);
            text-decoration: none;
            display: block;
            padding: 3px 0;
            font-size: 0.9em;
        }

        footer ul li a:hover {
            color: var(--color-primary);
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            text-align: center;
            font-size: 0.8em;
            color: #ccc;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .nav-content {
                flex-direction: column;
            }
            nav ul {
                margin-top: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
            nav ul li {
                margin-bottom: 10px;
            }
            #hero {
                padding: 60px 20px;
            }
            #hero h1 {
                font-size: 36px;
            }
            .mission-content, .contact-content {
                flex-direction: column;
            }
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* Custom variables for the modal's look */
:root {
    --color-purple-bg: #4c2c78; 
    --color-purple-accent: #8b5cf6; 
    --color-text-light: #F8F8F8;
    --color-text-dark: #333333;
}

/* --- Age Modal Styling --- */

.ab-age_modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.85); /* Dark overlay */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Ensure it's on top of everything */
    padding: 20px;
}

.ab-age_content {
    background: linear-gradient(135deg, var(--color-purple-bg), var(--color-purple-accent)); /* Gradient background matching image */
    color: var(--color-text-light);
    padding: 40px 30px;
    border-radius: 15px;
    text-align: center;
    max-width: 400px;
    width: 100%;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    animation: fadeIn 0.3s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

.ab-age_icon {
    font-size: 3.5em;
    color: var(--color-text-light);
    margin-bottom: 10px;
}

.ab-age_title {
    color: var(--color-text-light);
    margin-bottom: 10px;
    font-size: 1.8em;
}

.ab-age_text {
    margin-bottom: 30px;
    font-size: 1.1em;
    line-height: 1.4;
    color: #d8d8d8;
}

.ab-age_actions {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.ab-age_confirm, .ab-age_deny {
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: opacity 0.2s;
}

.ab-age_confirm {
    background-color: var(--color-text-light); /* White button */
    color: var(--color-text-dark); /* Dark text on button */
}

.ab-age_deny {
    background-color: transparent;
    border: 2px solid var(--color-text-light);
    color: var(--color-text-light);
}

.ab-age_confirm:hover { opacity: 0.8; }
.ab-age_deny:hover { background-color: rgba(255, 255, 255, 0.1); }

/* Class used by JavaScript to hide the modal */
.ab-age_modal.hidden {
    display: none;
}

/* Responsive adjustment for mobile stacking */
@media (max-width: 480px) {
    .ab-age_actions {
        flex-direction: column;
    }
}
    </style>
</head>
<body>

<div class="ab-age_modal" id="ageModal">
    <div class="ab-age_content">
        <div class="ab-age_icon">
            <i class="ri-shield-user-fill"></i>
        </div>
        <h2 class="ab-age_title">Age Verification Required</h2>
        <p class="ab-age_text">Access to Dingo Rush is restricted to individuals 18 years or older. Please confirm your age to proceed.</p>
        <div class="ab-age_actions">
            <button class="ab-age_confirm" id="ageConfirm">Yes, I'm 18+</button>
            <button class="ab-age_deny" id="ageDeny">Exit Site</button>
        </div>
    </div>
</div>

    <header>
        <div class="container nav-content">
            <a href="#" class="logo">Dingo Rush</a>
            <nav>
                <ul>
                    <li><a href="#hero">Lobby</a></li>
                    <li><a href="#mission">Our Story</a></li>
                    <li><a href="#services">Games</a></li>
                    <li><a href="#contact">Support</a></li>
                    <li><a href="#">Safety</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="container">
            <h1>Feel the <span>Dingo Rush</span> in the Outback.</h1>
            <p>Dive into the most exciting free social casino experience! Connect with friends, unlock daily treasure chests, and spin for fun on our vibrant Australian-themed slots and games.</p>
            <a href="#services" class="btn">Start Spinning Now</a>
        </div>
    </section>

    <section id="metrics">
        <div class="container metrics-grid">
            <div class="metric-item">
                <h3>50K+</h3>
                <p>Active Aussie Explorers</p>
            </div>
            <div class="metric-item">
                <h3>1000+</h3>
                <p>Daily Coin Bonuses</p>
            </div>
            <div class="metric-item">
                <h3>24/7</h3>
                <p>In-Game Chat Support</p>
            </div>
            <div class="metric-item">
                <h3>20+</h3>
                <p>Unique Slot Themes</p>
            </div>
        </div>
    </section>

    <section id="mission">
        <div class="container mission-content">
            <div class="mission-text">
                <h2 class="section-header" style="text-align: left;">The Story of Dingo Rush</h2>
                <p>Dingo Rush was born from a group of social gaming fans who wanted a fun, free, and genuinely social experience with an Australian flavor. We built our platform around the idea of a shared outback adventure where everyone can relax, connect, and enjoy high-quality casino-style fun without any cost.</p>
                <p>Our focus is on community. We continuously update our games and features based on player feedback, ensuring the Dingo Rush platform always feels fresh, welcoming, and packed with new adventures waiting just beyond the next dune.</p>
                <a href="#" class="btn" style="background-color: var(--color-text-dark);">Meet the Team</a>
            </div>
            <div class="mission-values">
                <h3>What Makes Us Special</h3>
                <ul>
                    <li>&#10003; Real-Time Group Chat</li>
                    <li>&#10003; Daily Free Bonuses</li>
                    <li>&#10003; Player-Driven Events</li>
                    <li>&#10003; Mobile-Ready Interface</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2 class="section-header">Featured Outback Adventures</h2>
            <div class="service-grid">
                <div class="service-card">
                    <h3>Kangaroo Ca$h Slots</h3>
                    <p>Hop into action with massive free coin payouts and exciting bonus rounds deep in the red desert.</p>
                    <a href="#" style="color: var(--color-primary); text-decoration: none; font-weight: 600;">Play Now &rarr;</a>
                </div>
                <div class="service-card">
                    <h3>Crocodile Gold Hunter</h3>
                    <p>A collaborative challenge! Work with your friends to unlock the ancient Aussie jackpot.</p>
                    <a href="#" style="color: var(--color-primary); text-decoration: none; font-weight: 600;">Play Now &rarr;</a>
                </div>
                <div class="service-card">
                    <h3>Bushfire Blackjack</h3>
                    <p>A fast-paced card game variation featuring an Australian twist and social tournaments.</p>
                    <a href="#" style="color: var(--color-primary); text-decoration: none; font-weight: 600;">Play Now &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2 class="section-header">Need Help in the Bush?</h2>
            <div class="contact-content">
                <div class="contact-form-container">
                    <h3>Contact Our Support Team</h3>
                    <form class="contact-form">
                        <label for="name">Your In-Game Name</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Your Email Address</label>
                        <input type="email" id="email" name="email" required>
                        
                        <label for="project">Your Issue/Question</label>
                        <textarea id="project" name="project" rows="5" required placeholder="Describe the problem or question you have..."></textarea>
                        
                        <button type="submit" class="btn">Send Support Request</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h3>Quick Links & Support</h3>
                    <div class="contact-info-block">
                        <h4>FAQ Hub</h4>
                        <p>Find instant answers about coins, features, and account issues.</p>
                    </div>
                    <div class="contact-info-block">
                        <h4>Email Support</h4>
                        <p>support@dingorush.fun</p>
                    </div>
                    <div class="contact-info-block">
                        <h4>Responsible Gaming</h4>
                        <p>We are committed to fun, safe play for everyone 18+.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="footer-logo">Dingo Rush</div>
                    <p style="font-size: 0.9em; color: #ccc;">The premier destination for free, Australian social gaming. Always play responsibly.</p>
                </div>
                <div>
                    <h4>Platform</h4>
                    <ul>
                        <li><a href="#mission">Our Story</a></li>
                        <li><a href="#services">Game Lobby</a></li>
                        <li><a href="#">Promotions</a></li>
                        <li><a href="#">VIP Club</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Community</h4>
                    <ul>
                        <li><a href="#">Player Forum</a></li>
                        <li><a href="#">FAQ Center</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">How to Play</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Responsible Gaming</a></li>
                        <li><a href="#">18+ Only</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2025 Dingo Rush. All rights reserved.
            </div>
        </div>
    </footer>
     <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const modal = document.getElementById('ageModal');
        const confirmBtn = document.getElementById('ageConfirm');
        const denyBtn = document.getElementById('ageDeny');
        
        // Use sessionStorage so the modal doesn't reappear until the browser window/tab is closed
        const ageConfirmed = sessionStorage.getItem('ageConfirmed');

        if (!ageConfirmed) {
            // Show modal if age is not confirmed
            modal.classList.remove('hidden');
            // Prevent scrolling on the main page while modal is active
            document.body.style.overflow = 'hidden';
        } else {
            // Hide modal if age is already confirmed
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Handle 'Yes, I'm 18+' confirmation
        confirmBtn.addEventListener('click', () => {
            sessionStorage.setItem('ageConfirmed', 'true');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });
        // Handle 'Exit Site' denial
        denyBtn.addEventListener('click', () => {
            // Redirect the user away from the site to google.com
            window.location.href = 'https://www.google.com/'; 
        });
    });
</script>
</body>
</html>