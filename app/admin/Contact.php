<?php

Admin::model(\App\Models\Admin\Contact::class)->title('Contact')->with()->filters(function ()
{
	 //ModelItem::filter('id')->title()->from(\App\Models\Contact::class);
})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('email', 'Email');
	Column::string('message', 'Message');
})->form(function ()
{
	FormItem::text('name', 'Name')->required();
    FormItem::text('email', 'Email')->required();
    FormItem::textarea('message', 'Message')->required();
    
});