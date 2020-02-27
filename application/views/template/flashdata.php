
<?php if($this->session->flashdata("success") || $this->session->flashdata("danger") || isset($mensagens)){  ?>
<div class="row">
    <div class="form-group">

    <?php if($this->session->flashdata("success"))  : ?>
        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
    <?php endif ?>                    
    <?php if($this->session->flashdata("danger"))  : ?>
        <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
    <?php endif ?>
    <?php if(isset($mensagens)) echo $mensagens; ?>
    
    </div>
</div>

<?php }     ?>