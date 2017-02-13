<?php

namespace Taggers\Settings\Controllers;

use Illuminate\Http\Request;
use Taggers\Settings\Models\Setting;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class SettingsController extends Controller
{
	use ValidatesRequests;

	/**
	 * Show settings view
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('settings::settings.index');
	}

	/**
	 * Update settings
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request)
	{
		$site = Setting::firstOrCreate(['name' => 'site']);
		$site->set([
			'email'     => $request->email,
			'analytics' => $request->analytics,
			'developer' => $request->developer
		]);

		$business = Setting::firstOrCreate(['name' => 'business']);
		$business->set([
			'name'    => $request->name,
			'email'   => $request->b_email,
			'address' => $request->address,
			'phone'   => $request->phone,
			'fax'     => $request->fax
		]);

		$office_hours = Setting::firstOrCreate(['name' => 'office_hours']);
		$office_hours->set([
			'sunday'    => $request->sunday,
			'monday'    => $request->monday,
			'tuesday'   => $request->tuesday,
			'wednesday' => $request->wednesday,
			'thursday'  => $request->thursday,
			'friday'    => $request->friday,
			'saturday'  => $request->saturday
		]);

		$social = Setting::firstOrCreate(['name' => 'social']);
		$social->set([
			'facebook'  => $request->facebook,
			'twitter'   => $request->twitter,
			'google'    => $request->google,
			'linkedin'  => $request->linkedin,
			'youtube'   => $request->youtube,
			'instagram' => $request->instagram,
			'pinterest' => $request->pinterest,
			'yelp'      => $request->yelp
		]);

		flash('Settings has been updated successfully.', 'success');
		return back();
	}
}