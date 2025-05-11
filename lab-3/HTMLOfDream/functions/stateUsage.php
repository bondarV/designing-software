<?php

use states\DisabledState;
use states\EnabledState;

//state
$enabledState = new EnabledState();
//context
$button = new Button(new ElementVariation('button'),state:$enabledState);
$button->click();
// It was in vain,if we would implement dbClick action or invoked multiply times click()
// I put inside click test click to imitate executing dbClick(if we put further execution of click
// within this time, for instance, we would get warning!!

//STATE: Enabled
//STATE: Clicked
//Click is pressed
//STATE: DbClicked
//Double click is pressed
//STATE: Enabled