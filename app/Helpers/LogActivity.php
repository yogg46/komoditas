<?php
namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Str;

use App\Models\LogActivityModels;
use Illuminate\Support\Facades\Request;

class LogActivity {
    public static function LogHistory( $Subject,  $LogAksi, $Keterangan ) {
        $log = [];
        // $log[ 'id' ] = date( 'Ymdhis' );
        $log[ 'subject' ] = $Subject;
        $log[ 'url' ] = Request::fullUrl();
        $log[ 'method' ] = Request::method();
        $log[ 'agent' ] = Request::header( 'user-agent' );
        $log[ 'aksi' ] = $LogAksi;
        $log[ 'user' ] = auth()->check() ? auth()->user()->username : '';
        $log[ 'keterangan' ] = $Keterangan;
        $log[ 'ip' ] = Request::getClientIp( true );

        LogActivityModels::create( $log );
    }

    public static function LogLogin( $Subject,  $LogAksi, $Keterangan, $getUser ) {
        $log = [];
        // $log[ 'id' ] = date( 'Ymdhis' );
        $log[ 'subject' ] = $Subject;
        $log[ 'url' ] = Request::fullUrl();
        $log[ 'method' ] = Request::method();
        $log[ 'agent' ] = Request::header( 'user-agent' );
        $log[ 'aksi' ] = $LogAksi;
        $log[ 'user' ] = $getUser;
        $log[ 'keterangan' ] = $Keterangan;
        $log[ 'ip' ] = Request::getClientIp( true );

        LogActivityModels::create( $log );
    }

    public static function LogLogout( $Subject, $LogAksi, $Keterangan ) {
        $log = [];
        // $log[ 'id' ] = date( 'Ymdhis' );
        $log[ 'subject' ] = $Subject;
        $log[ 'url' ] = Request::fullUrl();
        $log[ 'method' ] = Request::method();
        $log[ 'agent' ] = Request::header( 'user-agent' );
        $log[ 'aksi' ] = $LogAksi;
        $log[ 'user' ] = auth()->check() ? auth()->user()->username : '-';
        $log[ 'keterangan' ] = $Keterangan;
        $log[ 'ip' ] = Request::getClientIp( true );

        LogActivityModels::create( $log );
    }

    public static function LogGagalLogin($Subject,  $LogAksi, $Keterangan, $getUser) {
        $log = [];
        // $log[ 'id' ] = date( 'Ymdhis' );
        $log[ 'subject' ] = $Subject;
        $log[ 'url' ] = Request::fullUrl();
        $log[ 'method' ] = Request::method();
        $log[ 'agent' ] = Request::header( 'user-agent' );
        $log[ 'aksi' ] = $LogAksi;
        $log[ 'user' ] = $getUser;
        $log[ 'keterangan' ] = $Keterangan;
        $log[ 'ip' ] = Request::getClientIp( true );

        LogActivityModels::create( $log );
    }

    public static function LogGagalCaptcha($Subject,  $LogAksi, $Keterangan, $getUser) {
        $log = [];
        // $log[ 'id' ] = date( 'Ymdhis' );
        $log[ 'subject' ] = $Subject;
        $log[ 'url' ] = Request::fullUrl();
        $log[ 'method' ] = Request::method();
        $log[ 'agent' ] = Request::header( 'user-agent' );
        $log[ 'aksi' ] = $LogAksi;
        $log[ 'user' ] = $getUser;
        $log[ 'keterangan' ] = $Keterangan;
        $log[ 'ip' ] = Request::getClientIp( true );

        LogActivityModels::create( $log );
    }

}
