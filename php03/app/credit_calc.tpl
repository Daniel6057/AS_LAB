{extends file="../templates/main.tpl"}

{block name=content}
<form method="post" action="{$app_url}/app/credit_calc.php#wynik">
	<div class="row gtr-uniform gtr-50">
		<div class="col-8 col-12-xsmall">
			<input type="text" name="kwota" id="kwota" value="{$form['kwota']}" placeholder="Kwota" />
		</div>
		<div class="col-8 col-12-xsmall">
				<input type="text" name="lata" id="lata" value="{$form['lata']}" placeholder="Ile lat" />
		</div>
		<div class="col-8 col-12-xsmall">
				<input type="text" name="procent" id="procent" value="{$form['procent']}" placeholder="Na jaki procent" />
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
{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($msgs)}
	{if count($msgs) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $msgs as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<a id="wynik"></a>
	<h4>Miesięczna rata: </h4>
	<p class="res">
	{$result} zł
	</p>
{/if}
{/block}