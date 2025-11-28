<?php
/* Smarty version 5.4.2, created on 2025-11-28 16:25:51
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6929beff0388e3_81568060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d6760264de54295223e9636c2c461cf213b6a02' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1764342018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6929beff0388e3_81568060 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php05\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7404811936929beff020774_53616664', 'content');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7732113026929beff027197_65884269', 'sidebar');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_7404811936929beff020774_53616664 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php05\\app\\views';
?>

<form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute#wynik">
	<div class="row gtr-uniform gtr-50">
		<div class="col-8 col-12-xsmall">
			<input type="text" name="kwota" id="kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
" placeholder="Kwota" />
		</div>
		<div class="col-8 col-12-xsmall">
				<input type="text" name="lata" id="lata" value="<?php echo $_smarty_tpl->getValue('form')->lata;?>
" placeholder="Ile lat" />
		</div>
		<div class="col-8 col-12-xsmall">
				<input type="text" name="procent" id="procent" value="<?php echo $_smarty_tpl->getValue('form')->procent;?>
" placeholder="Na jaki procent" />
		</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Oblicz" class="primary" /></li>
				</ul>
			</div>
	</div>
</form>
<?php
}
}
/* {/block 'content'} */
/* {block 'sidebar'} */
class Block_7732113026929beff027197_65884269 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php05\\app\\views';
?>

<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('err');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('res')->rata ?? null))) {?>
	<a id="wynik"></a>
	<h4>Miesięczna rata: </h4>
	<p class="res">
	<?php echo $_smarty_tpl->getValue('res')->rata;?>
 zł
	</p>
<?php }
}
}
/* {/block 'sidebar'} */
}
