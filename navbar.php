<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

/* Navbar Styles */
.navbar {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.nav-logo {
    color: #fff;
    font-size: 1.5rem;
    text-decoration: none;
    font-weight: bold;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    transition: background-color 0.3s;
}

/* Hover Effect */
.nav-links a:hover {
    background-color: #555;
    border-radius: 4px;
}

    </style>

</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="nav-logo">MyWebsite</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#welcome">Welcome</a></li>
                <li><a href="#form">Form</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
