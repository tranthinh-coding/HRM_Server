<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobSaveRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'title' => 'required|string|max:255',
      'department' => 'required|string|max:255',
      'position' => 'required|string|max:255',
      'no_of_vacancies' => 'required|string|max:255',
      'experience' => 'required|string|max:255',
      'age' => 'required',
      'salary_from' => 'required|string|max:255',
      'salary_to' => 'required|string|max:255',
      'type' => 'required|string|max:255',
      'status' => 'required|string|max:255',
      'start_date' => 'required|string|max:255',
      'expired_date' => 'required|string|max:255',
      'description' => 'required',
    ];
  }
}
