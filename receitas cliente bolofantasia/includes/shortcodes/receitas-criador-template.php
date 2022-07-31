<form method="POST" id="receitas_criador">
	Titulo:<br/>
	<input type="text" name="title" id="receitas_title" /><br/><br/>

	Modo de Preparo:<br/>
	{EDITOR}<br/>

	Ingredientes:
	<input type="text" name="ingredientes" id="receitas_ingredientes" /><br/><br/>


	Tempo da receita:<br/>
	<input type="text" name="tempo_receita" id="receitas_tempo" /><br/><br/>

	Utensílios:<br/>
	<input type="text" name="utensilios" id="receitas_utensilios" /><br/><br/>

	Nível de dificuldade:<br/>
	<select name="dificuldade" id="receitas_dificuldade">
		<option value="0">Iniciante</option>
		<option value="1">Intermediário</option>
		<option value="2">Avançado</option>
	</select><br/><br/>

	Tipo da receita:<br/>
	<input type="text" name="tipo" id="receitas_tipo" /><br/><br/>

	<input type="submit" value="Salvar" id="receitas_criador_submit" />
</form>
<div id="receitas_criador_avisos"></div>