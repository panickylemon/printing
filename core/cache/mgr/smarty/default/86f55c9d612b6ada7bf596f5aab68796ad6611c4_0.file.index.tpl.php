<?php /* Smarty version 3.1.27, created on 2016-12-15 20:39:27
         compiled from "C:\xampp\htdocs\printing\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:193225852f16f02c706_91520171%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86f55c9d612b6ada7bf596f5aab68796ad6611c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\printing\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1481657798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193225852f16f02c706_91520171',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5852f16f03c060_02010073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5852f16f03c060_02010073')) {
function content_5852f16f03c060_02010073 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '193225852f16f02c706_91520171';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>