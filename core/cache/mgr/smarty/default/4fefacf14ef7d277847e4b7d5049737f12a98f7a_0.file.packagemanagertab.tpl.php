<?php /* Smarty version 3.1.27, created on 2016-12-17 18:12:47
         compiled from "C:\xampp\htdocs\printing\core\components\migx\templates\mgr\packagemanagertab.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:89785855720f3854a2_74939933%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fefacf14ef7d277847e4b7d5049737f12a98f7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\printing\\core\\components\\migx\\templates\\mgr\\packagemanagertab.tpl',
      1 => 1481994619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89785855720f3854a2_74939933',
  'variables' => 
  array (
    'cmptabcaption' => 0,
    'cmptabdescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5855720f4513f7_13552866',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5855720f4513f7_13552866')) {
function content_5855720f4513f7_13552866 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '89785855720f3854a2_74939933';
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
        id: 'migx_packagemanager_form',
        standardSubmit: true,
        url: config.src,
        items: [{
            xtype: 'textfield',
            name: 'packageName',
            id: 'migxpm_packageName',
            fieldLabel: 'Package Name'
        },
        {
            xtype: 'combo',
            name: 'use_custom_prefix',
            id: 'migxpm_use_custom_prefix',
            fieldLabel: 'table-prefix',
            store: [['0', 'Default Prefix'],['1', 'Custom Prefix']],
            typeAhead: false,
            editable: false,
            forceSelection: true,
            triggerAction: 'all',
            selectOnFocus:true,
            mode: 'local',
            value: '0'            
        },        
        {
            xtype: 'textfield',
            name: 'prefix',
            id: 'migxpm_prefix',
            fieldLabel: 'custom-prefix'
        },
        {
            xtype: 'modx-tabs',
            id: 'migx-tab-packagemanager',
            defaults: {
                border: false,
                autoHeight: true
            },
            border: true,
            items: [{
                title: 'Create Package',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Create new package-directory and an empty schema-file</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('createPackage')},
                    text: 'Create Package',
                    scope: this
                }]
            },{
                title: 'Write schema',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Write schema from existing tables</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('writeSchema')},
                    text: 'Write schema',
                    scope: this
                }]
            },{
                title: 'parse Schema',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Create xpdo-classes and maps if new or manipulate existing maps from schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('parseSchema')},
                    text: 'parse Schema',
                    scope: this
                }]
            },{
                title: 'create Tables',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Create tables from schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('createTables')},
                    text: 'create Tables',
                    scope: this
                }]
            },{
                title: 'Add fields',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Add missing fields to package-tables from schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('addmissing')},
                    text: 'Add fields',
                    scope: this
                }]
            },{
                title: 'Remove fields',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Remove in schema not existing fields from package-tables</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('removedeleted')},
                    text: 'Remove fields',
                    scope: this
                }]
            },{
                title: 'Update indexes',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Add new indexes from schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('checkindexes')},
                    text: 'Update indexes',
                    scope: this
                }]
            },{
                title: 'Alter fields',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Alter fields from schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('alterfields')},
                    text: 'Alter fields',
                    scope: this
                }]
            },{
                title: 'Xml Schema',
                layout:'form',
                defaults: {
                    autoHeight: false
                },
                items: [{
                    html: '<p>Load/Edit schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'textarea',
                    name: 'schema',
                    height: '350' ,
                    width: '800' ,
                    id: 'migxpm_schema',
                    fieldLabel: 'Schema'
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('loadSchema')},
                    text: 'Load schema',
                    scope: this
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('saveSchema')},
                    text: 'Save schema',
                    scope: this
                }]
            }]
        }]
    }]
}





<?php }
}
?>