<?php

$obj = json_decode( json_encode( ['foo' => 'bar' ] ) );
var_dump( array_key_exists( 'foo', $obj ) );
