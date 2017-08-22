<?php

Route::get('/login-new', 'clientController@download');


Route::any('/', function()
{
	return View::make('login-new');
});

Route::any('/home', function()
{
    return View::make('home');
});

Route::get('/dashboard', function()
{
    return View::make('home');
});

Route::post('client', array('uses'=>'clientController@addnewclient'));

Route::post('quote', array('uses'=>'quotesController@addnewquote'));

Route::post('invoice', array('uses'=>'invoicesController@addnewinvoice'));

//Route::post('quote', array('uses'=>'quotesController@sendnewquote'));



//Route::get('/client', 'clientController@addnewclient');

Route::match(['get', 'post'], '/clients', function()
{
	return View::make('clients');
});

Route::match(['get', 'post'], '/draft-invoices', function()
{
    return View::make('draft-invoices');
});

Route::match(['get', 'post'], '/sent-invoices', function()
{
    return View::make('sent-invoices');
});

Route::match(['get', 'post'], '/overdue-invoices', function()
{
    return View::make('overdue-invoices');
});

Route::match(['get', 'post'], '/payments-collected', function()
{
    return View::make('payments-collected');
});

Route::get('/quote', 'quotesController@downloadquotes');

Route::get('/quotes', function()
{
	return View::make('quotes');
});

Route::match(['get', 'post'], '/draft-quotes', function()
{
    return View::make('draft-quotes');
});

Route::match(['get', 'post'], '/sent-quotes', function()
{
    return View::make('sent-quotes');
});

Route::match(['get', 'post'], '/rejected-quotes', function()
{
    return View::make('rejected-quotes');
});

Route::match(['get', 'post'], '/accepted-quotes', function()
{
    return View::make('accepted-quotes');
});

Route::get('/invocie', 'invoicesController@downloadinvoices');

Route::get('/invoices', function()
{
	return View::make('invoices');
});

Route::get('/payment', 'paymentsController@downloadpayments');

Route::get('/payments', function()
{
    return View::make('payments');
});

Route::get('/expenses', function()
{
    return View::make('expenses');
});

Route::get('/reports', function()
{
    return View::make('reports');
});


