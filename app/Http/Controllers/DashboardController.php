<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Provision a new web server.
     */
    public function authLogin()
    {
        return view('dash.login');
    }

    public function authLoginCallback()
    {
      return view('dash.login-callback');
    }

    public function authLogoutCallback()
    {
        // ...
        dd(url('/'));
    }

    public function newSalesOrders()
    {
        return view('dash.new-sales-orders');
    }

    public function sheetExport()
    {
      return view('dash.sheet-export');
    }

    public function paginationTables()
    {
        // ...
        dd(url('/'));
    }

    public function settingAdminAccount()
    {
        // ...
        dd(url('/'));
    }
    public function settingLogout()
    {
        // ...
        dd(url('/'));
    }
}
