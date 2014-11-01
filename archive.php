<?php get_header(); ?>
	<main id="primary" itemscope="itemscope" itemtype="http://schema.org/Blog" itemprop="mainContentOfPage" role="main">
		<h1 class="content-subhead">
			<?php echo purecss_archive_title(); ?>
		</h1>
		<?php get_template_part('content-loop'); ?>
		<?php include 'pagination.php'; ?>
	</main>
<div class="clearfix"></div>
<?php get_footer(); ?>