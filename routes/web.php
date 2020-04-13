<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/', 'WelcomeController@index' );

if ( ! function_exists( 'get_base64_file' ) ) {
    function get_base64_file( $path )
    {
        $type = pathinfo( $path, PATHINFO_EXTENSION );
        $data = \Illuminate\Support\Facades\File::get( $path );

        $base64 = "";
        if ( $type == "svg" ) {
            $base64 = "data:image/svg+xml;base64," . base64_encode( $data );
        } else {
            $base64 = "data:image/" . $type . ";base64," . base64_encode( $data );
        }

        return $base64;
    }
}
