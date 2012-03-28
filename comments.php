<?php
function threadedComments($comments) {
?>
<li id="<?php $comments->theId(); ?>"  class="borderc1"> 
		<div class="commenthead">At <?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?>, <a name='<?php $comments->theId(); ?>'></a><span>
		<a href='<?php ?>' rel='external nofollow' target="_blank"><?php $comments->author(); ?></a></span> 说: </div> 
		<div class="body"> 
			<?php $comments->gravatar(80, 'X', '', 'avatar'); ?>
			<p><?php $comments->content(); ?></p> 
		</div> 
		<div class="meta"> 
			[<?php Helper::replyLink($comments->theId, $comments->coid, 'Reply', 'respond'); ?>]</div>
			<?php $comments->threadedComments('<ol>', '</ol>'); ?>
	</li>
<?php
}
?>

<!-- You can start editing here. -->
	<h3 id="comments"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论' );?></h3>

	<ol class="commentlist">
	<?php $this->comments()->to($comments); ?>
	<?php while($comments->next()): ?>
	<li id="<?php $comments->theId(); ?>"  class="borderc1"> 
		<div class="commenthead">At <?php $comments->date('F jS, Y'); ?> <?php $comments->date('h:i a'); ?>, <a name='<?php $comments->theId(); ?>'></a><span>
		<a href='<?php ?>' rel='external nofollow' target="_blank"><?php $comments->author(); ?></a></span> 说: </div> 
		<div class="body"> 
			<?php $comments->gravatar(80, 'X', '', 'avatar'); ?>
			<p><?php $comments->content(); ?></p> 
		</div> 
		<div class="meta"> 
			[<?php Helper::replyLink($comments->theId, $comments->coid, 'Reply', 'respond'); ?>]</div>
			<?php $comments->threadedComments('<ol>', '</ol>'); ?>
	</li>
<?php endwhile; ?>
</ol>

<?php if($this->allow('comment')): ?>

<div id="respond">
<h3>发表评论 <span class="cancel-comment-reply"> |<?php Helper::cancleCommentReplyLink('点此取消发布评论', 'respond'); ?></span></h3>
<form action="<?php $this->commentUrl() ?>" method="post" id="commentform">
<?php if($this->user->hasLogin()): ?>
<p>Logged in as <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. 
       <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout'); ?> &raquo;</a>
</p>
<?php else : ?>
<p><input type="text" name="author" id="author" value="<?php $this->remember('author'); ?>" size="22" tabindex="1" />
<label for="author"><small>昵称 <?php  echo "(必填)"; ?></small></label></p>
<p><input type="text" name="mail" id="mail" value="<?php $this->remember('mail'); ?>" size="22" tabindex="2" />
<label for="email"><small>电邮 (不会公布) <?php  echo "(必填)"; ?></small></label></p>
<p><input type="text" name="url" id="url" value="<?php $this->remember('url'); ?>" size="22" tabindex="3" />
<label for="url"><small>网站</small></label></p>
<?php endif ?>
<p><textarea name="text" id="text" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="发表评论" />
</p>
</form>
</div>
<?php endif ?>
