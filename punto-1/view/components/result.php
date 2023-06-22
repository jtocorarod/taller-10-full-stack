<div class="result">
<?php if (!empty($messageError)): ?>
        <p class="error_message"><?php echo $messageError; ?></p>
    <?php endif; ?>
    
    <?php if ($result != ""): ?>
        <p><?php echo "Su resultado es: " .$result; ?></p>
    <?php endif; ?>

  
</div>