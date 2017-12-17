
  <!-- HEADER ===========================================-->
  <header class="navbar-fixed-top">
    <div class="container">
      <!--======= LOGO =========-->
      <div class="logo"> <a href="{{route('main')}}"><img src="{{asset('images/captiveportal-logo1.png')}}" alt="โรงพยาบาลค่ายกฤษณ์สีวะรา" style="max-height: 5rem;"></a> </div>

      <!--======= NAVIGATION =========-->
      <nav class="webimenu">
        <!-- MENU BUTTON RESPONSIVE -->
        <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>

        <ul class="ownmenu">
          <li class="{{Nav::isRoute('main')}}"><a href="{{route('main')}}">หน้าแรก </a>

          </li>
          <li><a href="#">เกี่ยวกับโรงพยาบาล</a>
            <!--======= MEGA MENU =========-->
            <ul class="megamenu full-width animated-3s fadeIn">
              <li class="row nav-post">
                <div class="col-sm-6 boder-da-r">
                  <ul>
                    <li><a href="#">ประวัติโรงพยาบาล </a></li>
                    <li><a href="#">พันธกิจ วิสัยทัศน์และค่านิยม </a></li>
                    <li><a href="#">คณะผู้บริหาร </a></li>
                    <li><a href="#">นโยบายคุณภาพ </a></li>
                    <li><a href="#">เข็มมุ่ง จุดเน้นในการพัฒนา ปี ๕๙ - ๖๐ </a></li>
                    <li><a href="#">โครงสร้างองค์กร </a></li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul>
                    <li><a href="#">ข้อมูลตัวชี้วัด รพ.ค่ายฯ</a></li>
                    <li><a href="#">ข้อมูลตัวชี้วัด โครงการ THIP</a></li>
                    <li><a href="#">ข้อมูลสถิติ</a></li>
                    <li><a href="#">KM – โรงพยาบาลค่ายกฤษณ์สีวะรา</a></li>
                    <li class="{{Nav::isRoute('downloads')}}"><a href="{{route('downloads')}}">ดาวห์โหลดไฟล์</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="#">บริการของเรา </a>
            {{-- <ul class="dropdown animated-3s fadeIn">
              <li><a href="#">ตรวจโรคผู้ป่วยนอก</a></li>
              <li><a href="#">แพทย์ทางเลือก ฝั่งเข็ม</a></li>
              <li><a href="#">กายภาพบำบัด</a></li>
              <li><a href="#">คลินิคจัดฟัน</a></li>
              <li><a href="#">หน่วยไตเทียม</a></li>
              <li><a href="#">นวดแผนไทย</a></li>
            </ul> --}}
          </li>
          <li class="#"><a class="nav-link" href="#">ข่าวสารและกิจกรรม</a>
          <ul class="dropdown animated-3s fadeIn">
            <li><a href="#">กิจกรรมของหน่วย</a></li>
            <li><a href="#">กิจกรรมนอกหน่วย</a></li>
            <li><a href="#">หน่วยแพทย์เคลื่อนที่</a></li>
            <li><a href="#">ออกเยี่ยมบ้านในพื้นที่รับผิดชอบ</a></li>
            <li class="{{Nav::isRoute('tenders')}}"><a href="{{route('tenders')}}">ประกาศจัดซื้อจัดจ้าง</a></li>
            <li><a href="#">ประกาศรับสมัครงาน</a></li>
          </ul>
          </li>
          <li class="{{Nav::isRoute('contact')}}"><a class="nav-link" href="{{route('contact')}}" >ติดต่อเรา</a> </li>
          <li><a href="{{route('login')}}" class="btn2">เข้าสู่ระบบ</a></li>

        </ul>
      </nav>

    </div>
  </header>
