<div class="sidebar" data-color="blue">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="/" class="simple-text logo-mini">
          LM
        </a>
        <a href="/" class="simple-text logo-normal">
          Leandro Mello
        </a>
      </div>
      <ul class="nav">
      <li class="{{ url()->current()==url('/') ? 'active': ''}}">
          <a href="/">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Misturas</p>
          </a>
        </li>
        <li class="{{ url()->current()==url('/ingredientes') ? 'active': ''}}">
          <a href="/ingredientes">
            <i class="tim-icons icon-atom"></i>
            <p>Ingredientes</p>
          </a>
        </li>
        <li class="{{ url()->current()==url('/nutrientes') ? 'active': ''}}">
          <a href="/nutrientes">
            <i class="tim-icons icon-pin"></i>
            <p>Nutrientes</p>
          </a>
        </li>
        <li class="{{ url()->current()==url('/restricoes') ? 'active': ''}}">
          <a href="/restricoes">
            <i class="tim-icons icon-bell-55"></i>
            <p>Restrições</p>
          </a>
        </li>
        <li>
          <a href="./user.html">
            <i class="tim-icons icon-single-02"></i>
            <p>Perfil do Usuário</p>
          </a>
        </li>
      </ul>
    </div>
  </div>