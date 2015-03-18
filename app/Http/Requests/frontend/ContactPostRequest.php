<?php

namespace App\Http\Requests\frontend;

use App\Http\Requests\Request;
use Response;
use Illuminate\Http\JsonResponse;

class ContactPostRequest extends Request {

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'name' => 'required|max:100',
      'email' => 'required|email|max:255',
      'message' => 'required|max:500',
    ];
  }

  // OPTIONAL OVERRIDE
  public function forbiddenResponse() {
    // Optionally, send a custom response on authorize failure 
    // (default is to just redirect to initial page with errors)
    // 
    // Can return a response, a view, a redirect, or whatever else
    return Response::make('Permission denied foo!', 403);
  }

  /**
   * Overrides Ham tra ve resonpse
   * @author NamDT5
   * @param array $errors
   * @return \App\Http\Requests\frontend\JsonResponse
   */
  public function response(array $errors) {
    if ($this->ajax() || $this->wantsJson()) {
      // Tra ve ma loi 200 de javascript co the xu ly
      return new JsonResponse($errors, 200);
    }
    return $this->redirector->to($this->getRedirectUrl())->withInput($this->except($this->dontFlash))->withErrors($errors, $this->errorBag);
  }

}
