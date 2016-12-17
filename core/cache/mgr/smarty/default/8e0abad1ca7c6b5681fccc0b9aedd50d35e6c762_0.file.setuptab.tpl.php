<?php /* Smarty version 3.1.27, created on 2016-12-17 18:12:47
         compiled from "C:\xampp\htdocs\printing\core\components\migx\templates\mgr\setuptab.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:241585855720fdaf623_24426401%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e0abad1ca7c6b5681fccc0b9aedd50d35e6c762' => 
    array (
      0 => 'C:\\xampp\\htdocs\\printing\\core\\components\\migx\\templates\\mgr\\setuptab.tpl',
      1 => 1481994619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241585855720fdaf623_24426401',
  'variables' => 
  array (
    'cmptabcaption' => 0,
    'cmptabdescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5855720fdc1530_46966101',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5855720fdc1530_46966101')) {
function content_5855720fdc1530_46966101 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '241585855720fdaf623_24426401';
?>
 
{
    title: '<?php echo $_smarty_tpl->tpl_vars['cmptabcaption']->value;?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo $_smarty_tpl->tpl_vars['cmptabdescription']->value;?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'form',
        id: 'migx_setup_form',
        standardSubmit: true,
        url: config.src,
        items: [{
            xtype: 'modx-tabs',
            id: 'migx-tab-setup',
            defaults: {
                border: false,
                autoHeight: true
            },
            border: true,
            items: [{
                title: 'Setup',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Setup MIGX-Configurator. (Creates/upgrades Configurations-table)</p>'
                         +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('setupmigx')},
                    text: 'Setup',
                    scope: this
                }]
            },{
                title: 'Upgrade MIGX',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Adds the autoinc-field MIGX_id to all existing MIGX-TVs from older Versions</p>'
                    +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('upgrademigx')},
                    text: 'Upgrade',
                    scope: this
                }]
            }]
        }]
    }]
}





<?php }
}
?>