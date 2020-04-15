<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Quform</title>
<link rel="stylesheet" type="text/css" href="../css/pagestyles.css" />
<link rel="stylesheet" type="text/css" href="../css/standard.css" />
</head>
<body>
<div class="outside">
    <div class="quform-outer">
        <div class="quform-wrapper">
            <div class="quform quform-inner">
                <?php if (isset($result) && is_array($result) && array_key_exists('type', $result)) : ?>
                    <?php if ($result['type'] == 'error') : ?>
                        <div class="quform-title">Please go back and correct these errors</div>
                        <ul class="quform-errors-no-js">
                            <?php foreach ($result['data'] as $name => $info) : ?>
                                <?php if (count($info['errors'])) :  ?>
                                    <li><?php echo Quform::escape($info['label']); ?><ul><li><?php echo Quform::escape($info['errors'][0]); ?></li></ul></li>
                                <?php endif;?>
                            <?php endforeach; ?>
                        </ul>
                    <?php elseif ($result['type'] == 'success') : ?>
                        <?php echo $result['message']; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
         </div>
    </div>
</div>
</body>
</html>