
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Design Credit</b>&nbsp;
                <a href="http://www.abidoc.com" target="_blank">
                abidoc</a>
            </div>

            <strong>&copy;<?php

                $year = (int)date('Y');

                if ( $year == 2020 ) {
                    $copyright = 2020;
                } else {
                    $copyright = 2020 . ' &ndash; ' . $year;
                }

                echo ' ' . $copyright . ' ';
            
            ?>{{ Html::mailto('maseabidoc@gmail.com', 'abiodun awowole', ['target' => '_blank']) }}.</strong> All rights reserved.
        </footer>
