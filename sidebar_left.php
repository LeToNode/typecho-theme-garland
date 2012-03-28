<div id="sidebar-left" class="sidebar">

<ul class="menu">

<li>
<h3>分类</h3>
<ul>
<li <?php if($this->is('index')){echo 'class="cat-item"';}?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a></li>
<?php $this->widget('Widget_Metas_Category_List')
                ->parse('<li><a href="{permalink}" class="cat-item">{name}</a> ({count})</li>'); ?>
</ul>
</li>

<li> 
<?php PageToLinks::output('links', 'h2', 'ul'); ?>
</li>
</ul>

</div>
