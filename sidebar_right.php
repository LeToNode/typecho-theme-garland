<div id="sidebar-right" class="sidebar">

<ul class="menu">
<li>
<form method="post" id="searchform" action="">
<div><input type="text" value="" name="s" id="s" />
<input type="submit" id="searchsubmit" value="搜索" />
</div>
</form>
</li>

<li>
<h3>最新评论</h3>
<ul>
<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                 <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(50, '...'); ?></li>
            <?php endwhile; ?>
</ul>
</li>


<li>
<h3>最新日志</h3>
<ul>
<?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
</li>



<li>
<h3>归档</h3>
<ul>
 <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
</ul>
</li>

<li>
<h3>功能</h3>
<ul>
<?php if($this->user->hasLogin()): ?>
<li><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
<li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
<?php else: ?>
<li><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
<?php endif; ?>
<li><a title="This page validates as XHTML 1.0 Transitional" href="http://validator.w3.org/check/referer">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
<li><a href="http://www.typecho.org">Typecho</a></li>
</ul>
</li>


</div>
