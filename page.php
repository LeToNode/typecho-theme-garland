<?php include('header.php'); ?>

<div class="post">

<h2><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>" rel="bookmark"><?php $this->title() ?></a></h2>

<div class="content">
<?php $this->content(); ?>
</div>


</div>
<?php include('comments.php'); ?>


<!--
<div class="nextprev">
<div class="alignleft"><?php //next_posts_link('&laquo; Older posts') ?> <?php //previous_post_link('&laquo; %link') ?></div><br />
<div class="alignright"><?php //previous_posts_link('Newer posts &raquo;') ?> <?php //next_post_link('%link &raquo;') ?></div>
</div>-->

<?php include('footer.php'); ?>