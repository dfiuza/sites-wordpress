<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<style type="text/css">
	.area,body{display:flex}*{box-sizing:border-box}body{margin:20px;flex-direction:column}.area{height:50px}#data,#method,#send,#url,#cl{height:40px;font-size:22px}#method{width:100px;margin-right:10px;outline:0}#data,#url,#cl{flex:1;padding:10px;outline:0}#send{width:100px;margin-left:10px}.response{flex:1;}.response2{height:150px;}.response,.response2{width:100%;border:1px solid #CCC;background-color:#F9F9F9;padding:20px;outline:0;resize:none;margin-bottom:10px;}
	</style>

</head>
<body>
	<div class="area">
		<select id="method">
			<option>GET</option>
			<option>POST</option>
			<option>DELETE</option>
			<option>PUT</option>
		</select>
		<input type="text" id="url" placeholder="URL da consulta" value="http://localhost/wordpress/wp-json/" />
		<button id="send">OK</button>
	</div>
	<div class="area">
		<input type="text" id="data" placeholder='Ex: {"nome":"Bonieky", "idade":99}' />
	</div>
	<textarea class="response" disabled></textarea>
	<div class="area">
		<input type="text" id="cl" placeholder="Ex: r.nome, r[2].title, etc..." />
	</div>
	<textarea class="response2" disabled></textarea>
	<script type="text/javascript">
		var r = {};
		$("#send").on("click",function(){$("#cl").val("");$(".response,.response2").html("");var a=$("#method").val(),e=$("#url").val(),n=$("#data").val(),t="";try{if(""!=n)t=$.parseJSON(n)}catch(jm){alert("** ERRO NO JSON **\n\n"+jm.message)}if(e==''){alert("** SEM URL **")}else{$.ajax({url:e,type:a,data:t,dataType:"json",error:function(em){alert("** ERRO NA REQUISIÇÃO **\n\n"+em.message)},success:function(a){r=a;var e=JSON.stringify(a,void 0,2);$(".response").html(e)}})}});
		$("#cl").on("keyup",function(e){if(13==e.keyCode){var cm=eval($(this).val()),cj=JSON.stringify(cm,void 0,2);$(".response2").html(cj)}});
	</script>
</body>
</html>