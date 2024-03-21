<nav>
    <ul>

    <?php
        $categories = get_terms();
        foreach ( $categories as $category ) :
            $category_name = $category->name;
            $category_id = $category->term_id;
            $category_link = get_term_link($category_id);
    ?>

        <li>
            <a href="<?php echo $category_name ?>">
                <?php echo $category_name; ?>
            </a>
        </li>

    <?php endforeach; ?>

    <ul>
</nav>

<style>
    nav {
        background-color: #f2f2f2;
        padding: 10px;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline-block;
        margin-right: 10px;
    }

    nav ul li a {
        text-decoration: none;
        color: #333;
        padding: 5px;
    }

    nav ul li a:hover {
        color: #ff0000;
    }
</style>