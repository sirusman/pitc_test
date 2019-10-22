@extends('layouts.app')

@section('content')
    <style>
        .btn-info{
            margin-left: 15px;
}
        </style>

<div class="container">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-secondary text-white">MDC INFO</div>
                 <div class="card-body" style="background-color: lightgray;">
                 <h4>Company & MDC Information</h4>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     <form id="save_mdc_info_data_form" action="save_mdc_info_data" method="POST">
        <div class="row">
            <div class="col-6">
        <div class="form-group">
            <label for="company name">COMPANY NAME*</label>
            <div>
	   <select class="form-control form-control-sm" name="company">
			<option value="0"> ------------------------------------ </option>
			<option value="1">KBK Electronics (Pvt.) Ltd.</option>
			<option value="2">Creative Electronics (Pvt.) Ltd.</option>
			<option value="3">Accurate (Pvt.) Ltd.</option>
			<option value="4">Microtech Industries (Pvt.) Ltd.</option>
			<option value="5">Vertex Electronics (Pvt.) Ltd.</option>
			<option value="6">Syed Bhais (Pvt.) Ltd.</option>
			<option value="7">IMS (Pvt.) Ltd.</option>
			<option value="8">Pak Elektron Limited
			</option>
       
	   </select>
      </div>
        </div>

        <div class="form-group">
        <label for="rep">COMPANY RERESENTATIVE*</label>
            <input type="text" id="rep" name="rep" placeholder="Enter Representative Name" value="" class="form-control form-control-sm" class="required" required>
            </div>

            <div class="form-group">
        <label for="rep">REP. DESIGNATION*</label>
            <input type="text" id="rep" name="rep_des" placeholder="Enter Representative Designation" value="" class="form-control form-control-sm" class="required" required>
            </div>
            
            <div class="form-group">
        <label for="rep">MDC VERSION*</label>
            <input type="text" id="rep" name="version" placeholder="Enter MDC Version" value="" class="form-control form-control-sm" class="required" required>
            </div>

            <div class="form-group">
        <label for="mode">COMMUNICATION MODES*</label><br>
        <input type="checkbox" name="is_gprs" id="c1" value = "1"/>
          <label for="c1">GPRS/3G/4G</label>
          <input type="checkbox" name="is_rf" id="c2" value = "1" />
          <label for="c2">RF</label>
          <input type="checkbox" name="is_plc" id="c3" value = "1"/>
          <label for="c3">PLC</label>
          <input type="checkbox" name="is_wifi" id="c4" value = "1"/>
          <label for="c4">WiFi</label>
          <input type="checkbox" name="is_zigbee" id="c5" value = "1"/>
          <label for="c5">ZigBee</label>
          <input type="checkbox" name="is_lan" id="c6" value = "1"/>
          <label for="c6">LAN</label>
            </div>  

        </div>

            <div class="col-6">
            <div class="form-group">
            <label for="textarea" class="pb-0">METER INFORMATION*<br>
            <small class="text-muted">Enter information of all meters</small>
            </label>
                
            <input type="text" id="msn" name="msn[]" value="" placeholder="Enter Meter Serial Number" class="form-control form-control-sm" class="required" required>
            <select class="form-control form-control-sm" name="msn_type[]" class="pb-2">
			<option value="1">Single Phase</option>
			<option value="2">Three Phase Whole Current</option>
			<option value="3">Three Phase LT-TOU</option>
			<option value="4">Three Phase HT-TOU</option>
			<option value="5">Three Phase Wide Range LT/HT</option>
	   </select>
        </div>

        <div class="form-group">
            <label for="textarea" class="pb-0">METER INFORMATION*<br>
            <small class="text-muted">Enter information of all meters</small>
            </label>
                
            <input type="text" id="msn" name="msn[]" value="" placeholder="Enter Meter Serial Number" class="form-control form-control-sm" class="required" required>
            <select class="form-control form-control-sm" name="msn_type[]">
			<option value="1">Single Phase</option>
			<option value="2">Three Phase Whole Current</option>
			<option value="3">Three Phase LT-TOU</option>
			<option value="4">Three Phase HT-TOU</option>
			<option value="5">Three Phase Wide Range LT/HT</option>
       </select>
        </div>

       <div class="form-group">
            <label for="textarea">METER INFORMATION*<br>
            <small class="text-muted">Enter information of all meters</small>
            </label>
                
            <input type="text" id="msn" name="msn[]" value="" placeholder="Enter Meter Serial Number" class="form-control form-control-sm" class="required" required>
            <select class="form-control form-control-sm" name="msn_type[]">
			<option value="1">Single Phase</option>
			<option value="2">Three Phase Whole Current</option>
			<option value="3">Three Phase LT-TOU</option>
			<option value="4">Three Phase HT-TOU</option>
			<option value="5">Three Phase Wide Range LT/HT</option>
       </select>
        </div>

       <div class="form-group">
            <label for="textarea">METER INFORMATION*<br>
            <small class="text-muted">Enter information of all meters</small>
            </label>
                
            <input type="text" id="msn" name="msn[]" value="" placeholder="Enter Meter Serial Number" class="form-control form-control-sm" class="required" required>
            <select class="form-control form-control-sm" name="msn_type[]">
			<option value="1">Single Phase</option>
			<option value="2">Three Phase Whole Current</option>
			<option value="3">Three Phase LT-TOU</option>
			<option value="4">Three Phase HT-TOU</option>
			<option value="5">Three Phase Wide Range LT/HT</option>
	   </select>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-6">
                <h4>Data Reading Profile Credentials</h4>

                <div class="form-group">
                    <label for="rd_profile_type">PROFILE TYPE*</label>
                <select class="form-control form-control-sm" name="rd_profile_type">
                    <option value="1">Database</option>
                    <option value="2">Web Services</option>
                    <option value="3">CIM</option>
                    <option value="4">Multi-Speak</option>
                </select>
                </div>

                <div class="form-group">
                    <label for="rd_protocol">PROTOCOL/TYPE*</label>
                <select class="form-control form-control-sm" name="rd_protocol">
                    <option value="1">MySQL</option>
                    <option value="2">MSSQL</option>
                    <option value="3">ORACLE</option>
                    <option value="4">MONGO-DB</option>
                    <option value="5">NO-SQL</option>
	            </select>
                </div>

                <div class="form-group">
                    <label for="rd_host">Host/IP*</label>
                        <input type="text" id="rd_host" name="rd_host" placeholder="Enter Host/IP Information" value="" 
                            class="form-control form-control-sm" class="required" required>
                </div>

                <div class="form-group">
                    <label for="rd_port">Port*</label>
                        <input type="number" id="rd_port" name="rd_port" placeholder="Enter Port Number" value="" 
                            class="form-control form-control-sm" class="required" required>
                </div>

                <div class="form-group">
                    <label for="rd_user">Username*</label>
                        <input type="text" id="rd_user" name="rd_user" placeholder="Enter Valid Username" value="" 
                            class="form-control form-control-sm" class="required" required>
                </div>

                <div class="form-group">
                    <label for="rd_pwd">Password*</label>
                        <input type="password" id="rd_pwd" name="rd_pwd" placeholder="Enter Valid Password" value="" 
                            class="form-control form-control-sm" class="required" required>
                </div>

            </div>

            <div class="col-6">
                <h4>Data Writing Profile Credentials</h4>

                <div class="form-group">
                    <label for="wr_profile_type">PROFILE TYPE*</label>
                <select class="form-control form-control-sm" name="wr_profile_type">
                    <option value="1">Database</option>
                    <option value="2">Web Services</option>
                    <option value="3">CIM</option>
                    <option value="4">Multi-Speak</option>
                </select>
                </div>

                <div class="form-group">
                    <label for="wr_protocol">PROTOCOL/TYPE*</label>
                <select class="form-control form-control-sm" name="wr_protocol">
                    <option value="1">MySQL</option>
                    <option value="2">MSSQL</option>
                    <option value="3">ORACLE</option>
                    <option value="4">MONGO-DB</option>
                    <option value="5">NO-SQL</option>
	            </select>
                </div>

                <div class="form-group">
                    <label for="wr_host">Host/IP*</label>
                        <input type="text" id="wr_host" name="wr_host" placeholder="Enter Host/IP Information" value="" 
                            class="form-control form-control-sm" class="required" required>
                </div>

                <div class="form-group">
                    <label for="wr_port">Port*</label>
                        <input type="number" id="wr_port" name="wr_port" placeholder="Enter Port Number" value="" 
                            class="form-control form-control-sm" class="required" required>
                </div>

                <div class="form-group">
                    <label for="wr_user">Username*</label>
                        <input type="text" id="wr_user" name="wr_user" placeholder="Enter Valid Username" value="" 
                            class="form-control form-control-sm" class="required" required>
                </div>

                <div class="form-group">
                    <label for="wr_pwd">Password*</label>
                        <input type="password" id="wr_pwd" name="wr_pwd" placeholder="Enter Valid Password" value="" 
                            class="form-control form-control-sm" class="required" required>
                </div>

            </div>

        </div>
                


    <div class="row">
       <div class="col-12">
            <div class="text-right"> 
                <button type="submit" class=" btn btn-info">Submit</button>
                <a href="#" class=" btn btn-info">Cancel</a>
            </div>
        </div>
    </div>
        @csrf

        </form>
            </div>            
        </div>
    </div>
</div>
        

<script>
    $(document).ready(function(){

        $('#save_mdc_info_data_form').submit(function(e){

            var rdIpAddress = $('#rd_host').val();
            var wrIpAddress = $('#wr_host').val();
            if(ValidateIPaddress(rdIpAddress) == false) {
                alert('Read Host/IP address is not valid');
                e.preventDefault();
            }

            if(ValidateIPaddress(wrIpAddress) == false) {
                alert('Write/Host IP address is not valid');
                e.preventDefault();
            }

        });

    });

    function ValidateIPaddress(ipaddress) {  
        if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test(ipaddress)) {  
            return (true)  
        }  
        return (false)  
    }  
</script>

@endsection