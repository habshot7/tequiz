<!DOCTYPE HTML>
<html>
	<head>
		<title>TEQUIZ</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <script>
            var countDownDate = <?php $def = 1489996190; if(isset($_SESSION['endTime'])) echo $_SESSION['endTime']; else echo $def;?>;
            countDownDate = countDownDate * 1000;
            var x = setInterval(function() {
                var idToDisp = "countDowntimer";
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                var displayMsg = "";
                if(days > 0)
                {
                   displayMsg = days + " Day " + hours + " Hrs "+ minutes + " Min " + seconds + " Sec ";
                }
                else if(hours > 0)
                {
                    displayMsg =  hours + " Hrs "+ minutes + " Min " + seconds + " Sec";
                }
                else if(minutes > 0)
                {
                    displayMsg =  minutes + " Min " + seconds + " Sec";
                }
                else if (seconds > 0)
                {
                    displayMsg =  seconds + " Sec";
                }

                if (distance < 0) {
                    clearInterval(x);
                    displayMsg = "Timer Expired";
                }
                document.getElementById(idToDisp).innerHTML = displayMsg;
            }, 1000);
        </script>
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
                        <h4><?php
                        if(isset($_SESSION["testName"]))
                            echo $_SESSION["testName"];
                        else
                            echo "Generic Quiz";
                            ?></h4>
                        <p><?php
                            if (isset($_SESSION['quesNum']))
                                echo "Question No. ".(string)$_SESSION['quesNum'];
                            else
                                echo "Unknown Ques Number";
                            ?></p>
					</header>
					<header class="box">
						<h4>Time Left</h4>
						<p id="countDowntimer"> = = Time Left = = </p>
					</header>
				</div>
                    <h5>Question</h5>
					<p class="box"><?php
                        if(isset($_SESSION['question']))
                            echo htmlspecialchars($_SESSION['quesNum']);
                        else
                            echo "Which option you like the most?"
                        ?></p>
                    <h5>Options</h5>
					<form action="" method="post">
                        <div class="flex flex-2">
                            <div class="box 6u 12u$(small)">
                                <input type="radio" name="options" id="A" value="optionA">
                                <label for="A">A. Option A</label>
                            </div>
                            <div class="box 6u 12u$(small)">
                                <input type="radio" name="options" id="B" value="optionB">
                                <label for="B">B. Option B</label>
                            </div>
                            <div class="box 6u 12u$(small)">
                                <input type="radio" name="options" id="C" value="optionC">
                                <label for="C">C. Option C</label>
                            </div>
                            <div class="box 6u 12u$(small)">
                                <input type="radio" name="options" id="D" value="optionD">
                                <label for="D">D. Option D</label>
                            </div>
                            <div class="box 6u 12u$(small)">
                                <input type="radio" name="options" id="nota" value="nota">
                                <label for="nota">None Of The Above</label>
                            </div>
                            <div class="box 6u 12u$(small)">
                                <input type="radio" name="options" id="unmark" value="unmark" checked>
                                <label for="unmark">Unanswer</label>
                            </div>
                        </div>
                        <div class="6u 12u$">
                            <input type="reset" class="button alt" value="Unanswer">
                            <input type="submit" value="Submit &amp; Next">
                        </div>

					</form>
                    <div class="box table-wrapper">
                        <header><h4>Questions &amp; Responses</h4></header>
					    <table>
                            <?php
                                $quesNumber = 20;
                                $quesInOneLine = 8;
                                $qNo = 1;
                                for($row = 0 ; $row <= $quesNumber/$quesInOneLine ; $row++ )
                                {
                                    echo "<tr>";
                                        while ($qNo <= ($row+1)*$quesInOneLine && $qNo <= $quesNumber)
                                        {
                                            echo "<td><a href=\"#\" class=\"button alt unseen\">$qNo</a></td>";
                                            $qNo++;
                                        }
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                        <footer>
                            <h5>Response Color Codes</h5>
                            <div class="box flex flex-3">
                                <div class="4u 16u$">
                                    <a href="#" class="button alt">Q. No</a> Unvisited Ques.<br>
                                </div>
                                <div class="4u 16u$">
                                    <a href="#" class="button alt answered">Q. No</a> Answered Ques.<br>
                                </div>
                                <div class="4u 16u$">
                                    <a href="#" class="button alt unmarked">Q. No</a> Unanswered Ques.
                                </div>
                            </div>
                            <div class="align-right">
                                <a href="#" class="button special">Finish Test &amp; Submit</a>
                            </div>
                        </footer>
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