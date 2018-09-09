<?php
if ( is_active_sidebar('main-sidebare') ) {
	dynamic_sidebar( 'main-sidebare' );
	echo 'string sidebar';
} else {
	_e('This is widget area. Go to Appearance -> Widgets to add some widgets.', 'thachpham');
}
?>