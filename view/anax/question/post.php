<?php

namespace Anax\View;

$items = isset($items) ? $items : null;

$urlToQuestions = url("question");

?><h1>Post a Question</h1>

<?= $form ?>

<p>
    <a href="<?= $urlToQuestions ?>">All active Questions</a>
</p>
