<?php
/* Smarty version 5.4.2, created on 2025-12-05 01:02:25
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69322111e681a7_64658043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '246f3dd358567f52091ec09b628fb84a2c99efca' => 
    array (
      0 => 'main.tpl',
      1 => 1764888887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69322111e681a7_64658043 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php06\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
				<header id="header">
					<h1 id="logo"><a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
"><?php echo (($tmp = $_smarty_tpl->getValue('page_header') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</a></h1>
					<nav id="nav">
						<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_172501655169322111e60b95_48036607', 'userData');
?>

					</nav>
				</header>
				<div id="main" class="wrapper style1">
					<div class="container">
						<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_76418978169322111e62355_87940716', 'content');
?>

					</div>
				</div>

				<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
				</footer>

		</div>

			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'userData'} */
class Block_172501655169322111e60b95_48036607 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php06\\app\\views\\templates';
}
}
/* {/block 'userData'} */
/* {block 'content'} */
class Block_76418978169322111e62355_87940716 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php06\\app\\views\\templates';
}
}
/* {/block 'content'} */
}
