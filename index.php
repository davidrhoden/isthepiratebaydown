<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Is The Pirate Bay Down?</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
        <h1>Is The Pirate Bay Down?</h1>
        <?php
$url = 'http://www.thepiratebay.se';

$urls = ['http://www.thepiratebay.se', 'http://thepiratebay.am', 'http://thepiratebay.gd', 'http://thepiratebay.gs', 'htt://thepiratebay.la', 'http://thepiratebay.mn','http://thepiratebay.vg'];
    foreach($urls as $val) {
        $ch = curl_init($val);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_exec($ch);
        $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if (200==$retcode) {
            // All's well
           echo '<div class="no"><i class="fa fa-thumbs-o-up"></i> No. <a href="' . $val .'">' . $val . '</a> is working.</div>';
        } else {
            // not so much
           echo '<div class="yes"><i class="fa fa-thumbs-o-down"></i> Yes. It is not just you.<br><a href="' . $val .'">' . $val . '</a> is not responding.</div>';
        }
    }
?>
</div>
<div class="adcontainer">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive ad 150527 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6192137792715797"
     data-ad-slot="3566488122"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    </body>
</html>