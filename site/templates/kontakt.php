<?php snippet('header') ?>
<div class="container">

<form enctype="multipart/form-data" method="post" name="id-1" class=" o-form c-form c-form--contact" id="field-1" action="/das-drk/kontakt/kontaktformular.html?tx_form_form%5Baction%5D=process&amp;cHash=1a6a036f054259671af48550bbb383c4">
<div>
<input name="tx_form_form[__referrer][@extension]" value="Form" type="hidden">
<input name="tx_form_form[__referrer][@vendor]" value="TYPO3\CMS" type="hidden">
<input name="tx_form_form[__referrer][@controller]" value="Frontend" type="hidden">
<input name="tx_form_form[__referrer][@action]" value="show" type="hidden">
<input name="tx_form_form[__referrer][arguments]" value="YToxOntzOjU6Im1vZGVsIjthOjA6e319508eef4ee423b1a2f9ef9db0b1b68f108628e3ef" type="hidden">
<input name="tx_form_form[__referrer][@request]" value="a:4:{s:10:&quot;@extension&quot;;s:4:&quot;Form&quot;;s:11:&quot;@controller&quot;;s:8:&quot;Frontend&quot;;s:7:&quot;@action&quot;;s:4:&quot;show&quot;;s:7:&quot;@vendor&quot;;s:9:&quot;TYPO3\CMS&quot;;}3123e4c8ec01a8d932fc9037a5e9626321b1413f" type="hidden">
<input name="tx_form_form[__trustedProperties]" value="a:1:{s:7:&quot;tx_form&quot;;a:6:{s:4:&quot;name&quot;;i:1;s:12:&quot;emailadresse&quot;;i:1;s:7:&quot;betreff&quot;;i:1;s:10:&quot;mitteilung&quot;;i:1;i:6;i:1;s:39:&quot;dont-feed-me-with-name-or-email-address&quot;;i:1;}}5bb62b51fa69c84c3100d17c494654205a17420d" type="hidden">
</div>


	<fieldset class="o-form__section nolabel">
    	<h2>Kontaktformular</h2>

	<div class="csc-form-3 csc-form-element csc-form-element-textblock">
		<p>Die mit einem Stern (*) markierten Felder sind Pflichtfelder.</p>
	</div>

		
        <div class="form-group">
            <label for="exampleFormControlInput1">Ihr Name</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Email Adresse</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@domain.de">
        </div>
			
        <div class="form-group">
            <label for="exampleFormControlSelect1">Betreff</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Adressänderung</option>
            <option>Mitgliedschaft</option>
            <option>Sonstiges</option>
            </select>
        </div>

        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ihre Mitteilung an uns"></textarea>
        </div>		
		
        <button type="submit" class="btn btn-success mb-2">Absenden</button>		
	</fieldset>
</form>
</div>
<?php snippet('footer') ?>