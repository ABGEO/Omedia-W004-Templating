<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo isset($title) ? $title : 'My Application'; ?>
    </title>

    <style>
        .navigation {
            background-color: coral;
        }

        .navigation li {
            display: inline;
        }
    </style>
</head>
<body>
<header>
    <nav class="navigation">
        <ul>
            <li><a href="/">Home</a></li>
            |
            <li><a href="/news.php">News</a></li>
            |
            <li><a href="/contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="content">
    <?php echo $content; ?>
</div>

</body>
</html>