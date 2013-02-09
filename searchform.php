<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<input type="text" onblur="if (this.value == '') {this.value = 'Find info with keywords..';}" onfocus="if (this.value == 'Find info with keywords..') {this.value = '';}" value="<?php the_search_query(); ?>" name="s" id="s" alt="Search Form" /><input type="submit" id="searchsubmit" alt="Search Submit" value="" />
</form>


