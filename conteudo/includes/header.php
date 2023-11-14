<!-- <nav class="navbar navbar-expand-lg pb-0">
    <div class="container-fluid navbarprimary">
        <a class="navbar-brand text-dark" href="#">MoveKids</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex">
                <input class="form-control me-2 search" type="search" placeholder="Buscar jogos" aria-label="Search">
            </div>
        </div>
    </div>
    <div class="container-fluid  navbarSecondary">
        <ul class="d-flex categorias-list">
            <li>
                <a href="">
                    <span class="icon"></span>
                    <span class="text">Luta</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon"></span>
                    <span class="text">Esporte</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon"></span>
                    <span class="text">Guerra</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon"></span>
                    <span class="text">Espada</span>
                </a>
            </li>
        </ul>
    </div>
</nav> -->

      <div id="header">
         <div class="container-fluid mb-1 top-container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="nav-top-wrapper">
                     <a href="https://www.jogos360.com.br/" id="logo" class="logo" title="Jogos 360">
                     </a>
                     <div class="r-header">
                        <div id="menu" class="top-menu">
                           <!-- <a href="https://www.jogos360.com.br/top_jogos.php" title="Jogos Populares">Top Jogos</a>
                           <span>•</span>
                           <a href="https://www.jogos360.com.br/novos_jogos.php" title="Jogos Novos">Novos Jogos</a> -->
                        </div>
                        <button class="user-area-toggle" data-user-area-toggle="1">
                        <span class="icon"></span>
                        <span class="user-area--text">Meus jogos</span>
                        </button>
                        <form action="https://www.jogos360.com.br/search.php" id="search" method="get" onsubmit="return document.getElementById('search-input').value === '' ? false : true" class="search" novalidate="">
                           <script>function expandSearch(){if(window.innerWidth>=1024)return;const searchMobile=document.querySelector('.search');const header=document.querySelector('#header');if(!searchMobile||!header)return;searchMobile.classList.add('active');searchMobile.querySelector('input').focus()
                              return;}
                              function closeSearch(){if(window.innerWidth>=1024)return;const searchMobile=document.querySelector('.search');const header=document.querySelector('#header');if(!searchMobile||!header)return;searchMobile.classList.remove('active')
                              const customEvent=new Event('closeDropdown')
                              searchMobile.dispatchEvent(customEvent)
                              return}
                           </script> <input type="search" name="q" placeholder="Buscar Jogos" required="" id="search-input" autocomplete="off" onclick="expandSearch()">
                           <span id="search-input-clear" class="search-input-clear" style="visibility: hidden;"></span>
                           <span id="search-input-loading" class="search-input-loading"></span>
                           <button type="submit" onclick="closeSearch()" class="search-inner-button"><span class=" icon-search"></span></button>
                           <search-area inputquery="#search-input" formquery=".search" clearinputquery="#search-input-clear" loadinginputquery="#search-input-loading" queryparameter="q" baseurl="/autocomplete.php">
                              <!---->
                              <div class="search-area-container ">
                              </div>
                           </search-area>
                        </form>
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bottom-nav-container">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="nav-wrapper">
                        <ul id="main-nav" class="main-nav default">
                           <li class="">
                              <a href="https://www.jogos360.com.br/2_jogadores/" title="Jogos de 2 Jogadores">
                              <span class="icon icon-players"></span>
                              <span class="text">2 Jogadores</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/vestir/" title="Jogos de Vestir">
                              <span class="icon icon-dress"></span>
                              <span class="text">Vestir</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/carro/" title="Jogos de Carro">
                              <span class="icon icon-car"></span>
                              <span class="text">Carros</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/cozinhar/" title="Jogos de Cozinhar">
                              <span class="icon icon-cook"></span>
                              <span class="text">Cozinhar</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/acao_e_aventura/" title="Jogos de Ação e Aventura">
                              <span class="icon icon-adventure"></span>
                              <span class="text">Ação e Aventura</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/futebol/" title="Jogos de Futebol">
                              <span class="icon icon-football"></span>
                              <span class="text">Futebol</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/luta/" title="Jogos de Luta">
                              <span class="icon icon-fight"></span>
                              <span class="text">Luta</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/raciocinio/" title="Jogos de Raciocínio">
                              <span class="icon icon-chess"></span>
                              <span class="text">Raciocínio</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/tiro/" title="Jogos de Tiro">
                              <span class="icon icon-shot"></span>
                              <span class="text">Tiro</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/moto/" title="Jogos de Moto">
                              <span class="icon icon-bike"></span>
                              <span class="text">Moto</span>
                              </a>
                           </li>
                           <li class="">
                              <a href="https://www.jogos360.com.br/io/" title="Jogos .io">
                              <span class="icon icon-io"></span>
                              <span class="text">Jogos .io</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mobile-menu">
         <a href="https://www.jogos360.com.br/" class="logo-menu" title="Jogos 360"></a>
         <dark-theme-toggle class="mobile">
            <!----> <label class="switch " data-c-id="334">
            <input type="checkbox">
            <span class="slider"></span>
            <span class="icon icon-dark-mode"></span>
            <span class="icon icon-light-mode"></span>
            <span class="tooltip-text bottom">
            <span class="tooltip-triangle"></span>
            <span>Alterne entre o tema escuro e o tema claro</span>
            </span>
            </label>
         </dark-theme-toggle>
         <ul class="mobile-list mobile-list--main default">
            <li class="">
               <a href="https://www.jogos360.com.br/2_jogadores/" title="Jogos de 2 Jogadores">
               <span class="icon icon-players"></span>
               <span class="text">2 Jogadores</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/vestir/" title="Jogos de Vestir">
               <span class="icon icon-dress"></span>
               <span class="text">Vestir</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/carro/" title="Jogos de Carro">
               <span class="icon icon-car"></span>
               <span class="text">Carros</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/cozinhar/" title="Jogos de Cozinhar">
               <span class="icon icon-cook"></span>
               <span class="text">Cozinhar</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/acao_e_aventura/" title="Jogos de Ação e Aventura">
               <span class="icon icon-adventure"></span>
               <span class="text">Ação e Aventura</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/futebol/" title="Jogos de Futebol">
               <span class="icon icon-football"></span>
               <span class="text">Futebol</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/luta/" title="Jogos de Luta">
               <span class="icon icon-fight"></span>
               <span class="text">Luta</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/raciocinio/" title="Jogos de Raciocínio">
               <span class="icon icon-chess"></span>
               <span class="text">Raciocínio</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/tiro/" title="Jogos de Tiro">
               <span class="icon icon-shot"></span>
               <span class="text">Tiro</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/moto/" title="Jogos de Moto">
               <span class="icon icon-bike"></span>
               <span class="text">Moto</span>
               </a>
            </li>
            <li class="">
               <a href="https://www.jogos360.com.br/io/" title="Jogos .io">
               <span class="icon icon-io"></span>
               <span class="text">Jogos .io</span>
               </a>
            </li>
         </ul>
         <ul class="mobile-list mobile-list--default">
            <li>
               <a href="https://www.jogos360.com.br/" title="Página Principal">
               <span class="icon icon-house"></span>
               <span class="text">Página Principal</span></a>
            </li>
            <li>
               <a href="https://www.jogos360.com.br/top_jogos.php" title="Jogos Populares">
               <span class="icon icon-hot"></span>
               <span class="text">Top Jogos</span>
               </a>
            </li>
            <li>
               <a href="https://www.jogos360.com.br/novos_jogos.php" title="Jogos Novos">
               <span class="icon icon-new"></span>
               <span class="text">Novos Jogos</span>
               </a>
            </li>
            <li>
               <a href="https://www.jogos360.com.br/categorias.php" title="Todas as Categorias">
               <span class="icon icon-grid"></span>
               <span class="text">Categorias</span>
               </a>
            </li>
            <li>
               <a href="https://www.jogos360.com.br/super_listas/" title="Super Listas">
               <span class="icon icon-super"></span>
               <span class="text">Super Listas</span>
               </a>
            </li>
         </ul>
      </div>
