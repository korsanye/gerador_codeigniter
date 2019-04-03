<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>r</title>

	
</head>
<body>
    <h1>
    <?php 
    
    
    echo $this->lang->line('vw_bem_vindo') ?>
    </h1>
<div id="container">
    <form class="form-horizontal" action="<?php echo base_url('Gerador/conexao')?>" method="post">
<fieldset>

<!-- Form Name -->
<legend>
    <center>
        
        <?php echo  $this->lang->line('vw_form1_nome') ?>
    </center>
</legend>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hostname">
  <?php echo  $this->lang->line('vw_form1_localizacao') ?>
  </label>  
  <div class="col-md-4">
  <input id="hostname" name="hostname" type="text" placeholder="" class="form-control input-md" required="" value="localhost">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="administrador">
  <?php echo  $this->lang->line('vw_form1_administrador') ?>
  </label>  
  <div class="col-md-4">
  <input id="administrador" name="administrador" type="text" placeholder="" class="form-control input-md" required="" value="root">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">
  <?php echo  $this->lang->line('vw_form1_senha') ?>
  </label>  
  <div class="col-md-4">
      <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" value="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="quantas_letras_remover"><?php echo  $this->lang->line('vw_form1_prefixo_tabela') ?></label>  
  <div class="col-md-4">
      <input id="quantas_letras_remover" name="quantas_letras_remover" type="text"
             placeholder="" class="form-control input-md" value="3">
        <span class="help-block">
        <?php echo  $this->lang->line('vw_form1_prefixo_tabela_help') ?>
        </span>  
    
  </div>
</div>

<!-- Button -->
<div class="form-group ">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">
    <?php echo  $this->lang->line('vw_form1_buscar_bases') ?>
    </button>
  </div>
</div>

</fieldset>
</form>
</body>