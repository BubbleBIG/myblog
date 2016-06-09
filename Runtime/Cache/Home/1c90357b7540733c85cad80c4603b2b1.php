<?php if (!defined('THINK_PATH')) exit();?>
<div id='main'>
        <?php if(is_array($blog)): foreach($blog as $key=>$v): ?><!-- <dl class='paper a<?php echo mt_rand(1,5);?>'> -->
        <dl>
            <dt>
                <span class='title'><?php echo ($v["title"]); ?></span>
            </dt>
            <dd class='content'><?php echo ($v["content"]); ?></dd>
            <dd class='bottom'>
                <span class='time'><?php echo ($v["createtime"]); ?></span>
                <a href="" class='close'></a>
            </dd>
        </dl><?php endforeach; endif; ?>


</div>