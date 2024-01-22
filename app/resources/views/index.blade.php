@extends('layouts.master')

@section('master-title', '')
@push('styles')

@endpush

@section('master-content')

<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

<!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">



<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
<!--begin::Title-->
<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
Multipurpose
</h1>
<!--end::Title-->


<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        <a href="/metronic8/demo1/../demo1/index.html" class="text-muted text-hover-primary">
                    Home                            </a>
                                </li>
                    <!--end::Item-->
                        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-500 w-5px h-2px"></span>
        </li>
        <!--end::Item-->

                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        Dashboards                                            </li>
                    <!--end::Item-->

        </ul>
<!--end::Breadcrumb-->
</div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">


<!--begin::Secondary button-->
<a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
Rollover        </a>
<!--end::Secondary button-->

<!--begin::Primary button-->
<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
Add Target        </a>
<!--end::Primary button-->
</div>
<!--end::Actions-->
</div>
<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">


<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container  container-fluid ">
<!--begin::Row-->
<div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
<!--begin::Col-->
<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
<!--begin::Card widget 20-->
<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('/metronic8/demo1/assets/media/patterns/vector-1.png')">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<div class="card-title d-flex flex-column">
<!--begin::Amount-->
<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
<!--end::Amount-->

<!--begin::Subtitle-->
<span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
<!--end::Subtitle-->
</div>
<!--end::Title-->
</div>
<!--end::Header-->

<!--begin::Card body-->
<div class="card-body d-flex align-items-end pt-0">
<!--begin::Progress-->
<div class="d-flex align-items-center flex-column mt-3 w-100">
<div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
    <span>43 Pending</span>
    <span>72%</span>
</div>

<div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
    <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<!--end::Progress-->
</div>
<!--end::Card body-->
</div>
<!--end::Card widget 20-->

<!--begin::Card widget 7-->
<div class="card card-flush h-md-50 mb-5 mb-xl-10">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<div class="card-title d-flex flex-column">
<!--begin::Amount-->
<span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">357</span>
<!--end::Amount-->

<!--begin::Subtitle-->
<span class="text-gray-500 pt-1 fw-semibold fs-6">Professionals</span>
<!--end::Subtitle-->
</div>
<!--end::Title-->
</div>
<!--end::Header-->

<!--begin::Card body-->
<div class="card-body d-flex flex-column justify-content-end pe-0">
<!--begin::Title-->
<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
<!--end::Title-->

<!--begin::Users group-->
<div class="symbol-group symbol-hover flex-nowrap">
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                        </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-11.jpg">
                        </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                        </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-2.jpg">
                        </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                        </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-12.jpg">
                        </div>
            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
    <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
</a>
</div>
<!--end::Users group-->
</div>
<!--end::Card body-->
</div>
<!--end::Card widget 7-->    </div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

<!--begin::Card widget 17-->
<div class="card card-flush h-md-50 mb-5 mb-xl-10">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<div class="card-title d-flex flex-column">
<!--begin::Info-->
<div class="d-flex align-items-center">
    <!--begin::Currency-->
    <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
    <!--end::Currency-->

    <!--begin::Amount-->
    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
    <!--end::Amount-->

    <!--begin::Badge-->
    <span class="badge badge-light-success fs-base">
        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
        2.2%
    </span>
    <!--end::Badge-->
</div>
<!--end::Info-->

<!--begin::Subtitle-->
<span class="text-gray-500 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
<!--end::Subtitle-->
</div>
<!--end::Title-->
</div>
<!--end::Header-->

<!--begin::Card body-->
<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
<!--begin::Chart-->
<div class="d-flex flex-center me-5 pt-2">
<div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11">
<span></span><canvas height="70" width="70"></canvas></div>
</div>
<!--end::Chart-->

<!--begin::Labels-->
<div class="d-flex flex-column content-justify-center flex-row-fluid">
<!--begin::Label-->
<div class="d-flex fw-semibold align-items-center">
    <!--begin::Bullet-->
    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
    <!--end::Bullet-->

    <!--begin::Label-->
    <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
    <!--end::Label-->

    <!--begin::Stats-->
    <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
    <!--end::Stats-->
</div>
<!--end::Label-->

<!--begin::Label-->
<div class="d-flex fw-semibold align-items-center my-3">
    <!--begin::Bullet-->
    <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
    <!--end::Bullet-->

    <!--begin::Label-->
    <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
    <!--end::Label-->

    <!--begin::Stats-->
    <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
    <!--end::Stats-->
</div>
<!--end::Label-->

<!--begin::Label-->
<div class="d-flex fw-semibold align-items-center">
    <!--begin::Bullet-->
    <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
    <!--end::Bullet-->

    <!--begin::Label-->
    <div class="text-gray-500 flex-grow-1 me-4">Others</div>
    <!--end::Label-->

    <!--begin::Stats-->
    <div class=" fw-bolder text-gray-700 text-xxl-end">$45,257</div>
    <!--end::Stats-->
</div>
<!--end::Label-->
</div>
<!--end::Labels-->
</div>
<!--end::Card body-->
</div>
<!--end::Card widget 17-->

<!--begin::List widget 26-->
<div class="card card-flush h-lg-50">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<h3 class="card-title text-gray-800 fw-bold">External Links</h3>
<!--end::Title-->

<!--begin::Toolbar-->
<div class="card-toolbar">
<!--begin::Menu-->
<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
</button>


<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
<!--begin::Menu item-->
<div class="menu-item px-3">
<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mb-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Ticket
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Customer
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
<!--begin::Menu item-->
<a href="#" class="menu-link px-3">
<span class="menu-title">New Group</span>
<span class="menu-arrow"></span>
</a>
<!--end::Menu item-->

<!--begin::Menu sub-->
<div class="menu-sub menu-sub-dropdown w-175px py-4">
<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Admin Group
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Staff Group
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Member Group
    </a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu sub-->
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Contact
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mt-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<div class="menu-content px-3 py-3">
<a class="btn btn-primary  btn-sm px-4" href="#">
    Generate Reports
</a>
</div>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 2-->

<!--end::Menu-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body pt-5">
        <!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Section-->
    <a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
    <!--end::Section-->

    <!--begin::Action-->
    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
        <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span class="path2"></span></i>                </button>
    <!--end::Action-->
</div>
<!--end::Item-->

                <!--begin::Separator-->
    <div class="separator separator-dashed my-3"></div>
    <!--end::Separator-->

        <!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Section-->
    <a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
    <!--end::Section-->

    <!--begin::Action-->
    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
        <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span class="path2"></span></i>                </button>
    <!--end::Action-->
</div>
<!--end::Item-->

                <!--begin::Separator-->
    <div class="separator separator-dashed my-3"></div>
    <!--end::Separator-->

        <!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Section-->
    <a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
    <!--end::Section-->

    <!--begin::Action-->
    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
        <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span class="path2"></span></i>                </button>
    <!--end::Action-->
</div>
<!--end::Item-->



</div>
<!--end::Body-->
</div>
<!--end::LIst widget 26-->



</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-xxl-6">

<!--begin::Engage widget 10-->
<div class="card card-flush h-md-100">
<!--begin::Body-->
<div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('/metronic8/demo1/assets/media/stock/900x600/42.png')">
<!--begin::Wrapper-->
<div class="mb-10">
<!--begin::Title-->
<div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
    <span class="me-2">
        Try our all new Enviroment with
        <br>
        <span class="position-relative d-inline-block text-danger">
            <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-danger opacity-75-hover">Pro Plan</a>

            <!--begin::Separator-->
            <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
            <!--end::Separator-->
        </span>
    </span>
    for Free
</div>
<!--end::Title-->

<!--begin::Action-->
<div class="text-center">
    <a href="#" class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
        Upgrade Now
    </a>
</div>
<!--begin::Action-->
</div>
<!--begin::Wrapper-->

<!--begin::Illustration-->
<img class="mx-auto h-150px h-lg-200px  theme-light-show" src="/metronic8/demo1/assets/media/illustrations/misc/upgrade.svg" alt="">
<img class="mx-auto h-150px h-lg-200px  theme-dark-show" src="/metronic8/demo1/assets/media/illustrations/misc/upgrade-dark.svg" alt="">
<!--end::Illustration-->
</div>
<!--end::Body-->
</div>
<!--end::Engage widget 10-->     </div>
<!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">
<!--begin::Col-->
<div class="col-xxl-6 mb-5 mb-xl-10">
<!--begin::Chart widget 8-->
<div class="card card-flush h-xl-100">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bold text-gray-900">Performance Overview</span>
<span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
</h3>
<!--end::Title-->

<!--begin::Toolbar-->
<div class="card-toolbar">
<ul class="nav" id="kt_chart_widget_8_tabs" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab" aria-selected="false" tabindex="-1" role="tab">Month</a>
    </li>

    <li class="nav-item" role="presentation">
        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab" aria-selected="true" role="tab">Week</a>
    </li>
</ul>
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body pt-6">
<!--begin::Tab content-->
<div class="tab-content">
<!--begin::Tab pane-->
<div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel" aria-labelledby="kt_chart_widget_8_week_toggle">
    <!--begin::Statistics-->
    <div class="mb-5">
        <!--begin::Statistics-->
        <div class="d-flex align-items-center mb-2">
            <span class="fs-1 fw-semibold text-gray-500 me-1 mt-n1">$</span>

            <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>

            <span class="badge badge-light-success fs-base">
                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                4,8%
            </span>
        </div>
        <!--end::Statistics-->

        <!--begin::Description-->
        <span class="fs-6 fw-semibold text-gray-500">Avarage cost per interaction</span>
        <!--end::Description-->
    </div>
    <!--end::Statistics-->

    <!--begin::Chart-->
    <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
    <!--end::Chart-->

    <!--begin::Items-->
    <div class="d-flex flex-wrap pt-5">
        <!--begin::Item-->
        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-3 mb-sm-6">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-<gray-600 fs-6">Google Ads</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->
        </div>
        <!--ed::Item-->

        <!--begin::Item-->
        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-3 mb-sm-6">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">Courses</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->
        </div>
        <!--ed::Item-->

        <!--begin::Item-->
        <div class="d-flex flex-column pt-sm-3 pt-6">
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-3 mb-sm-6">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">Radio</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->
        </div>
        <!--ed::Item-->
    </div>
    <!--ed::Items-->
</div>
<!--end::Tab pane-->

<!--begin::Tab pane-->
<div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel" aria-labelledby="kt_chart_widget_8_month_toggle">
    <!--begin::Statistics-->
    <div class="mb-5">
        <!--begin::Statistics-->
        <div class="d-flex align-items-center mb-2">
            <span class="fs-1 fw-semibold text-gray-500 me-1 mt-n1">$</span>

            <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>

            <span class="badge badge-light-success fs-base">
                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                2.2%
            </span>

        </div>
        <!--end::Statistics-->

        <!--begin::Description-->
        <span class="fs-6 fw-semibold text-gray-500">Avarage cost per interaction</span>
        <!--end::Description-->
    </div>
    <!--end::Statistics-->

    <!--begin::Chart-->
    <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px; min-height: 290px;"><div id="apexcharts00t724be" class="apexcharts-canvas apexcharts00t724be apexcharts-theme-light" style="width: 729px; height: 275px;"><svg id="SvgjsSvg2456" width="729" height="275" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="729" height="275"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 137.5px;"></div></foreignObject><g id="SvgjsG2636" class="apexcharts-yaxis" rel="0" transform="translate(20.484375, 0)"><g id="SvgjsG2637" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2639" font-family="inherit" x="20" y="31.7" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2640">700</tspan><title>700</title></text><text id="SvgjsText2642" font-family="inherit" x="20" y="61.81428571428572" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2643">600</tspan><title>600</title></text><text id="SvgjsText2645" font-family="inherit" x="20" y="91.92857142857143" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2646">500</tspan><title>500</title></text><text id="SvgjsText2648" font-family="inherit" x="20" y="122.04285714285714" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2649">400</tspan><title>400</title></text><text id="SvgjsText2651" font-family="inherit" x="20" y="152.15714285714284" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2652">300</tspan><title>300</title></text><text id="SvgjsText2654" font-family="inherit" x="20" y="182.27142857142857" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2655">200</tspan><title>200</title></text><text id="SvgjsText2657" font-family="inherit" x="20" y="212.3857142857143" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2658">100</tspan><title>100</title></text><text id="SvgjsText2660" font-family="inherit" x="20" y="242.50000000000003" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2661">0</tspan><title>0</title></text></g></g><g id="SvgjsG2458" class="apexcharts-inner apexcharts-graphical" transform="translate(50.484375, 30)"><defs id="SvgjsDefs2457"><clipPath id="gridRectMask00t724be"><rect id="SvgjsRect2463" width="662.515625" height="214.8" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask00t724be"></clipPath><clipPath id="nonForecastMask00t724be"></clipPath><clipPath id="gridRectMarkerMask00t724be"><rect id="SvgjsRect2464" width="662.515625" height="214.8" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2462" width="0" height="210.8" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="1" stroke="#b6b6b6" stroke-dasharray="3" fill="#b1b9c4" class="apexcharts-xcrosshairs" y2="210.8" filter="none" fill-opacity="0.9"></rect><line id="SvgjsLine2590" x1="0" y1="211.8" x2="0" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2591" x1="94.07366071428571" y1="211.8" x2="94.07366071428571" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2592" x1="188.14732142857142" y1="211.8" x2="188.14732142857142" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2593" x1="282.2209821428571" y1="211.8" x2="282.2209821428571" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2594" x1="376.29464285714283" y1="211.8" x2="376.29464285714283" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2595" x1="470.36830357142856" y1="211.8" x2="470.36830357142856" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2596" x1="564.4419642857142" y1="211.8" x2="564.4419642857142" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2597" x1="658.5156249999999" y1="211.8" x2="658.5156249999999" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG2586" class="apexcharts-grid"><g id="SvgjsG2587" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2599" x1="0" y1="30.114285714285717" x2="658.515625" y2="30.114285714285717" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2600" x1="0" y1="60.228571428571435" x2="658.515625" y2="60.228571428571435" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2601" x1="0" y1="90.34285714285716" x2="658.515625" y2="90.34285714285716" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2602" x1="0" y1="120.45714285714287" x2="658.515625" y2="120.45714285714287" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2603" x1="0" y1="150.57142857142858" x2="658.515625" y2="150.57142857142858" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2604" x1="0" y1="180.6857142857143" x2="658.515625" y2="180.6857142857143" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2605" x1="0" y1="210.80000000000004" x2="658.515625" y2="210.80000000000004" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2588" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2607" x1="0" y1="210.8" x2="658.515625" y2="210.8" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2606" x1="0" y1="1" x2="0" y2="210.8" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2589" class="apexcharts-grid-borders"><line id="SvgjsLine2598" x1="0" y1="0" x2="658.515625" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2465" class="apexcharts-bubble-series apexcharts-plot-series"><g id="SvgjsG2466" class="apexcharts-series" zIndex="0" seriesName="SocialxCampaigns" data:longestSeries="false" rel="1" data:realIndex="0"><g id="SvgjsG2467" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG2469" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2470" r="0" cx="117.59207589285715" cy="120.45714285714286" class="apexcharts-marker wzd5njw46" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="0"></circle><circle id="SvgjsCircle2471" r="0" cx="117.59207589285715" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="0"></circle></g><g id="SvgjsG2472" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2473" r="35.13333333333333" cx="117.59207589285715" cy="120.45714285714286" x="113.59207589285715" y="116.45714285714286" fill="rgba(27,132,255,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="35.13333333333333" class="apexcharts-marker"></circle></g><g id="SvgjsG2474" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2475" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="0"></circle></g><g id="SvgjsG2476" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2477" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2478" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="0"></circle></g><g id="SvgjsG2479" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2480" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2481" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="0"></circle></g><g id="SvgjsG2482" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2483" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2484" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="0"></circle></g><g id="SvgjsG2485" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle2665" r="0" cx="0" cy="0" class="apexcharts-marker wlor1pd5i" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2486" class="apexcharts-series" zIndex="1" seriesName="EmailxNewsletter" data:longestSeries="false" rel="2" data:realIndex="1"><g id="SvgjsG2487" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG2489" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2490" r="0" cx="235.1841517857143" cy="105.4" class="apexcharts-marker wfead48q7" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="0"></circle><circle id="SvgjsCircle2491" r="0" cx="117.59207589285715" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="0"></circle></g><g id="SvgjsG2492" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2493" r="30.74166666666667" cx="235.1841517857143" cy="105.4" x="231.1841517857143" y="101.4" fill="rgba(23,198,83,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="30.74166666666667" class="apexcharts-marker"></circle></g><g id="SvgjsG2494" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2495" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="0"></circle></g><g id="SvgjsG2496" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2497" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2498" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="0"></circle></g><g id="SvgjsG2499" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2500" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2501" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="0"></circle></g><g id="SvgjsG2502" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2503" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2504" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="0"></circle></g><g id="SvgjsG2505" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle2666" r="0" cx="0" cy="0" class="apexcharts-marker wn3jiupc1" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2506" class="apexcharts-series" zIndex="2" seriesName="TVxCampaign" data:longestSeries="false" rel="3" data:realIndex="2"><g id="SvgjsG2507" class="apexcharts-series-markers-wrap" data:realIndex="2"><g id="SvgjsG2509" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2510" r="0" cx="329.2578125" cy="75.28571428571428" class="apexcharts-marker wh39l6wzb" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="0"></circle><circle id="SvgjsCircle2511" r="0" cx="117.59207589285715" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="2" default-marker-size="0"></circle></g><g id="SvgjsG2512" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2513" r="26.35" cx="329.2578125" cy="75.28571428571428" x="325.2578125" y="71.28571428571428" fill="rgba(246,192,0,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="26.35" class="apexcharts-marker"></circle></g><g id="SvgjsG2514" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2515" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="2" default-marker-size="0"></circle></g><g id="SvgjsG2516" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2517" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2518" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="2" default-marker-size="0"></circle></g><g id="SvgjsG2519" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2520" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2521" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="2" default-marker-size="0"></circle></g><g id="SvgjsG2522" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2523" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2524" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="2" default-marker-size="0"></circle></g><g id="SvgjsG2525" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle2667" r="0" cx="0" cy="0" class="apexcharts-marker w72lvn2xuk" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2526" class="apexcharts-series" zIndex="3" seriesName="GooglexAds" data:longestSeries="false" rel="4" data:realIndex="3"><g id="SvgjsG2527" class="apexcharts-series-markers-wrap" data:realIndex="3"><g id="SvgjsG2529" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2530" r="0" cx="423.3314732142857" cy="135.51428571428573" class="apexcharts-marker wxu7xboeb" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="3" default-marker-size="0"></circle><circle id="SvgjsCircle2531" r="0" cx="117.59207589285715" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="3" default-marker-size="0"></circle></g><g id="SvgjsG2532" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2533" r="21.958333333333336" cx="423.3314732142857" cy="135.51428571428573" x="419.3314732142857" y="131.51428571428573" fill="rgba(248,40,90,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="3" default-marker-size="21.958333333333336" class="apexcharts-marker"></circle></g><g id="SvgjsG2534" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2535" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="3" default-marker-size="0"></circle></g><g id="SvgjsG2536" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2537" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2538" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="3" default-marker-size="0"></circle></g><g id="SvgjsG2539" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2540" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2541" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="3" default-marker-size="0"></circle></g><g id="SvgjsG2542" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2543" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2544" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="3" default-marker-size="0"></circle></g><g id="SvgjsG2545" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle2668" r="0" cx="0" cy="0" class="apexcharts-marker wkkujs2a3" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2546" class="apexcharts-series" zIndex="4" seriesName="Courses" data:longestSeries="false" rel="5" data:realIndex="4"><g id="SvgjsG2547" class="apexcharts-series-markers-wrap" data:realIndex="4"><g id="SvgjsG2549" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2550" r="0" cx="470.3683035714286" cy="60.22857142857143" class="apexcharts-marker w5s1wvqnt" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="4" default-marker-size="0"></circle><circle id="SvgjsCircle2551" r="0" cx="117.59207589285715" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="4" default-marker-size="0"></circle></g><g id="SvgjsG2552" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2553" r="26.35" cx="470.3683035714286" cy="60.22857142857143" x="466.3683035714286" y="56.22857142857143" fill="rgba(114,57,234,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="4" default-marker-size="26.35" class="apexcharts-marker"></circle></g><g id="SvgjsG2554" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2555" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="4" default-marker-size="0"></circle></g><g id="SvgjsG2556" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2557" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2558" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="4" default-marker-size="0"></circle></g><g id="SvgjsG2559" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2560" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2561" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="4" default-marker-size="0"></circle></g><g id="SvgjsG2562" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2563" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2564" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="4" default-marker-size="0"></circle></g><g id="SvgjsG2565" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle2669" r="0" cx="0" cy="0" class="apexcharts-marker wwyct3yht" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2566" class="apexcharts-series" zIndex="5" seriesName="Radio" data:longestSeries="false" rel="6" data:realIndex="5"><g id="SvgjsG2567" class="apexcharts-series-markers-wrap" data:realIndex="5"><g id="SvgjsG2569" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2570" r="0" cx="564.4419642857143" cy="135.51428571428573" class="apexcharts-marker wgsf6bhnd" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="5" default-marker-size="0"></circle><circle id="SvgjsCircle2571" r="0" cx="117.59207589285715" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="5" default-marker-size="0"></circle></g><g id="SvgjsG2572" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2573" r="24.593333333333334" cx="564.4419642857143" cy="135.51428571428573" x="560.4419642857143" y="131.51428571428573" fill="rgba(67,206,215,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="5" default-marker-size="24.593333333333334" class="apexcharts-marker"></circle></g><g id="SvgjsG2574" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2575" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="5" default-marker-size="0"></circle></g><g id="SvgjsG2576" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2577" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2578" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="5" default-marker-size="0"></circle></g><g id="SvgjsG2579" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2580" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2581" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="5" default-marker-size="0"></circle></g><g id="SvgjsG2582" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g id="SvgjsG2583" class="" clip-path="url(#gridRectMarkerMask00t724be)"><circle id="SvgjsCircle2584" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="5" default-marker-size="0"></circle></g><g id="SvgjsG2585" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask00t724be)"></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle2670" r="0" cx="0" cy="0" class="apexcharts-marker w5ogu9uy" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2468" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2488" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG2508" class="apexcharts-datalabels" data:realIndex="2"></g><g id="SvgjsG2528" class="apexcharts-datalabels" data:realIndex="3"></g><g id="SvgjsG2548" class="apexcharts-datalabels" data:realIndex="4"></g><g id="SvgjsG2568" class="apexcharts-datalabels" data:realIndex="5"></g></g><line id="SvgjsLine2608" x1="0" y1="0" x2="658.515625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2609" x1="0" y1="0" x2="658.515625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2610" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2611" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2613" font-family="inherit" x="0" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2614">0</tspan><title>0</title></text><text id="SvgjsText2616" font-family="inherit" x="94.0736607142857" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2617">100</tspan><title>100</title></text><text id="SvgjsText2619" font-family="inherit" x="188.14732142857142" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2620">200</tspan><title>200</title></text><text id="SvgjsText2622" font-family="inherit" x="282.22098214285717" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2623">300</tspan><title>300</title></text><text id="SvgjsText2625" font-family="inherit" x="376.2946428571429" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2626">400</tspan><title>400</title></text><text id="SvgjsText2628" font-family="inherit" x="470.3683035714286" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2629">500</tspan><title>500</title></text><text id="SvgjsText2631" font-family="inherit" x="564.4419642857142" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2632">600</tspan><title>600</title></text><text id="SvgjsText2634" font-family="inherit" x="658.5156249999999" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2635">700</tspan><title>700</title></text></g></g><g id="SvgjsG2662" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2663" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2664" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2671" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2672" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 132, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(23, 198, 83);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(246, 192, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(248, 40, 90);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 5;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 6;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(67, 206, 215);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
    <!--end::Chart-->

    <!--begin::Items-->
    <div class="d-flex flex-wrap pt-5">
        <!--begin::Item-->
        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-3 mb-sm-6">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">Google Ads</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->
        </div>
        <!--ed::Item-->

        <!--begin::Item-->
        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-3 mb-sm-6">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">Courses</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->
        </div>
        <!--ed::Item-->

        <!--begin::Item-->
        <div class="d-flex flex-column pt-sm-3 pt-6">
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-3 mb-sm-6">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center">
                <!--begin::Bullet-->
                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                <!--end::Bullet-->

                <!--begin::Label-->
                <span class="fw-bold text-gray-600 fs-6">Radio</span>
                <!--end::Label-->
            </div>
            <!--ed::Item-->
        </div>
        <!--ed::Item-->
    </div>
    <!--ed::Items-->
</div>
<!--end::Tab pane-->
</div>
<!--end::Tab content-->
</div>
<!--end::Body-->
</div>
<!--end::Chart widget 8-->
</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-xl-6 mb-5 mb-xl-10">

<!--begin::Tables widget 16-->
<div class="card card-flush h-xl-100">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bold text-gray-800">Authors Achievements</span>

<span class="text-gray-500 mt-1 fw-semibold fs-6">Avg. 69.34% Conv. Rate</span>
</h3>
<!--end::Title-->

<!--begin::Toolbar-->
<div class="card-toolbar">
<!--begin::Menu-->
<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
</button>


<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
<!--begin::Menu item-->
<div class="menu-item px-3">
<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mb-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Ticket
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Customer
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
<!--begin::Menu item-->
<a href="#" class="menu-link px-3">
<span class="menu-title">New Group</span>
<span class="menu-arrow"></span>
</a>
<!--end::Menu item-->

<!--begin::Menu sub-->
<div class="menu-sub menu-sub-dropdown w-175px py-4">
<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Admin Group
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Staff Group
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Member Group
    </a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu sub-->
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Contact
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mt-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<div class="menu-content px-3 py-3">
<a class="btn btn-primary  btn-sm px-4" href="#">
    Generate Reports
</a>
</div>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 2-->

<!--end::Menu-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body pt-6">
<!--begin::Nav-->
<ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                <!--begin::Item-->
    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
            active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
            <!--begin::Icon-->
            <div class="nav-icon mb-3">
                <i class="ki-duotone ki-car fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
            </div>
            <!--end::Icon-->

            <!--begin::Title-->
            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                SaaS                        </span>
            <!--end::Title-->

            <!--begin::Bullet-->
            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            <!--end::Bullet-->
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->
                <!--begin::Item-->
    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
            " id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2" aria-selected="false" tabindex="-1" role="tab">
            <!--begin::Icon-->
            <div class="nav-icon mb-3">
                <i class="ki-duotone ki-bitcoin fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Icon-->

            <!--begin::Title-->
            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                Crypto                        </span>
            <!--end::Title-->

            <!--begin::Bullet-->
            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            <!--end::Bullet-->
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->
                <!--begin::Item-->
    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
            " id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3" aria-selected="false" tabindex="-1" role="tab">
            <!--begin::Icon-->
            <div class="nav-icon mb-3">
                <i class="ki-duotone ki-like fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Icon-->

            <!--begin::Title-->
            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                Social                        </span>
            <!--end::Title-->

            <!--begin::Bullet-->
            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            <!--end::Bullet-->
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->
                <!--begin::Item-->
    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
            " id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4" aria-selected="false" tabindex="-1" role="tab">
            <!--begin::Icon-->
            <div class="nav-icon mb-3">
                <i class="ki-duotone ki-tablet fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            </div>
            <!--end::Icon-->

            <!--begin::Title-->
            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                Mobile                        </span>
            <!--end::Title-->

            <!--begin::Bullet-->
            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            <!--end::Bullet-->
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->
                <!--begin::Item-->
    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
            " id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5" aria-selected="false" tabindex="-1" role="tab">
            <!--begin::Icon-->
            <div class="nav-icon mb-3">
                <i class="ki-duotone ki-send fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Icon-->

            <!--begin::Title-->
            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                Others                        </span>
            <!--end::Title-->

            <!--begin::Bullet-->
            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
            <!--end::Bullet-->
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->

</ul>
<!--end::Nav-->

<!--begin::Tab Content-->
<div class="tab-content">

    <!--begin::Tap pane-->
    <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_1">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Haiti</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">78.34%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsfq1ywd6k" class="apexcharts-canvas apexchartsfq1ywd6k apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2070" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="92.25" height="50"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div></foreignObject><g id="SvgjsG2113" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2072" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs2071"><clipPath id="gridRectMaskfq1ywd6k"><rect id="SvgjsRect2075" width="98.25" height="60" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskfq1ywd6k"></clipPath><clipPath id="nonForecastMaskfq1ywd6k"></clipPath><clipPath id="gridRectMarkerMaskfq1ywd6k"><rect id="SvgjsRect2076" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2083" class="apexcharts-grid"><g id="SvgjsG2084" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2087" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2088" x1="0" y1="9.6" x2="92.25" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2089" x1="0" y1="19.2" x2="92.25" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2090" x1="0" y1="28.799999999999997" x2="92.25" y2="28.799999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2091" x1="0" y1="38.4" x2="92.25" y2="38.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2092" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2085" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2094" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2093" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2086" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG2077" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2078" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2081" d="M 0 48 L 0 35.2C0.8114261113242126, 35.748867093188416, 4.738261234057232, 39.86708898013114, 7.096153846153847, 40S12.48379152410298, 37.05937262678926, 14.192307692307693, 36S19.407246412677804, 30.245627448382884, 21.28846153846154, 31.2S26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2S33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2S40.954070854274654, 45.09773418637682, 42.57692307692308, 44S47.307692307692314, 29.6, 49.67307692307693, 29.6S55.14637854658235, 42.90226581362318, 56.769230769230774, 44S62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2S68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6S75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4S83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2S91.59781051260946, 37.01179224551878, 92.25, 37.6 L 92.25 48 L 0 48M 0 35.2z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskfq1ywd6k)" pathTo="M 0 48 L 0 35.2C0.8114261113242126, 35.748867093188416, 4.738261234057232, 39.86708898013114, 7.096153846153847, 40S12.48379152410298, 37.05937262678926, 14.192307692307693, 36S19.407246412677804, 30.245627448382884, 21.28846153846154, 31.2S26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2S33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2S40.954070854274654, 45.09773418637682, 42.57692307692308, 44S47.307692307692314, 29.6, 49.67307692307693, 29.6S55.14637854658235, 42.90226581362318, 56.769230769230774, 44S62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2S68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6S75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4S83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2S91.59781051260946, 37.01179224551878, 92.25, 37.6 L 92.25 48 L 0 48M 0 35.2z" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"></path><path id="SvgjsPath2082" d="M 0 35.2C0.8114261113242126, 35.748867093188416, 4.738261234057232, 39.86708898013114, 7.096153846153847, 40S12.48379152410298, 37.05937262678926, 14.192307692307693, 36S19.407246412677804, 30.245627448382884, 21.28846153846154, 31.2S26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2S33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2S40.954070854274654, 45.09773418637682, 42.57692307692308, 44S47.307692307692314, 29.6, 49.67307692307693, 29.6S55.14637854658235, 42.90226581362318, 56.769230769230774, 44S62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2S68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6S75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4S83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2S91.59781051260946, 37.01179224551878, 92.25, 37.6" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskfq1ywd6k)" pathTo="M 0 35.2C0.8114261113242126, 35.748867093188416, 4.738261234057232, 39.86708898013114, 7.096153846153847, 40S12.48379152410298, 37.05937262678926, 14.192307692307693, 36S19.407246412677804, 30.245627448382884, 21.28846153846154, 31.2S26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2S33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2S40.954070854274654, 45.09773418637682, 42.57692307692308, 44S47.307692307692314, 29.6, 49.67307692307693, 29.6S55.14637854658235, 42.90226581362318, 56.769230769230774, 44S62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2S68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6S75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4S83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2S91.59781051260946, 37.01179224551878, 92.25, 37.6" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path><g id="SvgjsG2079" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG2080" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2095" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2096" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2097" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2098" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2114" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2115" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2116" class="apexcharts-point-annotations"></g></g></svg></div></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-2.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Monaco</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartsabfswary" class="apexcharts-canvas apexchartsabfswary apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2117" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="92.25" height="50"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div></foreignObject><g id="SvgjsG2160" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2119" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs2118"><clipPath id="gridRectMaskabfswary"><rect id="SvgjsRect2122" width="98.25" height="60" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskabfswary"></clipPath><clipPath id="nonForecastMaskabfswary"></clipPath><clipPath id="gridRectMarkerMaskabfswary"><rect id="SvgjsRect2123" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2130" class="apexcharts-grid"><g id="SvgjsG2131" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2134" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2135" x1="0" y1="9.6" x2="92.25" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2136" x1="0" y1="19.2" x2="92.25" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2137" x1="0" y1="28.799999999999997" x2="92.25" y2="28.799999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2138" x1="0" y1="38.4" x2="92.25" y2="38.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2139" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2132" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2141" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2140" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2133" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG2124" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2125" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2128" d="M 0 48 L 0 41.6C1.061294121737277, 41.95894175174204, 5.130494931037941, 44.88641095792761, 7.096153846153847, 44S11.85660901274105, 34.936680040460786, 14.192307692307693, 35.2S19.241738115768655, 46.40759601719264, 21.28846153846154, 45.6S26.845636479247094, 30.727750395695356, 28.384615384615387, 29.6S33.85791700812081, 34.102265813623184, 35.48076923076923, 35.2S40.21903046482647, 39.067088980131146, 42.57692307692308, 39.2S47.70741800796102, 35.11358904207239, 49.67307692307693, 36S54.51828135953482, 45.092468859385626, 56.769230769230774, 45.6S62.242532392736194, 40.29773418637682, 63.86538461538462, 39.2S68.71058905184252, 35.492468859385625, 70.96153846153847, 36S75.72199362812566, 42.663319959539216, 78.0576923076923, 42.4S82.81814747427951, 34.663319959539216, 85.15384615384616, 34.4S91.59781051260946, 40.21179224551877, 92.25, 40.8 L 92.25 48 L 0 48M 0 41.6z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskabfswary)" pathTo="M 0 48 L 0 41.6C1.061294121737277, 41.95894175174204, 5.130494931037941, 44.88641095792761, 7.096153846153847, 44S11.85660901274105, 34.936680040460786, 14.192307692307693, 35.2S19.241738115768655, 46.40759601719264, 21.28846153846154, 45.6S26.845636479247094, 30.727750395695356, 28.384615384615387, 29.6S33.85791700812081, 34.102265813623184, 35.48076923076923, 35.2S40.21903046482647, 39.067088980131146, 42.57692307692308, 39.2S47.70741800796102, 35.11358904207239, 49.67307692307693, 36S54.51828135953482, 45.092468859385626, 56.769230769230774, 45.6S62.242532392736194, 40.29773418637682, 63.86538461538462, 39.2S68.71058905184252, 35.492468859385625, 70.96153846153847, 36S75.72199362812566, 42.663319959539216, 78.0576923076923, 42.4S82.81814747427951, 34.663319959539216, 85.15384615384616, 34.4S91.59781051260946, 40.21179224551877, 92.25, 40.8 L 92.25 48 L 0 48M 0 41.6z" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"></path><path id="SvgjsPath2129" d="M 0 41.6C1.061294121737277, 41.95894175174204, 5.130494931037941, 44.88641095792761, 7.096153846153847, 44S11.85660901274105, 34.936680040460786, 14.192307692307693, 35.2S19.241738115768655, 46.40759601719264, 21.28846153846154, 45.6S26.845636479247094, 30.727750395695356, 28.384615384615387, 29.6S33.85791700812081, 34.102265813623184, 35.48076923076923, 35.2S40.21903046482647, 39.067088980131146, 42.57692307692308, 39.2S47.70741800796102, 35.11358904207239, 49.67307692307693, 36S54.51828135953482, 45.092468859385626, 56.769230769230774, 45.6S62.242532392736194, 40.29773418637682, 63.86538461538462, 39.2S68.71058905184252, 35.492468859385625, 70.96153846153847, 36S75.72199362812566, 42.663319959539216, 78.0576923076923, 42.4S82.81814747427951, 34.663319959539216, 85.15384615384616, 34.4S91.59781051260946, 40.21179224551877, 92.25, 40.8" fill="none" fill-opacity="1" stroke="#f8285a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskabfswary)" pathTo="M 0 41.6C1.061294121737277, 41.95894175174204, 5.130494931037941, 44.88641095792761, 7.096153846153847, 44S11.85660901274105, 34.936680040460786, 14.192307692307693, 35.2S19.241738115768655, 46.40759601719264, 21.28846153846154, 45.6S26.845636479247094, 30.727750395695356, 28.384615384615387, 29.6S33.85791700812081, 34.102265813623184, 35.48076923076923, 35.2S40.21903046482647, 39.067088980131146, 42.57692307692308, 39.2S47.70741800796102, 35.11358904207239, 49.67307692307693, 36S54.51828135953482, 45.092468859385626, 56.769230769230774, 45.6S62.242532392736194, 40.29773418637682, 63.86538461538462, 39.2S68.71058905184252, 35.492468859385625, 70.96153846153847, 36S75.72199362812566, 42.663319959539216, 78.0576923076923, 42.4S82.81814747427951, 34.663319959539216, 85.15384615384616, 34.4S91.59781051260946, 40.21179224551877, 92.25, 40.8" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path><g id="SvgjsG2126" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG2127" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2142" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2143" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2144" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2145" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2161" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2162" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2163" class="apexcharts-point-annotations"></g></g></svg></div></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-9.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Poland</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">92.56%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsb11ghndv" class="apexcharts-canvas apexchartsb11ghndv apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2164" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="92.25" height="50"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div></foreignObject><g id="SvgjsG2207" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2166" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs2165"><clipPath id="gridRectMaskb11ghndv"><rect id="SvgjsRect2169" width="98.25" height="60" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskb11ghndv"></clipPath><clipPath id="nonForecastMaskb11ghndv"></clipPath><clipPath id="gridRectMarkerMaskb11ghndv"><rect id="SvgjsRect2170" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2177" class="apexcharts-grid"><g id="SvgjsG2178" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2181" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2182" x1="0" y1="9.6" x2="92.25" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2183" x1="0" y1="19.2" x2="92.25" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2184" x1="0" y1="28.799999999999997" x2="92.25" y2="28.799999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2185" x1="0" y1="38.4" x2="92.25" y2="38.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2186" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2179" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2188" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2187" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2180" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG2171" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2172" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2175" d="M 0 48 L 0 41.6C1.1254747048479774, 41.85376557030719, 5.130494931037941, 44.08641095792761, 7.096153846153847, 43.2S11.892684783272795, 34.81112067879735, 14.192307692307693, 35.2S19.241738115768655, 46.40759601719264, 21.28846153846154, 45.6S26.845636479247094, 30.727750395695356, 28.384615384615387, 29.6S33.85791700812081, 34.102265813623184, 35.48076923076923, 35.2S40.24122439735643, 38.936680040460786, 42.57692307692308, 39.2S47.70741800796102, 35.91358904207239, 49.67307692307693, 36.8S54.46960786019587, 45.21112067879735, 56.769230769230774, 45.6S62.242532392736194, 40.29773418637682, 63.86538461538462, 39.2S68.66191555250357, 35.61112067879735, 70.96153846153847, 36S75.72199362812566, 41.86331995953922, 78.0576923076923, 41.6S82.79595354174954, 34.532911019868855, 85.15384615384616, 34.4S91.59781051260946, 40.21179224551877, 92.25, 40.8 L 92.25 48 L 0 48M 0 41.6z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskb11ghndv)" pathTo="M 0 48 L 0 41.6C1.1254747048479774, 41.85376557030719, 5.130494931037941, 44.08641095792761, 7.096153846153847, 43.2S11.892684783272795, 34.81112067879735, 14.192307692307693, 35.2S19.241738115768655, 46.40759601719264, 21.28846153846154, 45.6S26.845636479247094, 30.727750395695356, 28.384615384615387, 29.6S33.85791700812081, 34.102265813623184, 35.48076923076923, 35.2S40.24122439735643, 38.936680040460786, 42.57692307692308, 39.2S47.70741800796102, 35.91358904207239, 49.67307692307693, 36.8S54.46960786019587, 45.21112067879735, 56.769230769230774, 45.6S62.242532392736194, 40.29773418637682, 63.86538461538462, 39.2S68.66191555250357, 35.61112067879735, 70.96153846153847, 36S75.72199362812566, 41.86331995953922, 78.0576923076923, 41.6S82.79595354174954, 34.532911019868855, 85.15384615384616, 34.4S91.59781051260946, 40.21179224551877, 92.25, 40.8 L 92.25 48 L 0 48M 0 41.6z" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"></path><path id="SvgjsPath2176" d="M 0 41.6C1.1254747048479774, 41.85376557030719, 5.130494931037941, 44.08641095792761, 7.096153846153847, 43.2S11.892684783272795, 34.81112067879735, 14.192307692307693, 35.2S19.241738115768655, 46.40759601719264, 21.28846153846154, 45.6S26.845636479247094, 30.727750395695356, 28.384615384615387, 29.6S33.85791700812081, 34.102265813623184, 35.48076923076923, 35.2S40.24122439735643, 38.936680040460786, 42.57692307692308, 39.2S47.70741800796102, 35.91358904207239, 49.67307692307693, 36.8S54.46960786019587, 45.21112067879735, 56.769230769230774, 45.6S62.242532392736194, 40.29773418637682, 63.86538461538462, 39.2S68.66191555250357, 35.61112067879735, 70.96153846153847, 36S75.72199362812566, 41.86331995953922, 78.0576923076923, 41.6S82.79595354174954, 34.532911019868855, 85.15384615384616, 34.4S91.59781051260946, 40.21179224551877, 92.25, 40.8" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskb11ghndv)" pathTo="M 0 41.6C1.1254747048479774, 41.85376557030719, 5.130494931037941, 44.08641095792761, 7.096153846153847, 43.2S11.892684783272795, 34.81112067879735, 14.192307692307693, 35.2S19.241738115768655, 46.40759601719264, 21.28846153846154, 45.6S26.845636479247094, 30.727750395695356, 28.384615384615387, 29.6S33.85791700812081, 34.102265813623184, 35.48076923076923, 35.2S40.24122439735643, 38.936680040460786, 42.57692307692308, 39.2S47.70741800796102, 35.91358904207239, 49.67307692307693, 36.8S54.46960786019587, 45.21112067879735, 56.769230769230774, 45.6S62.242532392736194, 40.29773418637682, 63.86538461538462, 39.2S68.66191555250357, 35.61112067879735, 70.96153846153847, 36S75.72199362812566, 41.86331995953922, 78.0576923076923, 41.6S82.79595354174954, 34.532911019868855, 85.15384615384616, 34.4S91.59781051260946, 40.21179224551877, 92.25, 40.8" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path><g id="SvgjsG2173" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG2174" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2189" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2190" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2191" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2192" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2208" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2209" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2210" class="apexcharts-point-annotations"></g></g></svg></div></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-7.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody Fishers</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Mexico</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">63.08%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_1_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsvt6guh4v" class="apexcharts-canvas apexchartsvt6guh4v apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2211" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="92.25" height="50"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div></foreignObject><g id="SvgjsG2254" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2213" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs2212"><clipPath id="gridRectMaskvt6guh4v"><rect id="SvgjsRect2216" width="98.25" height="60" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskvt6guh4v"></clipPath><clipPath id="nonForecastMaskvt6guh4v"></clipPath><clipPath id="gridRectMarkerMaskvt6guh4v"><rect id="SvgjsRect2217" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2224" class="apexcharts-grid"><g id="SvgjsG2225" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2228" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2229" x1="0" y1="9.6" x2="92.25" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2230" x1="0" y1="19.2" x2="92.25" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2231" x1="0" y1="28.799999999999997" x2="92.25" y2="28.799999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2232" x1="0" y1="38.4" x2="92.25" y2="38.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2233" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2226" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2235" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2234" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2227" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG2218" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2219" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2222" d="M 0 48 L 0 38.4C0.728809305983932, 38.97514707290656, 5.387637677949132, 45.05937262678926, 7.096153846153847, 44S12.145584269614808, 30.407596017192642, 14.192307692307693, 29.6S18.952762858894896, 38.13668004046078, 21.28846153846154, 38.4S26.08499247558049, 30.81112067879735, 28.384615384615387, 31.2S33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8S40.86840690871836, 35.45937262678926, 42.57692307692308, 34.4S48.13409801770864, 30.872249604304645, 49.67307692307693, 32S54.51828135953482, 45.30753114061437, 56.769230769230774, 44.8S61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8S69.25302229333376, 39.740627373210735, 70.96153846153847, 40.8S76.17647718190857, 38.554372551617114, 78.0576923076923, 37.6S82.90289674415021, 33.092468859385626, 85.15384615384616, 33.6S91.66724437816401, 40.208716247112754, 92.25, 40.8 L 92.25 48 L 0 48M 0 38.4z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskvt6guh4v)" pathTo="M 0 48 L 0 38.4C0.728809305983932, 38.97514707290656, 5.387637677949132, 45.05937262678926, 7.096153846153847, 44S12.145584269614808, 30.407596017192642, 14.192307692307693, 29.6S18.952762858894896, 38.13668004046078, 21.28846153846154, 38.4S26.08499247558049, 30.81112067879735, 28.384615384615387, 31.2S33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8S40.86840690871836, 35.45937262678926, 42.57692307692308, 34.4S48.13409801770864, 30.872249604304645, 49.67307692307693, 32S54.51828135953482, 45.30753114061437, 56.769230769230774, 44.8S61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8S69.25302229333376, 39.740627373210735, 70.96153846153847, 40.8S76.17647718190857, 38.554372551617114, 78.0576923076923, 37.6S82.90289674415021, 33.092468859385626, 85.15384615384616, 33.6S91.66724437816401, 40.208716247112754, 92.25, 40.8 L 92.25 48 L 0 48M 0 38.4z" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"></path><path id="SvgjsPath2223" d="M 0 38.4C0.728809305983932, 38.97514707290656, 5.387637677949132, 45.05937262678926, 7.096153846153847, 44S12.145584269614808, 30.407596017192642, 14.192307692307693, 29.6S18.952762858894896, 38.13668004046078, 21.28846153846154, 38.4S26.08499247558049, 30.81112067879735, 28.384615384615387, 31.2S33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8S40.86840690871836, 35.45937262678926, 42.57692307692308, 34.4S48.13409801770864, 30.872249604304645, 49.67307692307693, 32S54.51828135953482, 45.30753114061437, 56.769230769230774, 44.8S61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8S69.25302229333376, 39.740627373210735, 70.96153846153847, 40.8S76.17647718190857, 38.554372551617114, 78.0576923076923, 37.6S82.90289674415021, 33.092468859385626, 85.15384615384616, 33.6S91.66724437816401, 40.208716247112754, 92.25, 40.8" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskvt6guh4v)" pathTo="M 0 38.4C0.728809305983932, 38.97514707290656, 5.387637677949132, 45.05937262678926, 7.096153846153847, 44S12.145584269614808, 30.407596017192642, 14.192307692307693, 29.6S18.952762858894896, 38.13668004046078, 21.28846153846154, 38.4S26.08499247558049, 30.81112067879735, 28.384615384615387, 31.2S33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8S40.86840690871836, 35.45937262678926, 42.57692307692308, 34.4S48.13409801770864, 30.872249604304645, 49.67307692307693, 32S54.51828135953482, 45.30753114061437, 56.769230769230774, 44.8S61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8S69.25302229333376, 39.740627373210735, 70.96153846153847, 40.8S76.17647718190857, 38.554372551617114, 78.0576923076923, 37.6S82.90289674415021, 33.092468859385626, 85.15384615384616, 33.6S91.66724437816401, 40.208716247112754, 92.25, 40.8" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path><g id="SvgjsG2220" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG2221" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2236" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2237" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2238" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2239" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2255" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2256" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2257" class="apexcharts-point-annotations"></g></g></svg></div></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->

    <!--begin::Tap pane-->
    <div class="tab-pane fade " id="kt_stats_widget_16_tab_2" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_2">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-25.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Poland</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">85.23%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-24.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Mexico</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">74.83%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-20.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Haiti</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">90.06%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-17.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Monaco</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">54.08%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_2_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->

    <!--begin::Tap pane-->
    <div class="tab-pane fade " id="kt_stats_widget_16_tab_3" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-11.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">New York</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">52.34%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-23.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald Richards</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Madrid</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">77.65%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-4.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie Alexander</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Pune</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">82.47%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-1.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney Henry</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Mexico</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">67.84%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_3_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->

    <!--begin::Tap pane-->
    <div class="tab-pane fade " id="kt_stats_widget_16_tab_4" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_4">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-12.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene McCoy</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">London</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">53.44%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-21.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinneyr</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Monaco</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">74.64%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-30.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">PManila</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">88.56%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-14.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Iceland</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">63.16%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_4_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->

    <!--begin::Tap pane-->
    <div class="tab-pane fade " id="kt_stats_widget_16_tab_5" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_5">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-6.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Haiti</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">68.54%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-10.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Kiribati</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">55.83%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-9.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Poland</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">93.46%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                                                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                                                                        <div class="symbol symbol-50px me-3">
                                            <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="" alt="">
                                        </div>


                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Mexico</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end pe-13">
                                <span class="text-gray-600 fw-bold fs-6">64.48%</span>
                            </td>

                            <td class="text-end pe-0">
                                <div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                            </a>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->
            <!--end::Table container-->
</div>
<!--end::Tab Content-->
</div>
<!--end: Card Body-->
</div>
<!--end::Tables widget 16-->    </div>
<!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
<!--begin::Col-->
<div class="col-xxl-6">

<!--begin::Card widget 18-->
<div class="card card-flush h-xl-100">
<!--begin::Body-->
<div class="card-body py-9">
<!--begin::Row-->
<div class="row gx-9 h-100">
<!--begin::Col-->
<div class="col-sm-6 mb-10 mb-sm-0">
    <!--begin::Image-->
    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('/metronic8/demo1/assets/media/stock/600x600/img-65.jpg')">
    </div>
    <!--end::Image-->
</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-sm-6">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column h-100">
        <!--begin::Header-->
        <div class="mb-7">
            <!--begin::Headin-->
            <div class="d-flex flex-stack mb-6">
                <!--begin::Title-->
                <div class="flex-shrink-0 me-5">
                    <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>

                    <span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
                </div>
                <!--end::Title-->

                <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
            </div>
            <!--end::Heading-->

            <!--begin::Items-->
            <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                <!--begin::Item-->
                <div class="d-flex align-items-center me-5 me-xl-13">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px symbol-circle me-3">
                        <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="" alt="">
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Info-->
                    <div class="m-0">
                        <span class="fw-semibold text-gray-500 d-block fs-8">Manager</span>
                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px symbol-circle me-3">
                        <span class="symbol-label bg-success">
                            <i class="ki-duotone ki-abstract-41 fs-5 text-white"><span class="path1"></span><span class="path2"></span></i>                                    </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Info-->
                    <div class="m-0">
                        <span class="fw-semibold text-gray-500 d-block fs-8">Budget</span>
                        <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Items-->
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="mb-6">
            <!--begin::Text-->
            <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">
                Flat cartoony illustrations with vivid
                unblended colors and asymmetrical  beautiful purple hair lady
            </span>
            <!--end::Text-->

            <!--begin::Stats-->
            <div class="d-flex">
                <!--begin::Stat-->
                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                    <!--begin::Date-->
                    <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                    <!--end::Date-->

                    <!--begin::Label-->
                    <div class="fw-semibold text-gray-500">Due Date</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->

                <!--begin::Stat-->
                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                    <!--begin::Number-->
                    <span class="fs-6 text-gray-700 fw-bold">$<span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
                    <!--end::Number-->

                    <!--begin::Label-->
                    <div class="fw-semibold text-gray-500">Budget</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
            </div>
            <!--end::Stats-->
        </div>
        <!--end::Body-->

        <!--begin::Footer-->
        <div class="d-flex flex-stack mt-auto bd-highlight">
            <!--begin::Users group-->
            <div class="symbol-group symbol-hover flex-nowrap">
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-2.jpg">
                                                        </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-3.jpg">
                                                        </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                        </div>

            </div>
            <!--end::Users group-->

            <!--begin::Actions-->
            <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">
                View Project

                <i class="ki-duotone ki-exit-right-corner fs-4 ms-1"><span class="path1"></span><span class="path2"></span></i>
            </a>
            <!--end::Actions-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
</div>
<!--end::Body-->
</div>
<!--end::Card widget 18-->


</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-xl-6">
<!--begin::Chart widget 36-->
<div class="card card-flush overflow-hidden h-lg-100">
<!--begin::Header-->
<div class="card-header pt-5">
<!--begin::Title-->
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bold text-gray-900">Performance</span>
<span class="text-gray-500 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
</h3>
<!--end::Title-->

<!--begin::Toolbar-->
<div class="card-toolbar">
<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
    <!--begin::Display range-->
    <div class="text-gray-600 fw-bold">22 Jan 2024</div>
    <!--end::Display range-->

    <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
</div>
<!--end::Daterangepicker-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Card body-->
<div class="card-body d-flex align-items-end p-0">
<!--begin::Chart-->
<div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px; min-height: 315px;"><div id="apexchartscd2og822" class="apexcharts-canvas apexchartscd2og822 apexcharts-theme-light" style="width: 738.5px; height: 300px;"><svg id="SvgjsSvg2317" width="738.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="738.5" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect2357" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2420" class="apexcharts-yaxis" rel="0" transform="translate(17.835205078125, 0)"><g id="SvgjsG2421" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2423" font-family="inherit" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2424">120</tspan><title>120</title></text><text id="SvgjsText2426" font-family="inherit" x="20" y="68.57" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2427">105</tspan><title>105</title></text><text id="SvgjsText2429" font-family="inherit" x="20" y="105.53999999999999" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2430">90</tspan><title>90</title></text><text id="SvgjsText2432" font-family="inherit" x="20" y="142.51" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2433">75</tspan><title>75</title></text><text id="SvgjsText2435" font-family="inherit" x="20" y="179.48" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2436">60</tspan><title>60</title></text><text id="SvgjsText2438" font-family="inherit" x="20" y="216.45" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2439">45</tspan><title>45</title></text><text id="SvgjsText2441" font-family="inherit" x="20" y="253.42" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2442">30</tspan><title>30</title></text></g></g><g id="SvgjsG2319" class="apexcharts-inner apexcharts-graphical" transform="translate(47.835205078125, 30)"><defs id="SvgjsDefs2318"><clipPath id="gridRectMaskcd2og822"><rect id="SvgjsRect2323" width="687.664794921875" height="237.82" x="-5" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskcd2og822"></clipPath><clipPath id="nonForecastMaskcd2og822"></clipPath><clipPath id="gridRectMarkerMaskcd2og822"><rect id="SvgjsRect2324" width="684.664794921875" height="225.82" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2329" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2330" stop-opacity="0.4" stop-color="rgba(27,132,255,0.4)" offset="0.15"></stop><stop id="SvgjsStop2331" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop2332" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2338" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2339" stop-opacity="0.4" stop-color="rgba(23,198,83,0.4)" offset="0.15"></stop><stop id="SvgjsStop2340" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop2341" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG2344" class="apexcharts-grid"><g id="SvgjsG2345" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2349" x1="0" y1="36.97" x2="680.664794921875" y2="36.97" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2350" x1="0" y1="73.94" x2="680.664794921875" y2="73.94" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2351" x1="0" y1="110.91" x2="680.664794921875" y2="110.91" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2352" x1="0" y1="147.88" x2="680.664794921875" y2="147.88" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2353" x1="0" y1="184.85" x2="680.664794921875" y2="184.85" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2346" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2356" x1="0" y1="221.82" x2="680.664794921875" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2355" x1="0" y1="1" x2="0" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2347" class="apexcharts-grid-borders"><line id="SvgjsLine2348" x1="0" y1="0" x2="680.664794921875" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2354" x1="0" y1="221.82" x2="680.664794921875" y2="221.82" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2325" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2326" class="apexcharts-series" zIndex="0" seriesName="InboundxCalls" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2333" d="M 0 221.82 L 0 135.55666666666667C3.222404490928577, 132.4062447430832, 25.209807219328702, 98.58666666666667, 37.81471082899306, 98.58666666666667S63.02451804832176, 98.58666666666667, 75.62942165798611, 98.58666666666667S100.83922887731482, 147.88, 113.44413248697917, 147.88S138.65393970630788, 147.88, 151.25884331597223, 147.88S176.46865053530092, 184.85, 189.07355414496527, 184.85S214.283361364294, 184.85, 226.88826497395834, 184.85S252.098072193287, 98.58666666666667, 264.70297580295136, 98.58666666666667S289.9127830222801, 98.58666666666667, 302.51768663194446, 98.58666666666667S327.72749385127315, 123.23333333333335, 340.3323974609375, 123.23333333333335S365.5422046802662, 123.23333333333335, 378.14710828993054, 123.23333333333335S403.35691550925924, 73.94, 415.9618191189236, 73.94S441.17162633825234, 73.94, 453.7765299479167, 73.94S478.9863371672454, 98.58666666666667, 491.59124077690973, 98.58666666666667S516.8010479962384, 98.58666666666667, 529.4059516059027, 98.58666666666667S554.6157588252315, 98.58666666666667, 567.2206624348959, 98.58666666666667S592.4304696542246, 147.88, 605.0353732638889, 147.88S630.2451804832176, 147.88, 642.850084092882, 147.88S676.2414321995582, 169.64363135652718, 680.664794921875, 172.52666666666667 L 680.664794921875 221.82 L 0 221.82M 0 135.55666666666667z" fill="url(#SvgjsLinearGradient2329)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskcd2og822)" pathTo="M 0 221.82 L 0 135.55666666666667C3.222404490928577, 132.4062447430832, 25.209807219328702, 98.58666666666667, 37.81471082899306, 98.58666666666667S63.02451804832176, 98.58666666666667, 75.62942165798611, 98.58666666666667S100.83922887731482, 147.88, 113.44413248697917, 147.88S138.65393970630788, 147.88, 151.25884331597223, 147.88S176.46865053530092, 184.85, 189.07355414496527, 184.85S214.283361364294, 184.85, 226.88826497395834, 184.85S252.098072193287, 98.58666666666667, 264.70297580295136, 98.58666666666667S289.9127830222801, 98.58666666666667, 302.51768663194446, 98.58666666666667S327.72749385127315, 123.23333333333335, 340.3323974609375, 123.23333333333335S365.5422046802662, 123.23333333333335, 378.14710828993054, 123.23333333333335S403.35691550925924, 73.94, 415.9618191189236, 73.94S441.17162633825234, 73.94, 453.7765299479167, 73.94S478.9863371672454, 98.58666666666667, 491.59124077690973, 98.58666666666667S516.8010479962384, 98.58666666666667, 529.4059516059027, 98.58666666666667S554.6157588252315, 98.58666666666667, 567.2206624348959, 98.58666666666667S592.4304696542246, 147.88, 605.0353732638889, 147.88S630.2451804832176, 147.88, 642.850084092882, 147.88S676.2414321995582, 169.64363135652718, 680.664794921875, 172.52666666666667 L 680.664794921875 221.82 L 0 221.82M 0 135.55666666666667z" pathFrom="M -1 295.76 L -1 295.76 L 37.81471082899306 295.76 L 75.62942165798611 295.76 L 113.44413248697917 295.76 L 151.25884331597223 295.76 L 189.07355414496527 295.76 L 226.88826497395834 295.76 L 264.70297580295136 295.76 L 302.51768663194446 295.76 L 340.3323974609375 295.76 L 378.14710828993054 295.76 L 415.9618191189236 295.76 L 453.7765299479167 295.76 L 491.59124077690973 295.76 L 529.4059516059027 295.76 L 567.2206624348959 295.76 L 605.0353732638889 295.76 L 642.850084092882 295.76 L 680.664794921875 295.76"></path><path id="SvgjsPath2334" d="M 0 135.55666666666667C3.222404490928577, 132.4062447430832, 25.209807219328702, 98.58666666666667, 37.81471082899306, 98.58666666666667S63.02451804832176, 98.58666666666667, 75.62942165798611, 98.58666666666667S100.83922887731482, 147.88, 113.44413248697917, 147.88S138.65393970630788, 147.88, 151.25884331597223, 147.88S176.46865053530092, 184.85, 189.07355414496527, 184.85S214.283361364294, 184.85, 226.88826497395834, 184.85S252.098072193287, 98.58666666666667, 264.70297580295136, 98.58666666666667S289.9127830222801, 98.58666666666667, 302.51768663194446, 98.58666666666667S327.72749385127315, 123.23333333333335, 340.3323974609375, 123.23333333333335S365.5422046802662, 123.23333333333335, 378.14710828993054, 123.23333333333335S403.35691550925924, 73.94, 415.9618191189236, 73.94S441.17162633825234, 73.94, 453.7765299479167, 73.94S478.9863371672454, 98.58666666666667, 491.59124077690973, 98.58666666666667S516.8010479962384, 98.58666666666667, 529.4059516059027, 98.58666666666667S554.6157588252315, 98.58666666666667, 567.2206624348959, 98.58666666666667S592.4304696542246, 147.88, 605.0353732638889, 147.88S630.2451804832176, 147.88, 642.850084092882, 147.88S676.2414321995582, 169.64363135652718, 680.664794921875, 172.52666666666667" fill="none" fill-opacity="1" stroke="#1b84ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskcd2og822)" pathTo="M 0 135.55666666666667C3.222404490928577, 132.4062447430832, 25.209807219328702, 98.58666666666667, 37.81471082899306, 98.58666666666667S63.02451804832176, 98.58666666666667, 75.62942165798611, 98.58666666666667S100.83922887731482, 147.88, 113.44413248697917, 147.88S138.65393970630788, 147.88, 151.25884331597223, 147.88S176.46865053530092, 184.85, 189.07355414496527, 184.85S214.283361364294, 184.85, 226.88826497395834, 184.85S252.098072193287, 98.58666666666667, 264.70297580295136, 98.58666666666667S289.9127830222801, 98.58666666666667, 302.51768663194446, 98.58666666666667S327.72749385127315, 123.23333333333335, 340.3323974609375, 123.23333333333335S365.5422046802662, 123.23333333333335, 378.14710828993054, 123.23333333333335S403.35691550925924, 73.94, 415.9618191189236, 73.94S441.17162633825234, 73.94, 453.7765299479167, 73.94S478.9863371672454, 98.58666666666667, 491.59124077690973, 98.58666666666667S516.8010479962384, 98.58666666666667, 529.4059516059027, 98.58666666666667S554.6157588252315, 98.58666666666667, 567.2206624348959, 98.58666666666667S592.4304696542246, 147.88, 605.0353732638889, 147.88S630.2451804832176, 147.88, 642.850084092882, 147.88S676.2414321995582, 169.64363135652718, 680.664794921875, 172.52666666666667" pathFrom="M -1 295.76 L -1 295.76 L 37.81471082899306 295.76 L 75.62942165798611 295.76 L 113.44413248697917 295.76 L 151.25884331597223 295.76 L 189.07355414496527 295.76 L 226.88826497395834 295.76 L 264.70297580295136 295.76 L 302.51768663194446 295.76 L 340.3323974609375 295.76 L 378.14710828993054 295.76 L 415.9618191189236 295.76 L 453.7765299479167 295.76 L 491.59124077690973 295.76 L 529.4059516059027 295.76 L 567.2206624348959 295.76 L 605.0353732638889 295.76 L 642.850084092882 295.76 L 680.664794921875 295.76" fill-rule="evenodd"></path><g id="SvgjsG2327" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2446" r="0" cx="0" cy="0" class="apexcharts-marker wjz0yq4th no-pointer-events" stroke="#1b84ff" fill="#1b84ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2335" class="apexcharts-series" zIndex="1" seriesName="OutboundxCalls" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath2342" d="M 0 221.82 L 0 73.94C2.3348983548435744, 70.89634528516582, 25.209807219328702, 24.646666666666704, 37.81471082899306, 24.646666666666704S63.02451804832176, 24.646666666666704, 75.62942165798611, 24.646666666666704S100.83922887731482, 61.616666666666674, 113.44413248697917, 61.616666666666674S138.65393970630788, 61.616666666666674, 151.25884331597223, 61.616666666666674S176.46865053530092, 86.26333333333335, 189.07355414496527, 86.26333333333335S214.283361364294, 86.26333333333335, 226.88826497395834, 86.26333333333335S252.098072193287, 61.616666666666674, 264.70297580295136, 61.616666666666674S289.9127830222801, 61.616666666666674, 302.51768663194446, 61.616666666666674S327.72749385127315, 12.323333333333323, 340.3323974609375, 12.323333333333323S365.5422046802662, 12.323333333333323, 378.14710828993054, 12.323333333333323S403.35691550925924, 49.29333333333335, 415.9618191189236, 49.29333333333335S441.17162633825234, 49.29333333333335, 453.7765299479167, 49.29333333333335S478.9863371672454, 12.323333333333323, 491.59124077690973, 12.323333333333323S516.8010479962384, 12.323333333333323, 529.4059516059027, 12.323333333333323S554.6157588252315, 61.616666666666674, 567.2206624348959, 61.616666666666674S592.4304696542246, 61.616666666666674, 605.0353732638889, 61.616666666666674S630.2451804832176, 86.26333333333335, 642.850084092882, 86.26333333333335S674.3623431170429, 86.26333333333335, 680.664794921875, 86.26333333333335 L 680.664794921875 221.82 L 0 221.82M 0 73.94z" fill="url(#SvgjsLinearGradient2338)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskcd2og822)" pathTo="M 0 221.82 L 0 73.94C2.3348983548435744, 70.89634528516582, 25.209807219328702, 24.646666666666704, 37.81471082899306, 24.646666666666704S63.02451804832176, 24.646666666666704, 75.62942165798611, 24.646666666666704S100.83922887731482, 61.616666666666674, 113.44413248697917, 61.616666666666674S138.65393970630788, 61.616666666666674, 151.25884331597223, 61.616666666666674S176.46865053530092, 86.26333333333335, 189.07355414496527, 86.26333333333335S214.283361364294, 86.26333333333335, 226.88826497395834, 86.26333333333335S252.098072193287, 61.616666666666674, 264.70297580295136, 61.616666666666674S289.9127830222801, 61.616666666666674, 302.51768663194446, 61.616666666666674S327.72749385127315, 12.323333333333323, 340.3323974609375, 12.323333333333323S365.5422046802662, 12.323333333333323, 378.14710828993054, 12.323333333333323S403.35691550925924, 49.29333333333335, 415.9618191189236, 49.29333333333335S441.17162633825234, 49.29333333333335, 453.7765299479167, 49.29333333333335S478.9863371672454, 12.323333333333323, 491.59124077690973, 12.323333333333323S516.8010479962384, 12.323333333333323, 529.4059516059027, 12.323333333333323S554.6157588252315, 61.616666666666674, 567.2206624348959, 61.616666666666674S592.4304696542246, 61.616666666666674, 605.0353732638889, 61.616666666666674S630.2451804832176, 86.26333333333335, 642.850084092882, 86.26333333333335S674.3623431170429, 86.26333333333335, 680.664794921875, 86.26333333333335 L 680.664794921875 221.82 L 0 221.82M 0 73.94z" pathFrom="M -1 295.76 L -1 295.76 L 37.81471082899306 295.76 L 75.62942165798611 295.76 L 113.44413248697917 295.76 L 151.25884331597223 295.76 L 189.07355414496527 295.76 L 226.88826497395834 295.76 L 264.70297580295136 295.76 L 302.51768663194446 295.76 L 340.3323974609375 295.76 L 378.14710828993054 295.76 L 415.9618191189236 295.76 L 453.7765299479167 295.76 L 491.59124077690973 295.76 L 529.4059516059027 295.76 L 567.2206624348959 295.76 L 605.0353732638889 295.76 L 642.850084092882 295.76 L 680.664794921875 295.76"></path><path id="SvgjsPath2343" d="M 0 73.94C2.3348983548435744, 70.89634528516582, 25.209807219328702, 24.646666666666704, 37.81471082899306, 24.646666666666704S63.02451804832176, 24.646666666666704, 75.62942165798611, 24.646666666666704S100.83922887731482, 61.616666666666674, 113.44413248697917, 61.616666666666674S138.65393970630788, 61.616666666666674, 151.25884331597223, 61.616666666666674S176.46865053530092, 86.26333333333335, 189.07355414496527, 86.26333333333335S214.283361364294, 86.26333333333335, 226.88826497395834, 86.26333333333335S252.098072193287, 61.616666666666674, 264.70297580295136, 61.616666666666674S289.9127830222801, 61.616666666666674, 302.51768663194446, 61.616666666666674S327.72749385127315, 12.323333333333323, 340.3323974609375, 12.323333333333323S365.5422046802662, 12.323333333333323, 378.14710828993054, 12.323333333333323S403.35691550925924, 49.29333333333335, 415.9618191189236, 49.29333333333335S441.17162633825234, 49.29333333333335, 453.7765299479167, 49.29333333333335S478.9863371672454, 12.323333333333323, 491.59124077690973, 12.323333333333323S516.8010479962384, 12.323333333333323, 529.4059516059027, 12.323333333333323S554.6157588252315, 61.616666666666674, 567.2206624348959, 61.616666666666674S592.4304696542246, 61.616666666666674, 605.0353732638889, 61.616666666666674S630.2451804832176, 86.26333333333335, 642.850084092882, 86.26333333333335S674.3623431170429, 86.26333333333335, 680.664794921875, 86.26333333333335" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskcd2og822)" pathTo="M 0 73.94C2.3348983548435744, 70.89634528516582, 25.209807219328702, 24.646666666666704, 37.81471082899306, 24.646666666666704S63.02451804832176, 24.646666666666704, 75.62942165798611, 24.646666666666704S100.83922887731482, 61.616666666666674, 113.44413248697917, 61.616666666666674S138.65393970630788, 61.616666666666674, 151.25884331597223, 61.616666666666674S176.46865053530092, 86.26333333333335, 189.07355414496527, 86.26333333333335S214.283361364294, 86.26333333333335, 226.88826497395834, 86.26333333333335S252.098072193287, 61.616666666666674, 264.70297580295136, 61.616666666666674S289.9127830222801, 61.616666666666674, 302.51768663194446, 61.616666666666674S327.72749385127315, 12.323333333333323, 340.3323974609375, 12.323333333333323S365.5422046802662, 12.323333333333323, 378.14710828993054, 12.323333333333323S403.35691550925924, 49.29333333333335, 415.9618191189236, 49.29333333333335S441.17162633825234, 49.29333333333335, 453.7765299479167, 49.29333333333335S478.9863371672454, 12.323333333333323, 491.59124077690973, 12.323333333333323S516.8010479962384, 12.323333333333323, 529.4059516059027, 12.323333333333323S554.6157588252315, 61.616666666666674, 567.2206624348959, 61.616666666666674S592.4304696542246, 61.616666666666674, 605.0353732638889, 61.616666666666674S630.2451804832176, 86.26333333333335, 642.850084092882, 86.26333333333335S674.3623431170429, 86.26333333333335, 680.664794921875, 86.26333333333335" pathFrom="M -1 295.76 L -1 295.76 L 37.81471082899306 295.76 L 75.62942165798611 295.76 L 113.44413248697917 295.76 L 151.25884331597223 295.76 L 189.07355414496527 295.76 L 226.88826497395834 295.76 L 264.70297580295136 295.76 L 302.51768663194446 295.76 L 340.3323974609375 295.76 L 378.14710828993054 295.76 L 415.9618191189236 295.76 L 453.7765299479167 295.76 L 491.59124077690973 295.76 L 529.4059516059027 295.76 L 567.2206624348959 295.76 L 605.0353732638889 295.76 L 642.850084092882 295.76 L 680.664794921875 295.76" fill-rule="evenodd"></path><g id="SvgjsG2336" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2447" r="0" cx="0" cy="0" class="apexcharts-marker w6bf864qa no-pointer-events" stroke="#17c653" fill="#17c653" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2328" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2337" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2358" x1="0" y1="0" x2="0" y2="221.82" stroke="#1B84FF #17C653" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine2359" x1="0" y1="0" x2="680.664794921875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2360" x1="0" y1="0" x2="680.664794921875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2361" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2362" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText2364" font-family="inherit" x="0" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2365"></tspan><title></title></text><text id="SvgjsText2367" font-family="inherit" x="37.81471082899306" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2368"></tspan><title></title></text><text id="SvgjsText2370" font-family="inherit" x="75.62942165798611" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2371"></tspan><title></title></text><text id="SvgjsText2373" font-family="inherit" x="113.44413248697919" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 114.44413757324219 239.32000732421875)"><tspan id="SvgjsTspan2374">9 AM</tspan><title>9 AM</title></text><text id="SvgjsText2376" font-family="inherit" x="151.25884331597223" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2377"></tspan><title></title></text><text id="SvgjsText2379" font-family="inherit" x="189.07355414496527" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2380"></tspan><title></title></text><text id="SvgjsText2382" font-family="inherit" x="226.88826497395831" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 227.88827514648438 239.32000732421875)"><tspan id="SvgjsTspan2383">12 PM</tspan><title>12 PM</title></text><text id="SvgjsText2385" font-family="inherit" x="264.70297580295136" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2386"></tspan><title></title></text><text id="SvgjsText2388" font-family="inherit" x="302.5176866319444" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2389"></tspan><title></title></text><text id="SvgjsText2391" font-family="inherit" x="340.33239746093744" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 341.3323974609375 239.32000732421875)"><tspan id="SvgjsTspan2392">15 PM</tspan><title>15 PM</title></text><text id="SvgjsText2394" font-family="inherit" x="378.1471082899305" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2395"></tspan><title></title></text><text id="SvgjsText2397" font-family="inherit" x="415.96181911892353" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2398"></tspan><title></title></text><text id="SvgjsText2400" font-family="inherit" x="453.7765299479166" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 454.7765197753906 239.32000732421875)"><tspan id="SvgjsTspan2401">18 PM</tspan><title>18 PM</title></text><text id="SvgjsText2403" font-family="inherit" x="491.5912407769096" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2404"></tspan><title></title></text><text id="SvgjsText2406" font-family="inherit" x="529.4059516059026" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2407"></tspan><title></title></text><text id="SvgjsText2409" font-family="inherit" x="567.2206624348956" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 568.2206420898438 239.32000732421875)"><tspan id="SvgjsTspan2410">19 PM</tspan><title>19 PM</title></text><text id="SvgjsText2412" font-family="inherit" x="605.0353732638887" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2413"></tspan><title></title></text><text id="SvgjsText2415" font-family="inherit" x="642.8500840928817" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2416"></tspan><title></title></text><text id="SvgjsText2418" font-family="inherit" x="680.6647949218748" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan2419"></tspan><title></title></text></g></g><g id="SvgjsG2443" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2444" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2445" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2448" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2449" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 132, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(23, 198, 83);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
<!--end::Chart-->
</div>
<!--end::Card body-->
</div>
<!--end::Chart widget 36-->    </div>
<!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
<!--begin::Col-->
<div class="col-xl-4">

<!--begin::Chart Widget 35-->
<div class="card card-flush h-md-100">
<!--begin::Header-->
<div class="card-header pt-5 mb-6">
<!--begin::Title-->
<h3 class="card-title align-items-start flex-column">
<!--begin::Statistics-->
<div class="d-flex align-items-center mb-2">
    <!--begin::Currency-->
    <span class="fs-3 fw-semibold text-gray-500 align-self-start me-1">$</span>
    <!--end::Currency-->

    <!--begin::Value-->
    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
    <!--end::Value-->

    <!--begin::Label-->
    <span class="badge badge-light-success fs-base">
        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
        9.2%
    </span>
    <!--end::Label-->
</div>
<!--end::Statistics-->

<!--begin::Description-->
<span class="fs-6 fw-semibold text-gray-500">Avg. Agent Earnings</span>
<!--end::Description-->
</h3>
<!--end::Title-->

<!--begin::Toolbar-->
<div class="card-toolbar">
<!--begin::Menu-->
<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
</button>


<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
<!--begin::Menu item-->
<div class="menu-item px-3">
<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mb-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Ticket
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Customer
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
<!--begin::Menu item-->
<a href="#" class="menu-link px-3">
<span class="menu-title">New Group</span>
<span class="menu-arrow"></span>
</a>
<!--end::Menu item-->

<!--begin::Menu sub-->
<div class="menu-sub menu-sub-dropdown w-175px py-4">
<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Admin Group
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Staff Group
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Member Group
    </a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu sub-->
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Contact
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mt-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<div class="menu-content px-3 py-3">
<a class="btn btn-primary  btn-sm px-4" href="#">
    Generate Reports
</a>
</div>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 2-->

<!--end::Menu-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body py-0 px-0">
<!--begin::Nav-->
<ul class="nav d-flex justify-content-between mb-3 mx-9" role="tablist">
                <!--begin::Item-->
    <li class="nav-item mb-3" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1" aria-selected="true" role="tab">

            1d
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->
                <!--begin::Item-->
    <li class="nav-item mb-3" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px " data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2" aria-selected="false" tabindex="-1" role="tab">

            5d
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->
                <!--begin::Item-->
    <li class="nav-item mb-3" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px " data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3" aria-selected="false" tabindex="-1" role="tab">

            1m
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->
                <!--begin::Item-->
    <li class="nav-item mb-3" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px " data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4" aria-selected="false" tabindex="-1" role="tab">

            6m
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->
                <!--begin::Item-->
    <li class="nav-item mb-3" role="presentation">
        <!--begin::Link-->
        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px " data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5" aria-selected="false" tabindex="-1" role="tab">

            1y
        </a>
        <!--end::Link-->
    </li>
    <!--end::Item-->

</ul>
<!--end::Nav-->

<!--begin::Tab Content-->
<div class="tab-content mt-n6">


    <!--begin::Tap pane-->
    <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_1">
        <!--begin::Chart-->
        <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6" style="min-height: 215px;"><div id="apexchartsuc78v83o" class="apexcharts-canvas apexchartsuc78v83o apexcharts-theme-light" style="width: 472.75px; height: 200px;"><svg id="SvgjsSvg2259" width="472.75" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="472.75" height="200"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 100px;"></div></foreignObject><rect id="SvgjsRect2286" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2307" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG2308" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG2261" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)"><defs id="SvgjsDefs2260"><clipPath id="gridRectMaskuc78v83o"><rect id="SvgjsRect2263" width="447.75" height="171" x="-5" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskuc78v83o"></clipPath><clipPath id="nonForecastMaskuc78v83o"></clipPath><clipPath id="gridRectMarkerMaskuc78v83o"><rect id="SvgjsRect2264" width="444.75" height="159" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2269" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2270" stop-opacity="0.4" stop-color="rgba(27,132,255,0.4)" offset="0.15"></stop><stop id="SvgjsStop2271" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop2272" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG2275" class="apexcharts-grid"><g id="SvgjsG2276" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2280" x1="0" y1="38.75" x2="440.75" y2="38.75" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2281" x1="0" y1="77.5" x2="440.75" y2="77.5" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2282" x1="0" y1="116.25" x2="440.75" y2="116.25" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2277" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2285" x1="0" y1="155" x2="440.75" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2284" x1="0" y1="1" x2="0" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2278" class="apexcharts-grid-borders"><line id="SvgjsLine2279" x1="0" y1="0" x2="440.75" y2="0" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2283" x1="0" y1="155" x2="440.75" y2="155" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2265" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2266" class="apexcharts-series" zIndex="0" seriesName="Earnings" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2273" d="M 0 155 L 0 98.16666666666666C1.4206690440596697, 95.83514704056759, 20.98809523809524, 46.5, 31.482142857142858, 46.5S52.470238095238095, 46.5, 62.964285714285715, 46.5S83.95238095238096, 82.66666666666666, 94.44642857142858, 82.66666666666666S115.43452380952381, 82.66666666666666, 125.92857142857143, 82.66666666666666S146.91666666666669, 113.66666666666666, 157.4107142857143, 113.66666666666666S178.39880952380955, 113.66666666666666, 188.89285714285717, 113.66666666666666S209.88095238095238, 82.66666666666666, 220.375, 82.66666666666666S241.36309523809524, 82.66666666666666, 251.85714285714286, 82.66666666666666S272.8452380952381, 41.33333333333334, 283.3392857142857, 41.33333333333334S304.32738095238096, 41.33333333333334, 314.8214285714286, 41.33333333333334S335.80952380952385, 62, 346.30357142857144, 62S367.29166666666674, 62, 377.78571428571433, 62S398.7738095238096, 38.75, 409.26785714285717, 38.75S435.5029761904762, 38.75, 440.75, 38.75 L 440.75 155 L 0 155M 0 98.16666666666666z" fill="url(#SvgjsLinearGradient2269)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskuc78v83o)" pathTo="M 0 155 L 0 98.16666666666666C1.4206690440596697, 95.83514704056759, 20.98809523809524, 46.5, 31.482142857142858, 46.5S52.470238095238095, 46.5, 62.964285714285715, 46.5S83.95238095238096, 82.66666666666666, 94.44642857142858, 82.66666666666666S115.43452380952381, 82.66666666666666, 125.92857142857143, 82.66666666666666S146.91666666666669, 113.66666666666666, 157.4107142857143, 113.66666666666666S178.39880952380955, 113.66666666666666, 188.89285714285717, 113.66666666666666S209.88095238095238, 82.66666666666666, 220.375, 82.66666666666666S241.36309523809524, 82.66666666666666, 251.85714285714286, 82.66666666666666S272.8452380952381, 41.33333333333334, 283.3392857142857, 41.33333333333334S304.32738095238096, 41.33333333333334, 314.8214285714286, 41.33333333333334S335.80952380952385, 62, 346.30357142857144, 62S367.29166666666674, 62, 377.78571428571433, 62S398.7738095238096, 38.75, 409.26785714285717, 38.75S435.5029761904762, 38.75, 440.75, 38.75 L 440.75 155 L 0 155M 0 98.16666666666666z" pathFrom="M -1 206.66666666666666 L -1 206.66666666666666 L 31.482142857142858 206.66666666666666 L 62.964285714285715 206.66666666666666 L 94.44642857142858 206.66666666666666 L 125.92857142857143 206.66666666666666 L 157.4107142857143 206.66666666666666 L 188.89285714285717 206.66666666666666 L 220.375 206.66666666666666 L 251.85714285714286 206.66666666666666 L 283.3392857142857 206.66666666666666 L 314.8214285714286 206.66666666666666 L 346.30357142857144 206.66666666666666 L 377.78571428571433 206.66666666666666 L 409.26785714285717 206.66666666666666 L 440.75 206.66666666666666"></path><path id="SvgjsPath2274" d="M 0 98.16666666666666C1.4206690440596697, 95.83514704056759, 20.98809523809524, 46.5, 31.482142857142858, 46.5S52.470238095238095, 46.5, 62.964285714285715, 46.5S83.95238095238096, 82.66666666666666, 94.44642857142858, 82.66666666666666S115.43452380952381, 82.66666666666666, 125.92857142857143, 82.66666666666666S146.91666666666669, 113.66666666666666, 157.4107142857143, 113.66666666666666S178.39880952380955, 113.66666666666666, 188.89285714285717, 113.66666666666666S209.88095238095238, 82.66666666666666, 220.375, 82.66666666666666S241.36309523809524, 82.66666666666666, 251.85714285714286, 82.66666666666666S272.8452380952381, 41.33333333333334, 283.3392857142857, 41.33333333333334S304.32738095238096, 41.33333333333334, 314.8214285714286, 41.33333333333334S335.80952380952385, 62, 346.30357142857144, 62S367.29166666666674, 62, 377.78571428571433, 62S398.7738095238096, 38.75, 409.26785714285717, 38.75S435.5029761904762, 38.75, 440.75, 38.75" fill="none" fill-opacity="1" stroke="#1b84ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskuc78v83o)" pathTo="M 0 98.16666666666666C1.4206690440596697, 95.83514704056759, 20.98809523809524, 46.5, 31.482142857142858, 46.5S52.470238095238095, 46.5, 62.964285714285715, 46.5S83.95238095238096, 82.66666666666666, 94.44642857142858, 82.66666666666666S115.43452380952381, 82.66666666666666, 125.92857142857143, 82.66666666666666S146.91666666666669, 113.66666666666666, 157.4107142857143, 113.66666666666666S178.39880952380955, 113.66666666666666, 188.89285714285717, 113.66666666666666S209.88095238095238, 82.66666666666666, 220.375, 82.66666666666666S241.36309523809524, 82.66666666666666, 251.85714285714286, 82.66666666666666S272.8452380952381, 41.33333333333334, 283.3392857142857, 41.33333333333334S304.32738095238096, 41.33333333333334, 314.8214285714286, 41.33333333333334S335.80952380952385, 62, 346.30357142857144, 62S367.29166666666674, 62, 377.78571428571433, 62S398.7738095238096, 38.75, 409.26785714285717, 38.75S435.5029761904762, 38.75, 440.75, 38.75" pathFrom="M -1 206.66666666666666 L -1 206.66666666666666 L 31.482142857142858 206.66666666666666 L 62.964285714285715 206.66666666666666 L 94.44642857142858 206.66666666666666 L 125.92857142857143 206.66666666666666 L 157.4107142857143 206.66666666666666 L 188.89285714285717 206.66666666666666 L 220.375 206.66666666666666 L 251.85714285714286 206.66666666666666 L 283.3392857142857 206.66666666666666 L 314.8214285714286 206.66666666666666 L 346.30357142857144 206.66666666666666 L 377.78571428571433 206.66666666666666 L 409.26785714285717 206.66666666666666 L 440.75 206.66666666666666" fill-rule="evenodd"></path><g id="SvgjsG2267" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2312" r="0" cx="0" cy="0" class="apexcharts-marker wex4atsh3 no-pointer-events" stroke="#1b84ff" fill="#1b84ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2268" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2287" x1="0" y1="0" x2="0" y2="155" stroke="#1b84ff" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="155" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine2288" x1="0" y1="0" x2="440.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2289" x1="0" y1="0" x2="440.75" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2290" class="apexcharts-xaxis" transform="translate(20, 0)"><g id="SvgjsG2291" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2309" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2310" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2311" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2313" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2314" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 132, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
        <!--end::Chart-->

        <!--begin::Table container-->
        <div class="table-responsive mx-9 mt-n6">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr>
                        <th class="min-w-100px"></th>
                        <th class="min-w-100px text-end pe-0"></th>
                        <th class="text-end min-w-50px"></th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-danger">-139.34</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-success">+576.24</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-success">+124.03</span>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->


    <!--begin::Tap pane-->
    <div class="tab-pane fade " id="kt_charts_widget_35_tab_content_2" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_2">
        <!--begin::Chart-->
        <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
        <!--end::Chart-->

        <!--begin::Table container-->
        <div class="table-responsive mx-9 mt-n6">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr>
                        <th class="min-w-100px"></th>
                        <th class="min-w-100px text-end pe-0"></th>
                        <th class="text-end min-w-50px"></th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-success">+134.02</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-danger">+144.04</span>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->


    <!--begin::Tap pane-->
    <div class="tab-pane fade " id="kt_charts_widget_35_tab_content_3" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_3">
        <!--begin::Chart-->
        <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
        <!--end::Chart-->

        <!--begin::Table container-->
        <div class="table-responsive mx-9 mt-n6">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr>
                        <th class="min-w-100px"></th>
                        <th class="min-w-100px text-end pe-0"></th>
                        <th class="text-end min-w-50px"></th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-primary">+185.03</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-danger">+124.03</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-success">-154.03</span>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->


    <!--begin::Tap pane-->
    <div class="tab-pane fade " id="kt_charts_widget_35_tab_content_4" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_4">
        <!--begin::Chart-->
        <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
        <!--end::Chart-->

        <!--begin::Table container-->
        <div class="table-responsive mx-9 mt-n6">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr>
                        <th class="min-w-100px"></th>
                        <th class="min-w-100px text-end pe-0"></th>
                        <th class="text-end min-w-50px"></th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-warning">+124.03</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-info">+144.65</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-primary">+154.06</span>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->


    <!--begin::Tap pane-->
    <div class="tab-pane fade " id="kt_charts_widget_35_tab_content_5" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_5">
        <!--begin::Chart-->
        <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
        <!--end::Chart-->

        <!--begin::Table container-->
        <div class="table-responsive mx-9 mt-n6">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr>
                        <th class="min-w-100px"></th>
                        <th class="min-w-100px text-end pe-0"></th>
                        <th class="text-end min-w-50px"></th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-warning">+114.03</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                            </td>

                            <td class="pe-0 text-end">
                                <span class="fw-bold fs-6 text-info">+165.86</span>
                            </td>
                        </tr>
                                                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Tap pane-->

</div>
<!--end::Tab Content-->
</div>
<!--end::Body-->
</div>
<!--end::Chart Widget 35-->
</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-xl-8">

<!--begin::Table widget 14-->
<div class="card card-flush h-md-100">
<!--begin::Header-->
<div class="card-header pt-7">
<!--begin::Title-->
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bold text-gray-800">Projects Stats</span>

<span class="text-gray-500 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
</h3>
<!--end::Title-->

<!--begin::Toolbar-->
<div class="card-toolbar">
<a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body pt-6">
<!--begin::Table container-->
<div class="table-responsive">
<!--begin::Table-->
<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
    <!--begin::Table head-->
    <thead>
        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
            <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
            <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
            <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
            <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
        </tr>
    </thead>
    <!--end::Table head-->

    <!--begin::Table body-->
    <tbody>

            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-50px me-3">
                            <img src="/metronic8/demo1/assets/media/stock/600x600/img-49.jpg" class="" alt="">
                        </div>

                        <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy App</a>
                            <span class="text-gray-500 fw-semibold d-block fs-7">Jane Cooper</span>
                        </div>
                    </div>
                </td>

                <td class="text-end pe-0">
                    <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                </td>

                <td class="text-end pe-0">
                                                        <!--begin::Label-->
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                            9.2%
                        </span>
                        <!--end::Label-->

                </td>

                <td class="text-end pe-12">
                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                </td>

                <td class="text-end pe-0">
                    <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsq8bq9nsf" class="apexcharts-canvas apexchartsq8bq9nsf apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1835" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="92.25" height="50"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div></foreignObject><g id="SvgjsG1878" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1837" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs1836"><clipPath id="gridRectMaskq8bq9nsf"><rect id="SvgjsRect1840" width="98.25" height="60" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskq8bq9nsf"></clipPath><clipPath id="nonForecastMaskq8bq9nsf"></clipPath><clipPath id="gridRectMarkerMaskq8bq9nsf"><rect id="SvgjsRect1841" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1848" class="apexcharts-grid"><g id="SvgjsG1849" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1852" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1853" x1="0" y1="9.6" x2="92.25" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1854" x1="0" y1="19.2" x2="92.25" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1855" x1="0" y1="28.799999999999997" x2="92.25" y2="28.799999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1856" x1="0" y1="38.4" x2="92.25" y2="38.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1857" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1850" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1859" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1858" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1851" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG1842" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1843" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1846" d="M 0 48 L 0 42.4C1.061294121737277, 42.04105824825796, 4.760455166587203, 39.736680040460776, 7.096153846153847, 40S12.48379152410298, 45.05937262678926, 14.192307692307693, 44S18.930568926364927, 31.33291101986886, 21.28846153846154, 31.2S26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2S33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2S40.954070854274654, 45.09773418637682, 42.57692307692308, 44S47.307692307692314, 29.6, 49.67307692307693, 29.6S55.14637854658235, 42.90226581362318, 56.769230769230774, 44S62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2S68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6S75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4S83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2S91.59781051260946, 37.01179224551878, 92.25, 37.6 L 92.25 48 L 0 48M 0 42.4z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskq8bq9nsf)" pathTo="M 0 48 L 0 42.4C1.061294121737277, 42.04105824825796, 4.760455166587203, 39.736680040460776, 7.096153846153847, 40S12.48379152410298, 45.05937262678926, 14.192307692307693, 44S18.930568926364927, 31.33291101986886, 21.28846153846154, 31.2S26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2S33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2S40.954070854274654, 45.09773418637682, 42.57692307692308, 44S47.307692307692314, 29.6, 49.67307692307693, 29.6S55.14637854658235, 42.90226581362318, 56.769230769230774, 44S62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2S68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6S75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4S83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2S91.59781051260946, 37.01179224551878, 92.25, 37.6 L 92.25 48 L 0 48M 0 42.4z" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"></path><path id="SvgjsPath1847" d="M 0 42.4C1.061294121737277, 42.04105824825796, 4.760455166587203, 39.736680040460776, 7.096153846153847, 40S12.48379152410298, 45.05937262678926, 14.192307692307693, 44S18.930568926364927, 31.33291101986886, 21.28846153846154, 31.2S26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2S33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2S40.954070854274654, 45.09773418637682, 42.57692307692308, 44S47.307692307692314, 29.6, 49.67307692307693, 29.6S55.14637854658235, 42.90226581362318, 56.769230769230774, 44S62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2S68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6S75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4S83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2S91.59781051260946, 37.01179224551878, 92.25, 37.6" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskq8bq9nsf)" pathTo="M 0 42.4C1.061294121737277, 42.04105824825796, 4.760455166587203, 39.736680040460776, 7.096153846153847, 40S12.48379152410298, 45.05937262678926, 14.192307692307693, 44S18.930568926364927, 31.33291101986886, 21.28846153846154, 31.2S26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2S33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2S40.954070854274654, 45.09773418637682, 42.57692307692308, 44S47.307692307692314, 29.6, 49.67307692307693, 29.6S55.14637854658235, 42.90226581362318, 56.769230769230774, 44S62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2S68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6S75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4S83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2S91.59781051260946, 37.01179224551878, 92.25, 37.6" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path><g id="SvgjsG1844" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG1845" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1860" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1861" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1862" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1863" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1879" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1880" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1881" class="apexcharts-point-annotations"></g></g></svg></div></div>
                </td>

                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                </a>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-50px me-3">
                            <img src="/metronic8/demo1/assets/media/stock/600x600/img-40.jpg" class="" alt="">
                        </div>

                        <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                            <span class="text-gray-500 fw-semibold d-block fs-7">Esther Howard</span>
                        </div>
                    </div>
                </td>

                <td class="text-end pe-0">
                    <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                </td>

                <td class="text-end pe-0">
                                                        <!--begin::Label-->
                        <span class="badge badge-light-danger fs-base">
                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>
                            0.4%
                        </span>
                        <!--end::Label-->

                </td>

                <td class="text-end pe-12">
                    <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                </td>

                <td class="text-end pe-0">
                    <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartsx1ynao25" class="apexcharts-canvas apexchartsx1ynao25 apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1882" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="92.25" height="50"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div></foreignObject><g id="SvgjsG1925" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1884" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs1883"><clipPath id="gridRectMaskx1ynao25"><rect id="SvgjsRect1887" width="98.25" height="60" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskx1ynao25"></clipPath><clipPath id="nonForecastMaskx1ynao25"></clipPath><clipPath id="gridRectMarkerMaskx1ynao25"><rect id="SvgjsRect1888" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1895" class="apexcharts-grid"><g id="SvgjsG1896" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1899" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1900" x1="0" y1="9.6" x2="92.25" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1901" x1="0" y1="19.2" x2="92.25" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1902" x1="0" y1="28.799999999999997" x2="92.25" y2="28.799999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1903" x1="0" y1="38.4" x2="92.25" y2="38.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1904" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1897" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1906" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1905" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1898" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG1889" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1890" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1893" d="M 0 48 L 0 34.4C0.41788426919631205, 34.96533286499403, 4.973565602679292, 44.717883503484074, 7.096153846153847, 44S11.892684783272795, 29.211120678797354, 14.192307692307693, 29.6S18.952762858894896, 46.13668004046078, 21.28846153846154, 46.4S26.3378919619225, 32.00759601719264, 28.384615384615387, 31.2S33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8S41.11930446495521, 35.55029414581312, 42.57692307692308, 34.4S48.13409801770864, 28.472249604304647, 49.67307692307693, 29.6S54.41133815713416, 44.93291101986886, 56.769230769230774, 44.8S61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8S68.91481503884557, 39.99240398280736, 70.96153846153847, 40.8S76.43484008504389, 35.49773418637682, 78.0576923076923, 34.4S83.35881684011962, 30.188167758116204, 85.15384615384616, 31.2S91.91122581289721, 41.86530599845891, 92.25, 42.4 L 92.25 48 L 0 48M 0 34.4z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskx1ynao25)" pathTo="M 0 48 L 0 34.4C0.41788426919631205, 34.96533286499403, 4.973565602679292, 44.717883503484074, 7.096153846153847, 44S11.892684783272795, 29.211120678797354, 14.192307692307693, 29.6S18.952762858894896, 46.13668004046078, 21.28846153846154, 46.4S26.3378919619225, 32.00759601719264, 28.384615384615387, 31.2S33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8S41.11930446495521, 35.55029414581312, 42.57692307692308, 34.4S48.13409801770864, 28.472249604304647, 49.67307692307693, 29.6S54.41133815713416, 44.93291101986886, 56.769230769230774, 44.8S61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8S68.91481503884557, 39.99240398280736, 70.96153846153847, 40.8S76.43484008504389, 35.49773418637682, 78.0576923076923, 34.4S83.35881684011962, 30.188167758116204, 85.15384615384616, 31.2S91.91122581289721, 41.86530599845891, 92.25, 42.4 L 92.25 48 L 0 48M 0 34.4z" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"></path><path id="SvgjsPath1894" d="M 0 34.4C0.41788426919631205, 34.96533286499403, 4.973565602679292, 44.717883503484074, 7.096153846153847, 44S11.892684783272795, 29.211120678797354, 14.192307692307693, 29.6S18.952762858894896, 46.13668004046078, 21.28846153846154, 46.4S26.3378919619225, 32.00759601719264, 28.384615384615387, 31.2S33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8S41.11930446495521, 35.55029414581312, 42.57692307692308, 34.4S48.13409801770864, 28.472249604304647, 49.67307692307693, 29.6S54.41133815713416, 44.93291101986886, 56.769230769230774, 44.8S61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8S68.91481503884557, 39.99240398280736, 70.96153846153847, 40.8S76.43484008504389, 35.49773418637682, 78.0576923076923, 34.4S83.35881684011962, 30.188167758116204, 85.15384615384616, 31.2S91.91122581289721, 41.86530599845891, 92.25, 42.4" fill="none" fill-opacity="1" stroke="#f8285a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskx1ynao25)" pathTo="M 0 34.4C0.41788426919631205, 34.96533286499403, 4.973565602679292, 44.717883503484074, 7.096153846153847, 44S11.892684783272795, 29.211120678797354, 14.192307692307693, 29.6S18.952762858894896, 46.13668004046078, 21.28846153846154, 46.4S26.3378919619225, 32.00759601719264, 28.384615384615387, 31.2S33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8S41.11930446495521, 35.55029414581312, 42.57692307692308, 34.4S48.13409801770864, 28.472249604304647, 49.67307692307693, 29.6S54.41133815713416, 44.93291101986886, 56.769230769230774, 44.8S61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8S68.91481503884557, 39.99240398280736, 70.96153846153847, 40.8S76.43484008504389, 35.49773418637682, 78.0576923076923, 34.4S83.35881684011962, 30.188167758116204, 85.15384615384616, 31.2S91.91122581289721, 41.86530599845891, 92.25, 42.4" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path><g id="SvgjsG1891" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG1892" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1907" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1908" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1909" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1910" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1926" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1927" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1928" class="apexcharts-point-annotations"></g></g></svg></div></div>
                </td>

                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                </a>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-50px me-3">
                            <img src="/metronic8/demo1/assets/media/stock/600x600/img-39.jpg" class="" alt="">
                        </div>

                        <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
                            <span class="text-gray-500 fw-semibold d-block fs-7">Jenny Wilson</span>
                        </div>
                    </div>
                </td>

                <td class="text-end pe-0">
                    <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                </td>

                <td class="text-end pe-0">
                                                        <!--begin::Label-->
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                            9.2%
                        </span>
                        <!--end::Label-->

                </td>

                <td class="text-end pe-12">
                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                </td>

                <td class="text-end pe-0">
                    <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsxapjc01e" class="apexcharts-canvas apexchartsxapjc01e apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1929" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="92.25" height="50"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div></foreignObject><g id="SvgjsG1972" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1931" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs1930"><clipPath id="gridRectMaskxapjc01e"><rect id="SvgjsRect1934" width="98.25" height="60" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskxapjc01e"></clipPath><clipPath id="nonForecastMaskxapjc01e"></clipPath><clipPath id="gridRectMarkerMaskxapjc01e"><rect id="SvgjsRect1935" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1942" class="apexcharts-grid"><g id="SvgjsG1943" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1946" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1947" x1="0" y1="9.6" x2="92.25" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1948" x1="0" y1="19.2" x2="92.25" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1949" x1="0" y1="28.799999999999997" x2="92.25" y2="28.799999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1950" x1="0" y1="38.4" x2="92.25" y2="38.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1951" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1944" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1953" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1952" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1945" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG1936" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1937" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1940" d="M 0 48 L 0 46.4C0.16537738632895943, 45.98982822772828, 4.7965309371189475, 29.18887932120265, 7.096153846153847, 28.8S12.145584269614808, 43.19240398280736, 14.192307692307693, 44S18.952762858894896, 34.66331995953922, 21.28846153846154, 34.4S27.00531672028107, 41.23376373096936, 28.384615384615387, 42.4S33.289452666848454, 47.0176068364438, 35.48076923076923, 46.4S41.64488727897258, 39.55582542314945, 42.57692307692308, 38.4S47.62635350038404, 27.99240398280736, 49.67307692307693, 28.8S54.40384615384616, 44, 56.769230769230774, 44S61.56576170634972, 28.411120678797353, 63.86538461538462, 28.8S69.65715948675738, 45.22358449103755, 70.96153846153847, 46.4S76.26266299396576, 42.611832241883796, 78.0576923076923, 41.6S82.79595354174954, 38.267088980131135, 85.15384615384616, 38.4S91.35248534313673, 41.8940838790581, 92.25, 42.4 L 92.25 48 L 0 48M 0 46.4z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxapjc01e)" pathTo="M 0 48 L 0 46.4C0.16537738632895943, 45.98982822772828, 4.7965309371189475, 29.18887932120265, 7.096153846153847, 28.8S12.145584269614808, 43.19240398280736, 14.192307692307693, 44S18.952762858894896, 34.66331995953922, 21.28846153846154, 34.4S27.00531672028107, 41.23376373096936, 28.384615384615387, 42.4S33.289452666848454, 47.0176068364438, 35.48076923076923, 46.4S41.64488727897258, 39.55582542314945, 42.57692307692308, 38.4S47.62635350038404, 27.99240398280736, 49.67307692307693, 28.8S54.40384615384616, 44, 56.769230769230774, 44S61.56576170634972, 28.411120678797353, 63.86538461538462, 28.8S69.65715948675738, 45.22358449103755, 70.96153846153847, 46.4S76.26266299396576, 42.611832241883796, 78.0576923076923, 41.6S82.79595354174954, 38.267088980131135, 85.15384615384616, 38.4S91.35248534313673, 41.8940838790581, 92.25, 42.4 L 92.25 48 L 0 48M 0 46.4z" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"></path><path id="SvgjsPath1941" d="M 0 46.4C0.16537738632895943, 45.98982822772828, 4.7965309371189475, 29.18887932120265, 7.096153846153847, 28.8S12.145584269614808, 43.19240398280736, 14.192307692307693, 44S18.952762858894896, 34.66331995953922, 21.28846153846154, 34.4S27.00531672028107, 41.23376373096936, 28.384615384615387, 42.4S33.289452666848454, 47.0176068364438, 35.48076923076923, 46.4S41.64488727897258, 39.55582542314945, 42.57692307692308, 38.4S47.62635350038404, 27.99240398280736, 49.67307692307693, 28.8S54.40384615384616, 44, 56.769230769230774, 44S61.56576170634972, 28.411120678797353, 63.86538461538462, 28.8S69.65715948675738, 45.22358449103755, 70.96153846153847, 46.4S76.26266299396576, 42.611832241883796, 78.0576923076923, 41.6S82.79595354174954, 38.267088980131135, 85.15384615384616, 38.4S91.35248534313673, 41.8940838790581, 92.25, 42.4" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxapjc01e)" pathTo="M 0 46.4C0.16537738632895943, 45.98982822772828, 4.7965309371189475, 29.18887932120265, 7.096153846153847, 28.8S12.145584269614808, 43.19240398280736, 14.192307692307693, 44S18.952762858894896, 34.66331995953922, 21.28846153846154, 34.4S27.00531672028107, 41.23376373096936, 28.384615384615387, 42.4S33.289452666848454, 47.0176068364438, 35.48076923076923, 46.4S41.64488727897258, 39.55582542314945, 42.57692307692308, 38.4S47.62635350038404, 27.99240398280736, 49.67307692307693, 28.8S54.40384615384616, 44, 56.769230769230774, 44S61.56576170634972, 28.411120678797353, 63.86538461538462, 28.8S69.65715948675738, 45.22358449103755, 70.96153846153847, 46.4S76.26266299396576, 42.611832241883796, 78.0576923076923, 41.6S82.79595354174954, 38.267088980131135, 85.15384615384616, 38.4S91.35248534313673, 41.8940838790581, 92.25, 42.4" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path><g id="SvgjsG1938" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG1939" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1954" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1955" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1956" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1957" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1973" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1974" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1975" class="apexcharts-point-annotations"></g></g></svg></div></div>
                </td>

                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                </a>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-50px me-3">
                            <img src="/metronic8/demo1/assets/media/stock/600x600/img-47.jpg" class="" alt="">
                        </div>

                        <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
                            <span class="text-gray-500 fw-semibold d-block fs-7">Cody Fisher</span>
                        </div>
                    </div>
                </td>

                <td class="text-end pe-0">
                    <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                </td>

                <td class="text-end pe-0">
                                                        <!--begin::Label-->
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                            9.2%
                        </span>
                        <!--end::Label-->

                </td>

                <td class="text-end pe-12">
                    <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                </td>

                <td class="text-end pe-0">
                    <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartstgbpfb1h" class="apexcharts-canvas apexchartstgbpfb1h apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1976" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="92.25" height="50"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div></foreignObject><g id="SvgjsG2019" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1978" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs1977"><clipPath id="gridRectMasktgbpfb1h"><rect id="SvgjsRect1981" width="98.25" height="60" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasktgbpfb1h"></clipPath><clipPath id="nonForecastMasktgbpfb1h"></clipPath><clipPath id="gridRectMarkerMasktgbpfb1h"><rect id="SvgjsRect1982" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1989" class="apexcharts-grid"><g id="SvgjsG1990" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1993" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1994" x1="0" y1="9.6" x2="92.25" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1995" x1="0" y1="19.2" x2="92.25" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1996" x1="0" y1="28.799999999999997" x2="92.25" y2="28.799999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1997" x1="0" y1="38.4" x2="92.25" y2="38.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1998" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1991" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2000" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1999" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1992" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG1983" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1984" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1987" d="M 0 48 L 0 28.8C0.1790612366764685, 29.22392383837551, 5.230276270163127, 44.63458869705468, 7.096153846153847, 45.6S12.204324796386764, 44.86618021403456, 14.192307692307693, 44S18.952762858894896, 32.53668004046077, 21.28846153846154, 32.8S26.718454550703697, 44.52063941204535, 28.384615384615387, 45.6S34.49949738760497, 43.565414471827026, 35.48076923076923, 42.4S40.530199654230195, 28.80759601719264, 42.57692307692308, 28S48.631500507112136, 35.625756669264625, 49.67307692307693, 36.8S54.40384615384616, 44, 56.769230769230774, 44S61.56576170634972, 36.411120678797346, 63.86538461538462, 36.8S68.83895021806391, 45.682116496515924, 70.96153846153847, 46.4S75.75806939865741, 41.98887932120265, 78.0576923076923, 41.6S83.27263102806242, 44.95437255161712, 85.15384615384616, 44S91.8321157308037, 34.96533286499403, 92.25, 34.4 L 92.25 48 L 0 48M 0 28.8z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktgbpfb1h)" pathTo="M 0 48 L 0 28.8C0.1790612366764685, 29.22392383837551, 5.230276270163127, 44.63458869705468, 7.096153846153847, 45.6S12.204324796386764, 44.86618021403456, 14.192307692307693, 44S18.952762858894896, 32.53668004046077, 21.28846153846154, 32.8S26.718454550703697, 44.52063941204535, 28.384615384615387, 45.6S34.49949738760497, 43.565414471827026, 35.48076923076923, 42.4S40.530199654230195, 28.80759601719264, 42.57692307692308, 28S48.631500507112136, 35.625756669264625, 49.67307692307693, 36.8S54.40384615384616, 44, 56.769230769230774, 44S61.56576170634972, 36.411120678797346, 63.86538461538462, 36.8S68.83895021806391, 45.682116496515924, 70.96153846153847, 46.4S75.75806939865741, 41.98887932120265, 78.0576923076923, 41.6S83.27263102806242, 44.95437255161712, 85.15384615384616, 44S91.8321157308037, 34.96533286499403, 92.25, 34.4 L 92.25 48 L 0 48M 0 28.8z" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"></path><path id="SvgjsPath1988" d="M 0 28.8C0.1790612366764685, 29.22392383837551, 5.230276270163127, 44.63458869705468, 7.096153846153847, 45.6S12.204324796386764, 44.86618021403456, 14.192307692307693, 44S18.952762858894896, 32.53668004046077, 21.28846153846154, 32.8S26.718454550703697, 44.52063941204535, 28.384615384615387, 45.6S34.49949738760497, 43.565414471827026, 35.48076923076923, 42.4S40.530199654230195, 28.80759601719264, 42.57692307692308, 28S48.631500507112136, 35.625756669264625, 49.67307692307693, 36.8S54.40384615384616, 44, 56.769230769230774, 44S61.56576170634972, 36.411120678797346, 63.86538461538462, 36.8S68.83895021806391, 45.682116496515924, 70.96153846153847, 46.4S75.75806939865741, 41.98887932120265, 78.0576923076923, 41.6S83.27263102806242, 44.95437255161712, 85.15384615384616, 44S91.8321157308037, 34.96533286499403, 92.25, 34.4" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktgbpfb1h)" pathTo="M 0 28.8C0.1790612366764685, 29.22392383837551, 5.230276270163127, 44.63458869705468, 7.096153846153847, 45.6S12.204324796386764, 44.86618021403456, 14.192307692307693, 44S18.952762858894896, 32.53668004046077, 21.28846153846154, 32.8S26.718454550703697, 44.52063941204535, 28.384615384615387, 45.6S34.49949738760497, 43.565414471827026, 35.48076923076923, 42.4S40.530199654230195, 28.80759601719264, 42.57692307692308, 28S48.631500507112136, 35.625756669264625, 49.67307692307693, 36.8S54.40384615384616, 44, 56.769230769230774, 44S61.56576170634972, 36.411120678797346, 63.86538461538462, 36.8S68.83895021806391, 45.682116496515924, 70.96153846153847, 46.4S75.75806939865741, 41.98887932120265, 78.0576923076923, 41.6S83.27263102806242, 44.95437255161712, 85.15384615384616, 44S91.8321157308037, 34.96533286499403, 92.25, 34.4" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path><g id="SvgjsG1985" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG1986" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2001" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2002" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2003" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2004" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2020" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2021" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2022" class="apexcharts-point-annotations"></g></g></svg></div></div>
                </td>

                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                </a>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-50px me-3">
                            <img src="/metronic8/demo1/assets/media/stock/600x600/img-48.jpg" class="" alt="">
                        </div>

                        <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
                            <span class="text-gray-500 fw-semibold d-block fs-7">Savannah Nguyen</span>
                        </div>
                    </div>
                </td>

                <td class="text-end pe-0">
                    <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                </td>

                <td class="text-end pe-0">
                                                        <!--begin::Label-->
                        <span class="badge badge-light-danger fs-base">
                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>
                            0.4%
                        </span>
                        <!--end::Label-->

                </td>

                <td class="text-end pe-12">
                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                </td>

                <td class="text-end pe-0">
                    <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexcharts6edv2r58" class="apexcharts-canvas apexcharts6edv2r58 apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2023" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="92.25" height="50"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div></foreignObject><g id="SvgjsG2066" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2025" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs2024"><clipPath id="gridRectMask6edv2r58"><rect id="SvgjsRect2028" width="98.25" height="60" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask6edv2r58"></clipPath><clipPath id="nonForecastMask6edv2r58"></clipPath><clipPath id="gridRectMarkerMask6edv2r58"><rect id="SvgjsRect2029" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2036" class="apexcharts-grid"><g id="SvgjsG2037" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2040" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2041" x1="0" y1="9.6" x2="92.25" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2042" x1="0" y1="19.2" x2="92.25" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2043" x1="0" y1="28.799999999999997" x2="92.25" y2="28.799999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2044" x1="0" y1="38.4" x2="92.25" y2="38.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2045" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2038" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2047" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2046" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2039" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG2030" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2031" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2034" d="M 0 48 L 0 45.6C0.19439821738405735, 45.1616820681205, 4.760455166587203, 29.33668004046078, 7.096153846153847, 29.6S11.941358282611738, 46.69246885938563, 14.192307692307693, 47.2S18.952762858894896, 33.063319959539214, 21.28846153846154, 32.8S26.048916705048743, 45.33668004046078, 28.384615384615387, 45.6S33.11538461538462, 34.4, 35.48076923076923, 34.4S40.61126416180717, 44.71358904207239, 42.57692307692308, 45.6S48.74104112512643, 41.95582542314945, 49.67307692307693, 40.8S54.577914205309995, 27.382393163556202, 56.769230769230774, 28S62.09203610181831, 43.77536038475126, 63.86538461538462, 44.8S68.85653380572191, 47.140338454473415, 70.96153846153847, 46.4S77.17536677968181, 34.743914722493834, 78.0576923076923, 33.6S83.77454748951185, 26.83376373096936, 85.15384615384616, 28S92.08462261367104, 45.189828227728285, 92.25, 45.6 L 92.25 48 L 0 48M 0 45.6z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6edv2r58)" pathTo="M 0 48 L 0 45.6C0.19439821738405735, 45.1616820681205, 4.760455166587203, 29.33668004046078, 7.096153846153847, 29.6S11.941358282611738, 46.69246885938563, 14.192307692307693, 47.2S18.952762858894896, 33.063319959539214, 21.28846153846154, 32.8S26.048916705048743, 45.33668004046078, 28.384615384615387, 45.6S33.11538461538462, 34.4, 35.48076923076923, 34.4S40.61126416180717, 44.71358904207239, 42.57692307692308, 45.6S48.74104112512643, 41.95582542314945, 49.67307692307693, 40.8S54.577914205309995, 27.382393163556202, 56.769230769230774, 28S62.09203610181831, 43.77536038475126, 63.86538461538462, 44.8S68.85653380572191, 47.140338454473415, 70.96153846153847, 46.4S77.17536677968181, 34.743914722493834, 78.0576923076923, 33.6S83.77454748951185, 26.83376373096936, 85.15384615384616, 28S92.08462261367104, 45.189828227728285, 92.25, 45.6 L 92.25 48 L 0 48M 0 45.6z" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"></path><path id="SvgjsPath2035" d="M 0 45.6C0.19439821738405735, 45.1616820681205, 4.760455166587203, 29.33668004046078, 7.096153846153847, 29.6S11.941358282611738, 46.69246885938563, 14.192307692307693, 47.2S18.952762858894896, 33.063319959539214, 21.28846153846154, 32.8S26.048916705048743, 45.33668004046078, 28.384615384615387, 45.6S33.11538461538462, 34.4, 35.48076923076923, 34.4S40.61126416180717, 44.71358904207239, 42.57692307692308, 45.6S48.74104112512643, 41.95582542314945, 49.67307692307693, 40.8S54.577914205309995, 27.382393163556202, 56.769230769230774, 28S62.09203610181831, 43.77536038475126, 63.86538461538462, 44.8S68.85653380572191, 47.140338454473415, 70.96153846153847, 46.4S77.17536677968181, 34.743914722493834, 78.0576923076923, 33.6S83.77454748951185, 26.83376373096936, 85.15384615384616, 28S92.08462261367104, 45.189828227728285, 92.25, 45.6" fill="none" fill-opacity="1" stroke="#f8285a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6edv2r58)" pathTo="M 0 45.6C0.19439821738405735, 45.1616820681205, 4.760455166587203, 29.33668004046078, 7.096153846153847, 29.6S11.941358282611738, 46.69246885938563, 14.192307692307693, 47.2S18.952762858894896, 33.063319959539214, 21.28846153846154, 32.8S26.048916705048743, 45.33668004046078, 28.384615384615387, 45.6S33.11538461538462, 34.4, 35.48076923076923, 34.4S40.61126416180717, 44.71358904207239, 42.57692307692308, 45.6S48.74104112512643, 41.95582542314945, 49.67307692307693, 40.8S54.577914205309995, 27.382393163556202, 56.769230769230774, 28S62.09203610181831, 43.77536038475126, 63.86538461538462, 44.8S68.85653380572191, 47.140338454473415, 70.96153846153847, 46.4S77.17536677968181, 34.743914722493834, 78.0576923076923, 33.6S83.77454748951185, 26.83376373096936, 85.15384615384616, 28S92.08462261367104, 45.189828227728285, 92.25, 45.6" pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path><g id="SvgjsG2032" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG2033" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2048" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2049" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2050" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2051" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2067" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2068" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2069" class="apexcharts-point-annotations"></g></g></svg></div></div>
                </td>

                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>                                </a>
                </td>
            </tr>
                        </tbody>
    <!--end::Table body-->
</table>
</div>
<!--end::Table-->
</div>
<!--end: Card Body-->
</div>
<!--end::Table widget 14-->    </div>
<!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">
<!--begin::Col-->
<div class="col-xl-4 mb-5 mb-xl-0">
<!--begin::Chart widget 31-->
<div class="card card-flush h-xl-100">
<!--begin::Header-->
<div class="card-header pt-7 mb-7">
<!--begin::Title-->
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bold text-gray-800">Warephase stats</span>
<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
</h3>
<!--end::Title-->

<!--begin::Toolbar-->
<div class="card-toolbar">
<a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body d-flex align-items-end pt-0">
<!--begin::Chart-->
<div id="kt_charts_widget_31_chart" class="w-100 h-300px"><div style="position: relative; width: 100%; height: 100%;"><div aria-hidden="true" style="position: absolute; width: 443px; height: 300px;"><div><canvas class="am5-layer-0" width="443" height="300" style="position: absolute; top: 0px; left: 0px; width: 443px; height: 300px;"></canvas><canvas class="am5-layer-30" width="443" height="300" style="position: absolute; top: 0px; left: 0px; width: 443px; height: 300px;"></canvas></div></div><div class="am5-html-container" style="position: absolute; pointer-events: none; overflow: hidden; width: 443px; height: 300px;"></div><div class="am5-reader-container" role="alert" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px);"></div><div class="am5-focus-container" role="graphics-document" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 443px; height: 300px;"><div role="button" aria-label="Zoom Out" aria-hidden="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div><div tabindex="0" role="checkbox" aria-label="Revenue; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div><div tabindex="0" role="checkbox" aria-label="Expense; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div></div><div class="am5-tooltip-container"><div role="tooltip" aria-hidden="true" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px); pointer-events: none;">Revenue:
Expense:</div></div></div></div>
<!--end::Chart-->
</div>
<!--end::Body-->
</div>
<!--end::Chart widget 31-->

</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-xl-8">

<!--begin::Chart widget 24-->
<div class="card card-flush overflow-hidden h-xl-100">
<!--begin::Header-->
<div class="card-header py-5">
<!--begin::Title-->
<h3 class="card-title align-items-start flex-column">
<span class="card-label fw-bold text-gray-900">Human Resources</span>
<span class="text-gray-500 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
</h3>
<!--end::Title-->

<!--begin::Toolbar-->
<div class="card-toolbar">
<!--begin::Menu-->
<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">

    <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
</button>

<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
<!--begin::Menu item-->
<div class="menu-item px-3">
<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mb-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Ticket
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Customer
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
<!--begin::Menu item-->
<a href="#" class="menu-link px-3">
<span class="menu-title">New Group</span>
<span class="menu-arrow"></span>
</a>
<!--end::Menu item-->

<!--begin::Menu sub-->
<div class="menu-sub menu-sub-dropdown w-175px py-4">
<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Admin Group
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Staff Group
    </a>
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
    <a href="#" class="menu-link px-3">
        Member Group
    </a>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu sub-->
</div>
<!--end::Menu item-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<a href="#" class="menu-link px-3">
New Contact
</a>
</div>
<!--end::Menu item-->

<!--begin::Menu separator-->
<div class="separator mt-3 opacity-75"></div>
<!--end::Menu separator-->

<!--begin::Menu item-->
<div class="menu-item px-3">
<div class="menu-content px-3 py-3">
<a class="btn btn-primary  btn-sm px-4" href="#">
    Generate Reports
</a>
</div>
</div>
<!--end::Menu item-->
</div>
<!--end::Menu 2-->

<!--end::Menu-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header-->

<!--begin::Card body-->
<div class="card-body pt-0">
<!--begin::Chart-->
<div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"><div style="position: relative; width: 100%; height: 100%;"><div aria-hidden="true" style="position: absolute; width: 980px; height: 300px;"><div><canvas class="am5-layer-0" width="980" height="300" style="position: absolute; top: 0px; left: 0px; width: 980px; height: 300px;"></canvas><canvas class="am5-layer-30" width="980" height="300" style="position: absolute; top: 0px; left: 0px; width: 980px; height: 300px;"></canvas></div></div><div class="am5-html-container" style="position: absolute; pointer-events: none; overflow: hidden; width: 980px; height: 300px;"></div><div class="am5-reader-container" role="alert" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px);"></div><div class="am5-focus-container" role="graphics-document" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 980px; height: 300px;"><div role="button" aria-label="Zoom Out" aria-hidden="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div></div><div class="am5-tooltip-container"></div></div></div>
<!--end::Chart-->
</div>
<!--end::Card body-->
</div>
<!--end::Chart widget 24-->

</div>
<!--end::Col-->
</div>
<!--end::Row-->
</div>
<!--end::Content container-->
</div>
<!--end::Content-->

                        </div>
    <!--end::Content wrapper-->


<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer ">
<!--begin::Footer container-->
<div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
<!--begin::Copyright-->
<div class="text-gray-900 order-2 order-md-1">
<span class="text-muted fw-semibold me-1">2024©</span>
<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
</div>
<!--end::Copyright-->

<!--begin::Menu-->
<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
<li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>

<li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>

<li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
</ul>
<!--end::Menu-->        </div>
<!--end::Footer container-->
</div>
<!--end::Footer-->                            </div>

@endsection


@push('scripts')



@endpush
