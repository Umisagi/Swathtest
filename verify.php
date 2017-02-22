<?php
 
    function swath($input_text) 
    {
        $input_filename= tempnam("/tmp", "swath_");
        $output_filename= tempnam("/tmp", "swath_");
        $input_text_tis620 = iconv("UTF-8", "TIS-620", $input_text);
        file_put_contents($input_filename, $input_text_tis620);
        system("/swath < $input_filename > $output_filename");
        $raw = file_get_contents($output_filename);
        $raw_utf8 = iconv("TIS-620", "UTF-8", $raw);
        unlink($input_filename);
        unlink($output_filename);
        return preg_split('/\|/', $raw_utf8);
    }
 
    if($_REQUEST['input_text']) {
        $output = swath($_REQUEST['input_text']);
        print implode(" ", $output);
    }
?>
