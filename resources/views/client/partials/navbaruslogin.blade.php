

  <div  class="w3-col s3 w3-padding">
     <a href="{{route('infouser') }}"><img src="{{asset('resources/upload/avatar/'.Auth::user()->avatar)}}" class="w3-circle w3-margin-right" style="width:35px;height: 35px;"></a>
      <a href="{{route('infouser') }}"> <span>hi, <strong>{{Auth::user()->name}}</strong></span></a><br>
      <a href="{{route('infouser') }}" class="w3-bar-item w3-button content-thanhtoan"><i class="fa fa-user"></i></a>
      <a href="{{route('donhang') }}" class="w3-bar-item w3-button "><i class="fa fa-shopping-cart"></i><span class="w3-badge w3-right w3-small w3-green">{{$numb}}</span></a>
     <div class="w3-dropdown-hover w3-hide-small">
     <a href="{{route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="textinfosp2"><button class="w3-button " title="Notifications"><i class="fa fa-share"></i></button>      
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form>
    
    <div class="w3-dropdown-content w3-card-2 w3-bar-block" style="width:120px">
      <!-- <a href="{{route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="textinfosp2">Logout 
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form>
     </a>
      <a href="#" class="w3-bar-item w3-button">.........</a>
       -->
    </div>
    </div>
  </div>
