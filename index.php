<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP website</title>

</head>
<body>

<?php
$nav = [
    'Home' => 'home',
    'About' => 'about',
    'Contact' => 'contact',
];

$content = [
    'home' => [
        'header' => 'Hello 👋 Welcome to our website!',
        'main_content' => 'Discover the latest products/services and explore what makes us unique.<br> We are committed to providing exceptional solutions tailored to your needs.',
        'image' => 'welcome.jpg',
    ],
    'about' => [
        'header' => 'About Us',
        'main_content' => 'We are a team of passionate individuals dedicated to providing high-quality products/services to our customers.
        <br> Our mission is to exceed customer expectations and create lasting relationships built on trust and integrity.',
        'image' => 'about.jpg',
    ],
    'contact' => [
        'header' => 'Contact Us',
        'main_content' => 'Feel free to get in touch with us. We will get back to you as soon as possible.',
        'image' => 'contact.jpg',
    ],
];

$pageContent = isset($_GET['content']) && isset($content[$_GET['content']]) ? $content[$_GET['content']] : $content['home'];
?>

<nav>
    <?php foreach ($nav as $label => $content): ?>
        <a href="index.php?content=<?php echo $content; ?>"><?php echo $label; ?></a>
    <?php endforeach; ?>
</nav>

<div>
    <h1><?php echo $pageContent['header']; ?></h1>
    <p><?php echo $pageContent['main_content']; ?></p>
    <img src="<?php echo $pageContent['image']; ?>" alt="Page Image">
</div>

</body>
</html>
