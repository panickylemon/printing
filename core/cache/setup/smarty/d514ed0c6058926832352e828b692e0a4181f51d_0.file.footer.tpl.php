<?php /* Smarty version 3.1.27, created on 2016-12-11 16:48:23
         compiled from "C:\xampp\htdocs\printing\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8974584d7547c8c934_26565322%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd514ed0c6058926832352e828b692e0a4181f51d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\printing\\setup\\templates\\footer.tpl',
      1 => 1481469571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8974584d7547c8c934_26565322',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584d7547cae259_60391027',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584d7547cae259_60391027')) {
function content_584d7547cae259_60391027 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/xampp/htdocs/printing/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '8974584d7547c8c934_26565322';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>