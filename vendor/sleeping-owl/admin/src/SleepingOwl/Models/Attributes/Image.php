<?php namespace SleepingOwl\Models\Attributes;

use Config;
use Illuminate\Support\Facades\File as IlluminateFile;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as InterventionImage;

class Image
{
	/**
	 *
	 */
	const TEMPLATE_INFO = '.:type (:widthx:height)';

	/**
	 * @var
	 */
	protected $directory;
	/**
	 * @var
	 */
	protected $filename;

	/**
	 * @param $directory
	 * @param $filename
	 */
	function __construct($directory, $filename)
	{
		$this->directory = $directory;
		$this->filename = $filename;
	}

	/**
	 * @return bool
	 */
	public function isSeed()
	{
		return Str::startsWith($this->filename, 'seeds/');
	}

	/**
	 * @return string
	 */
	public function getPath()
	{
		return $this->directory . $this->filename;
	}

	/**
	 * @return string
	 */
	public function getDirectoryFullPath()
	{
		return Config::get('admin.imagesDirectory') . '/' . $this->directory;
	}

	/**
	 * @return string
	 */
	public function getFullPath()
	{
		return $this->getDirectoryFullPath() . $this->filename;
	}

	/**
	 *
	 */
	public function delete()
	{
		if ( ! $this->exists()) return;
		if ($this->isSeed()) return;
		IlluminateFile::delete($this->getFullPath());
	}

	/**
	 * @return bool
	 */
	public function exists()
	{
		return is_file($this->getFullPath());
	}

	/**
	 * @return string
	 */
	public function info()
	{
		$filename = $this->getFullPath();
		if ( ! $this->exists()) return '';

		list($width, $height) = getimagesize($filename);
		$extension = \File::extension($filename);
		return strtr(static::TEMPLATE_INFO, [
			':type'   => $extension,
			':width'  => $width,
			':height' => $height
		]);
	}

	/**
	 * @param mixed $filename
	 */
	public function setFilename($filename)
	{
		$this->filename = $filename;
	}

	/**
	 * @param $template
	 * @return string
	 */
	public function thumbnail($template)
	{
		if ( ! $this->exists()) return null;
		return route('imagecache', [
			$template,
			$this->getPath()
		]);
	}

	/**
	 * @return mixed
	 */
	function __toString()
	{
		return $this->filename;
	}

    /**
     * Ham get anh thumb
     * @param null $width
     * @param null $height
     * @param int $quality
     * @param string $watermark
     * @return string
     */
    public function getThumbUrl($width = null, $height = null, $quality = 100, $watermark = '')
    {
        $img = \Intervention\Image\Facades\Image::make($this->getFullPath());

        if ($width || $height) {
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

        } elseif ($width === null && $height === null )
        {
            // Neu ko truyen width height --> Tra ve anh goc
            return $this->getPath();
        }
        if ($watermark)
            $img->insert($watermark);

        $thumbName = (($width)? $width: 'auto'). '_'.(($height)? $height: 'auto'). '_'. $this->filename;
        $thumbFullPath = Config::get('app.media.cache_dir', 'cache'). '/images/'. $this->directory. '/';
        $thumbFullFilePath = $thumbFullPath. $thumbName;
        try {
            if (!file_exists($thumbFullFilePath)) {
                if (!file_exists($thumbFullPath)) {
                    \Illuminate\Support\Facades\File::makeDirectory($thumbFullPath, 0775, true);

                }

                $img->save($thumbFullFilePath, $quality);
            }
            return '/'. Config::get('app.media.cache_dir', 'cache'). '/images/'. $this->directory. $thumbName;

        } catch (Exception $e) {
            Log::error('Image cannot be saved. '. $e->getCode(). ': '. $e->getMessage());
        }

    }
} 