<?php
global $xlt_option;
?>
<div class="social">
    <ul>
        <?php if($xlt_option['xl_facebook']) : ?>
            <li>
                <a href="<?php echo $xlt_option['xl_facebook']; ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
            </li>
        <?php endif; ?>

        <?php if($xlt_option['xl_twitter']) : ?>
            <li>
                <a href="<?php echo $xlt_option['xl_twitter']; ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
            </li>
        <?php endif; ?>

        <?php if($xlt_option['xl_linkedin']) : ?>
            <li>
                <a href="<?php echo $xlt_option['xl_linkedin']; ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a>
            </li>
        <?php endif; ?>

        <?php if($xlt_option['xl_google_plus']) : ?>
            <li>
                <a href="<?php echo $xlt_option['xl_google_plus']; ?>" target="_blank"><i class="fa fa-google-plus fa-fw"></i></a>
            </li>
        <?php endif; ?>

        <?php if($xlt_option['xl_dribbble']) : ?>
            <li>
                <a href="<?php echo $xlt_option['xl_dribbble']; ?>" target="_blank"><i class="fa fa-dribbble fa-fw"></i></a>
            </li>
        <?php endif; ?>

        <?php if($xlt_option['xl_pinterest']) : ?>
            <li>
                <a href="<?php echo $xlt_option['xl_pinterest']; ?>" target="_blank"><i class="fa fa-pinterest fa-fw"></i></a>
            </li>
        <?php endif; ?>

        <?php if($xlt_option['xl_behance']) : ?>
            <li>
                <a href="<?php echo $xlt_option['xl_behance']; ?>" target="_blank"><i class="fa fa-behance fa-fw"></i></a>
            </li>
        <?php endif; ?>

        <?php if($xlt_option['xl_youtube']) : ?>
            <li>
                <a href="<?php echo $xlt_option['xl_youtube']; ?>" target="_blank"><i class="fa fa-youtube fa-fw"></i></a>
            </li>
        <?php endif; ?>
    </ul>
</div>