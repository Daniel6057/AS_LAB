<?php
/* Smarty version 5.4.2, created on 2025-12-05 01:02:25
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69322111c99e90_65827354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1498b4ecee02326862553ec4104476ddb86eb94' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1764888534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_69322111c99e90_65827354 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php06\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_145706474969322111c86c49_77989055', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_145706474969322111c86c49_77989055 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php06\\app\\views';
?>


<header class="major">
	<h2>Logowanie</h2>
</header>
<section id="content">
	<form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login">
		<div class="row gtr-uniform gtr-50">
			<div class="col-6 col-12-xsmall">
				<input type="text" name="login" id="id_login" placeholder="Login" />
			</div>
			<div class="col-6 col-12-xsmall">
				<input type="password" name="pass" id="id_pass" placeholder="Password" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Log in" class="primary" /></li>
				</ul>
			</div>
		</div>
	</form>
</section>

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php
}
}
/* {/block 'content'} */
}
