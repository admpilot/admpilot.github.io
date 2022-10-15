<!DOCTYPE html>
<html lang='en'>
    <head>
		<script src="../../portfolio.js"></script>
        <link href="../../style.css" type="text/css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
        <title>Web Dev-By Adam Miller</title>
    </head>
    <body>
        <header>
            <div class="headerdiv1">
				<img src="../../IMG_4281.jpeg" alt="handsome guy pic"></img>
			</div>
            <div class="headerdiv2">
				<h1>ADAM MILLER</h1>
				<nav>
                	<div style="text-align:center;display:block">
                    	<div style="display:inline-block; vertical-align:top">
							<a href="../../index.html" id="about">about</a>
						</div>
                        <div id="proj" class="projectsddown" style="display:inline-block; vertical-align:top">
                            <a href="#">projects</a>
                            <div id="projectscontent"
                                style="display:none;background-color:black";>
                                <a href="MAZEgen.php?width=100&height=100">Maze Generator</a>
                            </div>
                        </div>
                        <div style="display:inline-block; vertical-align:top">
                            <a href="#" id="contact">contact</a>
                        </div>
					
                	</div>
            	</nav>
			</div>
        </header>
        <main>
            
                
            <?php
	            $width = $_GET['width'];
	            $height = $_GET['height'];
	            $output = shell_exec("./MAZEgenSIZED $width $height -s");
	            echo "<div style='text-align:center'>$output";
	            echo "<a href='#' onclick='solve()'>SOLVE IT!</a></div>";
	        ?>
        </main>
    </body>
    <script src="../../Navigation.js"></script>
</html>
