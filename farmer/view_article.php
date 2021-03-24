<?php
include_once '../includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html>
<head>
<link href="../expert/css/style.css" rel="stylesheet" type="text/css">
<body>

<div class="maindiv">
<div class="divA">
<div class="title">
<h2>ARTICLE</h2>
</div>

<table>
<tr>
<th style="width:70px">Article ID</th>
<th style="width:70px">Article Title</th>
<th style="width:300px">Article </th>
<th style="width:80px">Author Name</th>
<th style="width:90px">Date</th>
</tr>

<?php
$sql="select article_id, article_title, article_describtion, author_fname, date from article";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
while ($row =$result->fetch_assoc())
{
   echo "<tr><td>".$row["article_id"]."</td><td>".$row["article_title"]."</td><td>".$row["article_describtion"]."</td><td>".$row["author_fname"]."</td><td>".$row["date"]."</td></tr>";
}
}
else
{
echo "No Article Present Now";
}
?>

</table>

<br>
<br>
    <div class="m-5">
	<button><a href="index.1.php">Back</a></button>
</div>
<br>
</body>
</html>