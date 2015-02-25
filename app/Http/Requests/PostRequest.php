<?php namespace Grinder\Http\Requests;

use Grinder\Http\Requests\Request;

class PostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
        return true;

        // ToDo: add this back in after exploring more auth stuff
        if (\Auth::check()){
            return true;
        }
        return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
        if($this->isMethod('post')){
            return [
                'title' => 'required',
                'slug'  => 'required|unique:posts',
                'body'  => 'required'
            ];
        }

        return [
            'title' => 'required',
            'slug'  => 'required',
            'body'  => 'required'
        ];
	}

}
