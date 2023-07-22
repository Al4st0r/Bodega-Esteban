<?php
/* Smarty version 3.1.48, created on 2023-07-22 14:55:36
  from 'C:\xampp_7.4.1\htdocs\prestashop_2\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64bc3438cf56a0_87898346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea610536dd7f87b15263e2f3aea13872e9325f69' => 
    array (
      0 => 'C:\\xampp_7.4.1\\htdocs\\prestashop_2\\themes\\classic\\templates\\page.tpl',
      1 => 1689808066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64bc3438cf56a0_87898346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170077724864bc3438cf1981_38234869', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_3986369364bc3438cf2079_07039967 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_126993114864bc3438cf1cc8_63135281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3986369364bc3438cf2079_07039967', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_27626345264bc3438cf40c6_92058550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_40264740564bc3438cf4511_62375396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17995364164bc3438cf3dc1_51696235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27626345264bc3438cf40c6_92058550', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40264740564bc3438cf4511_62375396', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_33124901364bc3438cf4e64_38457904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14831037964bc3438cf4bc3_62702570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33124901364bc3438cf4e64_38457904', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_170077724864bc3438cf1981_38234869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_170077724864bc3438cf1981_38234869',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_126993114864bc3438cf1cc8_63135281',
  ),
  'page_title' => 
  array (
    0 => 'Block_3986369364bc3438cf2079_07039967',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17995364164bc3438cf3dc1_51696235',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_27626345264bc3438cf40c6_92058550',
  ),
  'page_content' => 
  array (
    0 => 'Block_40264740564bc3438cf4511_62375396',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14831037964bc3438cf4bc3_62702570',
  ),
  'page_footer' => 
  array (
    0 => 'Block_33124901364bc3438cf4e64_38457904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126993114864bc3438cf1cc8_63135281', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17995364164bc3438cf3dc1_51696235', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14831037964bc3438cf4bc3_62702570', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
