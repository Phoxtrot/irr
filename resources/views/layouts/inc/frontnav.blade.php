<nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link " href="">Home</a></li>
      <li class="dropdown"><a class="nav-link active" href=""><span>Filter Student</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li class="dropdown"><a class="nav-link scrollto" href="#courses"><span>By Gender</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{route('student.male')}}">Male</a></li>
              <li><a class="nav-link scrollto" href="{{route('student.female')}}">Female</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#courses"><span>By Language</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{route('student.yoruba')}}">Yoruba</a></li>
              <li><a class="nav-link scrollto" href="{{route('student.igbo')}}">Igbo</a></li>
              <li><a class="nav-link scrollto" href="{{route('student.hausa')}}">Hausa</a></li>
              <li><a class="nav-link scrollto" href="{{route('student.others')}}">Others</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#courses"><span>Prefferd Days</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{route('student.mwf')}}">Mondays, Wednesdays, Fridays</a></li>
              <li><a class="nav-link scrollto" href="{{route('student.tts')}}">Tuesdays, Thursdays, Saturdays</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown"><a class="nav-link active" href=""><span>Filter Tutor</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li class="dropdown"><a class="nav-link scrollto" href="#courses"><span>By Gender</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{route('tutor.male')}}">Male</a></li>
              <li><a class="nav-link scrollto" href="{{route('tutor.female')}}">Female</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#courses"><span>By Language</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{route('tutor.yoruba')}}">Yoruba</a></li>
              <li><a class="nav-link scrollto" href="{{route('tutor.igbo')}}">Igbo</a></li>
              <li><a class="nav-link scrollto" href="{{route('tutor.hausa')}}">Hausa</a></li>
              <li><a class="nav-link scrollto" href="{{route('tutor.others')}}">Others</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#courses"><span>Hizb Memorized</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{route('tutor.10')}}">10</a></li>
              <li><a class="nav-link scrollto" href="{{route('tutor.20')}}">20</a></li>
              <li><a class="nav-link scrollto" href="{{route('tutor.40')}}">40</a></li>
              <li><a class="nav-link scrollto" href="{{route('tutor.60')}}">60</a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
