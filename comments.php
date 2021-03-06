<?php

  foreach ($comments as $comment):
    echo '<div class="comment-avatar">';
    echo get_avatar($comment, 32);
    echo '</div>';

    echo '<div class="comment-author"> Comment by: ' . get_comment_author_link() . '</div>';

    echo '<div class="comment-divider">//' . '</div>';

    echo '<div class="comment-date">' . get_comment_date() . '</div>';

    echo '<div class="comment-text">' . get_comment_text() . '</div>';

  endforeach;

  comment_form();

 ?>
