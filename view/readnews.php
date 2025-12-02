<?php
ob_start();
?>

<br>

<?php
ViewNews::ReadNews($n);

$content = ob_get_clean();
include 'view/layout.php';

?>