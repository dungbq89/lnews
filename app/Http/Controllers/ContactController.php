<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
use BotDetectCaptcha\LaravelCaptcha\BotDetectLaravelCaptcha;

class ContactController extends Controller {
  /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
   */

    public $Captcha;
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
//		$this->middleware('auth');
      $captchaConfig = array(
          'CaptchaId' => 'ExampleCaptcha', // an unique Id for the Captcha instance
          'UserInputId' => 'CaptchaCode' // the Id of the Captcha code input textbox
      );
      $this->Captcha = BotDetectLaravelCaptcha::GetCaptchaInstance($captchaConfig);
  }

    public static function getCaptcha() {
        return $this->Captcha();
    }
  /**
   * Show the application dashboard to the user.
   *
   * @return Response
   */
  public function index() {

    return view('frontend.contact.index')->with('captchaHtml', $this->Captcha->Html());
  }

  /**
   * Ham xu ly sau khi da validate xong request
   * @param \App\Http\Requests\frontend\ContactPostRequest $request
   * @return type
   */
  public function store(\App\Http\Requests\frontend\ContactPostRequest $request) {
    // Mang tra ve 
    $responseArr = array(
      'error_code' => 0,
      'msg' => '',
      'data' => '',
    );

    if ($request->ajax()) {
      // Insert DB
      $contact = new Contact;
      $contact->name = $request->get('name');
      $contact->email = $request->get('email');
      $contact->message = $request->get('message');
      $contact->is_read = 0;
      $contact->save();

      $responseArr['msg'] = 'Success';
    } else {
      // Loi ko phai request Ajax
//      $responseArr['error_code'] = 9999;
//      $responseArr['msg'] = Lang::get('frontend.contact.error_9999');
      
      \Illuminate\Support\Facades\Session::flash('flash_message', Lang::get('frontend.contact.error_9999'));
      return redirect('contact');
    }

    return response()->json($responseArr);
  }

}
