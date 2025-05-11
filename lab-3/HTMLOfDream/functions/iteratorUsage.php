<?php

use visitors\NodeCountVisitor;
use visitors\RetrieveMetaVisitor;

$body = new LightElementNode(new ElementVariation('body'));
$firstDiv = new LightElementNode(new ElementVariation('div'));
$secondDiv = new LightElementNode(new ElementVariation('div'));
$thirdDiv = new LightElementNode(new ElementVariation('div'));
$fourthDiv = new LightElementNode(new ElementVariation('div'));

$p1 = new LightElementNode(new ElementVariation('p'));
$span = new LightElementNode(new ElementVariation('span'));
$text1 = new LightTextNode("Hello from first div");
$span->add($text1);
$text2 = new LightTextNode("Inside second div");
$text3 = new LightTextNode("Innermost third div");
$p1->add($text3);
$thirdDiv->add($p1);
$secondDiv->add($text2);
$secondDiv->add($thirdDiv);

$firstDiv->add($span);

$firstDiv->add($secondDiv);
$firstDiv->add($fourthDiv);

$body->add($firstDiv);

$metaVisitor = new RetrieveMetaVisitor();

$body->accept($metaVisitor);
// Count of children: 1
$iterating = function ($iterator) {
    $nodeCountVisitor = new NodeCountVisitor();
    foreach ($iterator as $node) {
        $level = $iterator->getLevel();

        echo str_repeat('  ', $level);
        $node->accept($nodeCountVisitor);
        echo $node;

        echo PHP_EOL;
    }

};
// ITERATOR + Visitor
$breadthFirstIterator = $body->getBreadthFirstIterator();
$iterating($breadthFirstIterator);

$depthFirstIterator = $body->getDepthFirstIterator();
$iterating($depthFirstIterator);


//Node item #1 body
//  Node item #2 div
//    Node item #3 span
//      Text item #1 text: Hello from first div
//    Node item #4 div
//      Text item #2 text: Inside second div
//      Node item #5 div
//        Node item #6 p
//          Text item #3 text: Innermost third div
//    Node item #7 div




// body
//  div
//    span
//    div
//    div
//      text: Hello from first div
//      text: Inside second div
//      div
//        p
//          text: text: Innermost third div
//body
//  div
//    span
//      text: Hello from first div
//    div
//      text: Inside second div
//      div
//        p
//          text: text: Innermost third div
//    div