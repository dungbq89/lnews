<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $this->call('ArticleTableSeeder');
        $this->command->info('User table seeded!');
	}

}

class ArticleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('article')->delete();
        Article::create(array(
                        "title" => "Sed ut perspiciatis unde omnis iste",
                        "alttitle" => "Sed ut perspiciatis unde omnis iste",
                        "header" => "test",
                        "body" => "Nullam ut erat sit amet augue vehicula placerat. Maecenas condimentum lacus ac nisi venenatis porttitor. Integer id pretium urna. Sed sit amet leo quam. Etiam in odio velit. Pellentesque elit odio, facilisis in dapibus non, pulvinar ut enim. Aliquam blandit pulvinar hendrerit. Nullam ultricies, quam eget semper consequat, enim justo semper diam, at venenatis elit ex at dolor. Aenean tincidunt gravida odio ac porttitor. Vestibulum vestibulum ut elit id volutpat. Donec pellentesque purus id lorem tincidunt, ac ultrices orci congue. Phasellus quis odio sodales, viverra libero sit amet, finibus diam. Donec vitae purus vitae erat consectetur placerat nec ac massa. Aliquam tellus metus, accumsan tempus eros non, ultricies consectetur tellus. Ut semper venenatis neque efficitur pellentesque. Nulla ut condimentum erat.

Nullam massa est, pulvinar nec scelerisque ut, aliquam a felis. Cras nec tempus velit, sed mattis felis. Vivamus urna ipsum, rutrum sed euismod et, tincidunt ac erat. Phasellus quis feugiat diam. Curabitur suscipit leo nulla, ac imperdiet orci maximus nec. Ut lobortis consectetur purus sit amet sagittis. Sed pretium a magna at tristique. In ultrices volutpat eros a fermentum.

Mauris porta nisl ut magna scelerisque, a commodo sem varius. Ut tellus orci, feugiat a lacus non, mattis laoreet est. Vivamus.",
                        "priority" => 1,
                        "image_path" => "/themes/ipress/images/assets/slider1.jpg",
                        "published_time" => new DateTime,
                        "is_active" => 2,
                        "is_hot" => 0,
                        "code" => "abc"
                    ));
                    
        Article::create(array(
                        "title" => "Discovered the undoubtable source",
                        "alttitle" => "Discovered the undoubtable source",
                        "header" => "test",
                        "body" => "Nullam ut erat sit amet augue vehicula placerat. Maecenas condimentum lacus ac nisi venenatis porttitor. Integer id pretium urna. Sed sit amet leo quam. Etiam in odio velit. Pellentesque elit odio, facilisis in dapibus non, pulvinar ut enim. Aliquam blandit pulvinar hendrerit. Nullam ultricies, quam eget semper consequat, enim justo semper diam, at venenatis elit ex at dolor. Aenean tincidunt gravida odio ac porttitor. Vestibulum vestibulum ut elit id volutpat. Donec pellentesque purus id lorem tincidunt, ac ultrices orci congue. Phasellus quis odio sodales, viverra libero sit amet, finibus diam. Donec vitae purus vitae erat consectetur placerat nec ac massa. Aliquam tellus metus, accumsan tempus eros non, ultricies consectetur tellus. Ut semper venenatis neque efficitur pellentesque. Nulla ut condimentum erat.

Nullam massa est, pulvinar nec scelerisque ut, aliquam a felis. Cras nec tempus velit, sed mattis felis. Vivamus urna ipsum, rutrum sed euismod et, tincidunt ac erat. Phasellus quis feugiat diam. Curabitur suscipit leo nulla, ac imperdiet orci maximus nec. Ut lobortis consectetur purus sit amet sagittis. Sed pretium a magna at tristique. In ultrices volutpat eros a fermentum.

Mauris porta nisl ut magna scelerisque, a commodo sem varius. Ut tellus orci, feugiat a lacus non, mattis laoreet est. Vivamus.",
                        "priority" => 1,
                        "image_path" => "/themes/ipress/images/assets/slider2.jpg",
                        "published_time" => new DateTime,
                        "is_active" => 2,
                        "is_hot" => 0,
                        "code" => "abc1"
                    ));
        Article::create(array(
                        "title" => "The standard chunk of Lorem ipsum",
                        "alttitle" => "The standard chunk of Lorem ipsum",
                        "header" => "test",
                        "body" => "Nullam ut erat sit amet augue vehicula placerat. Maecenas condimentum lacus ac nisi venenatis porttitor. Integer id pretium urna. Sed sit amet leo quam. Etiam in odio velit. Pellentesque elit odio, facilisis in dapibus non, pulvinar ut enim. Aliquam blandit pulvinar hendrerit. Nullam ultricies, quam eget semper consequat, enim justo semper diam, at venenatis elit ex at dolor. Aenean tincidunt gravida odio ac porttitor. Vestibulum vestibulum ut elit id volutpat. Donec pellentesque purus id lorem tincidunt, ac ultrices orci congue. Phasellus quis odio sodales, viverra libero sit amet, finibus diam. Donec vitae purus vitae erat consectetur placerat nec ac massa. Aliquam tellus metus, accumsan tempus eros non, ultricies consectetur tellus. Ut semper venenatis neque efficitur pellentesque. Nulla ut condimentum erat.

Nullam massa est, pulvinar nec scelerisque ut, aliquam a felis. Cras nec tempus velit, sed mattis felis. Vivamus urna ipsum, rutrum sed euismod et, tincidunt ac erat. Phasellus quis feugiat diam. Curabitur suscipit leo nulla, ac imperdiet orci maximus nec. Ut lobortis consectetur purus sit amet sagittis. Sed pretium a magna at tristique. In ultrices volutpat eros a fermentum.

Mauris porta nisl ut magna scelerisque, a commodo sem varius. Ut tellus orci, feugiat a lacus non, mattis laoreet est. Vivamus.",
                        "priority" => 1,
                        "image_path" => "/themes/ipress/images/assets/slider3.jpg",
                        "published_time" => new DateTime,
                        "is_active" => 2,
                        "is_hot" => 0,
                        "code" => "abc2"
                    ));
	}

}
