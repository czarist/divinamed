<footer id="contato" class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
	<div id="inner-footer" class="container mt-4 mb-4">
		<div class="row">
			<div class="col-12 col-xl-4 d-flex align-items-center justify-content-center text-left">
				<p class="text-dark"><?= get_field('infos_footer', 5); ?></p>
			</div>
			<div class="col-12 col-xl-4 d-flex align-items-center justify-content-center flex-column">
				<img class="mb-5" src="<?php echo get_template_directory_uri(); ?>/library/images/logo.svg" alt="logoFooter">
				<p class="d-flex">
					<span class="text-dark">
						© <?php echo date("Y"); ?>.Ativação Telemedicina. Todos os direitos reservados.
						<a href="https://c5w.com.br/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/c5w.png" style="position: relative;top: -2px;" height="15" width="15">
						</a>
					</span>
				</p>
			</div>
			<div class="col-12 col-xl-4 d-flex align-items-center justify-content-xl-end justify-content-center">
				<div class="icons d-flex align-items-center justify-content-center">
					<a class="icon" target="_blank" href="<?= get_field('facebook', 5); ?>">
						<i style="font-size: 30px;" class="fab fa-facebook-f"></i>
					</a>
					<a class="icon" target="_blank" href="<?= get_field('instagram', 5); ?>">
						<i class="bi bi-instagram "></i>
					</a>
					<a class="icon" target="_blank" href="https://api.whatsapp.com/send?phone=<?= get_field('whatsapp', 5); ?>&text=Gostaria%20de%20marcar%20uma%20consulta!">
						<i class="bi bi-whatsapp "></i>
					</a>
					<a class="icon" target="_blank" href="<?= get_field('linkedin', 5); ?>">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
</body>

</html>
<?php wp_footer(); ?>