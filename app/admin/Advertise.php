<?php
use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

Admin::model(\App\Models\Admin\Advertise::class)->title('Advertise')->with()->filters(function ()
{
	 ModelItem::filter('id')->title()->from(\App\Models\Contact::class);
})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('location_type', 'Location Type');
//    Column::image('image_path');
	Column::string('is_active', 'is_active');
})->form(function ()
{
	FormItem::text('name', 'Name')->required();
    FormItem::image('image_path', 'Image');
    FormItem::select('location_type', 'Location Type')->list(['top' => 'Top', 'right' => 'Right', 'small' => 'Small']);
    FormItem::text('link', 'Link');
    FormItem::text('priority', 'Priority')->required();
    FormItem::checkbox('is_active', 'Active');

});
