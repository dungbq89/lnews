<?php

Admin::model(\App\Models\Admin\Article::class)->title('Aticle')->with()->filters(function () {
    //ModelItem::filter('id')->title()->from(\App\Models\Contact::class);
})->columns(function () {
    Column::string('title', 'Title');
    Column::string('alttitle', 'Alt Title');
})->form(function () {
    FormItem::text('title', 'Title')->required();
    FormItem::image('image_path', 'Image');
    FormItem::text('alttitle', 'Alt Title')->required();
    FormItem::textarea('header', 'Header')->required();
    FormItem::ckeditor('body', 'Content')->required();
    FormItem::select('category_id', 'Active')->list(\App\Models\Category::class);
    FormItem::select('is_active', 'Active')->list([1 => 'Show', 0 => 'Hide']);
});
