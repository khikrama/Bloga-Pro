<?php
global $xlt_option;
$footer = $xlt_option['footer_widget'];

switch ($footer) {
    case '1c' :
        get_template_part( 'template-parts/footers/footer', '1c' );
        break;
    case '2c' :
        get_template_part( 'template-parts/footers/footer', '2c' );
        break;
    case '2cl' :
        get_template_part( 'template-parts/footers/footer', '2cl' );
        break;
    case '2cr' :
        get_template_part( 'template-parts/footers/footer', '2cr' );
        break;
    case '3c' :
        get_template_part( 'template-parts/footers/footer', '3c' );
        break;
    case '3cl' :
        get_template_part( 'template-parts/footers/footer', '3cl' );
        break;
    case '3cm' :
        get_template_part( 'template-parts/footers/footer', '3cm' );
        break;
    case '3cr' :
        get_template_part( 'template-parts/footers/footer', '3cr' );
        break;
    case '4c' :
        get_template_part( 'template-parts/footers/footer', '4c' );
        break;
    default :
        get_template_part( 'template-parts/footers/footer', '3c' );

}