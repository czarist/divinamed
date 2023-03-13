<?php get_header();
/*
 Template Name: Home
*/
$image = get_the_post_thumbnail_url(get_the_ID(), 'full');

?>
<div id="content">
	<section id="banners" class="banner-top fx fx-center position-relative" style="background-image: url('<?= $image ?>')">
		<div class="white-filter"></div>
		<div class="container">
			<div class="row justify-content-xl-end justify-content-center">
				<div class="col-xl-6 col-12">
					<?= the_content() ?>
				</div>
			</div>
		</div>
		<div id="theDown" class="d-flex align-items-center justify-content-center">
			<a href="#SERVICOS">
				<img id="down" src="<?php echo get_template_directory_uri(); ?>/library/images/down.svg" alt="down">
			</a>
		</div>
	</section>
	<div id="inner-content" class="cf">
		<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="pt-5" id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<section class="entry-content" itemprop="articleBody">
							<section id="SERVICOS" class="section position-relative">
								<div id="bigBee" class="d-none d-xl-flex" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" style="background-image: url('<?php echo get_template_directory_uri(); ?>/library/images/logo2.svg');"></div>
								<div class="container">
									<div class="row justify-content-start align-items-center mt-5">
										<div data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 mt-5 mb-5">
											<?= get_field('texto_servicos', 5) ?>
										</div>
										<?php
										if (have_rows('servicos', 5)) :
											while (have_rows('servicos', 5)) : the_row();
												$icon_servico = get_sub_field('icon_servico', 5);
												$titulo_servico = get_sub_field('titulo_servico', 5);
												$texto_servico = get_sub_field('texto_servico', 5);
										?>
												<div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 col-xl-4 text-center mt-5 d-flex justify-content-center align-items-center">
													<div class="servico-box">
														<div class="d-flex">
															<img src="<?= $icon_servico ?>" alt="<?= $titulo_servico ?>">
														</div>
														<h6><b><?= $titulo_servico ?></b></h6>
														<p><?= $texto_servico ?></p>
													</div>
												</div>
										<?php
											endwhile;
										endif;
										?>
									</div>

								</div>
								<div class="mt-5 pt-5 pb-5" style="background-image: linear-gradient(#7065e594, #2ad3e885);">
									<div class="row ">
										<div class="col-12 mt-5">
											<div class="row">
												<div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 col-xl-6 d-flex justify-content-center align-items-center">
													<img src="<?= get_field('imagem_app', 5) ?>" width="400" alt="phone">
												</div>
												<div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" id="text-app" class="col-12 col-xl-6 p-5 text-xl-left  d-flex justify-content-center align-items-center">
													<div>
														<?= get_field('texto_app', 5) ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="TELEMEDICINA" class="row mw-100 ml-0 mr-0 items-container" style="background: #FCFCFC;">
									<div class="col-12 col-xl-6 d-flex justify-content-center align-items-center">
										<div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="row justify-content-start">
											<div class="col-12 text-white ">
												<?= get_field('texto_itens', 5) ?>
												<?php
												if (have_rows('itens', 5)) :
													while (have_rows('itens', 5)) : the_row();
														$item = get_sub_field('item', 5);
														$icone_item = get_sub_field('icone_item', 5);

												?>
														<div class="d-flex">
															<div class="content-icone-item">
																<img src="<?= $icone_item ?>" alt="<?= $item ?>">
															</div>
															<p class="text-dark m-0 d-flex justify-content-center align-items-center">
																<span><?= $item ?></span>
															</p>
														</div>
												<?php
													endwhile;
												endif;
												?>

												<a href="#SAIBAMAIS" class="queromais mt-5">Quero saber mais</a>
											</div>
										</div>
									</div>
									<div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 col-xl-6 bg-geral position-relative" style="background-image: url('<?= get_field('imagem_secao', 5) ?>'); min-height: 180px;"></div>
								</div>
							</section>

							<section id="DEPOIMENTOS">
								<div class="container">
									<div class="row">
										<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-6 pb-5 pt-5">
											<?= get_field('texto_depoimentos', 5) ?>
										</div>
										<div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-6 d-flex justify-content-end align-items-center pb-5 pt-5">
											<div id="s2b" class="cursor-pointer">
												<?php include 'library/images/seta.svg'; ?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="container position-relative">
											<div class="swiper2 position-relative mt-4">
												<div class="swiper-wrapper mb-5">

													<?php
													if (have_rows('depoimentos', 5)) :
														while (have_rows('depoimentos', 5)) : the_row();
															$nome_cliente = get_sub_field('nome_cliente', 5);
															$depoimento_cliente = get_sub_field('depoimento_cliente', 5);
															if (!isset($i)) {
																$i = 1000;
															}
													?>
															<div class="swiper-slide">
																<div data-aos="flip-left" data-aos-duration="<?= $i ?>" class="box-swiper p-5">
																	<div class="row">

																		<div class="col-12 text-justify">
																			<p><?= $depoimento_cliente ?></p>
																		</div>
																		<div class="col-12 text-center">
																			<p><b><?= $nome_cliente ?></b></p>
																		</div>

																	</div>
																</div>
															</div>
													<?php
															$i = $i + 500;
														endwhile;
													endif; ?>
												</div>
											</div>

										</div>
									</div>
								</div>
							</section>
							<section id="PLANOS" class="pt-5 pb-5 mt-5 mb-5">
								<div class="container">
									<div class="row">
										<div class="col-12">
											<h2 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="300" data-aos-easing="ease-in-sine" class="text-center"><?= get_field('texto_planos', 5) ?></h2>

										</div>
									</div>
								</div>
								<div class="container">
									<div class="row mt-5">
										<?php
										if (have_rows('planos', 5)) :
											while (have_rows('planos', 5)) : the_row();
												$texto_plano = get_sub_field('texto_plano', 5);
												$faixa_plano = get_sub_field('faixa_plano', 5);
												$itens_plano = get_sub_field('itens_plano', 5);
												$texto_rodape = get_sub_field('texto_rodape', 5);
												$svg = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.972" height="25.972" viewBox="0 0 25.972 25.972">
												<defs>
												  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
													<stop offset="0" stop-color="#7065e5"/>
													<stop offset="1" stop-color="#2ad3e8"/>
												  </linearGradient>
												</defs>
												<path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M26.535,13.549A12.986,12.986,0,1,1,13.549.563,12.986,12.986,0,0,1,26.535,13.549ZM12.046,20.425l9.635-9.635a.838.838,0,0,0,0-1.185L20.5,8.42a.838.838,0,0,0-1.185,0l-7.858,7.858L7.786,12.609a.838.838,0,0,0-1.185,0L5.416,13.794a.838.838,0,0,0,0,1.185l5.446,5.446a.838.838,0,0,0,1.185,0Z" transform="translate(-0.563 -0.563)" fill="url(#linear-gradient)"/>
											  </svg>
											  ';
												if (!isset($h)) {
													$h = 1000;
												}
										?>
												<div class="col-xl-4 col-12 mt-4 d-flex justify-content-center align-items-center">
													<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="<?php echo $h; ?>" class="position-relative plano p-5 bg-white">
														<?php if ($faixa_plano) { ?>
															<div class="faixa_plano"><?= $faixa_plano ?></div>
														<?php } ?>
														<div>
															<?= $texto_plano ?>
														</div>
														<div class="mt-5">
															<?php

															if ($itens_plano) {
																foreach ($itens_plano as $itens) {
																	echo "<p><b>{$svg} {$itens['item_plano']}</b></p>";
																}
															}
															?>
														</div>

														<div class="d-flex rodape_plano justify-content-center mt-5 segoe-ui-black-2">
															<?= $texto_rodape ?>
														</div>
													</div>
												</div>
										<?php
												$h = $h + 1000;
											endwhile;
										endif; ?>
									</div>
								</div>
							</section>
							<section id="SAIBAMAIS" class="justify-content-center d-flex align-items-center" style="background-image: linear-gradient(#7065e594, #2ad3e885);">
								<div class="container">
									<div class="row">
										<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="col-12 bg-white cardsocial p-xl-0 p-5">
											<div class="row">
												<div class="col-xl-6 col-12 pt-5 pl-5 pr-5 justify-content-center flex-column d-flex align-items-center ">
													<?= get_field('texto_saiba_mais', 5) ?>
												</div>
												<div class="col-xl-6 col-12 pt-5">
													<form action="" method="POST" class="row pr-5">
														<div class="col-12 mt-5">
															<input required type="text" name="nome" id="nome" placeholder="Nome">
															<!-- <label for="nome"> Obrigatório.</label> -->
															<input required type="tel" name="telefone" id="telefone" placeholder="Telefone">
															<!-- <label for="telefone"> Obrigatório.</label> -->
															<input required type="email" name="email" id="email" placeholder="E-mail">
															<!-- <label for="email"> Obrigatório.</label> -->
														</div>
														<div class="col-12">
															<input required type="checkbox" id="permito" name="permito">
															<label for="permito"> Permito que me enviem mensagens e promoções.</label>
														</div>
														<div class="col-12">
															<input type="submit" value="Enviar">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
							</section>
						</section>
					</article>
			<?php endwhile;
			endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>