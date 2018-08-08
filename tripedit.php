<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       include('index.php');

if (isset($_POST['submit']))
{

if (is_numeric($_POST['T_id']))
{

@$id = $_POST['T_id'];
@$tripname = mysql_real_escape_string(htmlspecialchars($_POST['TripName']));
@$tripsd = mysql_real_escape_string(htmlspecialchars($_POST['TripSD']));
@$triped = mysql_real_escape_string(htmlspecialchars($_POST['TripED']));
@$timage=  mysql_real_escape_string(htmlspecialchars($_POST['TripUE']))

if (@$id == "|| @$tripname == " || @$tripsd == " || @$triped === " || @$timage== " )
{

$error = 'ERROR: Please fill in all required fields!';


valid(@$id, @$tripname, @$tripsd,@$triped, @$timage);
}
else
{

mysql_query("UPDATE employee SET TripName='@$tripname', TripSD='@$tripsd' ,TripED='@$triped', TripUE='@$timage'WHERE id='$id'")
or die(mysql_error());

header("Location: tripdetail.php");
}
}
else
{

echo 'Error!';
}
}
else

{

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysql_query("SELECT * FROM trip WHERE id=$id")
or die(mysql_error());
$row = mysql_fetch_array($result);

if($row)
{

@$tripname = $row['TripName'];
@$tripsd = $row['TripSD'];
@$triped = $row['TripED'];
@$timage=$row['TripUE'];
valid(@$id, @$tripname, @$tripsd,@$triped,'@$timage');
}
else
{
echo "No results!";
}
}
else

{
echo 'Error!';
}
}
?>
        ?>
    </body>
</html>
