<?php
/* Smarty version 3.1.31, created on 2018-01-18 11:40:54
  from "F:\xampp\htdocs\vueDemo\web\template\Default\PageList\Category\test.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a601746372970_16967413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deb4d9afdb83aef8479c127db191ef2aff6613a2' => 
    array (
      0 => 'F:\\xampp\\htdocs\\vueDemo\\web\\template\\Default\\PageList\\Category\\test.php',
      1 => 1516246851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a601746372970_16967413 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_test')) require_once 'F:\\xampp\\htdocs\\vueDemo\\common\\lib\\smarty\\block.test.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('test', array());
$_block_repeat=true;
echo smarty_block_test(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>  
     <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['catid'];
echo $_smarty_tpl->tpl_vars['v']->value['catname'];?>
</a></li>  
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
  
<?php $_block_repeat=false;
echo smarty_block_test(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
