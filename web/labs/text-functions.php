<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

include 'functions.php';

$select = '<select name="function">';
foreach ($functions as $function => $actionName) {
    $select .= '<option value="' . $function . '">' . $actionName . '</option>';
}
$select .= '</select>';
$functions = '';

echo <<< HTML

<h2>Paste here your text</h2>
<form action="" method="POST">
    <textarea name="text" cols="100" rows="20"></textarea>

    <br />

    $select

    <input type="submit" value="Submit" >
</form>

HTML;


if (isset($_POST['text']) && isset($_POST['function'])) {

    $function = $_POST['function'];
    echo '<hr />';
    echo '<br />';
    echo "RESULTS:<br />";

    $function($_POST['text']);

}
