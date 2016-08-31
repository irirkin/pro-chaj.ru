﻿<?php if (comments_open()) { ?>
  <h3><a name="comments"><?php comments_number('Комментарии', '1 комментарий', '% комментариев'); ?> читателей статьи "<?php the_title();?>"</a></h3>
    <?php if (get_comments_number() == 0) { ?>
      <ul class="media-list">
        <li>Оставьте первый комментарий - автор старался</li>
      </ul>
    <?php } else { ?>
    <ol class="media-list">
      <?php
        function myins_comm($comment, $args, $depth){
          $GLOBALS['comment'] = $comment; ?>
          <li class="media creativ-comment" id="li-comment-<?php comment_ID() ?>">

            <div class='media-left' id="comment-<?php comment_ID(); ?>">
              <a href="#">
                <img class="media-object" src="/sites/default/files/images/common/reply_com.png" alt="">
              </a>

            </div>

            <div class="media-body">

              <h4 class="media-heading">
                <?php
                if ($comment->comment_parent!= 0)
                {
                  $name_par = get_comment($comment->comment_parent )->comment_author;
                  printf(__('<cite class="fn">%s</cite> ответил <span class="fn">%s</span>'), get_comment_author_link(), $name_par) ;
                } else {
                 printf(__('<cite class="fn">%s</cite> ответил:'), get_comment_author_link());
                }?>
                <span><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></span>
              </h4>


              <?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e('Ваш комментарий ожидает проверки модератора.') ?></em>
                <br>
              <?php endif; ?>

              <?php comment_text() ?>

              <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
              </div>

            </div>
           </li>

      <?php }

        $args = array(
          'reply_text' => 'Ответить',
          'callback' => 'myins_comm'
        );
        wp_list_comments($args);
      ?>
    </ol>
  <?php } ?>
 
  <?php
    $fields = array(
      'author' => '<div class="form-group"><label for="author">' . __( 'Name' ) . ($req ? '<span class="required">*</span>' : '') . '</label>
      <input type="text" id="author" name="author" class="form-control" value="' . esc_attr($commenter['comment_author']) . '" placeholder="Имя" pattern="[A-Za-zА-Яа-я]{3,}" maxlength="30" autocomplete="on" tabindex="1" required' . $aria_req . '></div>',
      'email' => '<div class="form-group"><label for="inputEmail">' . __( 'Email') .  '</label>
      <input type="email" id="email" name="email" class="email form-control" value="' . esc_attr($commenter['comment_author_email']) . '" placeholder="example@example.com" maxlength="30" autocomplete="on" tabindex="2" required' . $aria_req . '></div>',

    );
 
    $args = array(
      'comment_notes_after' => '',
        'fields' => apply_filters('comment_form_default_fields', $fields),
      'comment_field' => '<p><label style="display: block;" for="comment">' . _x( 'Comment', 'noun' ) . '</label>
      <textarea id="comment" name="comment" class="form-control" rows="8" aria-required="true" placeholder="Текст сообщения..."></textarea></p>',
      'label_submit' => 'Отправить',
        'class_form'=>'form-horizontal well',
        'class_submit'=>'btn btn-default'
    );
    comment_form($args);
  ?>
  <?php } else { ?>
  <h3>Обсуждения закрыты для данной страницы</h3>
  <?php }
?>