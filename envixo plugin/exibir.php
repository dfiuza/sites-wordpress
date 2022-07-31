<?php
$full_path = WP_PLUGIN_URL . '/' . str_replace( basename( __FILE__ ), "", plugin_basename( __FILE__ ) );

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
<link href='<?=$full_path?>estilo/estilocontent.css' rel='stylesheet' />
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
<style>
.wp-admin {
    height: fit-content;
}
</style>
</head>

<body>
<div class="container-fluid">
  <?php
  $usuer_criou_post = get_users( array( 'fields' => array( 'display_name' ) ) );
  // Array of stdClass objects.
  foreach ( $usuer_criou_post as $user ) {
    ?>
  <div class="row margin-botton">
    <div class="col-6"> <span style="text-decoration: underline;">
      <?=esc_html( $user->display_name );}?>
      </span> </div>
    <div class="col-6"><span>Orgulhosamente feito com</span></div>
  </div>
  <div class="row">
    <div class="card m-2">
      <div class="row g-0">
        <div class="col-md-4">
          <div class="logo"> <img class="img-fluid img-logo" src="<?=plugin_dir_url( __FILE__ )?>img/imagem-1.png" alt=""> </div>
        </div>
        <?php
        global $post;
        global $wpdb;
        $user = wp_get_current_user();  
        $query = "SELECT * FROM te_posts WHERE ID = {$post->ID}";
        $results2 = $wpdb->get_results( $query );
        foreach ( $results2 as $userNome ) {
          $nome = $userNome->post_name;

          $sql = $wpdb->prepare( "SELECT * FROM `autor`
                                        INNER JOIN te_posts ON post_author = autor_id
                                        WHERE post_author = {$user->ID} AND te_posts.post_name = '{$nome}'" );
          $results = $wpdb->get_results( $sql );

        }
        foreach ( $results as $user ) {
          $biografia = $user->biografia;
            /*var_dump($post->ID);*/
          ?>
        <div class="col-md-8 top">
          <div class="card-body">
            <h2 class="card-title">Envixo</h2>
            <p class="card-text">
              <?=$biografia?>
            </p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
</body>

</html>