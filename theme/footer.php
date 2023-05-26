
<?php wp_footer(); ?>

<?php
    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations['footer'];
    $footerNav = wp_get_nav_menu_items($menuID);

?>

<footer id="footer" class="pt-2 pb-7">
    <div class="container">
        <nav class="d-flex justify-content-center flex-wrap nav-footer">
            <?php foreach ( $footerNav as $k => $navItem ) : ?>
                <a class="nav-link mb-1" aria-current="page" href="<?= $navItem->url ?>"><?= $navItem->title ?></a>
            <?php endforeach; ?>
        </nav>

    </div>
</footer>

</body>
</html>