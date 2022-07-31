<?php
$full_path = WP_PLUGIN_URL . '/' . str_replace( basename( __FILE__ ), "", plugin_basename( __FILE__ ) );

if ( isset( $_POST[ 'enviar' ] ) && !empty( $_FILES[ 'file' ] ) ) {
  if ( $_POST[ 'nome' ] == '' && $_POST[ 'biografia' ] == '' ) {
    echo "<script>alert('Autor/Biografia precisa ser preenchido');</script>";
  } else {
    global $wpdb;
    $tempname = $_FILES[ "file" ][ "tmp_name" ];
    $new_name = uniqid(); // Novo nome aleatório do arquivo
    $extension = strtolower( pathinfo( $_FILES[ "file" ][ "name" ], PATHINFO_EXTENSION ) ); // Pega extensão de arquivo e converte em caracteres minúsculos.      
    $target_path = plugin_dir_path( __FILE__ ) . '/img'; //Diretório para uploads     
    if ( move_uploaded_file( $tempname, $target_path . "/" . $new_name . "." . $extension ) ) {
      //Fazer upload do arquivo   
      $data = array(
        'nome' => $_POST[ 'nome' ],
        'biografia' => $_POST[ 'biografia' ],
        'imagem' => $new_name,
      );
      $table_name = 'autor';

      $result = $wpdb->insert( $table_name, $data, $format = null );

      if ( $result == 1 ) {
        echo "<script>alert('Autor cadastrado');</script>";
      } else {
        echo "<script>alert('Erro ao salvar o autor');</script>";
      }
    }
  }

}


?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Envixo</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='<?=$full_path?>estilo/estilo.css' rel='stylesheet' />
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <style>
        .wp-admin{
            height: fit-content;
        }
    </style>
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <div class="logo"> <img class="img-fluid img-logo" src="<?=plugin_dir_url( __FILE__ )?>img/imagem-2.png" alt=""> </div>
    </div>
    <div class="col-md-12">
      <form method="post" class="formulario p-5" id="uploadForm" enctype="multipart/form-data" action="?page=envixo">
        <div class="form-group">
          <div class="round centered">
            <div class="circulo float-right"> <i class="fa fa-close"></i> </div>
            <label class="btn" for="img-circular">Selecionar foto de perfil </label>
            <input id="img-circular" name="file" type="file"/>
          </div>
        </div>
        <div id="oculta"></div>
        <div class="form-group dados">
          <label class="label-input" for="inputAuthor">Preencha o nome do autor:</label>
          <input type="text" class="form-control" id="inputAuthor" name="nome" placeholder="Ex: Patrick Espake">
          <div class="form-group mt-5">
            <label class="label-input" for="biografia">Biografia do autor:</label>
            <textarea class="form-control" id="biografia" name="biografia" rows="3" placeholder="Ex: Lorem ipsum dolor..."></textarea>
            <input class="btn-confirma" name="enviar" type="submit" value="Salvar informações">
          </div>
        </div>
      </form>
      <div class="clear"></div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script> 
<script>
    
   function filePreview(input){
       if(input.files && input.files[0]) {
           var reader = new FileReader();
           reader.onload = function (e){
               $('#uploadForm + img').remove();
               $('#uploadForm .circulo').after('<img class="img" src="'+e.target.result+'" />');    
           };
           reader.readAsDataURL(input.files[0]);
       }
   }
    
    $('#img-circular').change(function(){
        filePreview(this); 
    });
    
</script>
</body>
</html>