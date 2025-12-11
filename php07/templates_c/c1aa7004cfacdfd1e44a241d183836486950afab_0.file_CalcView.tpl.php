<?php
/* Smarty version 5.4.2, created on 2025-12-05 01:08:29
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6932227d6e5b83_29923026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1aa7004cfacdfd1e44a241d183836486950afab' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1764893062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_6932227d6e5b83_29923026 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php06\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7186251466932227d6b4175_13227587', 'userData');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14875842806932227d6c8d69_72672605', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'userData'} */
class Block_7186251466932227d6b4175_13227587 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php06\\app\\views';
?>

<ul>
	<li><p>użytkownik: <?php echo $_smarty_tpl->getValue('user')->login;?>
</p></li>
	<li><p>rola: <?php echo $_smarty_tpl->getValue('user')->role;?>
</p></li>
	<li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout" class="button primary">Wyloguj</a></li>
</ul>
<?php
}
}
/* {/block 'userData'} */
/* {block 'content'} */
class Block_14875842806932227d6c8d69_72672605 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php06\\app\\views';
?>

<header class="major">
<h2>Kalkulator kredytowy</h2>
</header>
<div class="row gtr-150">
	<div class="col-8 col-12-medium">
		<section id="content">
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
		</section>
	</div>
	<div class="col-4 col-12-medium">
		<section id="sidebar">
			<section>
				<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
				<?php if ((null !== ($_smarty_tpl->getValue('res')->rata ?? null))) {?>
					<a id="wynik"></a>
					<h4>Miesięczna rata: </h4>
					<p class="res">
					<?php echo $_smarty_tpl->getValue('res')->rata;?>
 zł
					</p>
				<?php }?>
			</section>
		</section>
	</div>
</div>
<?php
}
}
/* {/block 'content'} */
}
