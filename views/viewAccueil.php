<?php
    require 'models/From.php';

    $form = new From($_POST);

?>
<form action="index.php?action=insertTchat" method="post">
    <?php
    echo $form->input('name');
    echo $form->texterea('message');
    echo $form->submit();
    ?>
</form>



<?php
foreach($tchats as $tchat): ?>
    <b><?= $tchat->getName() ?>: </b>
    <?= $tchat->getMessage() ?><br>

<?php endforeach; ?>
