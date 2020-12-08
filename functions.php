<?php

// menu registration
function reg_mymenu()
{
    register_nav_menu('header-menu', __('Menu główne'));
}
add_action('init', 'reg_mymenu');



// head section and menu including
function include_header()
{
    get_template_part("template-partials/template", "header");
    get_template_part("template-partials/template", "navigation");
}

// footer including
function include_footer()
{
    get_template_part("template-partials/template", "footer-content");
    get_template_part("template-partials/template", "footer");
}
