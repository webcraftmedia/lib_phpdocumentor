<?php
class phpdocumentor {
    public static function run($inpath,$outpath,$cachepath,$title,$sourcecode,$parseprivate){
        $sourcecode_ = $sourcecode ? '--sourcecode ' : '';
        $parseprivate_ = $parseprivate ? '--parseprivate ' : '';
        new INFO(shell_exec(dirname(__FILE__).'/phpDocumentor.phar run'.
                            ' -d '.$inpath.
                            ' -t '.$outpath.
                            ' --cache-folder '.$cachepath.
                            ' '.$sourcecode_.
                            ' '.$parseprivate_.
                            ' --title "'.$title.'" 2>&1'));
        return \SYSTEM\LOG\JsonResult::ok();
    }
}