<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hash_input'])) {
    $hash_input = escapeshellarg($_POST['hash_input']);

    $command = "python3 assets/hash_detector.py $hash_input";
    $output = shell_exec($command);

    error_log("Command: $command");
    error_log("Output: $output");

    if (!$output) {
        die("Error: Python script did not return a result");
    }

    header("Location: index.php?hash_result=" . urlencode($output));
    exit();

    echo "<p><strong>Result:</strong>" . htmlspecialchars($output) . "</p>";

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='comptes_site/assets_log/styles.css'>
    <title>Login</title>
</head>
<body style="overflow: visible;">
    <div>
        <?php 
        $output = shell_exec("python3 --version");
        echo $output;
        ?>

    </div>

</body>
</html>