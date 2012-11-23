﻿<xml version="1.0" encoding="utf-8">
<cu3er>
	<settings>
		<general 
			slide_panel_width="900" 
			slide_panel_height="275" 
			slide_panel_horizontal_align="center" 
			slide_panel_vertical_align="top" 
			ui_visibility_time="2"
		/>

		<auto_play>
			<defaults symbol="circular" time="3" />
			<tweenIn x="870" y="30" width="35" height="35" tint="0xFFFFFF" />
		</auto_play>
      
    	<prev_button>
			<defaults round_corners="5,5,5,5"/>
			<tweenOver tint="0xFFFFFF" scaleX="1.1" scaleY="1.1"/>
			<tweenOut tint="0x000000" />
		</prev_button>
		
    	<prev_symbol>
			<tweenOver tint="0x000000" />			
		</prev_symbol>
		
    	<next_button>
			<defaults round_corners="5,5,5,5"/>			
			<tweenOver tint="0xFFFFFF"  scaleX="1.1" scaleY="1.1"/>
			<tweenOut tint="0x000000" />
		</next_button>
		
    	<next_symbol>
			<tweenOver tint="0x000000" />
		</next_symbol>	
			
	</settings>    

	<slides>
        <slide>
            <url><?php bloginfo('template_url'); ?>/images/drivers-mentors.jpg</url>
        </slide>
		<!-- changing transition between first & second slide -->
        <transition num="3" slicing="vertical" direction="down"/>
        <slide>
			<link target="_self">/about/c-o-r-e-values</link>
       		<url><?php bloginfo('template_url'); ?>/images/slide_1.jpg</url>
        </slide>		
		<!-- changing transition between second & third slide -->
        <transition num="4" direction="right" shader="flat" />
		<slide>
			<link target="_self">/safety</link>
            <url><?php bloginfo('template_url'); ?>/images/slide_2.jpg</url>
        </slide>
		<!-- transitions properties defined in transitions template -->
		<slide>
			<link target="_self">/about</link>
       		<url><?php bloginfo('template_url'); ?>/images/slide_3.jpg</url>
        </slide>
        <!-- transitions properties defined in transitions template -->
		<transition num="6" slicing="vertical" direction="up" shader="flat" delay="0.05" z_multiplier="4" />
        <slide>
			<link>http://twitter.com/core2062</link>
       		<url><?php bloginfo('template_url'); ?>/images/slide_5.jpg</url>
        </slide>
		<transition num="6" slicing="vertical" direction="up" shader="flat" delay="0.05" z_multiplier="4" />
        <slide>
       		<url><?php bloginfo('template_url'); ?>/images/slide_6.jpg</url>
        </slide>
				
	</slides>
</cu3er>

