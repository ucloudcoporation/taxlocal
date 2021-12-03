@extends('layouts.main',['title'=>'Login'])

@section('content')
<!-- Background Start -->
<div class="fixed-background"></div>
<!-- Background End -->

<div class="container-fluid p-0 h-100 position-relative">
  <div class="row g-0 h-100">
    <!-- Left Side Start -->
    <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
      <div class="min-h-100 d-flex align-items-center">
        <div class="w-100 w-lg-75 w-xxl-75">
          <div>
            <div class="mb-5">
              <h1 class="display-3 text-white">ภาษีที่ดินและสิ่งปลูกสร้าง</h1>
              <h2 class="display-5 text-white">(ระบบสารสนเทศท้องถิ่น)</h2>
            </div>
            <p class="icon-22 text-white lh-1-5 mb-5">
              ระบบงานจัดเก็บภาษีที่ดินและสิ่งปลูกสร้างตามระเบียบข้อบังคับของกฏกระทรวงมหาดไทย ปี พ.ศ. 2562
            </p>
            <div class="mb-5">
              <a class="btn btn-lg btn-outline-white" href="javascript:void(0)">Read More...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Left Side End -->

    <!-- Right Side Start -->
    <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
      <div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
          <div class="sh-11">
            <h2 class="display-3">TaxLocal</h2>
          </div>
          <div class="mb-5">
            <h3 class="cta-1 mb-0 text-primary">Welcome,</h3>
            <h3 class="cta-1 text-primary">Let's get started!</h3>
          </div>
          <div class="mb-5 text-body">
            <p>กรุณากรอกชื่อผู้ใช้และรหัสผ่าน</p>
          </div>
          <div>
            <form id="loginForm" class="tooltip-end-bottom" novalidate>

              <div class="mb-3 filled form-group tooltip-end-top">
                <i data-cs-icon="user"></i>
                <input class="form-control" type="text" name="username" placeholder="Username" />
              </div>
              <div class="mb-3 filled form-group tooltip-end-top">
                <i data-cs-icon="lock-off"></i>
                <input class="form-control pe-7" name="password" type="password" placeholder="Password" />
              </div>
              <button type="submit" class="btn btn-lg btn-primary">เข้าสู่ระบบ</button>

              <a class="btn btn-lg btn-primary" href="{{ url('dashboard') }}">Dashboard</a>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Right Side End -->
  </div>
</div>
@endsection