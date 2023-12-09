       <div id="header">
         <div class="container-fluid mb-1 top-container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="nav-top-wrapper">
                     <a href="javascript:window.location.reload(true)" id="" class="" >
                        <b><h2>MoveKids</h2></b>
                     </a>
                     <div class="r-header">
                        <div id="menu" class="top-menu">
                           <!-- <a href="https://www.jogos360.com.br/top_jogos.php" title="Jogos Populares">Top Jogos</a>
                           <span>•</span>
                           <a href="https://www.jogos360.com.br/novos_jogos.php" title="Jogos Novos">Novos Jogos</a> -->
                        </div>
                        <!-- <button class="user-area-toggle" data-user-area-toggle="1">
                        <span class="icon"></span>
                        <span class="user-area--text">Meus jogos</span>
                        </button> -->
                        <div  id="search" method="get" class="search" novalidate="">
                           <script>function expandSearch(){if(window.innerWidth>=1024)return;const searchMobile=document.querySelector('.search');const header=document.querySelector('#header');if(!searchMobile||!header)return;searchMobile.classList.add('active');searchMobile.querySelector('input').focus()
                              return;}
                              function closeSearch(){if(window.innerWidth>=1024)return;const searchMobile=document.querySelector('.search');const header=document.querySelector('#header');if(!searchMobile||!header)return;searchMobile.classList.remove('active')
                              const customEvent=new Event('closeDropdown')
                              searchMobile.dispatchEvent(customEvent)
                              return}
                           </script> <input type="search" name="q" placeholder="Buscar" required="" id="search-input" autocomplete="off" onclick="expandSearch()">
                           <span id="search-input-clear" class="search-input-clear" style="visibility: hidden;"></span>
                           <span id="search-input-loading" class="search-input-loading"></span>
                           <button type="text" class="search-inner-button"><span class=" icon-search"></span></button>
                           <search-area inputquery="#search-input" formquery=".search" clearinputquery="#search-input-clear" loadinginputquery="#search-input-loading" queryparameter="q" baseurl="/autocomplete.php">
                              <!---->
                              <div class="search-area-container ">
                              </div>
                           </search-area>
                        </div>
                      
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
                          
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mobile-menu">
        
         <ul class="mobile-list mobile-list--main default">
          
         </ul>
         <ul class="mobile-list mobile-list--default">
          
         </ul>
      </div>
