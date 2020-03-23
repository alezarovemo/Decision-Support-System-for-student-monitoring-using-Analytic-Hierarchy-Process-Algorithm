<?php
$ketentuan=$_POST['hasil'];


if ($ketentuan < 0.1888888 ) {
echo "Perlu";
} else
echo "Tidak"
?>
<input type="text" name="" value="<?php echo "$ketentuan" ?>">
