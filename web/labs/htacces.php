
<IfModule mod_rewrite.c>

    RewriteEngine On

    RewriteRule (.*)/limon$ /app_dev.php/ [R=301,L]
    RewriteRule (.*)/motivos-brindar$ /app_dev.php [R=301,L]
    RewriteRule (.*)/sitemap$ /sitemap.xml [R=301,L]

    RewriteRule (.*)/tonica/campana$ /app_dev.php/publicidad [R=301,L]
    RewriteRule (.*)/limon/campana$ /app_dev.php/publicidad [R=301,L]
    RewriteRule (.*)/limon/campana/iggy-pop-vs-schweppes-limon-2aparte$ /app_dev.php/publicidad [R=301,L]
    RewriteRule (.*)/tonica/campana/campana/la-elegancia-de-una-botella$ /app_dev.php/publicidad [R=301,L]
    RewriteRule (.*)/tonica/campana/campana/celebracion-la-gran-fiesta-tonic-lovers$ /app_dev.php/publicidad [R=301,L]
    RewriteRule (.*)/tonica/campana/varios/el-drive-de-schweppes-en-el-tenis-espanol$ /app_dev.php/publicidad [R=301,L]

    RewriteRule (.*)/profesionales/recuperar-contrase%C3%B1a$ /app_dev.php/profesionales [R=301,L]

    RewriteRule (.*)/tonica/nuestras-tonicas$ /app_dev.php/producto [R=301,L]
    RewriteRule (.*)/limon/sabores-schweppes$ /app_dev.php/producto [R=301,L]
    RewriteRule (.*)/tonica/nuestras-tonicas/classic/soda$ /app_dev.php/tonica/nuestras-tonicas/originals/soda [R=301,L]
    RewriteRule (.*)/tonica/nuestras-tonicas/classic/gingerale$ /app_dev.php/tonica/nuestras-tonicas/originals/ginger-ale [R=301,L]
    RewriteRule (.*)/tonica/nuestras-tonicas/classic/tonica$ /app_dev.php/tonica/nuestras-tonicas/originals/tonica [R=301,L]
    RewriteRule (.*)/tonica/nuestras-tonicas/classic/bitter$ /app_dev.php/tonica/nuestras-tonicas/originals/bitter [R=301,L]
    RewriteRule (.*)/tonica/nuestras-tonicas/classic/tonica-light$ /app_dev.php/tonica/nuestras-tonicas/originals/tonica-light [R=301,L]

    RewriteRule (.*)/limon/sabores-schweppes/limon-zero$ /app_dev.php/tonica/nuestras-tonicas/originals/limon-zero [R=301,L]
    RewriteRule (.*)/limon/sabores-schweppes/naranja-original$ /app_dev.php/tonica/nuestras-tonicas/originals/naranja [R=301,L]
    RewriteRule (.*)/limon/sabores-schweppes/limon-original$ /app_dev.php/tonica/nuestras-tonicas/originals/limon [R=301,L]
    RewriteRule (.*)/limon/sabores-schweppes/limon-dry$ /app_dev.php/tonica/nuestras-tonicas/originals/limon-dry [R=301,L]
    RewriteRule (.*)/limon/sabores-schweppes/tonica-limon$ /app_dev.php/producto [R=301,L]

    RewriteRule (.*)/sorteo-cata-gintonic$ /app_dev.php/promociones [R=301,L]




    #6 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria                                                           ERROR
    #7 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia                                                          ERROR
    #13 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic                                                           ERROR


    #16 - http://www.schweppes-sf.dev/app_dev.php/profesionales/recuperar-contrase%C3%B1a                                    ERROR
    #17 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos                                                 ERROR
    #18 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/gintonic-helado                                          ERROR
    #19 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/pisco-tonic                                              ERROR
    #20 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/skyline-gondola                                         ERROR
    #21 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/-3010                                                    ERROR
    #22 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/cafe-tonic                                              ERROR
    #23 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/recetas/                                                  ERROR
    #24 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/-3006                                                    ERROR
    #25 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/el-typhoon-party                                         ERROR
    #26 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/eatgin-cocteles-guarnicion                              ERROR
    #27 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/protagonista-la-lavanda                                  ERROR
    #28 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/platea-es-espectaculo                                    ERROR

    #30 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/gazpachos-de-gintonic                                   ERROR
    #31 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/classic/gingerale                                  ERROR
    #32 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/coctel-de-pomada                                         ERROR
    #33 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/classic/tonica                                     ERROR
    #34 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/viaje-india-meridional                                   ERROR
    #35 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/master-class                                              ERROR

    #42 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/ceviche-made-in-spain                                   ERROR
    #43 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/un-vodkatonic-de-cine                                   ERROR
    #44 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/ruta-del-ajoblanco-axarquia                             ERROR
    #45 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/film-and-cook-festival                                  ERROR
    #46 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/de-tapas-por-toscana                                    ERROR
    #47 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/classic/tonica-light                               ERROR
    #48 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/receta-limon-soda-pie                                   ERROR
    #49 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/fluorescencia-con-una-tonica                             ERROR
    #50 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/madrid-fusion-cocteles-twee                             ERROR
    #51 - http://www.schweppes-sf.dev/app_dev.php/robots.txt                                                                 ERROR
    #52 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/articube-para-quedarse-helado-1                          ERROR
    #53 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/premium-mixer/tonica-premium                       ERROR
    #54 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/10-cocteles-sencillos-con-tonica                         ERROR
    #55 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/motivos-para-brindar                            ERROR
    #56 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/una-receta-para-mad-men                                  ERROR
    #57 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/oyster-bars-descubriendo-nuevos-espacios                ERROR
    #58 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/premium-mixer/limon-premium                        ERROR
    #59 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/que-es-un-sintonic-1                                     ERROR
    #60 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/gin-tonic-mode-chic-chocolate                           ERROR
    #61 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/un-gintonic-entre-dos-torres                            ERROR
    #62 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/premium-mixer/gingerale-premium                    ERROR
    #63 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/recetas/cocteles-de-cine                                  ERROR
    #64 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/premium-mixer/soda-premium                         ERROR
    #65 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/gentlemen-british-clubs                         ERROR
    #66 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/maqroll-un-coctel-de-autor                               ERROR
    #67 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/gintonics-sin-cobertura                         ERROR
    #68 - http://www.schweppes-sf.dev/app_dev.php/assets/attachments/BasesLegales_SorteoNavidad_Schweppes.pdf                ERROR
    #69 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/un-gintonic-de-pasarela                         ERROR
    #70 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/artesian-el-mejor-bar-del-mundo                          ERROR
    #71 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/maridaje-de-la-flor-de-calabaza                         ERROR
    #72 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/premium-mixer/tonica-pimienta-rosa                 ERROR
    #73 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/101-motivos-para-brindar                        ERROR
    #74 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/desde-el-cielo-de-las-vegas                             ERROR
    #75 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/accesorios-de-un-bartender                      ERROR
    #76 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/mi-casa-perfecto-afterwork                      ERROR
    #77 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/en-busca-de-la-burbuja-perfecta                          ERROR
    #78 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/starlite-un-gintonic-on-the-rocks                       ERROR
    #79 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/premium-mixer/tonica-azahar-lavanda                ERROR
    #80 - http://www.schweppes-sf.dev/app_dev.php/tonica/nuestras-tonicas/premium-mixer/tonica-ginger-cardamomo              ERROR
    #81 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/solucion-para-los-abstemios                     ERROR
    #82 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/cocteles-sin-alcohol-sabor-a-mediterraneo                ERROR
    #83 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/tres-barrios-para-disfrutar                     ERROR
    #86 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/terrazas-secretas-en-tu-ciudad                  ERROR
    #87 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/granizado-de-gintonic-al-jengibre               ERROR
    #88 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/cointreau-fizz-coctel-refrescante-para-este-verano       ERROR
    #89 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/que-es-un-momento-gintonic                      ERROR
    #90 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/la-tonica-del-titanic-la-ultima-cena                    ERROR
    #91 - http://www.schweppes-sf.dev/app_dev.php/assets/attachments/politica-cookies.pdf                                    ERROR
    #93 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/cuales-son-las-cantidades-perfectas             ERROR
    #94 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/el-whisky-se-debe-con-ginger-ale                         ERROR
    #95 - http://www.schweppes-sf.dev/app_dev.php/assets/attachments/terminos-legales.pdf                                    ERROR
    #96 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/la-cuchara-imperial-rito-o-mito                 ERROR
    #97 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/5-programa-masterclass-by-schweppes-2014        ERROR
    #98 - http://www.schweppes-sf.dev/app_dev.php/tonica/gastronomia/tapas-y-gintonic-en-vaso-corto-por-berlin               ERROR
    #99 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/un-gintonic-a-golpe-de-cincel                   ERROR
    #100 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/romper-la-burbuja-una-leyenda-urbana           ERROR
    #102 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/micro-teatro-a-la-carta-con-gintonic           ERROR
    #103 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/gintonic-con-james-bond-a-cota-3000            ERROR
    #104 - http://www.schweppes-sf.dev/app_dev.php/tonica/cocteleria/midnight-en-ginger-nights                               ERROR
    #105 - http://www.schweppes-sf.dev/app_dev.php/tonica/gin-tonic/articulos/evocacion-de-la-tonica-en-las-colonias-inglesasERROR
    #106 - http://www.schweppes-sf.dev/app_dev.php/assets/attachments/politica-proteccion-datos.pdf                          ERROR


</IfModule>