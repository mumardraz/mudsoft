<?php

namespace Kirki\Controls;

class PromoControl extends \WP_Customize_Control {

	public $type = 'promo';

	/**
	 * Render the control's content.
	 */
	protected function render_content() { ?>
		<div class="promo-box">
        <div class="promo-2">
		    <h3><?php esc_attr_e( 'Upgrade to Pro version!', 'amaryllo' ); ?></h3>
        	<div class="promo-wrap">
            	<a class="promoupgrade" href="<?php esc_attr_e( 'http://www.themestune.com/theme/amaryllo/', 'amaryllo' ); ?>" target="_blank"><?php esc_attr_e( 'Upgrade to Pro', 'amaryllo' ); ?></a>
                <a class="promodemo" href="<?php esc_attr_e( 'http://www.themestune.com/demo/?theme=amaryllo', 'amaryllo' ); ?>" target="_blank"><?php esc_attr_e( 'View Demo', 'amaryllo' ); ?></a>   
                <a class="promocontact" href="<?php esc_attr_e( 'http://www.themestune.com/contact-us/', 'amaryllo' ); ?>" target="_blank"><?php esc_attr_e( 'Contact Us', 'amaryllo' ); ?></a> 				
            </div>	
            <p class="contactmess"><?php esc_attr_e( 'The Pro Version gives you more opportunities to improve your site and implicitly your business. Only through buying the pro version will you have the wide range of useful options and premium support necessary for a succesfull online project.', 'amaryllo' ); ?></p>			
        </div>
		</div>
		<?php
	}
}
