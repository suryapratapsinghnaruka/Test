<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BPLTEK :: Carrier</title>
	 <link rel="icon" type="image/x-icon" href="assets/images/icon/favicon.png"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{asset('assets/css/jquery.steps.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/fonts/css/all.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
</head>
<body>
<main class="main">
	<div class="main-wrapper container">
		<div class="main-area position-relative overflow-hidden">
			<!-- Logo :: Start -->
				<div class="logo position-relative">
					<img src="{{asset('assets/images/logo.png')}}" class="brand-logo" alt="BPLTEK logo"/>
				</div>
				<!-- Logo :: End -->
				<!-- Main Title :: Start -->
				<div class="row justify-content-md-center">
					<div class="col-xl-6">
						<div class="content-area text-center">
							<h1 class="main-title mb-20">Carrier Packet</h1>
							<p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
					</div>
				</div>
				<!-- Main Title :: End -->
				<!-- Fixed detail :: Start -->
				<div class="d-flex align-items-center justify-content-center gap-5">
					<div class="detail-1">
						<p class="text-capitalize">DOT number - <span class="fw-bold text-main font-16">3093277</span></p>
					</div>
					<div class="detail-2">
						<p class="text-capitalize">Docket number - <span class="fw-bold text-main font-16">MC073132</span></p>
					</div>
				</div>
				<!-- Fixed detail :: End -->
				<!-- Form :: Start -->
				<form id="wizard" class="step-form">
	                <h2>First Step</h2>
	                <section>
	                    <!-- Basic Information :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">SCAC (Standard Carrier Alpha Code)</label>
	                    			<input type="text" name="scac" class="form-control" placeholder="Enter Code" value="MQNR" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Legal name</label>
	                    			<input type="text" name="legal-name" class="form-control" placeholder="Enter Legal Name" value="Mann Trans INC" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">DBA Name</label>
	                    			<input type="text" name="dba-name" class="form-control" placeholder="Enter DBA Name"/>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Phone<span class="requried ms-1">*</span></label>
	                    			<input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" value="(661)569-9652" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Fax</label>
	                    			<input type="text" name="fax" class="form-control" placeholder="Enter Fax Number" value="(661)569-4215" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Emergency Number</label>
	                    			<input type="text" name="emergency-number" class="form-control" placeholder="Enter Emergency Number" value="(661)569-1478"/>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-5 col-lg-5 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Company Main Email<span class="requried ms-1">*</span></label>
	                    			<input type="text" name="main-email" class="form-control" placeholder="Enter Email" value="harmeet@manntransinc.com"/>
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-xl-6 col-lg-6 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Address 1<span class="requried ms-1">*</span></label>
	                    			<input type="text" name="address1" class="form-control" placeholder="Enter Address 1" value="4012 Lasso Ct"/>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-6 col-lg-6 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Address 2<span class="requried ms-1">*</span></label>
	                    			<input type="text" name="address2" class="form-control" placeholder="Enter Address 2"/>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Country<span class="requried ms-1">*</span></label>
	                    			<select class="form-select" aria-label="Default select example">
									  <option selected>Select Country</option>
									  <option value="india">India</option>
									  <option value="nepal">Nepal</option>
									  <option value="bhutan">Bhutan</option>
									</select>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">State/Province</label>
	                    			<select class="form-select" aria-label="Default select example">
									  <option selected>Select State</option>
									  <option value="state1">State 1</option>
									  <option value="state2">State 2</option>
									  <option value="state3">State 3</option>
									</select>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">City</label>
	                    			<select class="form-select" aria-label="Default select example">
									  <option selected>Select State</option>
									  <option value="city1">City 1</option>
									  <option value="city2">City 2</option>
									  <option value="city3">City 3</option>
									</select>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-6 col-lg-6 col-md-12">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Mailing Address</label>
	                    			<div class="form-check card-radio p-0">
	                                    <input class="form-check-input d-none" id="mailingaddress" name="mailingaddress" type="checkbox" value="1">
	                                    <label class="form-check-label mb-0" for="mailingaddress">
	                                        <span>Same as company address above?</span>
	                                    </label>
	                                </div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-6 col-lg-6 col-md-12">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">After Hours Support</label>
	                    			<div class="form-check card-radio p-0">
	                                    <input class="form-check-input d-none" id="aftersupport" name="aftersupport" type="checkbox" value="1">
	                                    <label class="form-check-label mb-0" for="aftersupport">
	                                        <span>Do you offer weekday after hours support?</span>
	                                    </label>
	                                </div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Basic Information :: End -->

	                    <!-- Weekday After Support :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="title-box mb-20">
	                    			<h4 class="text-black mb-0">Weekday After Hours Support -</h4>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Support Name</label>
	                    			<input type="text" name="supportname" class="form-control" placeholder="Support Name" value="After Hours" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Support Time form</label>
	                    			<input type="time" name="supporttimefrom" class="form-control" placeholder="Support Time Form" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Support Time to</label>
	                    			<input type="time" name="supporttimeto" class="form-control" placeholder="Support Time To"/>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Support phone</label>
	                    			<input type="text" name="supportphone" class="form-control" placeholder="Support Phone" value="(661)589-6523" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Support fax</label>
	                    			<input type="text" name="supportfax" class="form-control" placeholder="Support Fax" value="(661)586-6936" />
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Weekday After Support :: End -->

	                    <!-- Contact Information :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="title-box mb-20">
	                    			<h4 class="text-black mb-0">Contact Information -</h4>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-5 col-lg-5 col-md-6">
	                    		<div class="form-group">
				                    <label class="text-capitalize">Would you like online access to available loads?</label>
				                    <div class="inline-box-area">
				                        <div class="form-check form-check-inline">
				                            <input class="form-check-input" type="radio" name="availableloads" id="availableloadsyes">
				                            <label class="form-check-label text-capitalize" for="availableloadsyes">yes</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="availableloads" id="availableloadsno" checked>
				                            <label class="form-check-label text-capitalize" for="availableloadsno">no</label>
				                        </div>
				                    </div>
				                </div>
	                    	</div>
	                    	<div class="col-xl-5 col-lg-5 col-md-6">
	                    		<div class="form-group">
				                    <label class="text-capitalize">Do you use a Dispatcher Service?<span class="requried">*</span></label>
				                    <div class="inline-box-area">
				                        <div class="form-check form-check-inline">
				                            <input class="form-check-input" type="radio" name="dispatcherservice" id="dispatcherservice1">
				                            <label class="form-check-label text-capitalize" for="dispatcherservice1">yes</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="dispatcherservice" id="dispatcherservice2" checked>
				                            <label class="form-check-label text-capitalize" for="dispatcherservice2">no</label>
				                        </div>
				                    </div>
				                </div>
	                    	</div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-xl-5 col-lg-5 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Available Load Email</label>
	                    			<input type="text" name="availableloademail" class="form-control" placeholder="Available Load Email" value="harmeet@manntrasinc.com" />
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Owner Contact Name</label>
	                    			<input type="text" name="ownercontactname" class="form-control" placeholder="Owner Contact Name" value="Kuljit Mann" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Owner Contact Phone</label>
	                    			<input type="text" name="ownercontactphone" class="form-control" placeholder="Owner Contact Phone" value="(661)589-6523" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Owner Contact Email</label>
	                    			<input type="text" name="ownercontactemail" class="form-control" placeholder="Owner Contact Email" value="manntrans07@gmail.com" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Claims Contact Name</label>
	                    			<input type="text" name="claimscontactname" class="form-control" placeholder="Claims Contact Name" value="Kuljit" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Claims Contact Phone</label>
	                    			<input type="text" name="claimscontactphone" class="form-control" placeholder="Claims Contact Phone" value="(661)589-6523" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Claims Contact Email</label>
	                    			<input type="text" name="claimscontactemail" class="form-control" placeholder="Claims Contact Email" value="dispatch@manntransinc.com" />
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
				                    <label class="text-capitalize">Does your company broker out extra freight?</label>
				                    <div class="inline-box-area">
				                        <div class="form-check form-check-inline">
				                            <input class="form-check-input" type="radio" name="companybroker" id="companybrokeryes">
				                            <label class="form-check-label text-capitalize" for="companybrokeryes">yes</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="companybroker" id="companybrokerno" checked>
				                            <label class="form-check-label text-capitalize" for="companybrokerno">no</label>
				                        </div>
				                    </div>
				                </div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
				                    <label class="text-capitalize">How do you track your drivers?</label>
				                    <div class="inline-box-area">
				                        <div class="form-check form-check-inline">
				                            <input class="form-check-input" type="radio" name="trackdrivers" id="trackdriversyes"/>
				                            <label class="form-check-label text-capitalize" for="trackdriversyes">GPS</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="trackdrivers" id="trackdriversno" checked/>
				                            <label class="form-check-label text-capitalize" for="trackdriversno">None</label>
				                        </div>
				                    </div>
				                </div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
				                    <label class="text-capitalize">Can we have access online?</label>
				                    <div class="inline-box-area">
				                        <div class="form-check form-check-inline">
				                            <input class="form-check-input" type="radio" name="accessonline" id="accessonlineyes"/>
				                            <label class="form-check-label text-capitalize" for="accessonlineyes">yes</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="accessonline" id="accessonlineno" checked/>
				                            <label class="form-check-label text-capitalize" for="accessonlineno">no</label>
				                        </div>
				                    </div>
				                </div>
	                    	</div>
	                    </div>
	                    <!-- Contact Information :: End -->
	                </section>

	                <h2>Second Step</h2>
	                <section>
	                    <!-- Dispatcher :: Start -->
	                    <div class="row mb-20">
	                    	<div class="col-xl-12 col-lg-12">
	                    		<div class="title-box mb-20 d-flex align-items-center justify-content-between">
	                    			<h4 class="text-black mb-0">Dispatchers -</h4>
	                    			<a href="javascript:;" class="text-main" data-bs-toggle="modal" data-bs-target="#addDispatchers"><i class="fad fa-plus-circle me-2"></i>Add</a>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-12 col-lg-12">
	                    		<div class="table-responsive form-table">
	                    			<table class="table">
		                    			<thead>
		                    				<tr>
		                    					<th class="text-main white-space-nowrap">#S.R</th>
		                    					<th class="text-main white-space-nowrap">Dispatcher Name</th>
		                    					<th class="text-main white-space-nowrap">Phone Number</th>
		                    					<th class="text-main white-space-nowrap">Email</th>
		                    					<th></th>
		                    				</tr>
		                    				<tbody>
		                    					<tr>
		                    						<td>1</td>
		                    						<td class="white-space-nowrap">Harmeet Singh</td>
		                    						<td class="white-space-nowrap">(661) 495-5551</td>
		                    						<td class="white-space-nowrap">harmeet@manntransinc.com</td>
		                    						<td class="white-space-nowrap">
		                    							<div class="action-btn">
		                    								<a href="javascript:;" class="text-main edit-row" title="Edit" data-bs-toggle="modal" data-bs-target="#addDispatchers"><i class="fad fa-edit me-3"></i></a>
		                    								<a href="javascript:;" class="text-red delete-row" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModel"><i class="fad fa-trash"></i></a>
		                    							</div>
		                    						</td>
		                    					</tr>
		                    					<tr>
		                    						<td>2</td>
		                    						<td class="white-space-nowrap">Paul</td>
		                    						<td class="white-space-nowrap">(661) 494-6266</td>
		                    						<td class="white-space-nowrap">team1@manntransinc.com </td>
		                    						<td class="white-space-nowrap">
		                    							<div class="action-btn">
		                    								<a href="javascript:;" class="text-main edit-row" title="Edit" data-bs-toggle="modal" data-bs-target="#addDispatchers"><i class="fad fa-edit me-3"></i></a>
		                    								<a href="javascript:;" class="text-red delete-row" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModel"><i class="fad fa-trash"></i></a>
		                    							</div>
		                    						</td>
		                    					</tr>
		                    				</tbody>
		                    			</thead>
		                    		</table>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Dispatcher :: End -->

	                    <!-- Drivers :: Start -->
	                    <div class="row mb-20">
	                    	<div class="col-xl-12 col-lg-12">
	                    		<div class="title-box mb-20 d-flex align-items-center justify-content-between">
	                    			<h4 class="text-black mb-0">Drivers -</h4>
	                    			<a href="javascript:;" class="text-main" data-bs-toggle="modal" data-bs-target="#addDrivers"><i class="fad fa-plus-circle me-2"></i>Add</a>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-12 col-lg-12">
	                    		<div class="table-responsive form-table">
	                    			<table class="table">
		                    			<thead>
		                    				<tr>
		                    					<th class="text-main white-space-nowrap">#S.R</th>
		                    					<th class="text-main white-space-nowrap">Driver Name</th>
		                    					<th class="text-main white-space-nowrap">Phone Number</th>
		                    					<th class="text-main white-space-nowrap">Email</th>
		                    					<th></th>
		                    				</tr>
		                    				<tbody>
		                    					<tr>
		                    						<td>1</td>
		                    						<td class="white-space-nowrap">Harmeet Singh</td>
		                    						<td class="white-space-nowrap">(661) 495-5551</td>
		                    						<td class="white-space-nowrap">harmeet@manntransinc.com</td>
		                    						<td class="white-space-nowrap">
		                    							<div class="action-btn">
		                    								<a href="javascript:;" class="text-main edit-row" title="Edit" data-bs-toggle="modal" data-bs-target="#addDrivers"><i class="fad fa-edit me-3"></i></a>
		                    								<a href="javascript:;" class="text-red delete-row" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModel"><i class="fad fa-trash"></i></a>
		                    							</div>
		                    						</td>
		                    					</tr>
		                    					<tr>
		                    						<td>2</td>
		                    						<td class="white-space-nowrap">Paul</td>
		                    						<td class="white-space-nowrap">(661) 494-6266</td>
		                    						<td class="white-space-nowrap">team1@manntransinc.com </td>
		                    						<td class="white-space-nowrap">
		                    							<div class="action-btn">
		                    								<a href="javascript:;" class="text-main edit-row" title="Edit" data-bs-toggle="modal" data-bs-target="#addDrivers"><i class="fad fa-edit me-3"></i></a>
		                    								<a href="javascript:;" class="text-red delete-row" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModel"><i class="fad fa-trash"></i></a>
		                    							</div>
		                    						</td>
		                    					</tr>
		                    				</tbody>
		                    			</thead>
		                    		</table>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Drivers :: End -->
	                    
	                    <!-- Lanes Serviced :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12 col-lg-12">
	                    		<div class="title-box mb-20">
	                    			<h4 class="text-black mb-0">Lanes Serviced -</h4>
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-xl-5 col-lg-5 col-md-6">
	                    		<div class="form-group">
				                    <div class="inline-box-area">
				                    	<label class="text-capitalize me-2">United States</label>
				                        <div class="form-check form-check-inline">
				                            <input class="form-check-input" type="radio" name="unitedstates" id="unitedstatesyes"/>
				                            <label class="form-check-label text-capitalize" for="unitedstatesyes">yes</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="unitedstates" id="unitedstatesno" checked/>
				                            <label class="form-check-label text-capitalize" for="unitedstatesno">no</label>
				                        </div>
				                    </div>
				                </div>
	                    	</div>
	                    </div>
	                    <!-- Northeast Region :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="inner-title d-flex align-items-center justify-content-between mb-20">
	                    			<h5 class="text-capitalize mb-0">Northeast Region -</h5>
	                    			<a href="javascript:;" class="text-capitalize text-main">Select all</a>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="connecticu"/>
									  <label class="form-check-label mb-0" for="connecticu">Connecticu</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="maine"/>
									  <label class="form-check-label mb-0" for="maine">Maine</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="massachusetts"/>
									  <label class="form-check-label mb-0" for="massachusetts">Massachusetts</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="newhampshire"/>
									  <label class="form-check-label mb-0" for="newhampshire">New Hampshire</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="newjersey"/>
									  <label class="form-check-label mb-0" for="newjersey">New Jersey</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="newyork"/>
									  <label class="form-check-label mb-0" for="newyork">New York</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="pennsylvania"/>
									  <label class="form-check-label mb-0" for="pennsylvania">Pennsylvania</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="rhodeisland"/>
									  <label class="form-check-label mb-0" for="rhodeisland">Rhode Island</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="vermont"/>
									  <label class="form-check-label mb-0" for="vermont">Vermont</label>
									</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Northeast Region :: End -->

	                    <!-- Midwest Region :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="inner-title d-flex align-items-center justify-content-between mb-20">
	                    			<h5 class="text-capitalize mb-0">Midwest Region -</h5>
	                    			<a href="javascript:;" class="text-capitalize text-main">Select all</a>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="illinois"/>
									  <label class="form-check-label mb-0" for="illinois">Illinois</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="indiana"/>
									  <label class="form-check-label mb-0" for="indiana">Indiana</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="iowa"/>
									  <label class="form-check-label mb-0" for="iowa">Iowa</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="kansas"/>
									  <label class="form-check-label mb-0" for="kansas">Kansas</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="michigan"/>
									  <label class="form-check-label mb-0" for="michigan">Michigan</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="minnesota"/>
									  <label class="form-check-label mb-0" for="minnesota">Minnesota</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="missouri"/>
									  <label class="form-check-label mb-0" for="missouri">Missouri</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="nebraska"/>
									  <label class="form-check-label mb-0" for="nebraska">Nebraska</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="northdakota"/>
									  <label class="form-check-label mb-0" for="northdakota">North Dakota</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="ohio"/>
									  <label class="form-check-label mb-0" for="ohio">Ohio</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="southdakota"/>
									  <label class="form-check-label mb-0" for="southdakota">South Dakota</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="wisconsin"/>
									  <label class="form-check-label mb-0" for="wisconsin">Wisconsin</label>
									</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Midwest Region :: End -->

	                    <!-- South Region :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="inner-title d-flex align-items-center justify-content-between mb-20">
	                    			<h5 class="text-capitalize mb-0">South Region -</h5>
	                    			<a href="javascript:;" class="text-capitalize text-main">Select all</a>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="alabama"/>
									  <label class="form-check-label mb-0" for="alabama">alabama</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="arkansas"/>
									  <label class="form-check-label mb-0" for="arkansas">Arkansas</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="delaware"/>
									  <label class="form-check-label mb-0" for="delaware">Delaware</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="florida"/>
									  <label class="form-check-label mb-0" for="florida">Florida</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="georgia"/>
									  <label class="form-check-label mb-0" for="georgia">Georgia</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="kentucky"/>
									  <label class="form-check-label mb-0" for="kentucky">Kentucky</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="louisiana"/>
									  <label class="form-check-label mb-0" for="louisiana">Louisiana</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="maryland"/>
									  <label class="form-check-label mb-0" for="maryland">Maryland</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="mississippi"/>
									  <label class="form-check-label mb-0" for="mississippi">Mississippi</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="northcarolina"/>
									  <label class="form-check-label mb-0" for="northcarolina">North Carolina</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="oklahoma"/>
									  <label class="form-check-label mb-0" for="oklahoma">Oklahoma</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="southcarolina"/>
									  <label class="form-check-label mb-0" for="southcarolina">South Carolina</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="tennessee"/>
									  <label class="form-check-label mb-0" for="tennessee">Tennessee</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="texas"/>
									  <label class="form-check-label mb-0" for="texas">Texas</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="virginia"/>
									  <label class="form-check-label mb-0" for="virginia">Virginia</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="washingtonDC"/>
									  <label class="form-check-label mb-0" for="washingtonDC">Washington D.C.</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="westvirginia"/>
									  <label class="form-check-label mb-0" for="westvirginia">West Virginia</label>
									</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- South Region :: End -->

	                    <!-- West Region :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="inner-title d-flex align-items-center justify-content-between mb-20">
	                    			<h5 class="text-capitalize mb-0">West Region -</h5>
	                    			<a href="javascript:;" class="text-capitalize text-main">Select all</a>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="alaska"/>
									  <label class="form-check-label mb-0" for="alaska">Alaska</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="arizona"/>
									  <label class="form-check-label mb-0" for="arizona">Arizona</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="california"/>
									  <label class="form-check-label mb-0" for="california">California</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="colorado"/>
									  <label class="form-check-label mb-0" for="colorado">Colorado</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="hawaii"/>
									  <label class="form-check-label mb-0" for="hawaii">Hawaii</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="idaho"/>
									  <label class="form-check-label mb-0" for="idaho">Idaho</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="montana"/>
									  <label class="form-check-label mb-0" for="montana">Montana</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="nevada"/>
									  <label class="form-check-label mb-0" for="nevada">Nevada</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="newmexico"/>
									  <label class="form-check-label mb-0" for="newmexico">New Mexico</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="oregon"/>
									  <label class="form-check-label mb-0" for="oregon">Oregon</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="utah"/>
									  <label class="form-check-label mb-0" for="utah">Utah</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="washington"/>
									  <label class="form-check-label mb-0" for="washington">Washington</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="wyoming"/>
									  <label class="form-check-label mb-0" for="wyoming">Wyoming</label>
									</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- West Region :: End -->

	                    <!-- Canada Mexico :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
				                    <div class="inline-box-area">
				                    	<label class="text-capitalize me-2">Canada</label>
				                        <div class="form-check form-check-inline">
				                            <input class="form-check-input" type="radio" name="canada" id="canadayes">
				                            <label class="form-check-label mb-0 text-capitalize" for="canadayes">yes</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="canada" id="canadano" checked>
				                            <label class="form-check-label mb-0 text-capitalize" for="canadano">no</label>
				                        </div>
				                    </div>
				                </div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
				                    <div class="inline-box-area">
				                    	<label class="text-capitalize me-2">Mexico</label>
				                        <div class="form-check form-check-inline">
				                            <input class="form-check-input" type="radio" name="mexico" id="mexicoyes">
				                            <label class="form-check-label mb-0 text-capitalize" for="mexicoyes">yes</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="mexico" id="mexicono" checked>
				                            <label class="form-check-label mb-0 text-capitalize" for="mexicono">no</label>
				                        </div>
				                    </div>
				                </div>
	                    	</div>
	                    </div>
	                    <!-- Canada Mexico :: End -->

	                    <!-- Lanes Serviced :: End -->
	                </section>

	                <h2>Third Step</h2>
	                <section>
	                    <!-- Profile :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="title-box mb-20">
	                    			<h4 class="text-black mb-0">Profile -</h4>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Number of vehicles<span class="requried ms-1">*</span></label>
	                    			<input type="text" name="numofvehicles" class="form-control" placeholder="Number Of Vehicles" value="15">
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 col-md-6">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Interstate and Intrastate Drivers<span class="requried ms-1">*</span></label>
	                    			<input type="text" name="intrastatedDriver" class="form-control" placeholder="Interstate and Intrastate Drivers" value="18">
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Profile :: End -->

	                    <!-- ELD Provider Information :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="title-box mb-20">
	                    			<h4 class="text-black mb-0">ELD Provider Information -</h4>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-8 col-lg-8">
	                    		<div class="form-group">
				                    <label class="text-capitalize">Select your ELD compliance status</label>
				                    <div class="inline-box-area">
				                        <div class="form-check form-check-inline">
				                            <input class="form-check-input" type="radio" name="ELDprovider" id="ELDprovider1"/>
				                            <label class="form-check-label mb-0 text-capitalize" for="ELDprovider1">ELD compliant</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="ELDprovider" id="ELDprovider2" />
				                            <label class="form-check-label mb-0 text-capitalize" for="ELDprovider2">Exempt per FMCSA guidelines</label>
				                        </div>
				                        <div class="form-check form-check-inline">
				                           	<input class="form-check-input" type="radio" name="ELDprovider" id="ELDprovider3" />
				                            <label class="form-check-label mb-0 text-capitalize" for="ELDprovider3">Not ELD compliant</label>
				                        </div>
				                    </div>
				                </div>
	                    	</div>
	                    	<div class="col-xl-8 col-lg-8">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Enter your ELD Provider or Identifier and select from the search results. <span class="text-main">(Lookup ELD Provider)</span></label>
	                    			<input type="text" name="ELDprovider" class="form-control" placeholder="Enter your ELD Provider" value="Samsara (SAMELD)">
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- ELD Provider Information :: End -->

	                    <!-- Certifications :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="title-box mb-20">
	                    			<h4 class="text-black mb-0">Certifications -</h4>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
	                    		<div class="form-group">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="hazmat" />
									  <label class="form-check-label mb-0" for="hazmat">Hazmat</label>
									</div>
	                    		</div>
	                    		<div id="hazmatnumber" class="form-group" style="display:none;">
	                    			<label class="text-capitalize">Hazmat Number</label>
	                    			<input type="text" name="hazmatnumber" id="hazmatnumber" placeholder="Hazmat Number" value="15"/>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
	                    		<div class="form-group">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="smartway" />
									  <label class="form-check-label mb-0" for="smartway">Smart Way</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
	                    		<div class="form-group">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="CARB" />
									  <label class="form-check-label mb-0" for="CARB">CARB</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
	                    		<div class="form-group">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="TWIC" />
									  <label class="form-check-label mb-0" for="TWIC">TWIC</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
	                    		<div class="form-group">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="tankerendorsed" />
									  <label class="form-check-label mb-0" for="tankerendorsed">Tanker Endorsed</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">How many drivers are tanker endorsed?</label>
	                    			<input type="text" name="intrastatedDriver" class="form-control" placeholder="How many drivers are tanker endorsed?" value="2">
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Truck Class :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="inner-title d-flex align-items-center justify-content-between mb-20">
	                    			<h5 class="text-capitalize mb-0">Truck Classes -</h5>
	                    			<a href="javascript:;" class="text-capitalize text-main">Select all</a>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="conestoga" />
									  <label class="form-check-label mb-0" for="conestoga">Conestoga</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="containers" />
									  <label class="form-check-label mb-0" for="containers">Containers</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="decksspecialized" />
									  <label class="form-check-label mb-0" for="decksspecialized">secks specialized</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="decksstandard" />
									  <label class="form-check-label mb-0" for="decksstandard">Decks Standard</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="drybulk" />
									  <label class="form-check-label mb-0" for="drybulk">Dry Bulk</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="flatbeds" />
									  <label class="form-check-label mb-0" for="flatbeds">Flatbeds</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="hazardousmaterials " />
									  <label class="form-check-label mb-0" for="hazardousmaterials ">Hazardous Materials </label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="reefers" />
									  <label class="form-check-label mb-0" for="reefers">Reefers</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="tankers" />
									  <label class="form-check-label mb-0" for="tankers">Tankers</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="vansstandard" />
									  <label class="form-check-label mb-0" for="vansstandard">Vans Standard</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="vansspecialized " />
									  <label class="form-check-label mb-0" for="vansspecialized">Vans Specialized</label>
									</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-xl-4 col-lg-4">
	                    		<div class="form-group">
	                    			<label class="text-capitalize">Others</label>
	                    			<input type="text" name="Others" class="form-control" placeholder="Others">
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Truck Class :: End -->

	                    <!-- Cargo Hauled :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="inner-title d-flex align-items-center justify-content-between mb-20">
	                    			<h5 class="text-capitalize mb-0">Cargo Hauled -</h5>
	                    			<a href="javascript:;" class="text-capitalize text-main">Select all</a>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="generalfreight" />
									  <label class="form-check-label mb-0" for="generalfreight">General Freight </label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="liquidsgas" />
									  <label class="form-check-label mb-0" for="liquidsgas">Liquids Gas</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="chemicals" />
									  <label class="form-check-label mb-0" for="chemicals">Chemicals</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="householdgoods" />
									  <label class="form-check-label mb-0" for="householdgoods">Household Goods</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="intermodalcontainers" />
									  <label class="form-check-label mb-0" for="intermodalcontainers">Intermodal Containers</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="commoditiesdrybulk" />
									  <label class="form-check-label mb-0" for="commoditiesdrybulk">Commodities Dry Bulk</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="metalsheetscCoilsrRolls " />
									  <label class="form-check-label mb-0" for="metalsheetscCoilsrRolls ">Metal/Sheets /Coils/Rolls</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="passengers" />
									  <label class="form-check-label mb-0" for="passengers">Passengers</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="refrigeratedfood" />
									  <label class="form-check-label mb-0" for="refrigeratedfood">Refrigerated Food</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="motorvehicles" />
									  <label class="form-check-label mb-0" for="motorvehicles">Motor Vehicles</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="oilfieldequipment " />
									  <label class="form-check-label mb-0" for="oilfieldequipment">Oilfield Equipment</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="beverages " />
									  <label class="form-check-label mb-0" for="beverages">Beverages</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="drivewaytowaway" />
									  <label class="form-check-label mb-0" for="drivewaytowaway">Driveway Towaway</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="livestockcontainers " />
									  <label class="form-check-label mb-0" for="livestockcontainers">Livestock Containers</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="paperproducts" />
									  <label class="form-check-label mb-0" for="paperproducts">Paper Products</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="logspolesbeamslumber" />
									  <label class="form-check-label mb-0" for="logspolesbeamslumber">Logs/Poles/Beams/Lumber</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="grainfeedhay" />
									  <label class="form-check-label mb-0" for="grainfeedhay">Grain/Feed/Hay</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="utility" />
									  <label class="form-check-label mb-0" for="utility">Utility</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="buildingmaterials" />
									  <label class="form-check-label mb-0" for="buildingmaterials">Building Materials</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="coalcoke" />
									  <label class="form-check-label mb-0" for="coalcoke">Coal/Coke</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="farmsupplies" />
									  <label class="form-check-label mb-0" for="farmsupplies">Farm Supplies</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="mobilehomes" />
									  <label class="form-check-label mb-0" for="mobilehomes">Mobile Homes</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="meat" />
									  <label class="form-check-label mb-0" for="meat">Meat</label>
									</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Cargo Hauled :: End -->

	                    <!-- Modes :: Start -->
	                    <div class="row">
	                    	<div class="col-xl-12">
	                    		<div class="inner-title d-flex align-items-center justify-content-between mb-20">
	                    			<h5 class="text-capitalize mb-0">Modes -</h5>
	                    			<a href="javascript:;" class="text-capitalize text-main">Select all</a>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="lessthantruckLoad" />
									  <label class="form-check-label mb-0" for="lessthantruckLoad">Less Than TruckLoad (LTL)</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="partial" />
									  <label class="form-check-label mb-0" for="partial">Partial</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="truckload" />
									  <label class="form-check-label mb-0" for="truckload">Truckload (TL or FTL)</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="rail" />
									  <label class="form-check-label mb-0" for="rail">Rail</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="intermodal" />
									  <label class="form-check-label mb-0" for="intermodal">Intermodal</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="air" />
									  <label class="form-check-label mb-0" for="air">Air</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="expedite " />
									  <label class="form-check-label mb-0" for="expedite ">Expedite</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="ocean" />
									  <label class="form-check-label mb-0" for="ocean">Ocean</label>
									</div>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
	                    		<div class="form-group mb-20">
	                    			<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" id="drayage" />
									  <label class="form-check-label mb-0" for="drayage">Drayage</label>
									</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Modes :: End -->
	                    <!-- Certifications :: End -->

	                    <!-- Payment Options :: Start -->
	                    <div class="row mb-50">
	                    	<div class="col-xl-12">
	                    		<div class="title-box mb-20">
	                    			<h4 class="text-black mb-0">Payment Options -</h4>
	                    		</div>
	                    		<p class="text-capitalize mb-20">Please select when and how you want to be paid</p>
	                    		<p class="text-capitalize mb-20 text-red">Click here for more information on payment terms and conditions. You will agree to ALL terms and conditions on the succeeding pages of this packet.</p>
	                    		<span>Factoring Company Name: Freight Factoring Inc</span>
	                    	</div>
	                    </div>
	                    <div class="row justify-content-md-center">
	                    	<div class="col-xl-4 col-lg-4 d-grid">
	                    		<div class="payment-card text-center mb-20">
	                    			<p class="text-capitalize">Click "Reassign" to switch to another factoring company</p>
	                    			<span class="opacity-04">Reassign</span>
	                    		</div>
	                    	</div>
	                    	<div class="col-xl-4 col-lg-4 d-grid">
	                    		<div class="payment-card text-center mb-20">
	                    			<p class="text-capitalize">Click "Release" to remove yourself from your factoring company</p>
	                    			<span class="opacity-04">Release</span>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- Payment Options :: End -->
	                </section>
	            </form>
			<!-- Form :: End -->
		</div>
	</div>
</main>

<!-- Add Dispatcher Modal :: Start -->
<div class="modal fade add-dispatcher" id="addDispatchers" tabindex="-1" aria-labelledby="addDispatchersModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Dispatcher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fad fa-times"></i></button>
      </div>
      <div class="modal-body">
      	<form method="post">
      		<div class="row">
      			<div class="col-xl-6 col-lg-6 col-md-6">
            		<div class="form-group">
            			<label class="text-capitalize">Dispatcher Name<span class="requried ms-1">*</span></label>
            			<input type="text" name="dispatchername" class="form-control" placeholder="Dispatcher Name"/>
            		</div>
            	</div>
            	<div class="col-xl-6 col-lg-6 col-md-6">
            		<div class="form-group">
            			<label class="text-capitalize">Phone Number <span class="requried ms-1">*</span></label>
            			<input type="text" name="phonenumber" class="form-control" placeholder="Phone Number"/>
            		</div>
            	</div>
            	<div class="col-xl-6 col-lg-6 col-md-6">
            		<div class="form-group">
            			<label class="text-capitalize">Email</label>
            			<input type="text" name="email" class="form-control" placeholder="Enter Email"/>
            		</div>
            	</div>
      		</div>
      		<div class="row">
      			<div class="col-3">
      				<button type="submit" class="btn btn-site" data-bs-dismiss="modal">Save</button>
      			</div>
      		</div>
      	</form>
      </div>
    </div>
  </div>
</div>
<!-- Add Dispatcher Modal :: End -->

<!-- Add Drivers Modal :: Start -->
<div class="modal fade add-dispatcher" id="addDrivers" tabindex="-1" aria-labelledby="addDriversModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Drivers</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fad fa-times"></i></button>
      </div>
      <div class="modal-body">
      	<form method="post">
      		<div class="row">
      			<div class="col-xl-6 col-lg-6 col-md-6">
            		<div class="form-group">
            			<label class="text-capitalize">Dispatcher Name<span class="requried ms-1">*</span></label>
            			<input type="text" name="dispatchername" class="form-control" placeholder="Dispatcher Name"/>
            		</div>
            	</div>
            	<div class="col-xl-6 col-lg-6 col-md-6">
            		<div class="form-group">
            			<label class="text-capitalize">Phone Number <span class="requried ms-1">*</span></label>
            			<input type="text" name="phonenumber" class="form-control" placeholder="Phone Number"/>
            		</div>
            	</div>
            	<div class="col-xl-6 col-lg-6 col-md-6">
            		<div class="form-group">
            			<label class="text-capitalize">Email</label>
            			<input type="text" name="email" class="form-control" placeholder="Enter Email"/>
            		</div>
            	</div>
      		</div>
      		<div class="row">
      			<div class="col-3">
      				<button type="submit" class="btn btn-site" data-bs-dismiss="modal">Save</button>
      			</div>
      		</div>
      	</form>
      </div>
    </div>
  </div>
</div>
<!-- Add Drivers Modal :: End -->

<!-- Delete Modal :: End -->
<div class="modal fade delete-modal" id="deleteModel" tabindex="-1" aria-labelledby="deleteModel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
      	<img src="assets/images/icon/delete.png" alt="data delete" class="mb-20" />
      	<h4 class="font-18 font-weight-600">Are you sure?</h4>
      	<p class="mb-20">Do you really want to delete these records? This process cannot be undone.</p>
      	<div class="action">
      		<button class="btn btn-cancel text-white me-2" data-bs-dismiss="modal">Cancel</button>
      		<button class="btn bg-red text-white" data-bs-dismiss="modal">Delete</button>
      	</div>
      </div>
    </div>
  </div>
</div>
<!-- Delete Modal :: End -->

<!-- Footer Script :: Start -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr-2.6.2.min.js"></script>
<script src="assets/js/jquery.steps.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>