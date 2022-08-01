<!-- Extending the base layout -->
<?=$this->extend('pages/layout') ?>
<!-- Including view partials to display the desired content -->
<?=$this->section('content') ?>


<?php if ($result == "Correct!"): // Checking whether data recieved from controller was "Correct!"
     ?>   
<div class="alert alert-success my-5">  
<?php echo $result; // IF so, then display it using a success-alert
     ?>
</div>

<?php
else: // IF the data recieved wasn't "Correct", means the data recieved was "Wrong!"
     ?>
    <div class="alert alert-danger my-5">
    <?php echo $result; //  display it using a danger-alert
     ?>
</div>
<?php
endif; ?>

<!-- Go back to homepage to verify a new operation by clicking this link -->
<a href="/">Verify another Operation!</a> 


<?=$this->endSection() ?>
