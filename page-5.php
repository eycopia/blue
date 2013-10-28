<?php
/**
 * The template for displaying para el index.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage martinzamora
 * @since martin zamora 1.0
 */

get_header(); ?>

  <!-- begin carousel -->
    <section class="hidden-phone">
        <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">

        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <div class="img1"></div>
              <div class="contcar">
                <h2 class="animated bounceIn">SEGURIDAD PARA TU ORGANIZACIÓN</h2>
                <p class="lead animated fadeInRightBig">¿Preocupado por la seguridad? con nuestras soluciones en cámaras de vigilancia podrás saber lo que pasa en tu organización en cualquier momento y desde cualquier lugar.</p>

              </div>
            </div>
          </div>
        </div>
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <div class="img1"></div>

              <div class="contcar">
                <h2 class="animated fadeInDownBig">HEXAGONO COMPANY</h2>
                <p class="lead prin animated fadeInLeftBig">Somos especialistas en la creación de Páginas web, sistemas de escritorio a medida, sistemas de seguridad, cámaras de vigilancia y mucho más</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="http://twitter.github.com/bootstrap/examples/carousel.html#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="http://twitter.github.com/bootstrap/examples/carousel.html#myCarousel" data-slide="next">›</a>
    </div>
    </section>

    <section id="sec-ideas">
        <div class="ideas">
            <div class="circle-ideas no-borderradius">
                    <div class="ico-imagen">
                        <i class="icon-desktop ico-high"></i>
                    </div>
            </div>
            <div class="circle-leyend">
                <strong>Tecnología</strong>
                <p>Desarrollamos páginas web y/o sistemas utilizando las mejores tecnologías del mercado:(HTML5, CSS3, Javascript, PHP, Java, Python)</p>
            </div>
        </div>
        <div class="ideas">
            <div class="circle-ideas no-borderradius">
                    <div class="ico-imagen">
                        <i class="icon-facetime-video ico-high"></i>
                    </div>
            </div>
            <div class="circle-leyend">
                <strong>Seguridad</strong>
                <p>Modernas cámaras de vigilancia, le ayudaran a monitorizar que sucede en su tienda desde cualquier parte del mundo </p>
            </div>
        </div>
        <div class="ideas hidden-phone">
            <div class="circle-ideas no-borderradius">
                    <div class="ico-imagen">
                        <i class="icon-comments-alt ico-high"></i>
                    </div>
            </div>
            <div class="circle-leyend">
                <strong>Soporte Técnico</strong>
                <p>Nuestro equipo de trabajo resolverá sus dudas y le ayudara a superar cualquier inconveniente.</p>
            </div>
        </div>
       <div class="ideas hidden-tablet hidden-phone">
            <div class="circle-ideas no-borderradius">
                    <div class="ico-imagen">
                        <i class="icon-shopping-cart ico-high"></i>
                    </div>
            </div>
            <div class="circle-leyend">
                <strong>Precios</strong>
                <p> Pensando en el sector de las MYPES, hemos desarrollado atractivos planes para usted.</p>
            </div>
        </div>
    </section>

     <section id="portafolios">
        <h2 class="title-section"> Últimos Trabajos</h2>
        <article id="portafolio">
            <figure  class="animated">
                <a href="<?php bloginfo('template_directory'); ?>/img/agremia-full.jpg" class="fancybox-thumb" rel="fancybox-thumb" title="Agremia, el Sistema para los Sindicatos y Asociaciones">
                    <img src="<?php bloginfo('template_directory'); ?>/img/agremia.jpg" alt="Agremia, sistema para sindicatos y asociaciones">
                </a>
                <figcaption>
                    AGREMIA
                </figcaption>
            </figure>

            <figure class="">
                <a href="<?php bloginfo('template_directory'); ?>/img/martinzamora-full.jpg" class="fancybox-thumb" rel="fancybox-thumb" title="Operador de Turismo en Tarapoto, Martín Zamora">
                    <img src="<?php bloginfo('template_directory'); ?>/img/martinzamora.jpg" alt="Operador de Turismo en Tarapoto, Martín Zamora">
                </a>
                <figcaption>
                   <a href="http://www.martinzamoratarapoto.com"> Martín Zamora</a>
                </figcaption>
            </figure>


            <figure  class="animated">
                <a href="<?php bloginfo('template_directory'); ?>/img/phariox-full.jpg" class="fancybox-thumb" rel="fancybox-thumb" title="Sistema de Ventas, ideal para Negocios">
                    <img src="<?php bloginfo('template_directory'); ?>/img/pariox.jpg" alt="Phariox, modulo de ventas y Kardex">
                </a>
                <figcaption>
                    PHARIOX
                </figcaption>
            </figure>

             <figure  class="animated">
                <a href="<?php bloginfo('template_directory'); ?>/img/amazon-full.jpg" class="fancybox-thumb" rel="fancybox-thumb" title="Agencia de Turismo Amazon Perú Travel">
                    <img src="<?php bloginfo('template_directory'); ?>/img/amazon.jpg" alt="Página web de Amazon Perú Travel">
                </a>
                <figcaption>
                    AMAZON PERÚ TRAVEL
                </figcaption>
            </figure>



            <figure  class="animated">
                <a href="<?php bloginfo('template_directory'); ?>/img/trapsa-full.jpg" class="fancybox-thumb" rel="fancybox-thumb" title="Taller Reparación de Aerodoinos - TRAPSA">
                    <img src="<?php bloginfo('template_directory'); ?>/img/trapsa.jpg" alt="Diseño web para TRAPSA">
                </a>
                <figcaption>
                    TRAPSA PERU
                </figcaption>
            </figure>

            <figure class="">
                <a href="<?php bloginfo('template_directory'); ?>/img/corap-full.jpg" class="fancybox-thumb" rel="fancybox-thumb" title="Corporación de Agencias Postales del Perú">
                    <img src="<?php bloginfo('template_directory'); ?>/img/corap.jpg" alt="Página web de CORAP PERU">
                </a>
                <figcaption>
                   <a href="http://www.corapperu.com"> CORAP PERU</a>
                </figcaption>
            </figure>

            <figure class="">
                <a href="<?php bloginfo('template_directory'); ?>/img/sinlimite-full.jpg" class="fancybox-thumb" rel="fancybox-thumb" title="Comunidad Sin Límite">
                    <img src="<?php bloginfo('template_directory'); ?>/img/sinlimite.jpg" alt="Blog de Sin Límites">
                </a>
                <figcaption>
                    <a href="http://www.sinlimites.com">SIN LIMITE</a>
                </figcaption>
            </figure>

            <figure class="">
                <a href="<?php bloginfo('template_directory'); ?>/img/huayruro-full.jpg" class="fancybox-thumb" rel="fancybox-thumb" title="Agencia Turística Huayruro Tours">
                    <img src="<?php bloginfo('template_directory'); ?>/img/huayruro.jpg" alt="Página web de la Agencia Huayruro Tours">
                </a>
                <figcaption>
                   <a href="http://www.agenciahuayrurotours.com"> Huayruro Tours</a>
                </figcaption>
            </figure>
        </article>
    </section>

    <section id="declaimer">
        <p>Nosotros somos</p>
        <h2 class="gold ">Hexágono Soluciones</h2>
        <div class="division hidden-phone">
            <div class="border-divider">&nbsp;</div>
            <span class="text "><img src="<?php bloginfo('template_directory'); ?>/img/logo_black.png"></span>
            <div class="border-divider">&nbsp;</div>
        </div>
        <p class="resalt">4 años de experiencia en el diseño y desarrollo de sistemas informáticos para las MYPES</p>
        <p>Estamos comprometidos en brindar servicios informáticos que ayudan a mejorar los procesos de gestión, control y toma de decisiones en las organizaciones.

        Estamos conformados por un excelente equipo humano, especialistas en el desarrollo de soluciones informáticas integrales. <a href="####">Seguir Leyendo</a></p>

    </section>


<?php get_footer(); ?>
<script>
$(document).on("ready", iniciar);

function iniciar(){

     $(window).bind("scroll", function(event) {

        $('#portafolio figure:in-viewport').addClass(' animated  fadeInUpBig');

        $("#declaimer h2:in-viewport").each(function() {

            $('#declaimer').children().addClass(' animated  rotateInUpLeft');
        });
    });

    $(".fancybox-thumb").fancybox({
        prevEffect  : 'none',
        nextEffect  : 'none',
        helpers : {
            title   : {
                type: 'outside'
            },
            thumbs  : {
                width   : 50,
                height  : 50
            }
        }
    });



     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

  $('.carousel').carousel({
    interval: 5000
  });

}
</script>
</div>
</body>
</html>