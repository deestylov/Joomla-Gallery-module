<?php
/**
* About block Element
* @package News Show Pro GK4
* @Copyright (C) 2009-2011 Gavick.com
* @ All rights reserved
* @ Joomla! is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: GK4 1.0 $
**/
defined('JPATH_BASE') or die;
jimport('joomla.form.formfield');
class JFormFieldAbout extends JFormField {
	protected $type = 'About';
	protected function getInput() {
	return '
    <style>#jform_params_about_us-lbl {display:none;}#jform_params_stylecarus {width:100%!important; height:230px!important;}</style>
<div style="margin-bottom:5px;font-size: 14px;">Автор: Роман Дистайлов</div>
<div style="
    font-size: 19px;
">Модуль позволяет выводит галерею на вашем сайте.</div>';
	}
}
/* eof */
