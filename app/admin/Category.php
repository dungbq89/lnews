<?php

Admin::model(\App\Models\Admin\Category::class)->title('Category')->with()->filters(function ()
{
	 //ModelItem::filter('id')->title()->from(\App\Models\Contact::class);
})->columns(function ()
{
	Column::string('name_vi', 'Name');
	Column::string('description', 'Desscription');
    Column::string('is_active', 'Status');
})->form(function ()
{
	FormItem::text('name_vi', 'Name')->required();
    FormItem::image('image_path', 'Image');
    FormItem::textarea('description', 'Desscription')->required();
    FormItem::select('is_active', 'Status')->list([1 => 'Show', 0 => 'Hide']);
    
});