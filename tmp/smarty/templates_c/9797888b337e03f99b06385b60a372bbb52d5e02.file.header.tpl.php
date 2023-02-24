<?php /* Smarty version Smarty-3.1.6, created on 2023-02-24 07:07:17
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83083713463f835ab846849-88714348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1677211634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83083713463f835ab846849-88714348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_63f835ab86709',
  'variables' => 
  array (
    'templateWebPath' => 0,
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63f835ab86709')) {function content_63f835ab86709($_smarty_tpl) {?><html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    </head>
    <body>

        <div id="header">
            <h1>my shop - интернет магазин</h1>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div id="centerColumn">
            centerColumn
<?php }} ?>