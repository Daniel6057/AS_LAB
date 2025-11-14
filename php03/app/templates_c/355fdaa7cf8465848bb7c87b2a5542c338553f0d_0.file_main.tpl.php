<?php
/* Smarty version 5.4.2, created on 2025-11-14 12:59:21
  from 'file:C:\xampp\htdocs\php03\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6917199933dba7_20503776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '355fdaa7cf8465848bb7c87b2a5542c338553f0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php03\\app\\../templates/main.tpl',
      1 => 1763121309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6917199933dba7_20503776 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php03\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
				<header id="header">
					<h1 id="logo"><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
"><?php echo (($tmp = $_smarty_tpl->getValue('page_header') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="#" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Kalkulator kredytowy</h2>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">
								<section id="content">
									<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3185407626917199933b927_24031719', 'content');
?>

								</section>
							</div>
							<div class="col-4 col-12-medium">
									<section id="sidebar">
										<section>
											<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_4794527696917199933c1a4_08908579', 'sidebar');
?>

										</section>
									</section>
							</div>
						</div>
					</div>
				</div>

				<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
				</footer>

		</div>

			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_3185407626917199933b927_24031719 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php03\\templates';
}
}
/* {/block 'content'} */
/* {block 'sidebar'} */
class Block_4794527696917199933c1a4_08908579 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php03\\templates';
}
}
/* {/block 'sidebar'} */
}
