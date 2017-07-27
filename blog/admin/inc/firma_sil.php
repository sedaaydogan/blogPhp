<div class="accordion-group"><div class="accordion-heading"><strong><a href="#display-form" data-toggle="collapse" class="accordion-toggle">İletişim Formu</a></strong></div><div class="accordion-body collapse" id="display-form"><div class="accordion-inner">						
		<div class="contact-form">
	<form id="contact-form" action="/contacts" method="get" class="form-validate form-horizontal well">
															<fieldset>
											<legend>e-Posta Gönder</legend>
																						<div class="control-group">
			<div class="control-label">
			<span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> Zorunlu alanlar</label></span><span class="after"></span></span>					</div>
		<div class="controls"> </div>
</div>
																	<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_name-lbl" for="jform_contact_name" class="hasPopover required" title="İsim" data-content="İsminiz">
	İsim<span class="star">&#160;*</span></label>
					</div>
		<div class="controls"><input type="text" name="jform[contact_name]" id="jform_contact_name" value="" class="required" size="30" required aria-required="true" /></div>
</div>
																	<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_email-lbl" for="jform_contact_email" class="hasPopover required" title="e-Posta" data-content="e-Posta adresiniz">
	e-Posta<span class="star">&#160;*</span></label>
					</div>
		<div class="controls"><input type="email" name="jform[contact_email]" class="validate-email required" id="jform_contact_email" value="" size="30" autocomplete="email" required aria-required="true" /></div>
</div>
																	<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg" class="hasPopover required" title="Konu" data-content="Mesajınızın konusunu buraya giriniz.">
	Konu<span class="star">&#160;*</span></label>
					</div>
		<div class="controls"><input type="text" name="jform[contact_subject]" id="jform_contact_emailmsg" value="" class="required" size="60" required aria-required="true" /></div>
</div>
																	<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_message-lbl" for="jform_contact_message" class="hasPopover required" title="Mesaj" data-content="Mesajınızı buraya giriniz.">
	Mesaj<span class="star">&#160;*</span></label>
					</div>
		<div class="controls"><textarea name="jform[contact_message]" id="jform_contact_message" cols="50" rows="10" class="required" required aria-required="true" ></textarea></div>
</div>
																	<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_email_copy-lbl" for="jform_contact_email_copy" class="hasPopover" title="Kopyasını kendinize gönderin." data-content="Girmiş olduğunuz adrese mesajın bir kopyasını gönderir.">
	Kopyasını kendinize gönderin.</label>
							<span class="optional">(isteğe bağlı)</span>
					</div>
		<div class="controls"><input type="checkbox" name="jform[contact_email_copy]" id="jform_contact_email_copy" value="1" /></div>
</div>
									</fieldset>
														<div class="control-group">
			<div class="controls">
				<button class="btn btn-primary validate" type="submit">e-Posta Gönder</button>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="return" value="" />
				<input type="hidden" name="id" value="1:simple-name" />
				<input type="hidden" name="4a332a66458e1507e2dbdb9d32376773" value="1" />			</div>
		</div>
	</form>
</div>

					</div></div></div>		