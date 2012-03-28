<?php include('header.php'); ?>

<div class="post">

<h2><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>" rel="bookmark"><?php $this->title() ?></a></h2>
<span class="submitted"><?php $this->date('F jS, Y g:i A'); ?> &#8212; <?php $this->author(); ?> </span>

<div class="content">
<?php $this->content(); ?>
</div>

<div class="meta">
归档于<?php $this->category(','); ?>. 标签为and tagged <?php $this->tags(', ', true, '没有'); ?> | <a href="<?php $this->feedUrl(); ?>">订阅日志RSS源</a>
</div>

</div>
<?php include('comments.php'); ?>


<!--
<div class="nextprev">
<div class="alignleft"><?php //next_posts_link('&laquo; Older posts') ?> <?php //previous_post_link('&laquo; %link') ?></div><br />
<div class="alignright"><?php //previous_posts_link('Newer posts &raquo;') ?> <?php //next_post_link('%link &raquo;') ?></div>
</div>-->

<?php include('footer.php'); ?>