<?php
global $xlt_option;
$footer_top = $xlt_option['footer_top'];

switch ($footer_top) {
    case '1c' :
        get_template_part( 'template-parts/footers/footer-top', '1c' );
        break;
    case '2c' :
        get_template_part( 'template-parts/footers/footer-top', '2c' );
        break;
    case '2cl' :
        get_template_part( 'template-parts/footers/footer-top', '2cl' );
        break;
    case '2cr' :
        get_template_part( 'template-parts/footers/footer-top', '2cr' );
        break;
    default :
        get_template_part( 'template-parts/footers/footer-top', '2c' );

}