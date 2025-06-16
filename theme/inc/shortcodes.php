<?php
function realizacje_list_shortcode($atts)
{
    $atts = shortcode_atts([
        'slug' => '',
        'posts_per_page' => 12,
    ], $atts, 'realizacje_list');

    if (empty($atts['slug'])) return '<p>Brak podanej kategorii realizacji.</p>';

    $paged = get_query_var('paged') ?: get_query_var('page') ?: 1;

    $args = [
        'post_type' => 'realizacje',
        'tax_query' => [[
            'taxonomy' => 'kategoria_realizacji',
            'field' => 'slug',
            'terms' => $atts['slug'],
        ]],
        'paged' => $paged,
        'posts_per_page' => (int)$atts['posts_per_page'],
    ];

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) {
        echo '<div class="row">';

        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('template-parts/content');
        }

        echo '</div>';

        $big = 999999999;
        $pagination = paginate_links([
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, $paged),
            'total' => $query->max_num_pages,
            'prev_text' => '← Poprzednia strona',
            'next_text' => 'Następna strona →',
        ]);

        if ($pagination) {
            echo '<div class="blog mb-2">';
            echo '<div class="pagination-wrapper"><div class="nav-links">' . $pagination . '</div></div>';
            echo '</div>';
        }
    } else {
        echo '<p>Brak realizacji w tej kategorii.</p>';
    }

    wp_reset_postdata();

    return ob_get_clean();
}

add_shortcode('realizacje_list', 'realizacje_list_shortcode');
