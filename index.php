<?php




require_once ('terminal.php');
session_start();
if (isset($_SESSION['commandCounter'])) {
    $_SESSION['commandCounter'] += 1;
} else {
    $commandCounter = 0;
    $_SESSION['commandCounter'] = $commandCounter;
}

if (isset($_SESSION['postArray'])) {
    array_push($_SESSION['postArray'], $_POST);
} else {
    $_SESSION['postArray'] = [];
    array_push($_SESSION['postArray'], $_POST);
}

if (isset($_SESSION['newTerminal'])) {

} else {
    $newTerminal = new Terminal();
    $_SESSION['newTerminal'] = $newTerminal;
    print_r( $_SESSION['newTerminal']->history);
}
if (isset($_POST)) {
    foreach ($_SESSION['postArray'] as &$command) {
        $toPassCommand = (reset($command));
        $respone = ($_SESSION['newTerminal']->getResponse($toPassCommand));
        echo "{$respone}<br>";
    }
}





?>
<html>
<body>

<form action = "" method="post">
    Name: <input id="submit" type = "text" name ="command<?php echo $_SESSION['commandCounter']?>" value="" />
</form>

<script>

let submit = document.getElementById("submit");
submit.focus();
submit.onkeydown = function (e) {
    if (e.key == 13) {
        this.form.submit();
        submit.innerHTML = "";
        submit.innerText = "";


    }
}
</script>
</body>
</html>
