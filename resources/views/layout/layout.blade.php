<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        /* Navigation Bar */
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: #333;
            color: #fff;
        }

        .nav-logo p {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .nav-menu ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-menu ul li {
            display: inline;
        }

        .nav-menu ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .nav-menu ul li a:hover {
            color: #007bff;
        }

        /* Button Styles */
        .nav-button {
            display: flex;
            gap: 10px;
        }

        .nav-button button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .nav-button button a {
            color: #fff;
            text-decoration: none;
        }

        .nav-button button:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .nav-menu-btn i {
            display: none;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 58px 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .footer h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer ul li {
            margin-bottom: 5px;
        }

        .footer ul li a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer ul li a:hover {
            color: #fff;
        }

        .social-icons a {
            color: #fff;
            margin-right: 10px;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #007bff;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 15px;
            padding-top: 10px;
            border-top: 1px solid #444;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <nav class="nav">
        <div class="nav-logo">
            <p>INNOVATE .</p>
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="/" class="link">Home</a></li>
                <li><a href="/about" class="link active">About</a></li>
                <li><a href="/services" class="link">Services</a></li>
                <li><a href="/admin/blogs" class="link">Blogs</a></li>
                <li><a href="/contact" class="link">Contact Us</a></li>
            </ul>
        </div>
        @guest
            <div class="nav-button">
                <button class="btn white"><a href="/login">Login</a></button>
                <button class="btn"><a href="{{ route('user.register') }}">Sign Up</a></button>
            </div>
        @else
            <div class="nav-button">
                <button class="btn"><a href="/logout">Logout</a></button>
            </div>
        @endguest
        <div class="nav-menu-btn">
            <i class="bx bx-menu"></i>
        </div>
    </nav>


    @yield('content')
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>About Us</h3>
                <p>Innovative Institution is committed to providing the best educational resources and services to help
                    you succeed.</p>
                <div class="contact">
                    <span><i class="bx bx-phone"></i> &nbsp; +123 456 789</span><br>
                    <span><i class="bx bx-envelope"></i> &nbsp; info@innovativeinstitution.com</span>
                </div>
            </div>
            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/admin/blogs">Blogs</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="bx bxl-facebook"></i></a>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                    <a href="#"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Innovative Institution | All Rights Reserved
        </div>
    </footer>
</body>

</html>
