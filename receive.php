<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>出力結果</title>
</head>
<body>
<?php
//print_r($_POST);
echo htmlspecialchars($_POST['recipe_name'],ENT_QUOTES,'UTF-8');
echo "<br>";
if ($_POST['category'] === '1') echo "和食";
if ($_POST['category'] === '2') echo "中華";
if ($_POST['category'] === '3') echo "洋食";
echo "<br>";
?>
</body>
</html>