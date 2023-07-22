<?php
/* Smarty version 3.1.48, created on 2023-07-22 14:55:36
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64bc3438b6c7d1_32232781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1689808067,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_64bc3438b6c7d1_32232781 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Contenedor carrusel ">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-ES&amp;utm_content=download">
            <figure>
              <img src="http://localhost/prestashop_2/modules/ps_imageslider/images/4cd2d754ea22fc1a987084d6a1775e07edc0617b_Diseño sin título (1).png" alt="sample-1" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Productos de calidad</h2>
                  <div class="caption-description"><p>Encuentra todos los productos de primera necesidad y de uso personal en un solo lugar.</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Botones del carrusel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Anterior">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Siguiente">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
