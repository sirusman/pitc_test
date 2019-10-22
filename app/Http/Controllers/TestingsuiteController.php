<?php

namespace App\Http\Controllers;

use App\Communicationprofile;
use App\Testinfo;
use App\Meter;
use App\Testcase;

use Illuminate\Http\Request;
use Auth;

class TestingsuiteController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    public function initializeMdcTest()
    {
        return view('mdc-interoperability-test');
    }
    public function storeMdcInfoData(){

        $data = request()->validate([
            'company' => 'required',
            'rep' => 'required',
            'rep_des' => 'required',
            'version' => 'required',
            'rd_host' => 'required',
            'rd_user' => 'required',
            'rd_pwd' => 'required',
            'wr_port' => 'required|numeric',
            'wr_host' => 'required',
            'wr_user' => 'required',
            'wr_pwd' => 'required',
            'wr_port' => 'required|numeric'
        ]);

        //READ
        $read_communication_profile = new Communicationprofile();
        $read_communication_profile->profile_type_id = request('rd_profile_type');
        $read_communication_profile->protocol_id = request('rd_protocol');
        $read_communication_profile->host = request('rd_host');
        $read_communication_profile->username = request('rd_user');
        $read_communication_profile->password = request('rd_pwd');
        $read_communication_profile->port = request('rd_port');
        $read_communication_profile->save();

        //WRITE
        $write_communication_profile = new Communicationprofile();
        $write_communication_profile->profile_type_id = request('wr_profile_type');
        $write_communication_profile->protocol_id = request('wr_protocol');
        $write_communication_profile->host = request('wr_host');
        $write_communication_profile->username = request('wr_user');
        $write_communication_profile->password = request('wr_pwd');
        $write_communication_profile->port = request('wr_port');
        $write_communication_profile->save();

        $test_info = new Testinfo();
        $test_info->company_id = request('company');
        $test_info->login_id = Auth::user()->id;
        $test_info->start_datetime = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $test_info->company_rep = request('rep');
        $test_info->company_rep_designation = request('rep_des');
        $test_info->mdc_version = request('version');
        $test_info->read_profile_id = $read_communication_profile->id;
        $test_info->write_profile_id = $write_communication_profile->id;
        $test_info->is_gprs = request('is_gprs');
        $test_info->is_rf = request('is_rf');
        $test_info->is_plc = request('is_plc');
        $test_info->is_wifi = request('is_wifi');
        $test_info->is_zigbee = request('is_zigbee');
        $test_info->is_lan = request('is_la');
        $test_info->save();

        $msn = request('msn');
        $msn_type = request('msn_type');
        for($i=0; $i < sizeof($msn); $i++) {
			if($msn_type[$i]==1)
				$phase = 1;
			else
				$phase = 3;
			
			if($msn[$i] != '') {
                $meter = new Meter();
                $meter->msn = $msn[$i];
                $meter->type = $msn_type[$i];
                $meter->phase = $phase;
                $meter->test_info_id = $test_info->id;
                $meter->save();
            }
        }
        
		
        session(['test_id' => $test_info->id]);
        return redirect('choose_test_cases'); 
    }

    public function chooseTestCases()
    {
        $testcases = Testcase::all();
        return view('choose_test_cases', compact('testcases'));
    } 
}
