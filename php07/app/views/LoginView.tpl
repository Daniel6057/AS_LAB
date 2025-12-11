{extends file="main.tpl"}

{block name=content}

<header class="major">
	<h2>Logowanie</h2>
</header>
<section id="content">
	<form method="post" action="{$conf->action_url}login">
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

{include file='messages.tpl'}

{/block}
