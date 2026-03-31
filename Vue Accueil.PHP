require 'layout/header.php';
?>

<h2>Trajets disponibles</h2>

<?php foreach ($trajets as $t): ?>
<div class="card mb-3 p-3">
    <strong><?= $t['depart'] ?> → <?= $t['arrivee'] ?></strong><br>
    Départ : <?= $t['date_depart'] ?><br>
    Places : <?= $t['places_disponibles'] ?><br>

    <?php if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $t['utilisateur_id']): ?>
        <a href="/trajet/delete?id=<?= $t['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
    <?php endif; ?>
</div>
<?php endforeach; ?>

<?php require 'layout/footer.php'; ?>