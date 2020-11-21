<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <header> section
 * and everything up until <main id="content">
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
    <title><?php echo wp_title(); ?></title>
</head>

<body <?php body_class(); ?>>
    <main id="content" class="o-main" role="main">