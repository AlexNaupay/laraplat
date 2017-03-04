<?php
// 1. Create file: helpers.php
// 2. In composer.json add, in autoload{.. ..}: "files": [
//                                                  "app/helpers.php"
//                                               ]
// 3. > composer dump-autoload

function devAuthor(){
    return "@nlexhen";
}