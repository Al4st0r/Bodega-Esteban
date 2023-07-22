<?php
/* Smarty version 3.1.48, created on 2023-07-22 14:55:36
  from 'C:\xampp_7.4.1\htdocs\prestashop_2\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64bc3438ce9817_78732336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f0b2d46462ef64ace9ec5ebe3a430cbc36c6706' => 
    array (
      0 => 'C:\\xampp_7.4.1\\htdocs\\prestashop_2\\themes\\classic\\templates\\index.tpl',
      1 => 1689808066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64bc3438ce9817_78732336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27445635764bc3438ce7eb2_17279581', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_147786142864bc3438ce8224_32391277 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_175893704564bc3438ce8a02_22524521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_139878699364bc3438ce8757_58197265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175893704564bc3438ce8a02_22524521', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_27445635764bc3438ce7eb2_17279581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_27445635764bc3438ce7eb2_17279581',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_147786142864bc3438ce8224_32391277',
  ),
  'page_content' => 
  array (
    0 => 'Block_139878699364bc3438ce8757_58197265',
  ),
  'hook_home' => 
  array (
    0 => 'Block_175893704564bc3438ce8a02_22524521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147786142864bc3438ce8224_32391277', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139878699364bc3438ce8757_58197265', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
