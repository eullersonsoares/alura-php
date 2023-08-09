<?php 
    $htmlAttr = 'nome" <script>alert("Função maliciosa!")</script>';
    
?>

<input type="text" name="<?= addslashes($htmlAttr); ?>">

ou 

<input type="text" name="<?= htmlentities($htmlAttr); ?>">
