<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{
    // 以下を追記
  public function add()
  {
      return view('admin.profile.create');
  }
  public function create(Request $request)
  {
    // Validationを行う
    $this->validate($request, Profile::$rules);

    $profile = new Profile;
    $form = $request->all();



    unset($form['_token']);


    //データベースに保存する
    $profile->fill($form);
    $profile->save();

    return redirect('admin/profile/create');
  }

  public function edit(Request $request)
  {
      // Profile Modelからデータを所得する
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        // abort(404);
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
  }

  public function update(Request $request)
  {
    // Validationをかける
    $this->validate($request,Profile::$rules);
    // Profile Modelからデータを取得する
    $profile = Profile::find($request->id);
    // 送信されてきたフォームデータを格納する
    $profile_form = $request->all();
      if(isset($profile_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $profile->image_path = basename($path);

      } else {
          $profile->image_path = null;
      }
     unset($profile_form['_token']);
     unset($profile_form['remove']);
    // 該当するデータを上書きして保存する
      $profile->fill($form);
      $profile->save();

    return redirect('admin/profile');
  }
}
