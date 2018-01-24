function checkout_fields(){
    
    var user_content = '<label for="account_username" class="">E-mail <abbr class="required" title="obrigatório">*</abbr></label><input type="email" class="input-text " name="account_username" id="account_username" placeholder="Email" value="">';
    jQuery('#account_username_field').html(user_content);
    jQuery('#account_username').on('change', function(){
        jQuery('#billing_email').val(jQuery(this).val());
    });
    
    jQuery('#billing_email_field').css({'display':'none'});
    
}

function login_fields(){
    
    jQuery('#reg_username').attr('type','hidden');
    jQuery('label[for=reg_username]').css({'display':'none'});
    jQuery('#reg_email').on('change', function(){
        jQuery('#reg_username').val(jQuery(this).val());
    });
    
}