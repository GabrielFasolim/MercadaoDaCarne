<aside class="aside-bar">
  <div id="menu__bar">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="30"
      height="30"
      fill="currentColor"
      class="bi bi-x menu__bar-icon"
      viewBox="0 0 16 16"
    >
      <path
        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
      />
    </svg>
    <ul>
      <li><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Bovinos">BOVINOS</a></li>
      <li><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Aves">AVES</a></li>
      <li><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Suínos">SUÍNOS</a></li>
      <li><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Linguiças">LINGUIÇAS</a></li>
      <li><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Kits">KITS</a></li>
      <li><a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Tudo">TUDO</a></li>
    </ul>
  </div>
</aside>

<aside class="search-aside-bar">
  <div id="menu__bar-search">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="30"
      height="30"
      fill="currentColor"
      class="bi bi-x search__bar-icon"
      viewBox="0 0 16 16"
    >
      <path
        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
      />
    </svg>
    <div class="categories-search">
      <input type="text" placeholder="Procurar..." id="search">
      <button class="btn-search" id="button">
        <i class="bi bi-search"></i>
      </button>
    </div>
  </div>
</aside>

<header class="header__container">
  <div class="header-infos">
    <i class="fas fa-location-dot"></i>
    <p>Rio Grande do Sul</p>
  </div>
  <div class="header-content container-md">
    <a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/home/home.php"><img class="img-fluid" src="../../img/logo.png" alt="Logo mercadão da carne"></a>
    <div class="content-principal">
      <div class="principal-search">
        <div class="categories-nav"><p>categorias</p><p>Veja nossos Produtos</p></div>
        <div class="categories-search">
          <input type="text" placeholder="Procurar..." id="search">
          <button class="btn-search" id="button">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </div>
      <div class="principal-nav">
        <ul class="principal-categories">
          <a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Bovinos"><li><i class="icon-menu icon-bovinos"></i><p>bovinos</p></li></a>
          <a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Aves"><li><i class="icon-menu icon-aves"></i><p>aves</p></li></a>
          <a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Suínos"><li><i class="icon-menu icon-suinos"></i><p>suínos</p></li></a>
          <a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Linguiças"><li><i class="icon-menu icon-linguicas"></i><p>linguiças</p></li></a>
          <a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Kits"><li><i class="icon-menu icon-kits"></i><p>kits</p></li></a>
          <a href="http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/category.php?category=Tudo"><li><i class="icon-menu icon-tudo"></i><p>tudo</p></li></a>
        </ul>
      </div>
    </div>
    <div class="responsive-menu">
      <i class="fas fa-magnifying-glass fa-lg me-2" id="app__search-icon"></i>
      <i class="fas fa-bars fa-lg" id="app__nav-icon"></i>
    </div>
  </div>
  <div class="header-extra">
    <i class="fas fa-truck"></i>
    <p>Frete agendado e entrega em 1 ou 2 dias úteis.</p>
  </div>
</header>

<script src="../../utils/navbar.js"></script>

