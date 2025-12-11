<?php
/* Smarty version 5.4.2, created on 2025-12-11 22:37:33
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_693b399de99049_51755491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabdc24fd383d747e86314d67b04a996100a9292' => 
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
function content_693b399de99049_51755491 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php07\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1585760257693b399de33bb7_27372318', 'userData');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_396808278693b399de3a855_59777013', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'userData'} */
class Block_1585760257693b399de33bb7_27372318 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php07\\app\\views';
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
class Block_396808278693b399de3a855_59777013 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php07\\app\\views';
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
