{extends file="main.tpl"}

{block name=content}
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
{/block}

{block name=sidebar}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->rata)}
	<a id="wynik"></a>
	<h4>Miesięczna rata: </h4>
	<p class="res">
	{$res->rata} zł
	</p>
{/if}
{/block}