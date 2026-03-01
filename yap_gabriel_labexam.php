<?php
$view = isset($_GET['view']) ? $_GET['view'] : 'login';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCE INTRAMURALS</title>
    <style>
        :root {
            --glass-bg: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.2);
            --text-color: #ffffff;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url(/*"I actually forgot to save the image, i dont have have it :(*/ )) no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Top Header Area */
        header {
            padding: 20px 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo img { height: 60px; }
        .title { font-size: 2.5rem; color: #000; font-weight: bold; letter-spacing: 2px; }

        /* Main Container */
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            padding: 20px;
        }

        /* Glassmorphism Cards */
        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            color: var(--text-color);
            min-width: 320px;
        }

        .preview-card { width: 500px; height: 350px; position: relative; }

        /* Form Styling */
        h2 { margin-top: 0; text-transform: uppercase; font-weight: 300; text-align: center; }
        
        .input-group { margin-bottom: 15px; }
        
        input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.6);
            box-sizing: border-box;
            color: #333;
        }

        button {
            width: 50%;
            padding: 10px;
            border: none;
            border-radius: 20px;
            background: #ccc;
            cursor: pointer;
            display: block;
            margin: 10px auto;
        }

        .switch-link { color: #fff; font-size: 0.8rem; text-decoration: none; cursor: pointer; }

        /* Event Preview Window */
        .event-box {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            height: 180px;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            border: 1px solid var(--glass-border);
        }

        /* Hyperlink disguised as Image (The "Get Started" Circle) */
        .sign-up-circle {
            position: absolute;
            left: -25px;
            top: 50%;
            transform: translateY(-50%);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: url(/*Same issue with my bg*/) no-repeat center center; 
            background-size: contain;
            display: block;
            transition: transform 0.3s;
        }
        
        .sign-up-circle:hover { transform: translateY(-50%) scale(1.1); }
    </style>
</head>
<body>

<header>
    <div class="logo"><img src="um-logo.png" alt="UM Logo"></div>
    <div class="title">CCE INTRAMURALS</div>
</header>

<div class="container">
    <?php if ($view == 'login'): ?>
        <div class="glass-card">
            <h2>Welcome</h2>
            <form action="process.php" method="POST">
                <div class="input-group"><input type="email" placeholder="Email"></div>
                <div class="input-group"><input type="password" placeholder="Password"></div>
                <button type="submit">Login</button>
            </form>
            <a href="?view=signup" class="switch-link">Sign up</a>
        </div>

        <div class="glass-card preview-card">
            <h3 style="margin:0">Preview</h3>
            <a href="?view=signup" class="sign-up-circle" title="Get Started!"></a>
            
            <div class="event-box">
                <p>PREVIEW OF<br>THE EVENTS</p>
            </div>
        </div>

    <?php else: ?>
        <div class="glass-card" style="width: 600px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <h2 style="grid-column: span 2;">Sign-Up</h2>
            <input type="email" placeholder="EMAIL">
            <input type="text" placeholder="STUDENT ID">
            <input type="password" placeholder="PASSWORD">
            <input type="text" placeholder="COURSE">
            <div style="grid-column: span 2; text-align: center;">
                <button style="width: 30%;">Submit</button>
                <br>
                <a href="?view=login" class="switch-link"> sign-up Login</a>
            </div>
        </div>
    <?php endif; ?>
</div>

</body>
</html>