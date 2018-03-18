
<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::group( [
    'middleware' => 'auth'
], function () {
    Route::get( '/', 'HomeController@index' );

    Route::get( '/layout/default', 			'LayoutController@default' )		->name('layout.default');
    Route::get( '/layout/with-footer', 		'LayoutController@withFooter' )		->name('layout.withFooter');
    Route::get( '/layout/reveal-header', 	'LayoutController@revealHeader' )	->name('layout.revealHeader');
    Route::get( '/layout/fixed-header', 	'LayoutController@fixedHeader' )	->name('layout.fixedHeader');
    Route::get( '/layout/fixed-sidebar', 	'LayoutController@fixedSidebar' )	->name('layout.fixedSidebar');
    Route::get( '/layout/navbar-collapse', 	'LayoutController@navbarCollapse' )	->name('layout.navbarCollapse');
    
    Route::get( '/widget', 	'WidgetStatsController@index' )	->name('widget');

    Route::get( '/component/animation', 'UiElementsController@animation')->name('component.animation');
    Route::get( '/component/button', 'UiElementsController@button')->name('component.button');
    Route::get( '/component/carousel', 'UiElementsController@carousel')->name('component.carousel');
    Route::get( '/component/grid', 'UiElementsController@grid')->name('component.grid');
    Route::get( '/component/icon', 'UiElementsController@icon')->name('component.icon');
    Route::get( '/component/loading', 'UiElementsController@loading')->name('component.loading');
    Route::get( '/component/notification', 'UiElementsController@notification')->name('component.notification');
    Route::get( '/component/panel', 'UiElementsController@panel')->name('component.panel');
    Route::get( '/component/pricing', 'UiElementsController@pricing')->name('component.pricing');
    Route::get( '/component/slider', 'UiElementsController@slider')->name('component.slider');
    Route::get( '/component/sortable', 'UiElementsController@sortable')->name('component.sortable');
    Route::get( '/component/tabsaccordion', 'UiElementsController@tabsaccordion')->name('component.tabsaccordion');
    Route::get( '/component/typography', 'UiElementsController@typography')->name('component.typography');
    Route::get( '/component/others', 'UiElementsController@others')->name('component.others');

    Route::get( '/form-element', function () {
        return view( 'form-element' );
    } );
    Route::get( '/form-layout', function () {
        return view( 'form-layout' );
    } );
    Route::get( '/form-validation', function () {
        return view( 'form-validation' );
    } );
    Route::get( '/form-wizard', function () {
        return view( 'form-wizard' );
    } );
    Route::get( '/form-wysiwyg', function () {
        return view( 'form-wysiwyg' );
    } );
    Route::get( '/form-xeditable', function () {
        return view( 'form-xeditable' );
    } );
    Route::get( '/form-fileupload', function () {
        return view( 'form-fileupload' );
    } );
    Route::get( '/form-imagecrop', function () {
        return view( 'form-imagecrop' );
    } );
    Route::get( '/table-default', function () {
        return view( 'table-default' );
    } );
    Route::get( '/table-datatable', function () {
        return view( 'table-datatable' );
    } );
    Route::get( '/page-starter', function () {
        return view( 'page-starter' );
    } );
    Route::get( '/page-blog-default', function () {
        return view( 'page-blog-default' );
    } );
    Route::get( '/page-blog-grid', function () {
        return view( 'page-blog-grid' );
    } );
    Route::get( '/page-blog-single', function () {
        return view( 'page-blog-single' );
    } );
    Route::get( '/page-calendar', function () {
        return view( 'page-calendar' );
    } );
    Route::get( '/page-email-inbox', function () {
        return view( 'page-email-inbox' );
    } );
    Route::get( '/page-email-view', function () {
        return view( 'page-email-view' );
    } );
    Route::get( '/page-error-404', function () {
        return view( 'page-error-404' );
    } );
    Route::get( '/page-error-403', function () {
        return view( 'page-error-403' );
    } );
    Route::get( '/page-error-500', function () {
        return view( 'page-error-500' );
    } );
    Route::get( '/page-faq', function () {
        return view( 'page-faq' );
    } );
    Route::get( '/page-invoice', function () {
        return view( 'page-invoice' );
    } );

    Route::resource( 'page-profile', 'Auth\ProfileController' );
    Route::get( '/page-login-returned', function () {
        return view( 'page-login-returned' );
    } );
    Route::get( '/register', function () {
        return view( 'register' );
    } );
    Route::get( '/page-media-album', function () {
        return view( 'page-media-album' );
    } );
    Route::get( '/page-media-gallery', function () {
        return view( 'page-media-gallery' );
    } );
    Route::get( '/page-message-bubble', function () {
        return view( 'page-message-bubble' );
    } );
    Route::get( '/page-message-rich', function () {
        return view( 'page-message-rich' );
    } );
    Route::get( '/page-timeline-v2', function () {
        return view( 'page-timeline-v2' );
    } );
    Route::get( '/chart-flot', function () {
        return view( 'chart-flot' );
    } );
    Route::get( '/maps-vector', function () {
        return view( 'maps-vector' );
    } );
    Route::get( '/maps-google', function () {
        return view( 'maps-google' );
    } );
} );

Auth::routes();