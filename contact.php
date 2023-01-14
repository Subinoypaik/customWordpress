<?php
/**
 * The template name:  contact us
 * //
 */

get_header(); ?>
<h1>acf</h1>
<ul>
  <li><?php the_field("phone",101) ?></li>
  <li><?php the_field("email",101) ?></li>
</ul>

<?php
get_footer();
?>