<?php get_header(); ?>

<!------------------------------ Section Construct -------------------------------->
    <article class="card"> 
        <div class="headerCard headerCardConstruct">
          <div class="insideTitleCard">
            <h2 class="titleCard"> Construction 100% bois </h2>
            <img src="<?php echo get_theme_file_uri('/img/icon_construc.svg')?>" alt="Logo constructions" class="iconCardTitle">
          </div>
        </div>

        <div class="contentCard contentCardMobile ">
          <div class="insideCardSection">
            <img src="<?php echo get_theme_file_uri('/img/nature_plus.svg') ?>" alt="Label Nature Plus" class="logoNaturePlus">
            <p class="excerptCardContent">
              Il certifie d’un bois provenant d’une Sylviculture, une exploitation rationnelle des forêts, permettant leurs conservation et la régénération du parc forestier. Il garantit également un traitement du bois écologique, le plan sanitaire et les produits utilisés comme pour son type d’usage et sa réutilisabilité.
              Le bois des stands est recyclé afin d’être réutilisé à des fins adaptés et prolonger sa durée de vie.
            </p>
            </div>

          <div class="insideCardSection constructRightContentMobile">
            <p class="excerptCardContent">
              Le bois utilisé pour les stands est de l’Epicéa SWP, labellisé NaturePlus qui provient de forêts Sibériennes. NaturePlus est un label international, composé de critères spécifiques qui promeut la protection de l’environnement et de la santé dans le secteur de la construction.
            </p>
            <img src="<?php echo get_theme_file_uri('./img/photo_mockup2.svg')?>" alt="Photo de stands" class="imageCard">
          </div>
        </div>
    </article>
<!------------------------------ FIN Section Construct -------------------------------->

<!------------------------------ Section Imprimés -------------------------------->
    <article class="card">
      <div class="headerCard headerCardImprim">
        <div class="insideTitleCard">
          <h2 class="titleCard"> Des imprimés pour la planète </h2>
          <img src="<?php echo get_theme_file_uri('./img/icon_imprim.svg')?>" alt="Logo Imprimés" class="iconCardTitle">
        </div>
      </div>

      <div class="contentCard contentCardMobile">
        <div class="insideCardSection">
          <img src="<?php echo get_theme_file_uri('./img/photoImprime.svg')?>" alt="Photo de stands avec des imprimés" class="imageCard">
            <p  class="excerptCardContent"> Nos imprimés personnalisables présents sur les stands utiles à la décoration et habillage des stands sont labellisés Imprim'Vert. </p>
            <!-- <img src="../img/imprim_vert.svg" alt="Label Imprim'Vert" id="labelImprimVert"> -->
        </div>

        <div class="insideCardSection">
          <ul class="listImprim">
            <li class="contentList">
              <img src="<?php echo get_theme_file_uri('./img/num1.png')?>" alt="N°1" class="numero">
              <p> <strong> Élimination des déchets dangereux </strong> <br>
                Les déchets dangereux : solvants, emballages souillés et cartouches d'encre sont traités et éliminés séparément. 
              </p>
            </li>
            <li class="contentList">
              <img src="<?php echo get_theme_file_uri('./img/num2.png')?>" alt="N°2" class="numero">
              <p> <strong> Non-utilisation de produits toxiques </strong> <br>
                Aucun produit toxique pour l'homme ou la planète n'est utilisé.
              </p>
            </li>
            <li class="contentList">
              <img src="<?php echo get_theme_file_uri('./img/num3.png')?>" alt="N°3" class="numero">
              <p> <strong> Sécurisation des stockages de liquides dangereux </strong> <br>
                Les produits potentiellements nocifs sont stockés dans des containers et entrposés dans un local dédié.
              </p>
            </li>
            <li class="contentList">
              <img src="<?php echo get_theme_file_uri('./img/num4.png')?>" alt="N°4" class="numero">
              <p> <strong> Sensibilisation environnementale  </strong> <br>
              Tous nos collaborateurs sont sensibilisés au développement durable et au label Imprim'Vert.  
              </p>
            </li>
            <li class="contentList">
              <img src="<?php echo get_theme_file_uri('./img/num5.png')?>" alt="N°5" class="numero">
              <p> <strong> Suivi des consommations énergétiques du site  </strong> <br>
                Un suivi trimestriel des consommations est mis en place. 
              </p>
            </li>
          </ul>
        </div>
      </div>
    </article>
<!------------------------------ FIN Section Imprimés -------------------------------->

<!------------------------------ Section Réemploi -------------------------------->
    <article class="card">
      <div class="headerCard headerCardReemploi">
        <div class="insideTitleCard">
          <h2 class="titleCard"> Le réemploi </h2>
          <img src="<?php echo get_theme_file_uri('./img/icon_reemploi.svg')?>" alt="Logo Réemploi" class="iconCardTitle">
        </div>
      </div>

      <div class="contentCard contentCardMobile">
        <div class="insideCardSection">
          <img src="<?php echo get_theme_file_uri('./img/recyclage_bois.svg')?>" alt="Image processus recyclage du bois" class="imageCard">
        </div>

        <div class="insideCardSection">
          <div class="containerCard">
            <p class="excerptCardContent"> IG EXPO s'engage dans un processus de développment durable, afin de proposer une présence éco-responsable sur nos évènements </p>
            <p class="excerptCardContent"> Tous les matérieux utilisés sont conservés et réutilisés pour la construction  de nouveaux modules. Les équipes s'occupent de réparer, transformer et adapter les matérieux en fonction du besoin </p>
          </div>
        </div>
      </div>
    </article>
<!------------------------------ FIN Section Réemploi -------------------------------->

<!----------------------------- Essayez maintenant ------------------------------->
    <article class="tryItArticle">
        <img src="<?php echo get_theme_file_uri('./img/bande_ess.svg')?>" alt="" class="ImgBandeauTry">
        <div class="tryItContent">
          <div class="">
            <h2 class="tryItTitle"> Essayez maintenant </h2>

            <!-- <img src="../img/icon_ess.svg" alt=""> -->
          </div>
          <a href="#" class="tryItButton"> 
            <button class="buttonTRY"> <h3 class="titleButton"> Configurateur ici </h3></button>
          </a>
        </div>
    </article>
<!----------------------------- FIN Essayez maintenant -------------------------------> 

<?php get_footer(); ?>


