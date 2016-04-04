<!DOCTYPE html>
<html>
	<head>
		<!-- Jason Was Here -->
		<link rel="stylesheet" type="text/css" href="css/SuchStyle.css">
		<link rel="stylesheet" type="text/css" href="css/wow.css">
		<script src="js/jquery.js"></script>
	</head>
	<body>
    <div id="wholePage">
        <div id="header">
            <h1>
                Academic Computing Society: ACS
            </h1>
        </div>

        <div id="navbar">
        <nav>
            <ul>
                <li>
                    <a href="/">Main Page</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                    <ul>
                        <li><a href="constitution">Constitution</a></li>
                        <li><a href="faq">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="meetings">Meetings</a>
                </li>
                <li>
                    <a href="">Projects</a>
                    <ul>
                        <li><a href="curprojects">Current Projects</a></li>
                        <li><a href="comprojects">Completed Projects</a></li>
                        <li><a href="futprojects">Future Projects</a></li>
                    </ul>
                </li>
            </ul>
        </nav>   
        </div>

        <div id="content">
        @yield('content')	
        </div>

        <div id="footer">
        @yield('footer')
        </div>
    </div>
	</body>
</html>
