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
        // ...
        dd(url('/'));
    }

    public function sheetExport()
    {
        // ...
        dd(url('/'));
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
