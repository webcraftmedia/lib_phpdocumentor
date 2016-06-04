<?php
class phpdocumentor {
    public static function run($inpath,$outpath,$cachepath,$ignore,$title,$sourcecode,$parseprivate){
        $sourcecode_ = $sourcecode ? '--sourcecode ' : '';
        $parseprivate_ = $parseprivate ? '--parseprivate ' : '';
        $ignore_ = '';
        foreach($ignore as $path){
            $ignore_ .= $path.',';}
        if($ignore_ != ''){
            $ignore_ = '--ignore '.rtrim($ignore_, ',');}
        new INFO(shell_exec('php5 '.dirname(__FILE__).'/phpDocumentor.phar run'.
                            ' -d '.$inpath->SERVERPATH().
                            ' -t '.$outpath->SERVERPATH().
                            ' --cache-folder '.$cachepath->SERVERPATH().
                            ' '.$ignore_.
                            ' '.$sourcecode_.
                            ' '.$parseprivate_.
                            ' --force'.
                            ' --title "'.$title.'" 2>&1'));
        return \SYSTEM\LOG\JsonResult::ok();
    }
}