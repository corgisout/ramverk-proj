<?php

namespace Anax\View;

$question = isset($question) ? $question : null;
$user = isset($user) ? $user : null;

$urlToQuestion = url("question/question/$question->id");

?><h1>Answer question</h1>

<p><?= $question->content ?></p>

<?= $form ?>

<p>
    <a href="<?= $urlToQuestion ?>">back to question</a>
</p>
