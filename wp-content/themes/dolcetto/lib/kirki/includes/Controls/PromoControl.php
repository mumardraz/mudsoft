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
		    <h3><?php esc_attr_e( 'Upgrade to Pro version!', 'dolcetto' ); ?></h3>
        	<div class="promo-wrap">
            	<a class="promoupgrade" href="<?php esc_attr_e( 'http://www.themestune.com/theme/dolcetto/', 'dolcetto' ); ?>" target="_blank"><?php esc_attr_e( 'Upgrade to Pro', 'dolcetto' ); ?></a>
                <a class="promodemo" href="<?php esc_attr_e( 'http://www.themestune.com/demo/?theme=dolcetto', 'dolcetto' ); ?>" target="_blank"><?php esc_attr_e( 'View Demo', 'dolcetto' ); ?></a>   
                <a class="promocontact" href="<?php esc_attr_e( 'http://www.themestune.com/contact-us/', 'dolcetto' ); ?>" target="_blank"><?php esc_attr_e( 'Contact Us', 'dolcetto' ); ?></a> 				
            </div>	
            <p class="contactmess"><?php esc_attr_e( 'The Pro Version gives you more opportunities to improve your site and implicitly your business. Only through buying the pro version will you have the wide range of useful options and premium support necessary for a succesfull online project.', 'dolcetto' ); ?></p>			
        </div>
		</div>
		<?php
	}
}
