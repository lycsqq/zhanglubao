<?php if (!defined('THINK_PATH')) exit();?><div class="anchors">
	<ul>
		<?php if(is_array($anchors)): $i = 0; $__LIST__ = $anchors;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anchor): $mod = ($i % 2 );++$i;?><li><?php $user = query_user(array('avatar','username'),$anchor['uid']); ?>

			<div class="anchors-thumb">
				<a href="<?php echo U('/live/'.$anchor['id']);?>"><img
					src="/Public/Core/images/placeholder.png"
					lazy-src="<?php echo ($user["avatar"]); ?>" height="84" width="84" /> </a>
			</div>
			<div class="anchors-des"><?php echo ($user["username"]); ?></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>