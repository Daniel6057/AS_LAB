{extends file="main.tpl"}

{block name=userData}
<ul>
	<li><p>użytkownik: {$user->login}</p></li>
	<li><p>rola: {$user->role}</p></li>
	<li><a href="{$conf->action_url}logout" class="button primary">Wyloguj</a></li>
</ul>
{/block}

{block name=content}
<header class="major">
<h2>Kalkulator kredytowy</h2>
</header>
<div class="row gtr-150">
	<div class="col-8 col-12-medium">
		<section id="content">
			<form method="post" action="{$conf->action_root}calcCompute#wynik">
				<div class="row gtr-uniform gtr-50">
					<div class="col-8 col-12-xsmall">
						<input type="text" name="kwota" id="kwota" value="{$form->kwota}" placeholder="Kwota" />
					</div>
					<div class="col-8 col-12-xsmall">
						<input type="text" name="lata" id="lata" value="{$form->lata}" placeholder="Ile lat" />
					</div>
					<div class="col-8 col-12-xsmall">
						<input type="text" name="procent" id="procent" value="{$form->procent}" placeholder="Na jaki procent" />
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
				{include file='messages.tpl'}
				{if isset($res->rata)}
					<a id="wynik"></a>
					<h4>Miesięczna rata: </h4>
					<p class="res">
					{$res->rata} zł
					</p>
				{/if}
			</section>
		</section>
	</div>
</div>
{/block}