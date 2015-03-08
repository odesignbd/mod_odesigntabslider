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

$document = JFactory::getDocument();
// Slider
$document->addScript(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/js/jquery-noconflict.js');
$document->addScript(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/js/jquery-1.9.1.min.js');
$document->addScript(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/js/odesign.tabslider.js');
$document->addScript(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/js/odesign.js');
$document->addStyleSheet(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/css/odesign.tabslider.css');
// Lightbox
$document->addScript(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/js/jquery.odesign.lightbox.js');
$document->addStyleSheet(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/css/odesign.lightbox.css');


$file1					= $params->get('file1');
$link1					= $params->get('link1');
$cap_heading1			= $params->get('cap_heading1');
$cap_desc1				= $params->get('cap_desc1');
$file2					= $params->get('file2');
$link2					= $params->get('link2');
$cap_heading2			= $params->get('cap_heading2');
$cap_desc2				= $params->get('cap_desc2');
$file3					= $params->get('file3');
$link3					= $params->get('link3');
$cap_heading3			= $params->get('cap_heading3');
$cap_desc3				= $params->get('cap_desc3');
$file4					= $params->get('file4');
$link4					= $params->get('link4');
$cap_heading4			= $params->get('cap_heading4');
$cap_desc4				= $params->get('cap_desc4');
$file5					= $params->get('file5');
$link5					= $params->get('link5');
$cap_heading5			= $params->get('cap_heading5');
$cap_desc5				= $params->get('cap_desc5');
$file6					= $params->get('file6');
$link6					= $params->get('link6');
$cap_heading6			= $params->get('cap_heading6');
$cap_desc6				= $params->get('cap_desc6');
$file7					= $params->get('file7');
$link7					= $params->get('link7');
$cap_heading7			= $params->get('cap_heading7');
$cap_desc7				= $params->get('cap_desc7');
$file8					= $params->get('file8');
$link8					= $params->get('link8');
$cap_heading8			= $params->get('cap_heading8');
$cap_desc8				= $params->get('cap_desc8');
$file9					= $params->get('file9');
$link9					= $params->get('link9');
$cap_heading9			= $params->get('cap_heading9');
$cap_desc9				= $params->get('cap_desc9');
$file10					= $params->get('file10');
$link10					= $params->get('link10');
$cap_heading10			= $params->get('cap_heading10');
$cap_desc10				= $params->get('cap_desc10');
$file11					= $params->get('file11');
$link11					= $params->get('link11');
$cap_heading11			= $params->get('cap_heading11');
$cap_desc11				= $params->get('cap_desc11');
$file12					= $params->get('file12');
$link12					= $params->get('link12');
$cap_heading12			= $params->get('cap_heading12');
$cap_desc12				= $params->get('cap_desc12');
$file13					= $params->get('file13');
$link13					= $params->get('link13');
$cap_heading13			= $params->get('cap_heading13');
$cap_desc13				= $params->get('cap_desc13');
$file14					= $params->get('file14');
$link14					= $params->get('link14');
$cap_heading14			= $params->get('cap_heading14');
$cap_desc14				= $params->get('cap_desc14');
$file15					= $params->get('file15');
$link15					= $params->get('link15');
$cap_heading15			= $params->get('cap_heading15');
$cap_desc15				= $params->get('cap_desc15');
$file16					= $params->get('file16');
$link16					= $params->get('link16');
$cap_heading16			= $params->get('cap_heading16');
$cap_desc16				= $params->get('cap_desc16');
$file17					= $params->get('file17');
$link17					= $params->get('link17');
$cap_heading17			= $params->get('cap_heading17');
$cap_desc17				= $params->get('cap_desc17');
$file18					= $params->get('file18');
$link18					= $params->get('link18');
$cap_heading18			= $params->get('cap_heading18');
$cap_desc18				= $params->get('cap_desc18');
$file19					= $params->get('file19');
$link19					= $params->get('link19');
$cap_heading19			= $params->get('cap_heading19');
$cap_desc19				= $params->get('cap_desc19');
$file20					= $params->get('file20');
$link20					= $params->get('link20');
$cap_heading20			= $params->get('cap_heading20');
$cap_desc20				= $params->get('cap_desc20');
$target					= $params->get('target');
$full_container_width	= $params->get('full_container_width');
$full_container_height	= $params->get('full_container_height');
$slide_width			= $params->get('slide_width');
$tab_width				= $params->get('tab_width');
$disable_tab_mb			= $params->get('disable_tab_mb');
$autoplay				= $params->get('autoplay');
$Pause_on_hover			= $params->get('Pause_on_hover');
$autoplay_steps			= $params->get('autoplay_steps');
$slide_interval			= $params->get('slide_interval');
$slide_direction		= $params->get('slide_direction');
$trans_speed			= $params->get('trans_speed');
$keyboard_nav			= $params->get('keyboard_nav');
$drag_orientation		= $params->get('drag_orientation');
$tab_status				= $params->get('tab_status');
$tab_loop				= $params->get('tab_loop');
$tab_spacing_X			= $params->get('tab_spacing_X');
$tab_spacing_Y			= $params->get('tab_spacing_Y');
$tab_count				= $params->get('tab_count');
$tab_orientation		= $params->get('tab_orientation');
$tab_orientation_LR		= $params->get('tab_orientation_LR');
$disable_drag			= $params->get('disable_drag');
$slider_bg_color		= $params->get('slider_bg_color');
$tab_color				= $params->get('tab_color');
$tab_color_active		= $params->get('tab_color_active');
$tab_color_hover		= $params->get('tab_color_hover');
$heading_color			= $params->get('heading_color');
$heading_fontsize		= $params->get('heading_fontsize');
$heading_textalign		= $params->get('heading_textalign');
$desc_color				= $params->get('desc_color');
$desc_fontsize			= $params->get('desc_fontsize');
$desc_textalign			= $params->get('desc_textalign');
$lbox_padding			= $params->get('lbox_padding');
$lbox_maxwidth			= $params->get('lbox_maxwidth');
$lbox_maxheight			= $params->get('lbox_maxheight');
$lbox_prevnextSpeed		= $params->get('lbox_prevnextSpeed');
$lbox_opencloseSpeed	= $params->get('lbox_opencloseSpeed');
$lbox_prevnextEffect	= $params->get('lbox_prevnextEffect');
$lbox_opencloseEffect	= $params->get('lbox_opencloseEffect');
$lbox_closeonclick		= $params->get('lbox_closeonclick');
$lbox_showclosebtn		= $params->get('lbox_showclosebtn');
$lbox_showarrows		= $params->get('lbox_showarrows');
$lbox_capposition		= $params->get('lbox_capposition');
$lbox_capbgopacity		= $params->get('lbox_capbgopacity');

$moduleclass_sfx	= htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_odesigntabslider', $params->get('layout', 'default'));
?>