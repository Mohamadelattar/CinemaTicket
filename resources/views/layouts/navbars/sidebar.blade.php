<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Cinema Ticket') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
       
      <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
        <a class="nav-link" href="admin/user">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Client') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == '/film' ? ' active' : '' }}">
        <a class="nav-link" href='film'>
          <i class="material-icons">content_paste</i>
            <p>{{ __('Film') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'acteur' ? ' active' : '' }}">
        <a class="nav-link" href="acteur">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Acteur') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'genre' ? ' active' : '' }}">
        <a class="nav-link" href="genre">
          <i class="material-icons">library_books</i>
            <p>{{ __('Genre') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'realisateur' ? ' active' : '' }}">
        <a class="nav-link" href="realisateur">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Realisateur') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'abonne' ? ' active' : '' }}">
        <a class="nav-link" href="abonne">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Abonnement') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'salle' ? ' active' : '' }}">
        <a class="nav-link" href="salle">
          <i class="material-icons">notifications</i>
          <p>{{ __('Salle') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
