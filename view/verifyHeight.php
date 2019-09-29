<?php 
$people = $model_person->list(); 
?>


<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Altura</th>
    </tr>
    <?php foreach ($people as $person): ?>
    <tr>
        <td><?php echo $person->getId(); ?></td>
        <td><?php echo $person->getName(); ?></td>
        <td><?php echo number_format($person->getHeight(), 2, '.', ',').' m'; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php echo '<div class="alert alert-success" role="alert">As alturas serão iguais após <strong>'.$year.'</strong> anos.</div>'; ?>

