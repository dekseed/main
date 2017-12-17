<div class="container">
<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{route('home')}}">
      <img src="{{asset('images/captiveportal-logo1.png')}}" alt="โรงพยาบาลค่ายกฤษณ์สีวะรา" style="max-height: 3rem;">
    </a>
    @if (Request::segment(1) == "manage")
      <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
        <span class="icon">
          <i class="fa fa-arrow-circle-right"></i>
        </span>
      </a>
    @endif

    <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-lg fa-github"></i>
      </span>
    </a>

    <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-lg fa-twitter"></i>
      </span>
    </a>

    <div class="navbar-burger burger" data-target="navMenuTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuTransparentExample" class="navbar-menu">
    <div class="navbar-start">
       <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="/versions/0.5.3/documentation/overview/start/">
          Docs
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="/versions/0.5.3/documentation/overview/start/">
            Overview
          </a>
          <a class="navbar-item " href="https://versions.bulma.io/0.5.3/documentation/modifiers/syntax/">
            Modifiers
          </a>
          <a class="navbar-item " href="https://versions.bulma.io/0.5.3/documentation/columns/basics/">
            Columns
          </a>
          <a class="navbar-item " href="https://versions.bulma.io/0.5.3/documentation/layout/container/">
            Layout
          </a>
          <a class="navbar-item " href="https://versions.bulma.io/0.5.3/documentation/form/general/">
            Form
          </a>
          <a class="navbar-item " href="https://versions.bulma.io/0.5.3/documentation/elements/box/">
            Elements
          </a>

            <a class="navbar-item is-active" href="https://versions.bulma.io/0.5.3/documentation/components/breadcrumb/">
              Components
            </a>

          <hr class="navbar-divider">
          <div class="navbar-item">
            <div>
              <p class="is-size-6-desktop">
                <strong class="has-text-info">0.5.3</strong>
              </p>

                <small>
                  <a class="bd-view-all-versions" href="/versions">View all versions</a>
                </small>

            </div>
          </div>
        </div>
      </div>
      {{--
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link " href="https://versions.bulma.io/0.5.3/blog/">
          Blog
        </a>
        <div id="blogDropdown" class="navbar-dropdown is-boxed" data-style="width: 18rem;">

            <a class="navbar-item" href="/2017/08/03/list-of-tags/">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">03 Aug 2017</small>
                </p>
                <p>New feature: list of tags</p>
              </div>
            </a>

            <a class="navbar-item" href="/2017/08/01/bulma-bootstrap-comparison/">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">01 Aug 2017</small>
                </p>
                <p>Bulma / Bootstrap comparison</p>
              </div>
            </a>

            <a class="navbar-item" href="/2017/07/24/access-previous-bulma-versions/">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">24 Jul 2017</small>
                </p>
                <p>Access previous Bulma versions</p>
              </div>
            </a>

          <a class="navbar-item" href="https://versions.bulma.io/0.5.3/blog/">
            More posts
          </a>
          <hr class="navbar-divider">
          <div class="navbar-item">
            <div class="navbar-content">
              <div class="level is-mobile">
                <div class="level-left">
                  <div class="level-item">
                    <strong>Stay up to date!</strong>
                  </div>
                </div>
                <div class="level-right">
                  <div class="level-item">
                    <a class="button bd-is-rss is-small" href="https://versions.bulma.io/0.5.3/atom.xml">
                      <span class="icon is-small">
                        <i class="fa fa-rss"></i>
                      </span>
                      <span>Subscribe</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-link">
          More
        </div>
        <div id="moreDropdown" class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="https://versions.bulma.io/0.5.3/extensions/">
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item">
                  <p>
                    <strong>Extensions</strong>
                    <br>
                    <small>Side projects to enhance Bulma</small>
                  </p>
                </div>
              </div>
              <div class="level-right">
                <div class="level-item">
                  <span class="icon has-text-info">
                    <i class="fa fa-plug"></i>
                  </span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div> --}}
      <a class="navbar-item " href="https://versions.bulma.io/0.5.3/expo/"><span class="bd-emoji">⭐️</span> หน้าแรก</a>
      <a class="navbar-item " href="https://versions.bulma.io/0.5.3/love/"><span class="bd-emoji">❤️</span> ติดต่อเรา</a>
    </div>

    <div class="navbar-end">
      <a class="navbar-item is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">
        <span class="icon" style="color: #333;">
          <i class="fa fa-lg fa-github"></i>
        </span>
      </a>
      <a class="navbar-item is-hidden-desktop-only" href="https://twitter.com/jgthms" target="_blank">
        <span class="icon" style="color: #55acee;">
          <i class="fa fa-lg fa-twitter"></i>
        </span>
      </a>
      <div class="navbar-item">
        <div class="field is-grouped">
          {{-- <p class="control">
            <a class="bd-tw-button button"
  data-social-network="Twitter"
  data-social-action="tweet"
  data-social-target="https://versions.bulma.io/0.5.3"
  target="_blank"
  href="https://twitter.com/intent/tweet?text=Bulma v0.5.3: a modern CSS framework based on Flexbox&hashtags=bulmaio&url=https://versions.bulma.io/0.5.3&via=jgthms">
  <span class="icon">
    <i class="fa fa-twitter"></i>
  </span>
  <span>
    Tweet
  </span>
</a>

          </p> --}}
          @guest
          <p class="control">
            <a class="button is-primary" href="{{route('login')}}" >
              <span class="icon">
                <i class="fa fa-download"></i>
              </span>
              <span>เข้าสู่ระบบ</span>
            </a>
          </p>
            @else
              <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              Hey {{Auth::user()->name}}
            </a>
            <div class="navbar-dropdown is-boxed">
              <a class="navbar-item " href="#">
                <span class="icon">
                  <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                </span>Profile
              </a>
              <a class="navbar-item " href="#">
                <span class="icon">
                  <i class="fa fa-fw fa-bell m-r-5"></i>
                </span>Notifications
              </a>
              <a class="navbar-item " href="{{route('manage.dashboard')}}">
                <span class="icon">
                  <i class="fa fa-fw fa-cog m-r-5"></i>
                </span>Manage
              </a>
              <hr class="navbar-divider">
              <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-5"></i>
                </span>
                Logout
              </a>
              @include('_includes.forms.logout')
            </div>
            </div>
          </div>
        @endguest


      </div>

</nav>
</div>
