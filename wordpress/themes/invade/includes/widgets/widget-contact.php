<?php
/**
 * Theme Junkie Advertisement Widget
 */

class TJ_Contact extends WP_Widget {

	function TJ_Contact() {
		$widget_ops = array('description' => 'Add any info of contact.' );
		parent::WP_Widget(false, __('ThemeJunkie - Contact', 'themejunkie'),$widget_ops);
	}

	function widget($args, $instance) {
        $title = $instance['title'];
		$address = $instance['address'];
		$phone = $instance['phone'];
		$fax = $instance['fax'];
		$email = $instance['email'];
		$fa_id = $instance['fa_id'];
        $tw_id = $instance['tw_id'];
        $li_id = $instance['li_id'];
        $fl_id = $instance['fl_id'];
        $fe_id = $instance['fe_id'];

        echo '<div id="footer-contact">';

        if($address != ''){
            echo'<h3 class="widget-title">'.$title.'</h3>
                 <ul id="footer-contact-list">';
        }else{
            echo'<h3 class="widget-title">Get in Touch</h3>
                 <ul id="footer-contact-list">';
        }

		if($address != '')
			echo '<li><p>Address:</p><span>'.$address.'</span></li>';

		if($phone != '')
            echo '<li><p>Phone:</p><span>'.$phone.'</span></li>';

        if($fax != '')
            echo '<li><p>Fax:</p><span>'.$fax.'</span></li>';

        if($email != '')
            echo '<li><p>Email:</p><span>'.$email.'</span></li>';

		echo '</ul>';

        echo '<ul id="footer-social-list">';

        if($fa_id != '')
			echo '<li class="foot-twitter"><a href="http://www.twitter.com/'.$fa_id.'">Twitter</a></li>';

        if($tw_id != '')
			echo '<li class="foot-twitter"><a href="http://www.facebook.com/'.$tw_id.'">Facebook</a></li>';

        if($li_id != '')
			echo '<li class="foot-twitter"><a href="http://www.linkedin.com/'.$li_id.'">Linkedin</a></li>';

        if($fl_id != '')
			echo '<li class="foot-twitter"><a href="http://www.flickr.com/photos/'.$fl_id.'">Flickr</a></li>';

        if($fe_id != '')
			echo '<li class="foot-twitter"><a href="http://feeds.feedburner.com/'.$fe_id.'">RSS Feed</a></li>';

        echo '</ul>';

        echo '</div>';

	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	function form($instance) {
        $title = esc_attr($instance['title']);
        $address = esc_attr($instance['address']);
		$phone = esc_attr($instance['phone']);
		$fax = esc_attr($instance['fax']);
		$email = esc_attr($instance['email']);
		$fa_id = esc_attr($instance['fa_id']);
        $tw_id = esc_attr($instance['tw_id']);
        $li_id = esc_attr($instance['li_id']);
        $fl_id = esc_attr($instance['fl_id']);
        $fe_id = esc_attr($instance['fe_id']);
		?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('address'); ?>" value="<?php echo $address; ?>" class="widefat" id="<?php echo $this->get_field_id('address'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo $phone; ?>" class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('fax'); ?>"><?php _e('Fax :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('fax'); ?>" value="<?php echo $fax; ?>" class="widefat" id="<?php echo $this->get_field_id('fax'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo $email; ?>" class="widefat" id="<?php echo $this->get_field_id('email'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('fa_id'); ?>"><?php _e('Facebook :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('fa_id'); ?>" value="<?php echo $fa_id; ?>" class="widefat" id="<?php echo $this->get_field_id('fa_id'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('tw_id'); ?>"><?php _e('Twitter :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('tw_id'); ?>" value="<?php echo $tw_id; ?>" class="widefat" id="<?php echo $this->get_field_id('tw_id'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('li_id'); ?>"><?php _e('Linkedin :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('li_id'); ?>" value="<?php echo $li_id; ?>" class="widefat" id="<?php echo $this->get_field_id('li_id'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('fl_id'); ?>"><?php _e('Flickr :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('fl_id'); ?>" value="<?php echo $fl_id; ?>" class="widefat" id="<?php echo $this->get_field_id('fl_id'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('fe_id'); ?>"><?php _e('RSS Feed :','themejunkie'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('fe_id'); ?>" value="<?php echo $fe_id; ?>" class="widefat" id="<?php echo $this->get_field_id('fe_id'); ?>" />
        </p>
        <?php
	}
}

register_widget('TJ_Contact');
?>
