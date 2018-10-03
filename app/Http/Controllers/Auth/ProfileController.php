<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TimeZone as TimeZoneModel;
use App\Models\Country as CountryModel;
use Log;


class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $data ['timeZones'] = TimeZoneModel::orderBy('name', 'ASC')->get();
        $data ['countries'] = CountryModel::orderBy('name', 'ASC')->get();
        $data['user'] = Auth::user();
        return view('page-profile', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationRules = $this->getValidationRules($request);
        $data = $request->only(array_keys($validationRules));

        $validator = Validator::make($data, $validationRules);

        Log::debug($validationRules);
        Log::debug(array_keys($validationRules));
        Log::debug($data);
        Log::debug($validator->fails() ? 'ERROR' : 'OK');

        if ($validator->fails()) {
            return redirect()->route('page-profile.index')->withErrors($validator)
                ->withInput();
        } else {
            $user = Auth::user();
            foreach ( $data as $key => $value ) {
                $user->$key = $value;
            }
            $user->save();
        }
        return redirect()->route('page-profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('page-profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //
    }

    private $validationRules = [
        'profile' => [
            'name' => 'required|string|min:3|max:190',
            'location' => 'nullable|string|alpha|max:50',
            'website' => 'nullable|url|max:100',
            'bio' => 'nullable|string|max:160'

        ]
    ];

    private function getValidationRules(Request $request)
    {
        return $this->validationRules [$request->get('scope', 'profile')];
    }
}
