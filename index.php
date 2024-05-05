<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="stylelog.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo">SpinePREdiction</a>
        <nav class="navbar">
            <ul class="choice">
            <li><a href="homeEN.php">Home</a></li>
            <li><a href="aboutEN.php">About</a></li>
            <li><a href="contactEN.php">Contact</a></li>
            <li><a href="#">Login</a>
                <ul class="dropdown">
                    <li><a href="index2.php">Create Account</a></li>
                    <li><a href="index.php">Login</a></li>
                </ul>
            </li>
            <li><a href="#">Language</a>
                <ul class="dropdown">
                    <li><a href="#">English</a></li>
                    <li><a href="LoginCH.php">繁體中文</a></li>
                </ul>
            </li>
            </ul>
        </nav>
    </header>
    <form action="process.php" method="post" onsubmit="this.submit(); this.reset(); return false;">
        <div class="container">
            <h2>Login</h2>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
            <a href="index2.php" class="create-account-btn">Create Account</a>
        </div>
    </form>
</body>
</html>