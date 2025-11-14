<?php
/* Smarty version 5.4.2, created on 2025-11-14 12:59:21
  from 'file:C:\xampp\htdocs\php03/app/credit_calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6917199913e588_75518681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e826996fbfb04ae5bd80fe84546c26c5d758f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php03/app/credit_calc.tpl',
      1 => 1763121207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6917199913e588_75518681 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php03\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_151966462269171999130f46_02065931', 'content');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_85305188569171999133f26_60875741', 'sidebar');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_151966462269171999130f46_02065931 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php03\\app';
?>

<form method="post" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/credit_calc.php#wynik">
	<div class="row gtr-uniform gtr-50">
		<div class="col-8 col-12-xsmall">
			<input type="text" name="kwota" id="kwota" value="<?php echo $_smarty_tpl->getValue('form')['kwota'];?>
" placeholder="Kwota" />
		</div>
		<div class="col-8 col-12-xsmall">
				<input type="text" name="lata" id="lata" value="<?php echo $_smarty_tpl->getValue('form')['lata'];?>
" placeholder="Ile lat" />
		</div>
		<div class="col-8 col-12-xsmall">
				<input type="text" name="procent" id="procent" value="<?php echo $_smarty_tpl->getValue('form')['procent'];?>
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
class Block_85305188569171999133f26_60875741 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php03\\app';
?>

<?php if ((null !== ($_smarty_tpl->getValue('msgs') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('msgs')) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
	<a id="wynik"></a>
	<h4>Miesięczna rata: </h4>
	<p class="res">
	<?php echo $_smarty_tpl->getValue('result');?>
 zł
	</p>
<?php }
}
}
/* {/block 'sidebar'} */
}
