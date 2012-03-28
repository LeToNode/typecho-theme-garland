<?php
/**
 * 本皮肤基于Wordpress同名皮肤制作.
 * 皮肤预览可以参考<a href="http://www.letonlife.cn/">garland</a>
 *
 * @package garland
 * @author leton
 * @version 1.0.0
 * @link http://www.letonlife.cn
 */
include('header.php');
?>

<?php while($this->next()): ?>
<div class="post">

<h2><a href="<?php $this->permalink() ?>" rel="bookmark" title="<?php $this->title() ?>"><?php $this->title() ?></a></h2>
<span class="submitted"><?php $this->date('F jS, Y g:i A'); ?> &#8212; <?php $this->author(); ?></span>

<div class="content">
<?php $this->content('继续阅读 &raquo;'); ?>
</div>

<div class="meta">
归档于 <?php $this->category(','); ?>. <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '评论(1)', '评论(%d)'); ?></a>
</div>

</div>
<?php endwhile; ?>


<div class="nextprev">
<ol class="pages"><?php $this->pageNav(); ?></ol>
</div>

<?php include('footer.php'); ?>