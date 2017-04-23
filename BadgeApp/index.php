<?php
/**
 * Created by PhpStorm.
 * User: almir
 * Date: 4/23/2017
 * Time: 10:33 AM
 */
$data=file_get_contents('https://www.codeschool.com/users/jonfriskics.json');
//var_dump($data);
$json_data=json_decode($data,true);
//var_dump($json_data['courses']['completed']);
$courses=$json_data['courses']['completed'];
?>

<!Doctype html>
    <html>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.google.com/specimen/Coda?selection.family=Coda" rel="stylesheet">
    <link href="style.css" rel="stylesheet" media="screen" title="no title" charset="utf-8">
</head>
<title><?php echo $json_data['user']['username']?>'s Badges</title>
<body>
<header>
    <h1>Badges</h1>
</header>
<div class="container">
    <div class="grid">
<?php
foreach($courses as $course){

    echo '<div class="grid-cell">';
    echo '<img src="'.$course["badge"].'" height=200px >';
    echo '<a href="'. $course['url'] .'">'. $course['title'].'</a>';

    echo '</div>';
}
    echo '</div>';
?>
    </div>
</body>
    </html>
