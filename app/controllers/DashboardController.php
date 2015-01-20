<?php

class DashboardController extends BaseController
{
    protected $layout = 'layouts.master';

    public function index()
    {
        return View::make('dashboard.index');
    }
}
