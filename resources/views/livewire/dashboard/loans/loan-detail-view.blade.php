<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Navbar-->
            <div style="margin-top: -4%; z-index: 5; background-image: url( {{ asset('public/mfs/admin/assets/media/product/loan_header.webp') }}); width: 109%;
            left: -5%;"
                class="card mb-6">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->

                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div style="margin-left: 2%;" class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <p class="text-white fs-2 fw-bold mb-1 me-1">ZMW 1000</p>
                                        <a href="#">
                                            <i class="text-white ki-duotone ki-verify fs-1 ">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                        <a href="#"
                                            class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>GRZ Salary Advance</a>


                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Actions-->
                                <div class="d-flex">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="m-2 d-flex flex-column">
                                                <div class="d-flex fw-semibold align-items-center mb-">
                                                    <p class="text-white fs-2 me-1">#53321</p>

                                                </div>
                                                <div class="d-flex align-items-center fw-semibold">
                                                    <p class=" align-items-center text-gray-400">Loan ID</p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="m-2 d-flex flex-column">
                                                <div class="d-flex fw-semibold align-items-center mb-">
                                                    <p class="align-items-center text-white fs-2 me-1">01/22/2024</p>

                                                </div>
                                                <div class="d-flex align-items-center fw-semibold">
                                                    <p class="align-items-center fs- text-gray-400">Application date</p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="m-2 d-flex flex-column">
                                                <div class="d-flex fw-semibold align-items-center mb-">
                                                    <p class="align-items-center text-white fs-2 me-1">3</p>

                                                </div>
                                                <div class="d-flex align-items-center fw-semibold">
                                                    <p class=" fs- text-gray-400">Loan term (months)</p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <!--begin::Menu-->

                                    <!--end::Menu-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->

                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Navs-->

                    <!--begin::Navs-->
                </div>
            </div>
            <div style=" width: 109%; top:-5%; left: -5%;" class="card">
                <div style="margin-top: -4%; padding: 0px;" class="card-body pt-5 pb-0">
                    <!--begin::Details-->
                    <div class="col-12">
                        <div class="tabbable">
                            <ul class="nav nav-tabss wizard">
                                <li class="active"><a href="#i9" data-toggle="tab" aria-expanded="false"><span
                                            class="nmbr">1</span>Application Submitted</a></li>
                                <li><a href="#w4" data-toggle="tab" aria-expanded="false"><span
                                            class="nmbr">2</span>Verification</a></li>
                                <li><a href="#stateinfo" data-toggle="tab" aria-expanded="false"><span
                                            class="nmbr">3</span>Approval</a></li>
                                <li><a href="#finish" data-toggle="tab" aria-expanded="true"><span
                                            class="nmbr">5</span>Disbusements</a></li>

                            </ul>
                        </div>
                        {{-- hello bremah edit the bottom styles and scripts and add in appropriate files --}}
                        <script>
                            //this will show completed steps regardless of step user is on
                            //see class used below to use for completion
                            $('.wizard li').click(function() {
                                $(this).prevAll().addClass("completed");
                                $(this).nextAll().removeClass("completed")

                            });
                        </script>
                        <style>
                            .nav-tabss.wizard {
                                background-color: transparent;
                                padding: 0;
                                width: 100%;
                                margin: 1em auto;
                                border-radius: .25em;
                                clear: both;
                                border-bottom: none;
                            }

                            .nav-tabss.wizard li {
                                width: 100%;
                                float: none;
                                margin-bottom: 3px;
                            }

                            .nav-tabss.wizard li>* {
                                position: relative;
                                padding: 1em .8em .8em 2.5em;
                                color: #999999;
                                background-color: #dedede;
                                border-color: #dedede;
                            }

                            .nav-tabss.wizard li.completed>* {
                                color: #fff !important;
                                background-color: #96c03d !important;
                                border-color: #96c03d !important;
                                border-bottom: none !important;
                            }

                            .nav-tabss.wizard li.active>* {
                                color: #fff !important;
                                background-color: #2c3f4c !important;
                                border-color: #2c3f4c !important;
                                border-bottom: none !important;
                            }

                            .nav-tabss.wizard li::after:last-child {
                                border: none;
                            }

                            .nav-tabss.wizard>li>a {
                                opacity: 1;
                                font-size: 14px;
                            }

                            .nav-tabss.wizard a:hover {
                                color: #fff;
                                background-color: #2c3f4c;
                                border-color: #2c3f4c
                            }

                            span.nmbr {
                                display: inline-block;
                                padding: 10px 0 0 0;
                                background: #ffffff;
                                width: 35px;
                                line-height: 100%;
                                height: 35px;
                                margin: auto;
                                border-radius: 50%;
                                font-weight: bold;
                                font-size: 16px;
                                color: #555;
                                margin-bottom: 10px;
                                text-align: center;
                            }

                            @media(min-width:992px) {
                                .nav-tabss.wizard li {
                                    position: relative;
                                    padding: 0;
                                    margin: 4px 4px 4px 0;
                                    width: 24.6%;
                                    float: left;
                                    text-align: center;
                                }

                                .nav-tabss.wizard li.active a {
                                    padding-top: 15px;
                                }

                                .nav-tabss.wizard li::after,
                                .nav-tabss.wizard li>*::after {
                                    content: '';
                                    position: absolute;
                                    top: 1px;
                                    left: 100%;
                                    height: 0;
                                    width: 0;
                                    border: 45px solid transparent;
                                    border-right-width: 0;
                                    /*border-left-width: 20px*/
                                }

                                .nav-tabss.wizard li::after {
                                    z-index: 1;
                                    -webkit-transform: translateX(4px);
                                    -moz-transform: translateX(4px);
                                    -ms-transform: translateX(4px);
                                    -o-transform: translateX(4px);
                                    transform: translateX(4px);
                                    border-left-color: #fff;
                                    margin: 0
                                }

                                .nav-tabss.wizard li>*::after {
                                    z-index: 2;
                                    border-left-color: inherit
                                }

                                .nav-tabss.wizard>li:nth-of-type(1)>a {
                                    border-top-left-radius: 10px;
                                    border-bottom-left-radius: 10px;
                                }

                                .nav-tabss.wizard li:last-child a {
                                    border-top-right-radius: 10px;
                                    border-bottom-right-radius: 10px;
                                }

                                .nav-tabss.wizard li:last-child {
                                    margin-right: 0;
                                }

                                .nav-tabss.wizard li:last-child a:after,
                                .nav-tabss.wizard li:last-child:after {
                                    content: "";
                                    border: none;
                                }

                                span.nmbr {
                                    display: block;
                                }
                            }
                        </style>

                    </div>
                    <!--end::Details-->
                    <!--begin::Navs-->

                    <!--begin::Navs-->
                </div>
            </div>

            <!--end::Navbar-->
            <!--end::Container-->
        </div>


        <!--end::Post-->
    </div>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                        <!--begin::Card-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Card body-->
                            <div class="card-body pt-15">
                                <!--begin::Summary-->
                                <div class="d-flex flex-center flex-column mb-5">

                                    <div class="mb-5">
                                        <!--begin::Badge-->
                                        <div class="badge badge-lg badge-light-primary d-inline">Primary Applicant</div>
                                        <!--begin::Badge-->
                                    </div>
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-100px symbol-circle mb-7">
                                        <img src="{{ asset('public/mfs/admin/assets/media/avatars/300-1.jpg')}}" alt="image" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">Max Smith</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fs-5 fw-semibold text-muted mb-6">Software Enginer</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap flex-center">
                                        <!--begin::Stats-->
                                        <div class="row justify-content-center">
                                            <div class="col-lg-4 border border-gray-300 border-dashed rounded py-3 px-3 mx-4 m-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-50px">ZMW 1300</span>
                                                    <i class="ki-duotone ki-usd fs-3 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <div class="fw-semibold text-muted">Principle<br>Amount</div>
                                            </div>
                                            <div class="col-lg-4 border border-gray-300 border-dashed rounded py-3 px-3 mx-4 m-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-50px">3 (Months)</span>
                                                    <i class="ki-duotone ki-usd fs-3 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <div class="fw-semibold text-muted">Loan Duration</div>
                                            </div>
                                            <div class="col-lg-4 border border-gray-300 border-dashed rounded py-3 px-3 mx-4 m-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-50px">K1300</span>
                                                    <i class="ki-duotone ki-usd fs-3 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <div class="fw-semibold text-muted">Total <br> Repayment</div>
                                            </div>
                                            <div class="col-lg-4 border border-gray-300 border-dashed rounded py-3 px-3 mx-4 m-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-50px">K500</span>
                                                    <i class="ki-duotone ki-usd fs-3 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <div class="fw-semibold text-muted">Monthly<br>Repayment</div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Summary-->
                                <!--begin::Details toggle-->
                                <div class="d-flex flex-stack fs-4 py-3">
                                    <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
                                    <span class="ms-2 rotate-180">
                                        <i class="ki-duotone ki-down fs-3"></i>
                                    </span></div>
                                    <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                                        <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
                                    </span>
                                </div>
                                <!--end::Details toggle-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--begin::Details content-->
                                <div id="kt_customer_view_details" class="collapse show">
                                    <div class="py-5 fs-6">
                                        <!--begin::Badge-->
                                        <div class="badge badge-light-info d-inline">Premium user</div>
                                        <!--begin::Badge-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Account ID</div>
                                        <div class="text-gray-600">ID-45453423</div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Email</div>
                                        <div class="text-gray-600">
                                            <a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
                                        </div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Address</div>
                                        <div class="text-gray-600">101 Collin Street,
                                        <br />Melbourne 3000 VIC
                                        <br />Australia</div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Phone</div>
                                        <div class="text-gray-600">+260978265456</div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Interest Rate</div>
                                        <div class="text-gray-600">18%</div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Tax ID</div>
                                        <div class="text-gray-600">TX-8674</div>
                                        <!--begin::Details item-->
                                    </div>
                                </div>
                                <!--end::Details content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Connected Accounts-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <h3 class="fw-bold m-0">Connected Accounts</h3>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-2">
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-semibold">
                                            <div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our
                                            <a href="#" class="me-1">privacy policy</a>and
                                            <a href="#">terms of use</a>.</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--begin::Items-->
                                <div class="py-2">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <div class="d-flex">
                                            <img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Google</a>
                                                <div class="fs-6 fw-semibold text-muted">Plan properly your workflow</div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_google"></span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <div class="d-flex">
                                            <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>
                                                <div class="fs-6 fw-semibold text-muted">Keep eye on on your Repositories</div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_github"></span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <div class="d-flex">
                                            <img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Slack</a>
                                                <div class="fs-6 fw-semibold text-muted">Integrate Projects Discussions</div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_slack"></span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer border-0 d-flex justify-content-center pt-0">
                                <button class="btn btn-sm btn-light-primary">Save Changes</button>
                            </div>
                            <!--end::Card footer-->
                        </div>
                        <!--end::Connected Accounts-->
                    </div>
                    <!--end::Sidebar-->
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid ms-lg-15">
                        <div class="float-end" >
                            <!--begin::Action menu-->
                            <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Action
                            <i class="ki-duotone ki-down fs-2 me-0"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">Create invoice</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link flex-stack px-5">Create payments
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Apps</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Statements</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
                                                    <span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-3"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">Reports</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="#" class="menu-link px-5">Account Settings</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link text-danger px-5">Delete customer</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu-->
                        </div>
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Overview</a>
                            </li>
                            <!--end:::Tab item-->
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Loan Details</a>
                            </li>
                            <!--end:::Tab item-->
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements">Documents</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements">Activity Log</a>
                            </li>

                            <!--end:::Tab item-->
                            <!--begin:::Tab item-->

                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                        <!--begin:::Tab content-->
                        <div class="tab-content" id="myTabContent">
                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                                <!--begin::Card-->
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Payment Records</h2>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Filter-->
                                            <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                                            <i class="ki-duotone ki-plus-square fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>Add payment</button>
                                            <!--end::Filter-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0 pb-5">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
                                            <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                                <tr class="text-start text-muted text-uppercase gs-0">
                                                    <th class="min-w-100px">Invoice No.</th>
                                                    <th>Status</th>
                                                    <th>Amount</th>
                                                    <th class="min-w-100px">Date</th>
                                                    <th class="text-end min-w-100px pe-4">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">9673-1893</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-success">Successful</span>
                                                    </td>
                                                    <td>$1,200.00</td>
                                                    <td>14 Dec 2020, 8:43 pm</td>
                                                    <td class="pe-0 text-end">
                                                        <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="../apps/customers/view.html" class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">2655-1234</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-success">Successful</span>
                                                    </td>
                                                    <td>$79.00</td>
                                                    <td>01 Dec 2020, 10:12 am</td>
                                                    <td class="pe-0 text-end">
                                                        <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="../apps/customers/view.html" class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">6732-1806</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-success">Successful</span>
                                                    </td>
                                                    <td>$5,500.00</td>
                                                    <td>12 Nov 2020, 2:01 pm</td>
                                                    <td class="pe-0 text-end">
                                                        <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="../apps/customers/view.html" class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">4269-7965</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>$880.00</td>
                                                    <td>21 Oct 2020, 5:54 pm</td>
                                                    <td class="pe-0 text-end">
                                                        <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="../apps/customers/view.html" class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">2188-4533</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-success">Successful</span>
                                                    </td>
                                                    <td>$7,650.00</td>
                                                    <td>19 Oct 2020, 7:32 am</td>
                                                    <td class="pe-0 text-end">
                                                        <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="../apps/customers/view.html" class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">3602-3127</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-success">Successful</span>
                                                    </td>
                                                    <td>$375.00</td>
                                                    <td>23 Sep 2020, 12:38 am</td>
                                                    <td class="pe-0 text-end">
                                                        <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="../apps/customers/view.html" class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">2810-7956</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-success">Successful</span>
                                                    </td>
                                                    <td>$129.00</td>
                                                    <td>11 Sep 2020, 3:18 pm</td>
                                                    <td class="pe-0 text-end">
                                                        <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="../apps/customers/view.html" class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">1476-1160</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>$450.00</td>
                                                    <td>03 Sep 2020, 1:08 am</td>
                                                    <td class="pe-0 text-end">
                                                        <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="../apps/customers/view.html" class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">6427-8124</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>$8,700.00</td>
                                                    <td>01 Sep 2020, 4:58 pm</td>
                                                    <td class="pe-0 text-end">
                                                        <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="../apps/customers/view.html" class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                                <!--begin::Card-->
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2 class="fw-bold mb-0">Payment Methods</h2>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                            <i class="ki-duotone ki-plus-square fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>Add new method</a>
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div id="kt_customer_view_payment_method" class="card-body pt-0">
                                        <!--begin::Option-->
                                        <div class="py-0" data-kt-customer-payment-method="row">
                                            <!--begin::Header-->
                                            <div class="py-3 d-flex flex-stack flex-wrap">
                                                <!--begin::Toggle-->
                                                <div class="d-flex align-items-center collapsible rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
                                                    <!--begin::Arrow-->
                                                    <div class="me-3 rotate-90">
                                                        <i class="ki-duotone ki-right fs-3"></i>
                                                    </div>
                                                    <!--end::Arrow-->
                                                    <!--begin::Logo-->
                                                    <img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
                                                    <!--end::Logo-->
                                                    <!--begin::Summary-->
                                                    <div class="me-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="text-gray-800 fw-bold">Mastercard</div>
                                                            <div class="badge badge-light-primary ms-5">Primary</div>
                                                        </div>
                                                        <div class="text-muted">Expires Dec 2024</div>
                                                    </div>
                                                    <!--end::Summary-->
                                                </div>
                                                <!--end::Toggle-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex my-3 ms-9">
                                                    <!--begin::Edit-->
                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                            <i class="ki-duotone ki-pencil fs-3">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </a>
                                                    <!--end::Edit-->
                                                    <!--begin::Delete-->
                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                        <i class="ki-duotone ki-trash fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </a>
                                                    <!--end::Delete-->
                                                    <!--begin::More-->
                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-setting-3 fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                    <!--end::More-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                                <!--begin::Details-->
                                                <div class="d-flex flex-wrap py-5">
                                                    <!--begin::Col-->
                                                    <div class="flex-equal me-5">
                                                        <table class="table table-flush fw-semibold gy-1">
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Name</td>
                                                                <td class="text-gray-800">Emma Smith</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Number</td>
                                                                <td class="text-gray-800">**** 9637</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Expires</td>
                                                                <td class="text-gray-800">12/2024</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Type</td>
                                                                <td class="text-gray-800">Mastercard credit card</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                                <td class="text-gray-800">VICBANK</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">ID</td>
                                                                <td class="text-gray-800">id_4325df90sdf8</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="flex-equal">
                                                        <table class="table table-flush fw-semibold gy-1">
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                                <td class="text-gray-800">AU</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Phone</td>
                                                                <td class="text-gray-800">No phone provided</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Email</td>
                                                                <td class="text-gray-800">
                                                                    <a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Origin</td>
                                                                <td class="text-gray-800">Australia
                                                                <div class="symbol symbol-20px symbol-circle ms-2">
                                                                    <img src="assets/media/flags/australia.svg" />
                                                                </div></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                                <td class="text-gray-800">Passed
                                                                <i class="ki-duotone ki-check-circle fs-2 text-success">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Option-->
                                        <div class="separator separator-dashed"></div>
                                        <!--begin::Option-->
                                        <div class="py-0" data-kt-customer-payment-method="row">
                                            <!--begin::Header-->
                                            <div class="py-3 d-flex flex-stack flex-wrap">
                                                <!--begin::Toggle-->
                                                <div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_2" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_2">
                                                    <!--begin::Arrow-->
                                                    <div class="me-3 rotate-90">
                                                        <i class="ki-duotone ki-right fs-3"></i>
                                                    </div>
                                                    <!--end::Arrow-->
                                                    <!--begin::Logo-->
                                                    <img src="assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="" />
                                                    <!--end::Logo-->
                                                    <!--begin::Summary-->
                                                    <div class="me-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="text-gray-800 fw-bold">Visa</div>
                                                        </div>
                                                        <div class="text-muted">Expires Feb 2022</div>
                                                    </div>
                                                    <!--end::Summary-->
                                                </div>
                                                <!--end::Toggle-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex my-3 ms-9">
                                                    <!--begin::Edit-->
                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                            <i class="ki-duotone ki-pencil fs-3">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </a>
                                                    <!--end::Edit-->
                                                    <!--begin::Delete-->
                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                        <i class="ki-duotone ki-trash fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </a>
                                                    <!--end::Delete-->
                                                    <!--begin::More-->
                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-setting-3 fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                    <!--end::More-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div id="kt_customer_view_payment_method_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                                <!--begin::Details-->
                                                <div class="d-flex flex-wrap py-5">
                                                    <!--begin::Col-->
                                                    <div class="flex-equal me-5">
                                                        <table class="table table-flush fw-semibold gy-1">
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Name</td>
                                                                <td class="text-gray-800">Melody Macy</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Number</td>
                                                                <td class="text-gray-800">**** 6477</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Expires</td>
                                                                <td class="text-gray-800">02/2022</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Type</td>
                                                                <td class="text-gray-800">Visa credit card</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                                <td class="text-gray-800">ENBANK</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">ID</td>
                                                                <td class="text-gray-800">id_w2r84jdy723</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="flex-equal">
                                                        <table class="table table-flush fw-semibold gy-1">
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                                <td class="text-gray-800">UK</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Phone</td>
                                                                <td class="text-gray-800">No phone provided</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Email</td>
                                                                <td class="text-gray-800">
                                                                    <a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Origin</td>
                                                                <td class="text-gray-800">United Kingdom
                                                                <div class="symbol symbol-20px symbol-circle ms-2">
                                                                    <img src="assets/media/flags/united-kingdom.svg" />
                                                                </div></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                                <td class="text-gray-800">Passed
                                                                <i class="ki-duotone ki-check fs-2 text-success"></i></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Option-->
                                        <div class="separator separator-dashed"></div>
                                        <!--begin::Option-->
                                        <div class="py-0" data-kt-customer-payment-method="row">
                                            <!--begin::Header-->
                                            <div class="py-3 d-flex flex-stack flex-wrap">
                                                <!--begin::Toggle-->
                                                <div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_3" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_3">
                                                    <!--begin::Arrow-->
                                                    <div class="me-3 rotate-90">
                                                        <i class="ki-duotone ki-right fs-3"></i>
                                                    </div>
                                                    <!--end::Arrow-->
                                                    <!--begin::Logo-->
                                                    <img src="assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="" />
                                                    <!--end::Logo-->
                                                    <!--begin::Summary-->
                                                    <div class="me-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="text-gray-800 fw-bold">American Express</div>
                                                            <div class="badge badge-light-danger ms-5">Expired</div>
                                                        </div>
                                                        <div class="text-muted">Expires Aug 2021</div>
                                                    </div>
                                                    <!--end::Summary-->
                                                </div>
                                                <!--end::Toggle-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex my-3 ms-9">
                                                    <!--begin::Edit-->
                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                            <i class="ki-duotone ki-pencil fs-3">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </a>
                                                    <!--end::Edit-->
                                                    <!--begin::Delete-->
                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                        <i class="ki-duotone ki-trash fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </a>
                                                    <!--end::Delete-->
                                                    <!--begin::More-->
                                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-setting-3 fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                    <!--end::More-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div id="kt_customer_view_payment_method_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                                <!--begin::Details-->
                                                <div class="d-flex flex-wrap py-5">
                                                    <!--begin::Col-->
                                                    <div class="flex-equal me-5">
                                                        <table class="table table-flush fw-semibold gy-1">
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Name</td>
                                                                <td class="text-gray-800">Max Smith</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Number</td>
                                                                <td class="text-gray-800">**** 3608</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Expires</td>
                                                                <td class="text-gray-800">08/2021</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Type</td>
                                                                <td class="text-gray-800">American express credit card</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                                <td class="text-gray-800">USABANK</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">ID</td>
                                                                <td class="text-gray-800">id_89457jcje63</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="flex-equal">
                                                        <table class="table table-flush fw-semibold gy-1">
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                                <td class="text-gray-800">US</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Phone</td>
                                                                <td class="text-gray-800">No phone provided</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Email</td>
                                                                <td class="text-gray-800">
                                                                    <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">Origin</td>
                                                                <td class="text-gray-800">United States of America
                                                                <div class="symbol symbol-20px symbol-circle ms-2">
                                                                    <img src="assets/media/flags/united-states.svg" />
                                                                </div></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                                <td class="text-gray-800">Failed
                                                                <i class="ki-duotone ki-cross fs-2 text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                                <!--begin::Card-->
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2 class="fw-bold">Credit Balance</h2>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_adjust_balance">
                                            <i class="ki-duotone ki-pencil fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>Adjust Balance</a>
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="fw-bold fs-2">$32,487.57
                                        <span class="text-muted fs-4 fw-semibold">USD</span>
                                        <div class="fs-7 fw-normal text-muted">Balance will increase the amount due on the customer's next invoice.</div></div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                                <!--begin::Card-->
                                <div class="card pt-2 mb-6 mb-xl-9">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Invoices</h2>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar m-0">
                                            <!--begin::Tab nav-->
                                            <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">This Year</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2">2020</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3">2019</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4">2018</a>
                                                </li>
                                            </ul>
                                            <!--end::Tab nav-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Tab Content-->
                                        <div id="kt_referred_users_tab_content" class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div id="kt_customer_details_invoices_1" class="py-0 tab-pane fade show active" role="tabpanel">
                                                <!--begin::Table-->
                                                <table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
                                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                        <tr class="text-start text-muted gs-0">
                                                            <th class="min-w-100px">Order ID</th>
                                                            <th class="min-w-100px">Amount</th>
                                                            <th class="min-w-100px">Status</th>
                                                            <th class="min-w-125px">Date</th>
                                                            <th class="min-w-100px text-end pe-7">Invoice</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td class="text-success">$38.00</td>
                                                            <td>
                                                                <span class="badge badge-light-danger">Rejected</span>
                                                            </td>
                                                            <td>Nov 01, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td>
                                                                <span class="badge badge-light-danger">Rejected</span>
                                                            </td>
                                                            <td>Oct 24, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td class="text-success">$76.00</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Oct 08, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td class="text-success">$5.00</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Sep 15, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td>
                                                                <span class="badge badge-light-info">In progress</span>
                                                            </td>
                                                            <td>May 30, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td class="text-success">$204.00</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>Apr 22, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td class="text-success">$31.00</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>Feb 09, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td class="text-success">$52.00</td>
                                                            <td>
                                                                <span class="badge badge-light-info">In progress</span>
                                                            </td>
                                                            <td>Nov 01, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>Jan 04, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div id="kt_customer_details_invoices_2" class="py-0 tab-pane fade" role="tabpanel">
                                                <!--begin::Table-->
                                                <table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
                                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                        <tr class="text-start text-muted gs-0">
                                                            <th class="min-w-100px">Order ID</th>
                                                            <th class="min-w-100px">Amount</th>
                                                            <th class="min-w-100px">Status</th>
                                                            <th class="min-w-125px">Date</th>
                                                            <th class="min-w-100px text-end pe-7">Invoice</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>May 30, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td class="text-success">$204.00</td>
                                                            <td>
                                                                <span class="badge badge-light-info">In progress</span>
                                                            </td>
                                                            <td>Apr 22, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td class="text-success">$31.00</td>
                                                            <td>
                                                                <span class="badge badge-light-danger">Rejected</span>
                                                            </td>
                                                            <td>Feb 09, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td class="text-success">$52.00</td>
                                                            <td>
                                                                <span class="badge badge-light-danger">Rejected</span>
                                                            </td>
                                                            <td>Nov 01, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Jan 04, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td class="text-success">$38.00</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>Nov 01, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td>
                                                                <span class="badge badge-light-info">In progress</span>
                                                            </td>
                                                            <td>Oct 24, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td class="text-success">$76.00</td>
                                                            <td>
                                                                <span class="badge badge-light-danger">Rejected</span>
                                                            </td>
                                                            <td>Oct 08, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td class="text-success">$5.00</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Sep 15, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div id="kt_customer_details_invoices_3" class="py-0 tab-pane fade" role="tabpanel">
                                                <!--begin::Table-->
                                                <table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
                                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                        <tr class="text-start text-muted gs-0">
                                                            <th class="min-w-100px">Order ID</th>
                                                            <th class="min-w-100px">Amount</th>
                                                            <th class="min-w-100px">Status</th>
                                                            <th class="min-w-125px">Date</th>
                                                            <th class="min-w-100px text-end pe-7">Invoice</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td class="text-success">$31.00</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Feb 09, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td class="text-success">$52.00</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>Nov 01, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td>
                                                                <span class="badge badge-light-danger">Rejected</span>
                                                            </td>
                                                            <td>Jan 04, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td class="text-success">$5.00</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>Sep 15, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td class="text-success">$38.00</td>
                                                            <td>
                                                                <span class="badge badge-light-info">In progress</span>
                                                            </td>
                                                            <td>Nov 01, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td>
                                                                <span class="badge badge-light-danger">Rejected</span>
                                                            </td>
                                                            <td>Oct 24, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td class="text-success">$76.00</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>Oct 08, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td>
                                                                <span class="badge badge-light-info">In progress</span>
                                                            </td>
                                                            <td>May 30, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td class="text-success">$204.00</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Apr 22, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div id="kt_customer_details_invoices_4" class="py-0 tab-pane fade" role="tabpanel">
                                                <!--begin::Table-->
                                                <table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
                                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                        <tr class="text-start text-muted gs-0">
                                                            <th class="min-w-100px">Order ID</th>
                                                            <th class="min-w-100px">Amount</th>
                                                            <th class="min-w-100px">Status</th>
                                                            <th class="min-w-125px">Date</th>
                                                            <th class="min-w-100px text-end pe-7">Invoice</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td class="text-success">$38.00</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Nov 01, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>Oct 24, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td class="text-success">$38.00</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Nov 01, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td>
                                                                <span class="badge badge-light-info">In progress</span>
                                                            </td>
                                                            <td>Oct 24, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td class="text-success">$31.00</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Feb 09, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td class="text-success">$52.00</td>
                                                            <td>
                                                                <span class="badge badge-light-warning">Pending</span>
                                                            </td>
                                                            <td>Nov 01, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td>
                                                                <span class="badge badge-light-success">Approved</span>
                                                            </td>
                                                            <td>Jan 04, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td class="text-success">$76.00</td>
                                                            <td>
                                                                <span class="badge badge-light-danger">Rejected</span>
                                                            </td>
                                                            <td>Oct 08, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td class="text-success">$76.00</td>
                                                            <td>
                                                                <span class="badge badge-light-danger">Rejected</span>
                                                            </td>
                                                            <td>Oct 08, 2020</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end:::Tab pane-->
                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
                                <!--begin::Card-->
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Logs</h2>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-sm btn-light-primary">
                                            <i class="ki-duotone ki-cloud-download fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>Download Report</button>
                                            <!--end::Button-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
                                                <tbody>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-success">200 OK</div>
                                                        </td>
                                                        <td>POST /v1/invoices/in_9381_6519/payment</td>
                                                        <td class="pe-0 text-end min-w-200px">15 Apr 2023, 6:05 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-success">200 OK</div>
                                                        </td>
                                                        <td>POST /v1/invoices/in_5959_3541/payment</td>
                                                        <td class="pe-0 text-end min-w-200px">25 Jul 2023, 2:40 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-warning">404 WRN</div>
                                                        </td>
                                                        <td>POST /v1/customer/c_64b784ba36261/not_found</td>
                                                        <td class="pe-0 text-end min-w-200px">10 Mar 2023, 2:40 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-success">200 OK</div>
                                                        </td>
                                                        <td>POST /v1/invoices/in_9381_6519/payment</td>
                                                        <td class="pe-0 text-end min-w-200px">19 Aug 2023, 10:10 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-success">200 OK</div>
                                                        </td>
                                                        <td>POST /v1/invoices/in_6751_5507/payment</td>
                                                        <td class="pe-0 text-end min-w-200px">10 Nov 2023, 5:20 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-danger">500 ERR</div>
                                                        </td>
                                                        <td>POST /v1/invoice/in_7903_5155/invalid</td>
                                                        <td class="pe-0 text-end min-w-200px">20 Dec 2023, 8:43 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-success">200 OK</div>
                                                        </td>
                                                        <td>POST /v1/invoices/in_9381_6519/payment</td>
                                                        <td class="pe-0 text-end min-w-200px">19 Aug 2023, 10:10 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-danger">500 ERR</div>
                                                        </td>
                                                        <td>POST /v1/invoice/in_5250_9522/invalid</td>
                                                        <td class="pe-0 text-end min-w-200px">24 Jun 2023, 11:05 am</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-warning">404 WRN</div>
                                                        </td>
                                                        <td>POST /v1/customer/c_64b784ba3625f/not_found</td>
                                                        <td class="pe-0 text-end min-w-200px">10 Mar 2023, 5:20 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-70px">
                                                            <div class="badge badge-light-success">200 OK</div>
                                                        </td>
                                                        <td>POST /v1/invoices/in_6751_5507/payment</td>
                                                        <td class="pe-0 text-end min-w-200px">10 Mar 2023, 5:20 pm</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                                <!--begin::Card-->
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Events</h2>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-sm btn-light-primary">
                                            <i class="ki-duotone ki-cloud-download fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>Download Report</button>
                                            <!--end::Button-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
                                            <tbody>
                                                <tr>
                                                    <td class="min-w-400px">Invoice
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is
                                                    <span class="badge badge-light-info">In Progress</span></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2023, 10:30 am</td>
                                                </tr>
                                                <tr>
                                                    <td class="min-w-400px">
                                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a>has made payment to
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2023, 10:30 am</td>
                                                </tr>
                                                <tr>
                                                    <td class="min-w-400px">Invoice
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
                                                    <span class="badge badge-light-danger">Declined</span></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2023, 6:43 am</td>
                                                </tr>
                                                <tr>
                                                    <td class="min-w-400px">
                                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2023, 10:30 am</td>
                                                </tr>
                                                <tr>
                                                    <td class="min-w-400px">Invoice
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
                                                    <span class="badge badge-light-succees me-1">In Transit</span>to
                                                    <span class="badge badge-light-success">Approved</span></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2023, 5:30 pm</td>
                                                </tr>
                                                <tr>
                                                    <td class="min-w-400px">
                                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2023, 9:23 pm</td>
                                                </tr>
                                                <tr>
                                                    <td class="min-w-400px">Invoice
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
                                                    <span class="badge badge-light-danger">Declined</span></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2023, 10:10 pm</td>
                                                </tr>
                                                <tr>
                                                    <td class="min-w-400px">
                                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2023, 2:40 pm</td>
                                                </tr>
                                                <tr>
                                                    <td class="min-w-400px">Invoice
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
                                                    <span class="badge badge-light-succees me-1">In Transit</span>to
                                                    <span class="badge badge-light-success">Approved</span></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2023, 8:43 pm</td>
                                                </tr>
                                                <tr>
                                                    <td class="min-w-400px">
                                                    <a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a>has made payment to
                                                    <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2023, 10:30 am</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end:::Tab pane-->
                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel">
                                <!--begin::Earnings-->
                                <div class="card mb-6 mb-xl-9">
                                    <!--begin::Header-->
                                    <div class="card-header border-0">
                                        <div class="card-title">
                                            <h2>Net Pay</h2>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-0">
                                        <div class="fs-5 fw-semibold text-gray-500 mb-4">Last 30 day earnings calculated. Apart from arranging the order of topics.</div>
                                        <!--begin::Left Section-->
                                        <div class="d-flex flex-wrap flex-stack mb-5">
                                            <!--begin::Row-->
                                            <div class="d-flex flex-wrap">
                                                <!--begin::Col-->
                                                <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                                    <span class="fs-1 fw-bold text-gray-800 lh-1">
                                                        <span data-kt-countup="true" data-kt-countup-value="6,840" data-kt-countup-prefix="$">0</span>
                                                        <i class="ki-duotone ki-arrow-up fs-1 text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Net Earnings</span>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                                    <span class="fs-1 fw-bold text-gray-800 lh-1">
                                                    <span class="" data-kt-countup="true" data-kt-countup-value="16">0</span>%
                                                    <i class="ki-duotone ki-arrow-down fs-1 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i></span>
                                                    <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Change</span>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                                    <span class="fs-1 fw-bold text-gray-800 lh-1">
                                                        <span data-kt-countup="true" data-kt-countup-value="1,240" data-kt-countup-prefix="$">0</span>
                                                        <span class="text-primary">--</span>
                                                    </span>
                                                    <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Fees</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <a href="#" class="btn btn-sm btn-light-primary flex-shrink-0">Withdraw Earnings</a>
                                        </div>
                                        <!--end::Left Section-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Earnings-->
                                <!--begin::Statements-->
                                <div class="card mb-6 mb-xl-9">
                                    <!--begin::Header-->
                                    <div class="card-header">
                                        <!--begin::Title-->
                                        <div class="card-title">
                                            <h2>Statement</h2>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Tab nav-->
                                            <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_1">This Year</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_2">2020</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_3">2019</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_4">2018</a>
                                                </li>
                                            </ul>
                                            <!--end::Tab nav-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pb-5">
                                        <!--begin::Tab Content-->
                                        <div id="kt_customer_view_statement_tab_content" class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div id="kt_customer_view_statement_1" class="py-0 tab-pane fade show active" role="tabpanel">
                                                <!--begin::Table-->
                                                <table id="kt_customer_view_statement_table_1" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4">
                                                    <thead class="border-bottom border-gray-200">
                                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="w-125px">Date</th>
                                                            <th class="w-100px">Order ID</th>
                                                            <th class="w-300px">Details</th>
                                                            <th class="w-100px">Amount</th>
                                                            <th class="w-100px text-end pe-7">Invoice</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Nov 01, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td>Darknight transparency 36 Icons Pack</td>
                                                            <td class="text-success">$38.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 24, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 08, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                                            <td class="text-success">$76.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sep 15, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                            <td class="text-success">$5.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>May 30, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Apr 22, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td>Parcel Shipping / Delivery Service App</td>
                                                            <td class="text-success">$204.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Feb 09, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td>Visual Design Illustration</td>
                                                            <td class="text-success">$31.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td>Abstract Vusial Pack</td>
                                                            <td class="text-success">$52.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 04, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td>Darknight transparency 36 Icons Pack</td>
                                                            <td class="text-success">$38.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 24, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 08, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                                            <td class="text-success">$76.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sep 15, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                            <td class="text-success">$5.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>May 30, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Apr 22, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td>Parcel Shipping / Delivery Service App</td>
                                                            <td class="text-success">$204.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Feb 09, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td>Visual Design Illustration</td>
                                                            <td class="text-success">$31.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td>Abstract Vusial Pack</td>
                                                            <td class="text-success">$52.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 04, 2021</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div id="kt_customer_view_statement_2" class="py-0 tab-pane fade" role="tabpanel">
                                                <!--begin::Table-->
                                                <table id="kt_customer_view_statement_table_2" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4">
                                                    <thead class="border-bottom border-gray-200">
                                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="w-125px">Date</th>
                                                            <th class="w-100px">Order ID</th>
                                                            <th class="w-300px">Details</th>
                                                            <th class="w-100px">Amount</th>
                                                            <th class="w-100px text-end pe-7">Invoice</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>May 30, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Apr 22, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td>Parcel Shipping / Delivery Service App</td>
                                                            <td class="text-success">$204.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Feb 09, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td>Visual Design Illustration</td>
                                                            <td class="text-success">$31.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td>Abstract Vusial Pack</td>
                                                            <td class="text-success">$52.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 04, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td>Darknight transparency 36 Icons Pack</td>
                                                            <td class="text-success">$38.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 24, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 08, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                                            <td class="text-success">$76.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sep 15, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                            <td class="text-success">$5.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>May 30, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Apr 22, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td>Parcel Shipping / Delivery Service App</td>
                                                            <td class="text-success">$204.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Feb 09, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td>Visual Design Illustration</td>
                                                            <td class="text-success">$31.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td>Abstract Vusial Pack</td>
                                                            <td class="text-success">$52.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 04, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td>Darknight transparency 36 Icons Pack</td>
                                                            <td class="text-success">$38.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 24, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 08, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                                            <td class="text-success">$76.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sep 15, 2020</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                            <td class="text-success">$5.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div id="kt_customer_view_statement_3" class="py-0 tab-pane fade" role="tabpanel">
                                                <!--begin::Table-->
                                                <table id="kt_customer_view_statement_table_3" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4">
                                                    <thead class="border-bottom border-gray-200">
                                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="w-125px">Date</th>
                                                            <th class="w-100px">Order ID</th>
                                                            <th class="w-300px">Details</th>
                                                            <th class="w-100px">Amount</th>
                                                            <th class="w-100px text-end pe-7">Invoice</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Feb 09, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td>Visual Design Illustration</td>
                                                            <td class="text-success">$31.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td>Abstract Vusial Pack</td>
                                                            <td class="text-success">$52.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 04, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sep 15, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                            <td class="text-success">$5.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td>Darknight transparency 36 Icons Pack</td>
                                                            <td class="text-success">$38.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 24, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 08, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                                            <td class="text-success">$76.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>May 30, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Apr 22, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td>Parcel Shipping / Delivery Service App</td>
                                                            <td class="text-success">$204.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Feb 09, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td>Visual Design Illustration</td>
                                                            <td class="text-success">$31.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td>Abstract Vusial Pack</td>
                                                            <td class="text-success">$52.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 04, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sep 15, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                            <td class="text-success">$5.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td>Darknight transparency 36 Icons Pack</td>
                                                            <td class="text-success">$38.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 24, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 08, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                                            <td class="text-success">$76.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>May 30, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Apr 22, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td>Parcel Shipping / Delivery Service App</td>
                                                            <td class="text-success">$204.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div id="kt_customer_view_statement_4" class="py-0 tab-pane fade" role="tabpanel">
                                                <!--begin::Table-->
                                                <table id="kt_customer_view_statement_table_4" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4">
                                                    <thead class="border-bottom border-gray-200">
                                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="w-125px">Date</th>
                                                            <th class="w-100px">Order ID</th>
                                                            <th class="w-300px">Details</th>
                                                            <th class="w-100px">Amount</th>
                                                            <th class="w-100px text-end pe-7">Invoice</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Nov 01, 2018</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td>Darknight transparency 36 Icons Pack</td>
                                                            <td class="text-success">$38.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 24, 2018</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2018</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td>Darknight transparency 36 Icons Pack</td>
                                                            <td class="text-success">$38.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 24, 2018</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Feb 09, 2018</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td>Visual Design Illustration</td>
                                                            <td class="text-success">$31.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2018</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td>Abstract Vusial Pack</td>
                                                            <td class="text-success">$52.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 04, 2018</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 08, 2018</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                                            <td class="text-success">$76.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 08, 2018</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                                            <td class="text-success">$76.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Feb 09, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                            </td>
                                                            <td>Visual Design Illustration</td>
                                                            <td class="text-success">$31.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                            </td>
                                                            <td>Abstract Vusial Pack</td>
                                                            <td class="text-success">$52.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 04, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-0.80</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sep 15, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                            <td class="text-success">$5.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov 01, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                            </td>
                                                            <td>Darknight transparency 36 Icons Pack</td>
                                                            <td class="text-success">$38.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 24, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-2.60</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct 08, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                            </td>
                                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                                            <td class="text-success">$76.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>May 30, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                            </td>
                                                            <td>Seller Fee</td>
                                                            <td class="text-danger">$-1.30</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Apr 22, 2019</td>
                                                            <td>
                                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                            </td>
                                                            <td>Parcel Shipping / Delivery Service App</td>
                                                            <td class="text-success">$204.00</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Statements-->
                            </div>
                            <!--end:::Tab pane-->
                        </div>
                        <!--end:::Tab content-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
                <!--begin::Modals-->
                <!--begin::Modal - Add Payment-->
                <div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Add a Payment Record</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_add_payment_form" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mb-2">
                                            <span class="required">Invoice Number</span>
                                            <span class="ms-2" data-bs-toggle="tooltip" title="The invoice number must be unique.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" name="invoice" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Status</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid fw-bold" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
                                            <option></option>
                                            <option value="0">Approved</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Rejected</option>
                                            <option value="3">In progress</option>
                                            <option value="4">Completed</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Invoice Amount</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" name="amount" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mb-2">
                                            <span class="required">Additional Information</span>
                                            <span class="ms-2" data-bs-toggle="tooltip" title="Information such as description of invoice or product purchased.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid rounded-3" name="additional_info"></textarea>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" id="kt_modal_add_payment_cancel" class="btn btn-light me-3">Discard</button>
                                        <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Card-->
                <!--begin::Modal - Adjust Balance-->
                <div class="modal fade" id="kt_modal_adjust_balance" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Adjust Balance</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div id="kt_modal_adjust_balance_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Balance preview-->
                                <div class="d-flex text-center mb-9">
                                    <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                        <div class="fs-6 fw-semibold mb-2 text-muted">Current Balance</div>
                                        <div class="fs-2 fw-bold" kt-modal-adjust-balance="current_balance">US$ 32,487.57</div>
                                    </div>
                                    <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                        <div class="fs-6 fw-semibold mb-2 text-muted">New Balance
                                        <span class="ms-2" data-bs-toggle="tooltip" title="Enter an amount to preview the new balance.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span></div>
                                        <div class="fs-2 fw-bold" kt-modal-adjust-balance="new_balance">--</div>
                                    </div>
                                </div>
                                <!--end::Balance preview-->
                                <!--begin::Form-->
                                <form id="kt_modal_adjust_balance_form" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Adjustment type</label>
                                        <!--end::Label-->
                                        <!--begin::Dropdown-->
                                        <select class="form-select form-select-solid fw-bold" name="adjustment" aria-label="Select an option" data-control="select2" data-dropdown-parent="#kt_modal_adjust_balance" data-placeholder="Select an option" data-hide-search="true">
                                            <option></option>
                                            <option value="1">Credit</option>
                                            <option value="2">Debit</option>
                                        </select>
                                        <!--end::Dropdown-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Amount</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input id="kt_modal_inputmask" type="text" class="form-control form-control-solid" name="amount" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mb-2">Add adjustment note</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid rounded-3 mb-5"></textarea>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Disclaimer-->
                                    <div class="fs-7 text-muted mb-15">Please be aware that all manual balance changes will be audited by the financial team every fortnight. Please maintain your invoices and receipts until then. Thank you.</div>
                                    <!--end::Disclaimer-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" id="kt_modal_adjust_balance_cancel" class="btn btn-light me-3">Discard</button>
                                        <button type="submit" id="kt_modal_adjust_balance_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Card-->
                <!--begin::Modal - New Address-->
                <div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="#" id="kt_modal_update_customer_form">
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_update_customer_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Update Customer</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Scroll-->
                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px">
                                        <!--begin::Notice-->
                                        <!--begin::Notice-->
                                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-information fs-2tx text-primary me-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-semibold">
                                                    <div class="fs-6 text-gray-700">Updating customer details will receive a privacy audit. For more info, please read our
                                                    <a href="#">Privacy Policy</a></div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--end::Notice-->
                                        <!--begin::User toggle-->
                                        <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_user_info">User Information
                                        <span class="ms-2 rotate-180">
                                            <i class="ki-duotone ki-down fs-3"></i>
                                        </span></div>
                                        <!--end::User toggle-->
                                        <!--begin::User form-->
                                        <div id="kt_modal_update_customer_user_info" class="collapse show">
                                            <!--begin::Input group-->
                                            <div class="mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span>Update Avatar</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Image input wrapper-->
                                                <div class="mt-1">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Edit-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="ki-duotone ki-pencil fs-7">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Edit-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                            <i class="ki-duotone ki-cross fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                            <i class="ki-duotone ki-cross fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                </div>
                                                <!--end::Image input wrapper-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Sean Bean" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span>Email</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Email address must be active">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="sean@dellito.com" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-15">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Description</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="description" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::User form-->
                                        <!--begin::Billing toggle-->
                                        <div class="fw-bold fs-3 rotate collapsible collapsed mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_billing_info">Shipping Information
                                        <span class="ms-2 rotate-180">
                                            <i class="ki-duotone ki-down fs-3"></i>
                                        </span></div>
                                        <!--end::Billing toggle-->
                                        <!--begin::Billing form-->
                                        <div id="kt_modal_update_customer_billing_info" class="collapse">
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Address Line 1</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Address Line 2</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="" name="address2" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Town</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-7">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">State / Province</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid" placeholder="" name="state" value="Victoria" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">Post Code</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span>Country</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_update_customer" class="form-select form-select-solid fw-bold">
                                                    <option value="">Select a Country...</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Aland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia, Plurinational State of</option>
                                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Côte d'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="KR">South Korea</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="VI">Virgin Islands</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold">Use as a billing adderess?</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_update_customer_billing" checked="checked" />
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <span class="form-check-label fw-semibold text-muted" for="kt_modal_update_customer_billing">Yes</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--begin::Wrapper-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Billing form-->
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3">Discard</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Address-->
                <!--begin::Modal - New Card-->
                <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Add New Card</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_new_card_form" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">Name On Card</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                                <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                            </div>
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                            <!--end::Label-->
                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                        <option></option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                        <option value="2033">2033</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">CVV</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                <!--end::Input-->
                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <i class="ki-duotone ki-credit-cart fs-2hx">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="me-5">
                                            <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            <span class="form-check-label fw-semibold text-muted">Save Card</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Card-->
                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <
