<?
    require('twip.php');
    $options['webroot'] = '/twip';
    $options['debug'] = false;
    $options['dolog'] = true;
    $options['logfile'] = 'log.txt';
    $options['replace_shorturl'] = true;
    $options['docompress'] = false;

    $twip = new twip($options);
?>
