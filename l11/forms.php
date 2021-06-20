<?php require __DIR__ .'/header.php';
$comments = require __DIR__ . '/comments_list.php';
?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <form action="comment_processor.php" method="POST">
            <div>
                <label for="username" class="form-label">Name</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>

            <div>
                <label class="form-label">Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" value="Male" id="gender-male" class="form-check-input">
                    <label for="gender-male" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="Female" id="gender-female" class="form-check-input">
                    <label for="gender-female" class="form-check-label">Female</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="programming_language" class="form-label">Programming language</label>
                <select name="programming_language" id="programming_language" class="form-select">
                <optgroup label="backend">
                    <option value="Python">Python</option>
                    <option value="Php">PHP</option>
                    <option value="Java">Java</option>
                </optgroup>
                <optgroup label="frontend">
                    <option value="Html">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JavaScript">JavaScript</option>
                </optgroup>
                </select>

            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Your's comments</label>
                <textarea name="comment" id="comment" class="form-control"></textarea>
            </div>
                <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
    <div class="mb-3">
<table class="table table-bordered">
    <?php foreach ($comments as $date =>$commentsList) : ?>
        <tr><td colspan="2"><b><?=$date?><b></td></tr>
    <?php foreach ($commentsList as $file =>$comment) : ?>
    <tr>
    <td>
        Name: <?=$comment['username'] ?? 'undifine'?><br>
        Gender: <?=$comment['gender'] ?? 'undifine'?><br>
        Programming language: <?=$comment['programming_language']?>

    </td>
    <td>
        <?= date('D-m-Y, H:i',$comment['time'])?><br>
       <em><?=nl2br($comment['comment'])?></em>
    </tr>
        <?php endforeach;?>
    <?php endforeach;?>
</div>
</main>
<?php require __DIR__ .'/footer.php';?>