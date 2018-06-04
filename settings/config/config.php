<?php

$config = array();

/**
 * Тип сетки
 *
 * fluid - резина
 * fixed - фиксированная ширина
 */
$config['view']['grid']['type'] = 'fluid';

// Настройки резины
$config['view']['grid']['fluid_min_width'] = '320px';
$config['view']['grid']['fluid_max_width'] = '1200px';

// Настройки фиксированная ширина
$config['view']['grid']['fixed_width'] = '1000px';

// Показывать баннер с лого и описанием или нет
$config['view']['layout_show_banner'] = false;

// Подключение скриптов шаблона
$config['head']['template']['js'] = array(
    '___path.skin.assets.web___/js/init.js',
    "//yastatic.net/share2/share.js" => array('merge' => false),
);
$config['head']['default']['js'] = array(
    //"___path.skin.web___/components/ls-vendor/html5shiv.js" => array('browser' => 'lt IE 9'),
    //"___path.skin.web___/components/ls-vendor/jquery.placeholder.min.js" => array('browser' => 'lt IE 9'),

    //"//yastatic.net/share/share.js" => array('merge' => false),
    //"https://www.google.com/recaptcha/api.js?onload=__do_nothing__&render=explicit" => array('merge' => false),
);

// Подключение стилей шаблона
$config['head']['template']['css'] = array(
	"___path.skin.assets.web___/css/layout.css",
	"___path.skin.assets.web___/css/print.css",
        "https://fonts.googleapis.com/css?family=Roboto"
);

// Подключение темы
if (Config::Get('view.theme')) {
	$config['head']['template']['css'][] = "___path.skin.web___/themes/___view.theme___/style.css";
}

/**
 * Подключение компонентов
 */
$config['components'] = array(
    // Базовые компоненты
    'css-reset', 'css-helpers', 'typography', 'forms', 'grid', 'ls-vendor', 'ls-core', 'ls-component', 'lightbox', 'avatar', 'slider', 'details', 'alert', 'dropdown', 'button', 'block',
    'nav', 'tooltip', 'tabs', 'modal', 'table', 'text', 'uploader', 'email', 'field', 'pagination', 'editor', 'more', 'crop',
    'performance', 'toolbar', 'actionbar', 'badge', 'autocomplete', 'icon', 'item', 'highlighter', 'jumbotron', 'notification', 'blankslate', 'confirm',

    // Компоненты LS CMS
    'favourite', 'vote', 'auth', 'media', 'property', 'photo', 'note', 'user-list-add', 'subscribe', 'content', 'report', 'comment',
    'toolbar-scrollup', 'toolbar-scrollnav', 'tags-personal', 'search-ajax', 'search', 'sort', 'search-form', 'info-list',
    'tags', 'userbar', 'admin', 'user', 'wall', 'blog', 'topic', 'poll', 'activity', 'feed', 'talk', 'toggle',
    
    //Компоненты шаблона
    
    "logo","gallery"
);

/**
 * SEO
 */

// Тег используемый для заголовков топиков
$config['view']['seo']['topic_heading'] = 'h1';
$config['view']['seo']['topic_heading_list'] = 'h2';

return $config;