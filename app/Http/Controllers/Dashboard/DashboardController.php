<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function deploy()
    {
        exec('whoami ; cd /var/www/taxlocal/ && ls -la ; git status ; git pull 2>&1 ', $output, $retval);
        echo "Returned with status $retval and output:\n";
        // print_r($output);

        echo '<pre>';
        print_r($output);
        echo '</pre>';
    }
}
