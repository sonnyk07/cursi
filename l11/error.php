<?php require __DIR__ .'/header.php';?>

    <main class="container">
            <div class="alert alert-danger" role="alert">
                <?=$_GET['message'] ?? 'Please try again!'?>
            </div>
    </main>

<?php require __DIR__ .'/footer.php';?>