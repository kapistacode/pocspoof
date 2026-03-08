<?php
$sleepTime = 3;
if (isset($_GET['s'])) {
  $sleepTime = $_GET['s'];
}
sleep($sleepTime);
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html { font-family: sans-serif; }
body {
    margin: 0;
}
* {
  overscroll-behavior: none;
  touch-action: none;
}
#urlbarWrapper {
    display: sticky;
    top: 0;
    left: 0;
}
#scrollWrapper {
    padding: 10px;
    height: 100vh;
    overflow-y: scroll;
}

#scrollContent {
    padding-top: 900px;
    height: 300vh;
}

#urlbar {
  user-select: none;
  overflow: hidden;
}

#urlbar.hide {
    height: 0px;
}

#urlbar > img {
  width: 100%;
  height: auto;
  display: block;
}

</style>
<title>Google Login</title>
</head>
<body>
<div id="urlbarWrapper">
    <div id="urlbar"><img src="urlbar-google.jpg"></div>
</div>
<div id="scrollWrapper">
    <div id="scrollContent">
        <h1>Spoooo&#128123;oooof</h1>
        <p><b>(ooh, scary!)</b></p>
        <p><i>A wild login form has appeared!</i></p>
        <h2>You must login to continue</h2>
        <form action="/?form" method="get">
            <input id="inputElem" name="email" placeholder="Email">
            <br>
            <input name="password" placeholder="Password" type="password">
            <input type="submit">
        </form>
        <a href="/?forgotpassword">Forgot password?</a>
        </div>
    </div>
</div>
<script>
document.querySelectorAll('input').forEach((elem) => {
    elem.addEventListener('focus', () => {
        urlbar.classList.add('hide');
    });
});

scrollWrapper.scrollTo({top: 800, behavior: 'instant'});
</script>
</body>
</html>
