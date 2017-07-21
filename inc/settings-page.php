<div class="wpflask-ac-admin-wrapper">

	<div class="settings-wrapper">
		<div class="options-wrapper">

			<div class="section-wrapper">
				<div class="section-header">
					<div class="section-header-inside">
						<h2><?php printf( '%1$s %2$s', esc_html__( 'Simple Admin Columns', 'wpflask-admin-columns' ), esc_html__( 'Settings', 'wpflask-admin-columns' ) ); ?></h2>
					</div><!-- .section-header-inside -->
				</div><!-- .section-header -->

				<div class="section-content">
					<div class="section-content-inside">
						<?php printf( 'Feel free to <a href="https://wpflask.com/contact/" target="_blank">contact us</a> for support and suggestions.', 'wpflask-admin-columns' ); ?>
					</div><!-- .section-content-inside -->
				</div><!-- .section-content -->
			</div><!-- .section-wrapper -->

			<form action="options.php" method="post" class="section-form-wrapper">

				<?php settings_fields( 'wpflask_ac_options_group' ); ?>

				<div class="section-form-header">
					<div class="section-form-header-inside">
						<input type="submit" class="button button-primary" value="<?php echo esc_html__( 'Save Changes', 'wpflask-admin-columns' ); ?>">
					</div><!-- .section-form-header-inside -->
				</div><!-- .section-form-header -->

				<div id="wpflask-admin-columns-tabs" class="section-form-tabs">
					<ul class="tabs">
						<li class="tab" id="tab-1"><a href="#section-posts-columns"><?php echo esc_html__( 'Posts Columns', 'wpflask-admin-columns' ); ?></a></li>
						<li class="tab" id="tab-2"><a href="#section-pages-columns"><?php echo esc_html__( 'Pages Columns', 'wpflask-admin-columns' ); ?></a></li>
					</ul>
					<div class="panels">
						<div id="section-posts-columns" class="panel">
							<?php do_settings_sections( 'wpflask_ac_section_posts_page' ); ?>
						</div>
						<div id="section-pages-columns" class="panel">
							<?php do_settings_sections( 'wpflask_ac_section_pages_page' ); ?>
						</div>
					</div><!-- .panel-container -->
				</div><!-- .section-tabs -->

				<div class="section-form-footer">
					<div class="section-form-footer-inside">
						<input type="submit" class="button button-primary" value="<?php echo esc_html__( 'Save Changes', 'wpflask-admin-columns' ); ?>">
					</div><!-- .section-form-footer-inside -->
				</div><!-- .section-form-footer -->
			</form><!-- .section-form-wrapper -->

		</div><!-- .options-wrapper -->
		<div class="info-wrapper">

			<div class="section-wrapper">
				<div class="section-header">
					<div class="section-header-inside">
						<h2><?php printf( '%1$s', esc_html__( 'WPFlask Projects', 'wpflask-admin-columns' ) ); ?></h2>
					</div><!-- .section-header-inside -->
				</div><!-- .section-header -->

				<div class="section-content">
					<div class="section-content-inside">
						<ul>
							<li>
								<a href="https://wpflask.com/radical/?utm_source=wporg-admin-columnsw&utm_medium=button&utm_campaign=free-wp-themes" class="button button-primary" target="_blank"><?php echo esc_html__( 'Radical - Free WordPress Theme', 'wpflask-admin-columns' ); ?></a>
							</li>
						</ul>
					</div><!-- .section-content-inside -->
				</div><!-- .section-content -->
			</div><!-- .section-wrapper -->

			<div class="section-wrapper">
				<div class="section-header">
					<div class="section-header-inside">
						<h2><?php printf( '%1$s', esc_html__( 'Connect Us', 'wpflask-admin-columns' ) ); ?></h2>
					</div><!-- .section-header-inside -->
				</div><!-- .section-header -->

				<div class="section-content">
					<div class="section-content-inside">
						<ul>
							<li>
								<a href="https://www.facebook.com/wpflask/" class="button button-primary" target="_blank"><?php echo esc_html__( 'Like Us On Facebook', 'wpflask-admin-columns' ); ?></a>
							</li>
							<li>
								<a href="https://twitter.com/wpflask" class="button button-primary" target="_blank"><?php echo esc_html__( 'Follow On Twitter', 'wpflask-admin-columns' ); ?></a>
							</li>
						</ul>
					</div><!-- .section-content-inside -->
				</div><!-- .section-content -->
			</div><!-- .section-wrapper -->

		</div><!-- .info-wrapper -->
	</div><!-- .settings-wrapper -->

</div><!-- .wpflask-ac-admin-wrapper -->
