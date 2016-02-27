<?php
class phpdocumentor {
    public static function run($inpath,$outpath){
        shell_exec(dirname(__FILE__).'/phpDocumentor.phar run -d '.$inpath.' -t '.$outpath);
    }
}