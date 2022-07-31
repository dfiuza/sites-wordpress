jQuery(function(){

	jQuery('#receita_voto').bind('rated', function(){

		jQuery(this).rateit('readonly', true);

		var id = jQuery(this).attr('data-id');
		var voto = jQuery(this).rateit('value');

		jQuery.ajax({
			type:'POST',
			url:receita_obj.ajax_url,
			data:{action:'br_voto_receita', id:id, voto:voto},
			success:function(data){
				
			}
		});

	});


	jQuery('#receitas_criador').on('submit', function(e){
		e.preventDefault();

		jQuery('#receitas_criador_submit').hide();

		jQuery("#receitas_criador_avisos").html('Carregando...');

		var form = {
			action:'br_receitas_submit',
			title:jQuery('#receitas_title').val(),
			content:tinymce.activeEditor.getContent(),
			ingredientes:jQuery('#receitas_ingredientes').val(),
			tempo:jQuery('#receitas_tempo').val(),
			utensilios:jQuery('#receitas_utensilios').val(),
			dificuldade:jQuery('#receitas_dificuldade').val(),
			tipo:jQuery('#receitas_tipo').val()
		};

		jQuery.ajax({
			type:'POST',
			url:receita_obj.ajax_url,
			data:form,
			dataType:'json',
			success:function(json){

				if(json.status == 2) {
					jQuery("#receitas_criador_avisos").html('Receita enviada com sucesso!');
					jQuery('#receitas_criador').hide();
				} else {
					jQuery("#receitas_criador_avisos").html('Não foi possível! Tente novamente mais tarde!');
					jQuery('#receitas_criador_submit').show();
				}

			}
		});

	});

	jQuery("#receita_cadastro").on('submit', function(e){
		e.preventDefault();

		jQuery("#receita_cadastro_aviso").html("Carregando...");
		jQuery("#cadastro_botao").hide();

		var form = {
			action:'br_receita_criar_conta',
			name:jQuery("#cadastro_name").val(),
			email:jQuery("#cadastro_email").val(),
			senha:jQuery("#cadastro_senha").val()
		};

		jQuery.ajax({
			type:'POST',
			url:receita_obj.ajax_url,
			data:form,
			dataType:'json',
			success:function(json) {

				if(json.status == 2) {
					jQuery("#receita_cadastro_aviso").html("Conta criada!");
					window.location.href = receita_obj.home_url;
				} else {
					jQuery("#receita_cadastro_aviso").html("Não foi possível criar sua conta!");
				}

			}
		});


	});

	jQuery("#receita_login").on('submit', function(e){
		e.preventDefault();

		jQuery("#receita_login_aviso").html("Carregando...");
		jQuery("#login_botao").hide();

		var form = {
			action:'br_receita_login',
			email:jQuery("#login_email").val(),
			senha:jQuery("#login_senha").val()
		};

		jQuery.ajax({
			type:'POST',
			url:receita_obj.ajax_url,
			data:form,
			dataType:'json',
			success:function(json) {

				if(json.status == 2) {
					jQuery("#receita_login_aviso").html("Logado com sucesso!");
					window.location.href = receita_obj.home_url;
				} else {
					jQuery("#receita_login_aviso").html("Não foi possível logar na conta!");
				}

			}
		});


	});


});











