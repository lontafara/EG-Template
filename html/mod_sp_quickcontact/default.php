<?php
/*
# mod_sp_quickcontact - Ajax based quick contact Module by JoomShaper.com
# -----------------------------------------------------------------------	
# Author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2014 JoomShaper.com. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomshaper.com
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<div id="sp_quickcontact<?php echo $uniqid ?>" class="container pt-5 pb-5 mb-5">
	<div class="row justify-content-center">
      
<div class="col-lg-11">
<div class="pb-5 pt-3 text-center">
		<h2><strong>Trabajemos juntos</strong>; comienza tu proyecto web profesional.</h2>
		<p class="text-muted">
			 Rellena este breve formulario y me pondré en contacto contigo con la mayor brevedad posible.
		</p>
	</div>


	<div id="sp_qc_status"></div>
	<form id="sp-quickcontact-form">
<div class="row form-group">
    <div class="col">
        
        
		<input class="form-control" type="text" name="name" id="name" onfocus="if (this.value=='<?php echo $name_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $name_text ?>';" value="<?php echo $name_text ?>" required />

        
    </div>
    <div class="col">
        
		<input class="form-control" type="email" name="email" id="email" onfocus="if (this.value=='<?php echo $email_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $email_text ?>';" value="<?php echo $email_text ?>" required />
    </div>
</div>

<div class=" form-group">
	
	
		<input class="form-control" type="text" name="subject" id="subject" onfocus="if (this.value=='<?php echo $subject_text ?>') this.value='';" onblur="if (this.value=='') this.value='Asunto ¿En qué puedo ayudarte?';" value="<?php echo $subject_text ?>" />

</div>

<div class="form-group">

		<textarea class="form-control" name="message" id="message"  onfocus="if (this.value=='<?php echo $msg_text ?>') this.value='';" onblur="if (this.value=='') this.value='Deja tu mensaje;" cols="6" rows="6"><?php echo $msg_text ?></textarea>	
		
</div>		
		
<div class="form-group">		
		
		<?php if($formcaptcha) { ?>
			<input class="form-control" type="text" name="sccaptcha" placeholder="<?php echo $captcha_question ?>" required />
		<?php } ?>
</div>		
		
<div class=" form-group">		
		<input id="sp_qc_submit" class="btn btn-success btn-lg btn-round" type="submit" value="Enviar" />
</div>
	</form>
</div>
</div>

</div>