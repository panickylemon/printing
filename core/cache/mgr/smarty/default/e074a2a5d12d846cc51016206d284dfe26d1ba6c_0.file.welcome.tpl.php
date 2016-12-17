<?php /* Smarty version 3.1.27, created on 2016-12-14 09:16:20
         compiled from "C:\xampp\htdocs\printing\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:236725850ffd422ff58_03206228%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e074a2a5d12d846cc51016206d284dfe26d1ba6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\printing\\manager\\templates\\default\\welcome.tpl',
      1 => 1481657798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236725850ffd422ff58_03206228',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5850ffd4235187_39310145',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5850ffd4235187_39310145')) {
function content_5850ffd4235187_39310145 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '236725850ffd422ff58_03206228';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>