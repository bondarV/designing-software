<?php
$body = new LightElementNode(new ElementVariation('body','block',false));
$div = new LightElementNode(new ElementVariation('div','block',false),cssClasses: ['padding'=>'20px']);
$body->add($div);
$body->lifeCycleExhibit();
echo PHP_EOL;
$text = new LightTextNode('3232');
$div->add($text);
$text->lifeCycleExhibit();
