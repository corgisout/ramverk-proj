<?php

namespace Anax\View;

$user = isset($user) ? $user : null;
$question = isset($question) ? $question : null;
$urlToQuestion = url("question/question/$question->id");

?><h1>Post a comment</h1>

<p><?= $question->content ?></p>

<?= $form ?>
<p>
    <a href="<?= $urlToQuestion ?>">back to questions</a>
</p>
