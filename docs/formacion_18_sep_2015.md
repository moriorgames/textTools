Formación 18 sep 2015: Sonata Page, Block y creación e inyección de servicios
=============================================================================

En la formación que hemos dado hoy 18 de Septiembre hemos tratado varios temas claves:

- [Consideraciones acerca de Sonata Page bundle, enrutadores](formacion_18_sep_2015.md#consideraciones-acerca-de-sonata-page-bundle-enrutadores)
- [Cómo crear páginas con Sonata Page bundle desde el administrador](formacion_18_sep_2015.md#como-crear-paginas-con-sonata-page-bundle-desde-el-administrador)


**ANEXO**
 
- [Bloque LastPostBlock](formacion_18_sep_2015.md#bloque-lastpostblock) 
- [Servicio PostManager](formacion_18_sep_2015.md#servicio-postmanager) 
- [Declaration of services, LastPostBlock and PostManager](formacion_18_sep_2015.md#declaration-of-services-lastpostblock-and-postmanager) 
- [Templates last post block, final post block](formacion_18_sep_2015.md#templates-last-post-block-final-post-block) 


Consideraciones acerca de Sonata Page bundle, enrutadores
---------------------------------------------------------

Una de las virtudes de Sonata Page Bundle, es que nos permite crear **páginas dinámicas desde el panel de control** para nuestra aplicación Symfony.
Según la filosofía de Sonata Page Bundle, las páginas se componen de **secciones que alojan bloques**.
Nuestra tarea como programadores es crear el código fuente que compone estos bloques que serán **servicios de Symfony** y que podrán ejecutar cualquier acción que necesitemos. Estos bloques son **reutilizables** y **configurables**.

Sin embargo, Sonata Page Bundle, debe interceptar las peticiones que pasan por la aplicación con el objetivo de crear esas páginas dinámicamente.
Cuando trabajamos con Sonata Page Bundle no crearemos ni controladores ni rutas para nuestras páginas, aunque internamente existirán. 
Sonata se encarga de interceptar todas las rutas que pasan por la aplicación e intenta averiguar si hemos creado una página que haga **match** con esa ruta.

Esto quiere decir que el enrutado de las páginas de Sonata es automático y pasa direcamente desde la base de datos a la aplicación.
Esta convención no siempre sirve a nuestro propósito, ya que, a veces, debemos crear páginas propias, pasando por encima de Sonata y yendo directamente a nuestra aplicación, para ello utilizaremos el ignore routes de la configuración de sonata:

```yml
# app/config/sonata/sonata_page.yml

sonata_page:

    # Patrones de rutas ignoradas
    ignore_route_patterns:
        - ^(.*)admin(.*)
        - ^_(.*)
        - ^cms(.*)
        - ^user(.*)|^hwi(.*)|^facebook(.*)|^sonata(.*)|^fos(.*)

    # Nombres de rutas ignoradas
    ignore_routes:
      - newsletter_subscribe
      - locales_filter
      - iniciativa_navigation
      - iniciativa_footer
      - iniciativa_sesion
```


Cómo crear páginas con Sonata Page bundle desde el administrador
----------------------------------------------------------------

Una vez nos ha quedado claro cómo funciona la teoría de podemos empezar a añadir páginas dinámicamente a nuestra aplicación gracias al panel de administración.
Como que esta parte es sencilla la explicaremos a base de imágenes:

**CREACIÓN DE PÁGINAS EN 5 SENCILLOS PASOS**

1 - Primero accedemos a nuestro panel de control
![Menú principal de sonata](https://github.com/moriorgames/textTools/blob/master/docs/images/menu-principal-sonata-page.png)

2 - Vamos hacia **menú -> portadas -> páginas**
![Menú principal de sonata](https://github.com/moriorgames/textTools/blob/master/docs/images/sitio-paginas.png)

3 - A la derecha en acciones tenemos el botón **Acciones -> agregar nuevo**
![Menú principal de sonata](https://github.com/moriorgames/textTools/blob/master/docs/images/sitio-paginas-crear-nuevo.png)

4 - Seguidamente creamos nuestra nueva página, le añadimos un **nombre**, **activo** (true), le podemos asignar una **página padre** (recomendado), añadimos un **slug**, un **title** y un **description**.
![Menú principal de sonata](https://github.com/moriorgames/textTools/blob/master/docs/images/crear-nueva-pagina.png)

5 - Finalmente le damos a crear, recordad ir a **crear impresiones** y ya podemos acceder a nuestra página creada.
![Menú principal de sonata](https://github.com/moriorgames/textTools/blob/master/docs/images/nuestra-nueva-pagina-creada.png)


Bloque LastPostBlock
--------------------

```php
<?php
// src/BlogBundle/Block/LastPostBlock.php

namespace BlogBundle\Block;

use BlogBundle\Services\PostManager;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
use Sonata\BlockBundle\Block\BaseBlockService;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class LastPostBlock
 * @package BlogBundle\Block
 */
class LastPostBlock extends BaseBlockService
{

    /**
     * @var int
     */
    private $limit = 5;

    /**
     * @var array
     */
    private $templateChoices = [
        'Block/last-post.html.twig'  => 'Plantilla últimos artículos',
        'Block/final-post.html.twig' => 'Plantilla artículo final',
    ];

    /**
     * @var PostManager
     */
    protected $postManager;

    /**
     * @param string          $name
     * @param EngineInterface $templating
     * @param PostManager     $postManager
     */
    public function __construct($name, EngineInterface $templating, PostManager $postManager)
    {
        parent::__construct($name, $templating);
        $this->postManager = $postManager;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultSettings(OptionsResolverInterface $resolver)
    {
        $defaultChoice = array_shift($this->templateChoices);
        $resolver->setDefaults(
            [
                'title'    => 'Últimos posts',
                'limit'    => $this->limit,
                'template' => $defaultChoice,
            ]
        );
    }

    /**
     * @param FormMapper     $form
     * @param BlockInterface $block
     *
     * @return void
     */
    public function buildEditForm(FormMapper $form, BlockInterface $block)
    {
        $form->add('settings', 'sonata_type_immutable_array',
            [
                'keys' => [
                    ['title', 'text',
                        [
                            'label'    => 'Título destacado',
                            'required' => false,
                        ],
                    ],
                    ['limit', 'text',
                        [
                            'label'       => 'Número de posts',
                            'sonata_help' => "El número de posts que vamos a mostrar (por defecto $this->limit)",
                            'required'    => true,
                        ],
                    ],
                    ['template', 'choice',
                        [
                            'label'       => 'Plantilla',
                            'sonata_help' => 'Tipo de plantilla que mostrará los artículos',
                            'choices'     => $this->templateChoices,
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * @param BlockContextInterface $blockContext
     * @param Response|null         $response
     *
     * @return Response
     */
    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {
        $tplVars = $blockContext->getSettings();

        $tplVars['posts'] = $this->postManager->getLast($tplVars['limit']);

        return $this->renderResponse($tplVars['template'], $tplVars, $response);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Last Post Block';
    }

}
```

Servicio PostManager
--------------------

```php
<?php
// src/BlogBundle/Services/PostManager.php

namespace BlogBundle\Services;

use Doctrine\ORM\EntityManager;

/**
 * Class PostManager
 * @package BlogBundle\Services
 */
class PostManager
{

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Get last posts
     *
     * @param $count
     *
     * @return array
     */
    public function getLast($count)
    {
        return array_slice(
            $this->em->getRepository('CmsBlogBundle:Post')->findAll(),
            0,
            $count
        );
    }
}
```

Declaration of services, LastPostBlock and PostManager
------------------------------------------------------

```yml
# src/BlogBundle/Resources/config/services.yml

services:

    block.last_post:
             class: BlogBundle\Block\LastPostBlock
             tags:
                 - { name: sonata.block }
             arguments:
                 - ~
                 - @templating
                 - @post.manager

    post.manager:
             class: BlogBundle\Services\PostManager
             arguments:
                 - @doctrine.orm.default_entity_manager
```


Templates last post block, final post block
-------------------------------------------

```twig
# app/Resources/views/Block/final-post.html.twig

<h2>This is the FINAL post block</h2>

{% for post in posts %}

    <h3>
        <a href="{{ path('cms_blog_show', {slug: post.slug}) }}">
            {{ post.title }}
        </a>
    </h3>

{% endfor %}
```

```twig
# app/Resources/views/Block/last-post.html.twig

<h2>The LAST post block</h2>

<ul>
    {% for post in posts %}
        <li>
            <a href="{{ path('cms_blog_show', {slug: post.slug}) }}">
                {{ post.title }}
            </a>
        </li>
    {% endfor %}
</ul>
```
