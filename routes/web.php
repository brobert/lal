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
Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/layout/default', 'LayoutController@default')->name('layout.default');
    Route::get('/layout/with-footer', 'LayoutController@withFooter')->name('layout.withFooter');
    Route::get('/layout/reveal-header', 'LayoutController@revealHeader')->name('layout.revealHeader');
    Route::get('/layout/fixed-header', 'LayoutController@fixedHeader')->name('layout.fixedHeader');
    Route::get('/layout/fixed-sidebar', 'LayoutController@fixedSidebar')->name('layout.fixedSidebar');
    Route::get('/layout/navbar-collapse', 'LayoutController@navbarCollapse')->name('layout.navbarCollapse');

    Route::get('/widget', 'WidgetStatsController@index')->name('widget');

    Route::get('/component/animation', 'UiElementsController@animation')->name('component.animation');
    Route::get('/component/button', 'UiElementsController@button')->name('component.button');
    Route::get('/component/carousel', 'UiElementsController@carousel')->name('component.carousel');
    Route::get('/component/grid', 'UiElementsController@grid')->name('component.grid');
    Route::get('/component/icon', 'UiElementsController@icon')->name('component.icon');
    Route::get('/component/loading', 'UiElementsController@loading')->name('component.loading');
    Route::get('/component/notification', 'UiElementsController@notification')->name('component.notification');
    Route::get('/component/panel', 'UiElementsController@panel')->name('component.panel');
    Route::get('/component/pricing', 'UiElementsController@pricing')->name('component.pricing');
    Route::get('/component/slider', 'UiElementsController@slider')->name('component.slider');
    Route::get('/component/sortable', 'UiElementsController@sortable')->name('component.sortable');
    Route::get('/component/tabsaccordion', 'UiElementsController@tabsaccordion')->name('component.tabsaccordion');
    Route::get('/component/typography', 'UiElementsController@typography')->name('component.typography');
    Route::get('/component/others', 'UiElementsController@others')->name('component.others');

    Route::group([
        'prefix' => 'form'
    ], function () {

        Route::get('/element', 'FormController@element')->name('form.element');
        Route::get('/layout', 'FormController@layout')->name('form.layout');
        Route::get('/validation', 'FormController@validation')->name('form.validation');
        Route::get('/wizard', 'FormController@wizard')->name('form.wizard');
        Route::get('/wysiwyg', 'FormController@wysiwyg')->name('form.wysiwyg');
        Route::get('/xeditable', 'FormController@xeditable')->name('form.xeditable');
        Route::get('/fileupload', 'FormController@fileupload')->name('form.fileupload');
        Route::get('/imagecrop', 'FormController@imagecrop')->name('form.imagecrop');
    });

    Route::group([
        'prefix' => 'table'
    ], function () {

        Route::get('default', 'TableController@default')->name('table.default');
        Route::get('datatable', 'TableController@datatable')->name('table.datatable');
    });

    Route::group([
        'prefix' => 'blog'
    ], function () {
        Route::get('{viewType}', 'BlogPostController@index')->name('page.blog');
        Route::get('single/{postid?}', 'BlogPostController@show')->name('page.blog.single');
    });
    Route::group([
        'prefix' => 'page'
    ], function () {
        Route::get('starter', 'PageController@starter')->name('page.starter');
        Route::get('calendar', 'PageController@calendar')->name('page.calendar');
        Route::get('emailinbox', 'PageController@emailinbox')->name('page.email.inbox');
        Route::get('emailview', 'PageController@emailview')->name('page.email.view');
        Route::get('error404', 'PageController@error404')->name('page.error.404');
        Route::get('error403', 'PageController@error403')->name('page.error.403');
        Route::get('error500', 'PageController@error500')->name('page.error.500');
        Route::get('faq', 'PageController@faq')->name('page.faq');
        Route::get('invoice', 'PageController@invoice')->name('page.invoice');
        Route::get('loginreturned', 'PageController@loginreturned')->name('page.login.returned');
        Route::get('mediaalbum', 'PageController@mediaalbum')->name('page.media.album');
        Route::get('mediagallery', 'PageController@mediagallery')->name('page.media.gallery');
        Route::get('messagebubble', 'PageController@messagebubble')->name('page.message.bubble');
        Route::get('messagerich', 'PageController@messagerich')->name('page.message.rich');
        Route::get('timelinev2', 'PageController@timelinev2')->name('page.timeline.v2');
    });

    Route::group([
        'prefix' => 'hurra'
    ], function () {
        Route::get('/', 'HurraController@index')->name('hurra.index');
        Route::get('calendar', 'PageController@calendar')->name('page.calendar');
        Route::get('emailinbox', 'PageController@emailinbox')->name('page.email.inbox');
        Route::get('emailview', 'PageController@emailview')->name('page.email.view');
        Route::get('error404', 'PageController@error404')->name('page.error.404');
        Route::get('error403', 'PageController@error403')->name('page.error.403');
        Route::get('error500', 'PageController@error500')->name('page.error.500');
        Route::get('faq', 'PageController@faq')->name('page.faq');
        Route::get('invoice', 'PageController@invoice')->name('page.invoice');
        Route::get('loginreturned', 'PageController@loginreturned')->name('page.login.returned');
        Route::get('mediaalbum', 'PageController@mediaalbum')->name('page.media.album');
        Route::get('mediagallery', 'PageController@mediagallery')->name('page.media.gallery');
        Route::get('messagebubble', 'PageController@messagebubble')->name('page.message.bubble');
        Route::get('messagerich', 'PageController@messagerich')->name('page.message.rich');
        Route::get('timelinev2', 'PageController@timelinev2')->name('page.timeline.v2');
    });

    Route::get('flot', 'ChartController@flot')->name('chart.flot');
    Route::post('flot/data/{type}', 'ChartController@flotData')->name('flot.data');
    Route::get('vector', 'MapsController@vector')->name('maps.vector');
    Route::get('google', 'MapsController@google')->name('maps.google');
});

Auth::routes();

Route::resource('profile', 'Auth\ProfileController');

Route::get('/register', function () {
    return view('register');
});