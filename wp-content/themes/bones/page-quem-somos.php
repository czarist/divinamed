<?php get_header();
/*
 Template Name: Quem Somos
*/

?>
<div id="content">
	<div id="inner-content" class="cf">
		<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="pt-5 pb-5" id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<section class="entry-content" itemprop="articleBody">
							<section id="SOBRE" class="section position-relative">
								<div class="container">
									<div class="row justify-content-start align-items-center mt-5">
										<div data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 mt-5 mb-5">
											<?= the_content() ?>
										</div>
										<?php
										if (have_rows('sobre', 203)) :
											while (have_rows('sobre', 203)) : the_row();
												$imagem_sobre = get_sub_field('imagem_sobre', 203);
												$titulo = get_sub_field('titulo', 203);
												$sobre_texto = get_sub_field('sobre_texto', 203);
										?>
												<div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 col-xl-4 text-center mt-5 d-flex justify-content-center align-items-center">
													<div class="servico-box">
														<div class="d-flex fx-center">
															<img src="<?= $imagem_sobre ?>" alt="<?= $titulo ?>">
														</div>
														<h6><b><?= $titulo ?></b></h6>
														<p><?= $sobre_texto ?></p>
													</div>
												</div>
										<?php
											endwhile;
										endif;
										?>
									</div>
								</div>
							</section>
					</article>
			<?php endwhile;
			endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>