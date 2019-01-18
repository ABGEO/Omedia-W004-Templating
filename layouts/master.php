<?php
function activePage()
{
    $uri = explode('.php', $_SERVER['REQUEST_URI']);

    return $uri[0];
}
?>
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

        a {
            text-decoration: none;
        }

        .active {
            text-decoration: underline;
            color: red;
        }
    </style>
</head>
<body>
<header>
    <nav class="navigation">
        <ul>
            <li><a href="/" class="<?php echo activePage() == '/index' || activePage() == '/' ? 'active' : ''; ?>">Home</a></li>
            |
            <li><a href="/news.php" class="<?php echo activePage() == '/news' ? 'active' : ''; ?>">News</a></li>
            |
            <li><a href="/contact.php" class="<?php echo activePage() == '/contact' ? 'active'  : ''; ?>">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="content">
    <?php echo $content; ?>
</div>

</body>
</html>