<?php

namespace observers;

use SplObserver;
use SplSubject;

class CollectDataListener implements SplObserver
{

    public function update(SplSubject $subject)
    {
        echo "Data collected.";
        ?>
        <script>
            console.log("Data collected.");
        </script>
        <?php
    }
}
?>