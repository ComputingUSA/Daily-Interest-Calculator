<?php // dailyintcalc.php
$earned = $principle*$rate*$days;
if (isset($_POST['rate'])) $rate = $_POST['rate'];
if (isset($_POST['days'])) $days = $_POST['days'];
if (isset($_POST['principle'])) $principle = $_POST['principle'];
$earned = number_format((float)$principle*$rate/100*$days/365,2, '.', '');
echo <<<_END
<html>
<head>
<title>Daily Interest Calculator</title>
<H2>DAILY INTEREST CALCULATOR</H2>
</head>
<body>
<form method="post" action="dailyintcalc.php"><pre>
Amount        $ <input type="text" name="principle" value="100">
# of Days       <input type="text" name="days" value="30">
Interest rate % <input type="text" name="rate" value="2.1">
<input type="submit" value="Calculate" >
<BR>$$principle for $days day(s) at $rate% earns $$earned<br>
</pre></form>
</body>
</html>
_END;
?>
