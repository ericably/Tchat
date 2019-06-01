<?php
    require 'models/From.php';

//    $envoi = new TchatManager();
//    $var = $envoi->insert('cheri', 'je suis deçu');

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

<!--{#<html>#}-->
<!--    {#<head>#}-->
<!--        {#<title>Page d'accueil</title>#}-->
<!--        {#<meta charset="utf-8">#}-->
<!--        {#{% for tchat in tchats %}#}-->
<!--            {#{{ tchat }}#}-->
<!--        {#{% endfor %}#}-->
<!---->
<!--    {#</head>#}-->
<!--{#</html>#}-->