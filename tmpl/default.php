<?php
/**
 * @package 	mod_odesigntabslider - A Super Responsive Tab Slider
 * @version		2.0.10
 * @created		Jan 2015
 * @author		oDesign
 * @email		odesignbd@gmail.com
 * @copyright	Copyright © 2015 oDesign. All rights reserved
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */ 
// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<?php if ($file1 || $file2 || $file3 || $file4 || $file5 || $file6 || $file7 || $file8 || $file9 || $file10 || $file11 || $file12 || $file13 || $file14 || $file15 || $file16 || $file17 || $file18 || $file19 || $file20) { ?>

<div class="tab_slider custom_<?php echo $moduleclass_sfx ?>">
<div id="wrapper">

<!-- odesign Slider Begin -->
<div id="slider1_container" style="position: relative; top: 0; margin-bottom: 0px; left: 0px; width: <?php echo $full_container_width.'px' ?>; height: <?php echo $full_container_height.'px' ?>; background: <?php echo $slider_bg_color ?>; overflow: hidden;"> 
      
      <!-- Loading Screen Begin -->
      <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
background-color: <?php echo $slider_bg_color ?>; top: 0px; left: 0px;width: 100%;height:100%;"> </div>
        <div style="position: absolute; display: block; background: url(modules/mod_odesigntabslider/tmpl/assets/img/loading.gif) no-repeat center center;
top: 0px; left: 0px;width: 100%;height:100%;"> </div>
      </div>
      <!-- Loading Screen End -->
      
      <!-- Slides Container Begin -->
      <div u="slides" class="slide-width" style="cursor: move; position: absolute; left: 0px; top: 0px;
      <?php if($tab_orientation==1||$tab_status==0||$tab_status==1): ?>
      width: <?php echo $full_container_width.'px' ?>;
      <?php elseif($tab_orientation_LR==1): ?>
      width: <?php echo $slide_width.'px' ?>;
      left: <?php echo $tab_width.'px' ?>;
      <?php else:?>
      width: <?php echo $slide_width.'px' ?>;
      <?php endif ; ?>
      height: <?php echo $full_container_height.'px' ?>; overflow: hidden;">


        <?php if(!empty($file1)):?>
        <div>
          <?php if(!empty($cap_desc1)):?>
          <a class="fancybox" href="<?php echo $file1 ?>" title="<?php echo $cap_desc1.'<br/>'.'<strong>'.$link1.'</strong>' ?>"><img u="image" src="<?php echo $file1 ?>" alt="<?php echo $cap_heading1 ?>" /></a>
          <?php elseif(!empty($link1)):?>
          <a href="<?php echo $link1 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file1 ?>" alt="<?php echo $cap_heading1 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file1 ?>" alt="<?php echo $cap_heading1 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file1 ?>" alt="<?php echo $cap_heading1 ?>" />
            <div class="t"><?php echo $cap_heading1 ?></div>
            <div class="c"><?php echo $cap_desc1 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file2)):?>
        <div>
          <?php if(!empty($cap_desc2)):?>
          <a class="fancybox" href="<?php echo $file2 ?>" title="<?php echo $cap_desc2.'<br/>'.'<strong>'.$link2.'</strong>' ?>"><img u="image" src="<?php echo $file2 ?>" alt="<?php echo $cap_heading2 ?>" /></a>
          <?php elseif(!empty($link2)):?>
          <a href="<?php echo $link2 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file2 ?>" alt="<?php echo $cap_heading2 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file2 ?>" alt="<?php echo $cap_heading2 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file2 ?>" alt="<?php echo $cap_heading2 ?>" />
            <div class="t"><?php echo $cap_heading2 ?></div>
            <div class="c"><?php echo $cap_desc2 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file3)):?>
        <div>
          <?php if(!empty($cap_desc3)):?>
          <a class="fancybox" href="<?php echo $file3 ?>" title="<?php echo $cap_desc3.'<br/>'.'<strong>'.$link3.'</strong>' ?>"><img u="image" src="<?php echo $file3 ?>" alt="<?php echo $cap_heading3 ?>" /></a>
          <?php elseif(!empty($link3)):?>
          <a href="<?php echo $link3 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file3 ?>" alt="<?php echo $cap_heading3 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file3 ?>" alt="<?php echo $cap_heading3 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file3 ?>" alt="<?php echo $cap_heading3 ?>" />
            <div class="t"><?php echo $cap_heading3 ?></div>
            <div class="c"><?php echo $cap_desc3 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file4)):?>
        <div>
          <?php if(!empty($cap_desc4)):?>
          <a class="fancybox" href="<?php echo $file4 ?>" title="<?php echo $cap_desc4.'<br/>'.'<strong>'.$link4.'</strong>' ?>"><img u="image" src="<?php echo $file4 ?>" alt="<?php echo $cap_heading4 ?>" /></a>
          <?php elseif(!empty($link4)):?>
          <a href="<?php echo $link4 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file4 ?>" alt="<?php echo $cap_heading4 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file4 ?>" alt="<?php echo $cap_heading4 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file4 ?>" alt="<?php echo $cap_heading4 ?>" />
            <div class="t"><?php echo $cap_heading4 ?></div>
            <div class="c"><?php echo $cap_desc4 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file5)):?>
        <div>
          <?php if(!empty($cap_desc5)):?>
          <a class="fancybox" href="<?php echo $file5 ?>" title="<?php echo $cap_desc5.'<br/>'.'<strong>'.$link5.'</strong>' ?>"><img u="image" src="<?php echo $file5 ?>" alt="<?php echo $cap_heading5 ?>" /></a>
          <?php elseif(!empty($link5)):?>
          <a href="<?php echo $link5 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file5 ?>" alt="<?php echo $cap_heading5 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file5 ?>" alt="<?php echo $cap_heading5 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file5 ?>" alt="<?php echo $cap_heading5 ?>" />
            <div class="t"><?php echo $cap_heading5 ?></div>
            <div class="c"><?php echo $cap_desc5 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file6)):?>
        <div>
          <?php if(!empty($cap_desc6)):?>
          <a class="fancybox" href="<?php echo $file6 ?>" title="<?php echo $cap_desc6.'<br/>'.'<strong>'.$link6.'</strong>' ?>"><img u="image" src="<?php echo $file6 ?>" alt="<?php echo $cap_heading6 ?>" /></a>
          <?php elseif(!empty($link6)):?>
          <a href="<?php echo $link6 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file6 ?>" alt="<?php echo $cap_heading6 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file6 ?>" alt="<?php echo $cap_heading6 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file6 ?>" alt="<?php echo $cap_heading6 ?>" />
            <div class="t"><?php echo $cap_heading6 ?></div>
            <div class="c"><?php echo $cap_desc6 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file7)):?>
        <div>
          <?php if(!empty($cap_desc7)):?>
          <a class="fancybox" href="<?php echo $file7 ?>" title="<?php echo $cap_desc7.'<br/>'.'<strong>'.$link7.'</strong>' ?>"><img u="image" src="<?php echo $file7 ?>" alt="<?php echo $cap_heading7 ?>" /></a>
          <?php elseif(!empty($link7)):?>
          <a href="<?php echo $link7 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file7 ?>" alt="<?php echo $cap_heading7 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file7 ?>" alt="<?php echo $cap_heading7 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file7 ?>" alt="<?php echo $cap_heading7 ?>" />
            <div class="t"><?php echo $cap_heading7 ?></div>
            <div class="c"><?php echo $cap_desc7 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file8)):?>
        <div>
          <?php if(!empty($cap_desc8)):?>
          <a class="fancybox" href="<?php echo $file8 ?>" title="<?php echo $cap_desc8.'<br/>'.'<strong>'.$link8.'</strong>' ?>"><img u="image" src="<?php echo $file8 ?>" alt="<?php echo $cap_heading8 ?>" /></a>
          <?php elseif(!empty($link8)):?>
          <a href="<?php echo $link8 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file8 ?>" alt="<?php echo $cap_heading8 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file8 ?>" alt="<?php echo $cap_heading8 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file8 ?>" alt="<?php echo $cap_heading8 ?>" />
            <div class="t"><?php echo $cap_heading8 ?></div>
            <div class="c"><?php echo $cap_desc8 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file9)):?>
        <div>
          <?php if(!empty($cap_desc9)):?>
          <a class="fancybox" href="<?php echo $file9 ?>" title="<?php echo $cap_desc9.'<br/>'.'<strong>'.$link9.'</strong>' ?>"><img u="image" src="<?php echo $file9 ?>" alt="<?php echo $cap_heading9 ?>" /></a>
          <?php elseif(!empty($link9)):?>
          <a href="<?php echo $link9 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file9 ?>" alt="<?php echo $cap_heading9 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file9 ?>" alt="<?php echo $cap_heading9 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file9 ?>" alt="<?php echo $cap_heading9 ?>" />
            <div class="t"><?php echo $cap_heading9 ?></div>
            <div class="c"><?php echo $cap_desc9 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file10)):?>
        <div>
          <?php if(!empty($cap_desc10)):?>
          <a class="fancybox" href="<?php echo $file10 ?>" title="<?php echo $cap_desc10.'<br/>'.'<strong>'.$link10.'</strong>' ?>"><img u="image" src="<?php echo $file10 ?>" alt="<?php echo $cap_heading10 ?>" /></a>
          <?php elseif(!empty($link10)):?>
          <a href="<?php echo $link10 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file10 ?>" alt="<?php echo $cap_heading10 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file10 ?>" alt="<?php echo $cap_heading10 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file10 ?>" alt="<?php echo $cap_heading10 ?>" />
            <div class="t"><?php echo $cap_heading10 ?></div>
            <div class="c"><?php echo $cap_desc10 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file11)):?>
        <div>
          <?php if(!empty($cap_desc11)):?>
          <a class="fancybox" href="<?php echo $file11 ?>" title="<?php echo $cap_desc11.'<br/>'.'<strong>'.$link11.'</strong>' ?>"><img u="image" src="<?php echo $file11 ?>" alt="<?php echo $cap_heading11 ?>" /></a>
          <?php elseif(!empty($link11)):?>
          <a href="<?php echo $link11 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file11 ?>" alt="<?php echo $cap_heading11 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file11 ?>" alt="<?php echo $cap_heading11 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file11 ?>" alt="<?php echo $cap_heading11 ?>" />
            <div class="t"><?php echo $cap_heading11 ?></div>
            <div class="c"><?php echo $cap_desc11 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file12)):?>
        <div>
          <?php if(!empty($cap_desc12)):?>
          <a class="fancybox" href="<?php echo $file12 ?>" title="<?php echo $cap_desc12.'<br/>'.'<strong>'.$link12.'</strong>' ?>"><img u="image" src="<?php echo $file12 ?>" alt="<?php echo $cap_heading12 ?>" /></a>
          <?php elseif(!empty($link12)):?>
          <a href="<?php echo $link12 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file12 ?>" alt="<?php echo $cap_heading12 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file12 ?>" alt="<?php echo $cap_heading12 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file12 ?>" alt="<?php echo $cap_heading12 ?>" />
            <div class="t"><?php echo $cap_heading12 ?></div>
            <div class="c"><?php echo $cap_desc12 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file13)):?>
        <div>
          <?php if(!empty($cap_desc13)):?>
          <a class="fancybox" href="<?php echo $file13 ?>" title="<?php echo $cap_desc13.'<br/>'.'<strong>'.$link13.'</strong>' ?>"><img u="image" src="<?php echo $file13 ?>" alt="<?php echo $cap_heading13 ?>" /></a>
          <?php elseif(!empty($link13)):?>
          <a href="<?php echo $link13 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file13 ?>" alt="<?php echo $cap_heading13 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file13 ?>" alt="<?php echo $cap_heading13 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file13 ?>" alt="<?php echo $cap_heading13 ?>" />
            <div class="t"><?php echo $cap_heading13 ?></div>
            <div class="c"><?php echo $cap_desc13 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file14)):?>
        <div>
          <?php if(!empty($cap_desc14)):?>
          <a class="fancybox" href="<?php echo $file14 ?>" title="<?php echo $cap_desc14.'<br/>'.'<strong>'.$link14.'</strong>' ?>"><img u="image" src="<?php echo $file14 ?>" alt="<?php echo $cap_heading14 ?>" /></a>
          <?php elseif(!empty($link14)):?>
          <a href="<?php echo $link14 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file14 ?>" alt="<?php echo $cap_heading14 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file14 ?>" alt="<?php echo $cap_heading14 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file14 ?>" alt="<?php echo $cap_heading14 ?>" />
            <div class="t"><?php echo $cap_heading14 ?></div>
            <div class="c"><?php echo $cap_desc14 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file15)):?>
        <div>
          <?php if(!empty($cap_desc15)):?>
          <a class="fancybox" href="<?php echo $file15 ?>" title="<?php echo $cap_desc15.'<br/>'.'<strong>'.$link15.'</strong>' ?>"><img u="image" src="<?php echo $file15 ?>" alt="<?php echo $cap_heading15 ?>" /></a>
          <?php elseif(!empty($link15)):?>
          <a href="<?php echo $link15 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file15 ?>" alt="<?php echo $cap_heading15 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file15 ?>" alt="<?php echo $cap_heading15 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file15 ?>" alt="<?php echo $cap_heading15 ?>" />

            <div class="t"><?php echo $cap_heading15 ?></div>
            <div class="c"><?php echo $cap_desc15 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file16)):?>
        <div>
          <?php if(!empty($cap_desc16)):?>
          <a class="fancybox" href="<?php echo $file16 ?>" title="<?php echo $cap_desc16.'<br/>'.'<strong>'.$link16.'</strong>' ?>"><img u="image" src="<?php echo $file16 ?>" alt="<?php echo $cap_heading16 ?>" /></a>
          <?php elseif(!empty($link16)):?>
          <a href="<?php echo $link16 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file16 ?>" alt="<?php echo $cap_heading16 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file16 ?>" alt="<?php echo $cap_heading16 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file16 ?>" alt="<?php echo $cap_heading16 ?>" />
            <div class="t"><?php echo $cap_heading16 ?></div>
            <div class="c"><?php echo $cap_desc16 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file17)):?>
        <div>
          <?php if(!empty($cap_desc17)):?>
          <a class="fancybox" href="<?php echo $file17 ?>" title="<?php echo $cap_desc17.'<br/>'.'<strong>'.$link17.'</strong>' ?>"><img u="image" src="<?php echo $file17 ?>" alt="<?php echo $cap_heading17 ?>" /></a>
          <?php elseif(!empty($link17)):?>
          <a href="<?php echo $link17 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file17 ?>" alt="<?php echo $cap_heading17 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file17 ?>" alt="<?php echo $cap_heading17 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file17 ?>" alt="<?php echo $cap_heading17 ?>" />
            <div class="t"><?php echo $cap_heading17 ?></div>
            <div class="c"><?php echo $cap_desc17 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file18)):?>
        <div>
          <?php if(!empty($cap_desc18)):?>
          <a class="fancybox" href="<?php echo $file18 ?>" title="<?php echo $cap_desc18.'<br/>'.'<strong>'.$link18.'</strong>' ?>"><img u="image" src="<?php echo $file18 ?>" alt="<?php echo $cap_heading18 ?>" /></a>
          <?php elseif(!empty($link18)):?>
          <a href="<?php echo $link18 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file18 ?>" alt="<?php echo $cap_heading18 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file18 ?>" alt="<?php echo $cap_heading18 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file18 ?>" alt="<?php echo $cap_heading18 ?>" />
            <div class="t"><?php echo $cap_heading18 ?></div>
            <div class="c"><?php echo $cap_desc18 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file19)):?>
        <div>
          <?php if(!empty($cap_desc19)):?>
          <a class="fancybox" href="<?php echo $file19 ?>" title="<?php echo $cap_desc19.'<br/>'.'<strong>'.$link19.'</strong>' ?>"><img u="image" src="<?php echo $file19 ?>" alt="<?php echo $cap_heading19 ?>" /></a>
          <?php elseif(!empty($link19)):?>
          <a href="<?php echo $link19 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file19 ?>" alt="<?php echo $cap_heading19 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file19 ?>" alt="<?php echo $cap_heading19 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file19 ?>" alt="<?php echo $cap_heading19 ?>" />
            <div class="t"><?php echo $cap_heading19 ?></div>
            <div class="c"><?php echo $cap_desc19 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
        <?php if(!empty($file20)):?>
        <div>
          <?php if(!empty($cap_desc20)):?>
          <a class="fancybox" href="<?php echo $file20 ?>" title="<?php echo $cap_desc20.'<br/>'.'<strong>'.$link20.'</strong>' ?>"><img u="image" src="<?php echo $file20 ?>" alt="<?php echo $cap_heading20 ?>" /></a>
          <?php elseif(!empty($link20)):?>
          <a href="<?php echo $link20 ?>" target="<?php echo $target ?>"><img u="image" src="<?php echo $file20 ?>" alt="<?php echo $cap_heading20 ?>" /></a>
          <?php else:?>
          <img u="image" src="<?php echo $file20 ?>" alt="<?php echo $cap_heading20 ?>" />
          <?php endif; ?>
          <div u="thumb"> <img class="i" src="<?php echo $file20 ?>" alt="<?php echo $cap_heading20 ?>" />
            <div class="t"><?php echo $cap_heading20 ?></div>
            <div class="c"><?php echo $cap_desc20 ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        
      </div>
      <!-- Slides Container End -->
      
      <!-- ThumbnailNavigator Skin Begin -->
      <div u="thumbnavigator" class="odesignt11" id="slider1_thumbnavigator" style="position: absolute; width: <?php echo $tab_width.'px' ?>; height: <?php echo $full_container_height.'px' ?>; <?php if($tab_orientation==1): ?>left:<?php echo $full_container_width.'px' ?>;<?php elseif($tab_orientation_LR==1): ?>left:0px;<?php else:?>left:<?php echo $slide_width.'px' ?>;<?php endif ; ?> top:0px;"> 
        <!-- Thumbnail Item Skin Begin -->
        <div u="slides" style="cursor: move; <?php if($tab_orientation==1): ?>left:<?php echo '-'.$full_container_width.'px' ?> !important; top: auto !important; bottom: 0px !important;<?php else:?>left: inherit; top: inherit; bottom: inherit;<?php endif ; ?>">
          <div u="prototype" class="p" style="position: absolute; width: <?php echo $tab_width.'px' ?>; height: 100px; top: 0; left: 0;">
            <div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div>
          </div>
        </div>
        <!-- Thumbnail Item Skin End --> 
      </div>
      <!-- ThumbnailNavigator Skin End -->

</div>
<!-- odesign Slider End --> 
    
</div>
</div>

<style type="text/css">
	.odesignt11 .p { background: <?php echo $tab_color ?>;}
	.odesignt11 .pav, .odesignt11 .pdn { background: <?php echo $tab_color_active ?>;}
	.odesignt11 .p:hover, .odesignt11 .phv, .odesignt11 .pav:hover { background: <?php echo $tab_color_hover ?>;}
	.odesignt11 .t { color: <?php echo $heading_color ?>; font-size: <?php echo $heading_fontsize.'px' ?>; text-align: <?php echo $heading_textalign ?>;}
	.odesignt11 .c { color: <?php echo $desc_color ?>; font-size: <?php echo $desc_fontsize.'px' ?>; text-align: <?php echo $desc_textalign ?>;}
	.fancybox-title-over-wrap { background: rgba(0, 0, 0, <?php echo $lbox_capbgopacity ?>);
}
</style>

<script type="text/javascript">
	jQuery.noConflict();
	jQuery(document).ready(function ($) {
		var options = {
		//Slide Options Begin
		$AutoPlay: <?php echo $autoplay ?>,
		$AutoPlaySteps: <?php echo $autoplay_steps ?>,
		$AutoPlayInterval: <?php echo $slide_interval ?>,
		$PauseOnHover: <?php echo $Pause_on_hover ?>,
		$ArrowKeyNavigation: <?php echo $keyboard_nav ?>,
		$SlideDuration: <?php echo $trans_speed ?>,
		$MinDragOffsetToSlide: 20,
		$SlideSpacing: 0,
		$DisplayPieces: 1,
		$ParkingPosition: 0,
		$UISearchMode: 1,
		$PlayOrientation: <?php echo $slide_direction ?>,
		$DragOrientation: <?php echo $drag_orientation ?>,
		//Slide Options End
		
		//Navigator Options Begin
		$ThumbnailNavigatorOptions: {
		$Class: $odesignThumbnailNavigator$,
		$ChanceToShow: <?php echo $tab_status ?>,
		$Loop: <?php echo $tab_loop ?>,
		$AutoCenter: 3,
		$Lanes: 1,
		$SpacingX: <?php if($tab_orientation==1): ?><?php echo $tab_spacing_X ?><?php else:?>null<?php endif ; ?>,
		$SpacingY: <?php if($tab_orientation==2): ?><?php echo $tab_spacing_Y ?><?php else:?>null<?php endif ; ?>,
		$DisplayPieces: <?php echo $tab_count ?>,
		$ParkingPosition: 0,
		$Orientation: <?php echo $tab_orientation ?>,
		$DisableDrag: <?php echo $disable_drag ?>,
		}
		};
				
		var windowWidth = $(window).width();

        if (windowWidth <= <?php echo $disable_tab_mb ?>) {

            $("#slider1_thumbnavigator").remove();
            $("#slider1_container").width("<?php echo $full_container_width.'px' ?>");
			$(".slide-width").width("<?php echo $full_container_width.'px' ?>");
            $("#slider1_container #theSlides").css("left",0);
        }

		var odesign_slider1 = new $odesignSlider$("slider1_container", options);
		//Navigator Options End
		
		//responsive code Begin
		function ScaleSlider() {
		var parentWidth = odesign_slider1.$Elmt.parentNode.clientWidth;
		if (parentWidth) {
		var sliderWidth = parentWidth;

		sliderWidth = Math.min(sliderWidth, <?php echo $full_container_width ?>);
		odesign_slider1.$ScaleWidth(sliderWidth);
		}
		else
		window.setTimeout(ScaleSlider, 30);
		}
		ScaleSlider();
		
		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);
		//responsive code End
		});
	
	jQuery(document).ready(function() {
	jQuery(".fancybox").attr('rel', 'media-gallery').fancybox({
		//Light Box Options Begin
		padding		: <?php echo $lbox_padding ?>,
		maxWidth	: <?php echo $lbox_maxwidth ?>,
		maxHeight	: <?php echo $lbox_maxheight ?>,
		prevSpeed	: <?php echo $lbox_prevnextSpeed ?>,
		nextSpeed	: <?php echo $lbox_prevnextSpeed ?>,
		openSpeed	: <?php echo $lbox_opencloseSpeed ?>,
		closeSpeed	: <?php echo $lbox_opencloseSpeed ?>,
		prevEffect	: '<?php echo $lbox_prevnextEffect ?>',
		nextEffect	: '<?php echo $lbox_prevnextEffect ?>',
		openEffect	: '<?php echo $lbox_opencloseEffect ?>',
		closeEffect	: '<?php echo $lbox_opencloseEffect ?>',
		closeClick	: <?php echo $lbox_closeonclick ?>,
		closeBtn	: <?php echo $lbox_showclosebtn ?>,
		arrows		: <?php echo $lbox_showarrows ?>,
		fitToView	: true,
		autoSize	: true,
		helpers		: {
			title	: { type : '<?php echo $lbox_capposition ?>'},
			//buttons	: {},
					  }
		//Light Box Options End
	});
	});
	
	/*jQuery(document).ready(function() {
	jQuery(".slide-width a").hover(function(){
    jQuery(this).removeAttr("title");
});
	});*/

</script>

<?php } else { ?>
	<p><?php echo JText::_('Please Enter Any File and Information'); ?></p>
<?php } ?>