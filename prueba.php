<?php

    include("funciones/funcion_traducir.php");
    include( "Vimprimir.php" );
    
    $r = llamado::traduce('viejo');
    
    $r = Vimprimir::organizar( $r );

    echo $r;