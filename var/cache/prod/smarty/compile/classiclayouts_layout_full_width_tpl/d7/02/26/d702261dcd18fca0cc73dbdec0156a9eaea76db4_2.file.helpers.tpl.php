<?php
/* Smarty version 3.1.48, created on 2023-07-22 14:55:36
  from 'C:\xampp_7.4.1\htdocs\prestashop_2\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64bc3438d162e7_89249864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd702261dcd18fca0cc73dbdec0156a9eaea76db4' => 
    array (
      0 => 'C:\\xampp_7.4.1\\htdocs\\prestashop_2\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1689808066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64bc3438d162e7_89249864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp_7.4.1\\htdocs\\prestashop_2\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\d7\\02\\26\\d702261dcd18fca0cc73dbdec0156a9eaea76db4_2.file.helpers.tpl.php',
    'uid' => 'd702261dcd18fca0cc73dbdec0156a9eaea76db4',
    'call_name' => 'smarty_template_function_renderLogo_150031435964bc3438d12807_14064890',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_150031435964bc3438d12807_14064890 */
if (!function_exists('smarty_template_function_renderLogo_150031435964bc3438d12807_14064890')) {
function smarty_template_function_renderLogo_150031435964bc3438d12807_14064890(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_150031435964bc3438d12807_14064890 */
}
