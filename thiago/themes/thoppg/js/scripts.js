// JavaScript Document

/* VALIDACAO DE FORMULÁRIO ***********************************/
function valida_form(id_form,cor_borda){		
	var cont = 0;
	jQuery("#"+id_form+" input[type=text]").each(function(){
		if(jQuery(this).val() == "" && jQuery(this).attr("required") == "required"){
			jQuery(this).css({"border" : "1px solid #"+cor_borda});
			cont++;
		}else{
			jQuery(this).css({"border" : "1px solid #cccccc"});
			}
	});
	jQuery("#"+id_form+" textarea").each(function(){
		if(jQuery(this).val() == "" && jQuery(this).attr("required") == "required"){
			jQuery(this).css({"border" : "1px solid #"+cor_borda});
			cont++;
		}else{
			jQuery(this).css({"border" : "1px solid #cccccc"});
			}
	});
	jQuery("#"+id_form+" file").each(function(){
		if(jQuery(this).val() == "" && jQuery(this).attr("required") == "required"){
			jQuery(this).css({"border" : "1px solid #"+cor_borda});
			cont++;
		}else{
			jQuery(this).css({"border" : "1px solid #cccccc"});
			}
	});
	jQuery("#"+id_form+" password").each(function(){
		if(jQuery(this).val() == "" && jQuery(this).attr("required") == "required"){
			jQuery(this).css({"border" : "1px solid #"+cor_borda});
			cont++;
		}else{
			jQuery(this).css({"border" : "1px solid #cccccc"});
			}
	});
	jQuery("#"+id_form+" select").each(function(){
		if((jQuery(this).val() == "0" || jQuery(this).val() == "") && jQuery(this).attr("required") == "required"){
			jQuery(this).css({"border" : "1px solid #"+cor_borda});
			cont++;
		}else{
			jQuery(this).css({"border" : "1px solid #cccccc"});
			}
	});
	if(cont == 0){
		jQuery("#"+id_form).submit();
	}
}


jQuery(document).ready(function(){	
    
    jQuery('.menu-anchor').on('click touchstart', function(e){
		jQuery('.mobile-nav').toggleClass('menu-active');
	  	e.preventDefault();
	});
    
	jQuery(function(jQuery){
	   jQuery(".maskDate").mask("99/99/9999");
	   jQuery(".maskPhone").mask("(99) 9999-9999?9");
	   jQuery(".maskPhone2").mask("9999-9999?9");
	   jQuery(".maskUf").mask("aa");
	   jQuery(".maskCep").mask("99999-999");
	   jQuery(".maskCnpj").mask("99.999.999/9999-99");
	   jQuery(".maskRg").mask("9.999.999-9");
	   jQuery(".maskCpf").mask("999.999.999-99");
	   jQuery(".maskDdd").mask("99");
	   jQuery(".maskTime").mask("99:99"); 
	});
	
	//UP Button
	jQuery("#btn-up").click(function () {
		jQuery('html,body').animate({
			scrollTop: 0
		}, 'slow');
		return false;
	});
    jQuery('#btn_check_edit').on('click', function(){
            jQuery('#check-user').addClass('invisible');
            jQuery('#check-user-new').removeClass('invisible');        
    });
    jQuery('input[type=radio][name=neworold]').change(function() {
        if (this.value == '1') {
            jQuery('#check-user').removeClass('invisible');
            jQuery('#check-user-new').addClass('invisible');
        }
        else if (this.value == '0') {
            jQuery('#check-user').addClass('invisible');
            jQuery('#check-user-new').removeClass('invisible');
        }
    });
    
    jQuery('[data-countdown]').each(function() {
      var objeto = jQuery(this), finalDate = jQuery(this).data('countdown');
      objeto.countdown(finalDate)
        .on('update.countdown', function(event) { 
            objeto.html(event.strftime(''
                + '<div class="count_box col-xs-3">%D <span>dia%!D</span></div>'
                + '<div class="count_box col-xs-3">%H <span>hora%!H</span></div>'
                + '<div class="count_box col-xs-3">%M <span>min</span></div>'
                + '<div class="count_box col-xs-3">%S <span>seg</span></div>')
            );
        })
        .on('finish.countdown', function(event) {
          objeto.html('Oferta Expirada!')
            .parent().addClass('disabled');
        });
    });
});
