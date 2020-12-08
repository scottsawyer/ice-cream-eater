	<footer class="page-footer">
		<nav class="footer-menu">
			<?php wp_nav_menu( ['theme_location' => 'footer_navigation'] ); ?>
		</nav>
		<?php
			$street = get_theme_mod( 'street' );
			$suite = get_theme_mod( 'suite' );
			$city = get_theme_mod( 'city' );
			$state = get_theme_mod( 'state' );
			$zip = get_theme_mod( 'zipcode' );
		?>
		<address class="location-address">
			<?php if ( $street ) : print $street . '<br>';  endif; ?>
			<?php if ( $suite ) : print $suite . '<br>'; endif; ?>
			<?php if ( $city ) : print $city . ', '; endif; ?>
			<?php if ( $state ) : print $state . ' '; endif; ?>
			<?php if ( $zip ) : print $zip; endif; ?>
		</address>
		<div class="location-contact-information">
			<?php
				$phone =  get_theme_mod( 'phone' );
				$email = get_theme_mod( 'email' );
			?>
			<?php 
			if ( $phone ) : 
				print '<p><a href="tel:' . $phone . '">' . $phone . '</a></p>'; 
			endif; ?>
			<?php 
			if ( $email ) : 
				print '<p><a href="mailto:' . $email . '">' . $email . '</a></p>'; endif; ?>
		</div>		
	</footer>
	<?php wp_footer(); ?>
</body>