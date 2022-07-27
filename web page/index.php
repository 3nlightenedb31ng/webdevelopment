<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ProJect</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                   
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

           

        </div> 
        <div class="content">
        <h1>Web Development & <br><span>Database</span> Coursework</h1>
            <p class="par">The project is coursework of Web Development & Database System. It is sample of web page design.
                <br>PDF files are stored inside the webpage. Login or register to get access to my assignments PDF files.</p>

                <button class="cn"><a href="register.php">JOIN US</a></button>

                
                <div class="form" method="post" action="action.php">
                    <h2>Login Here</h2>
                    <input type="email" name="Email" placeholder="Enter Email Here">
                    <input type="password" name="Password" placeholder="Enter Password Here">
                    <button type="submit" name="" class="btnn"><a href="add.php">Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="register.php">Sign up </a> here</a></p>
                   

                    

                  </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>