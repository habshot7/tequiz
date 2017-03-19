<!DOCTYPE HTML>
<html>
	<head>
		<title>TEQUIZ</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">tequiz</a>
					<nav id="nav">
						<a href="index.php">Home</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
				<div class="flex flex-2">
					<header>
						<h4>Test Name</h4>
						<p>Question Number</p>
					</header>
					<header>
						<h4>Time Left</h4>
						<p id="countDowntimer"> = = Time Left = = </p>
					</header>
				</div>
					<p>What option you like the most?</p>
					<form action="" method="post">
                        <div class="flex flex-2">
                            <div class="6u 12u$(small)">
                                <input type="radio" name="options" id="A" value="optionA">
                                <label for="A">A. Option A</label>
                            </div>
                            <div class="6u 12u$(small)">
                                <input type="radio" name="options" id="B" value="optionB">
                                <label for="B">B. Option B</label>
                            </div>
                            <div class="6u 12u$(small)">
                                <input type="radio" name="options" id="C" value="optionC">
                                <label for="C">C. Option C</label>
                            </div>
                            <div class="6u 12u$(small)">
                                <input type="radio" name="options" id="D" value="optionD">
                                <label for="D">D. Option D</label>
                            </div>
                            <div class="6u 12u$(small)">
                                <input type="radio" name="options" id="nota" value="nota">
                                <label for="nota">None Of The Above</label>
                            </div>
                            <div class="6u 12u$(small)">
                                <input type="radio" name="options" id="unmark" value="unmark" checked>
                                <label for="unmark">Unmark</label>
                            </div>
                        </div>
					</form>
                    <div class="table-wrapper">
					    <table>
                            <?php
                                $quesNumber = 35;
                                $quesInOneLine = 8;
                                $qNo = 1;
                                for($row = 0 ; $row <= $quesNumber/$quesInOneLine ; $row++ )
                                {
                                    echo "<tr>";
                                        while ($qNo <= ($row+1)*$quesInOneLine && $qNo <= $quesNumber)
                                        {
                                            echo "<td><a href=\"#\" class=\"button alt answered\">$qNo</a></td>";
                                            $qNo++;
                                        }
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy;<a href="http://fb.com/shubham567">Shubham Shekhar</a>.
						</div>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>