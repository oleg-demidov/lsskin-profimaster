{**
 * Список пользователей на которых подписан текущий пользователь
 *
 * @param array $users
 *}
 {$component = 'logo'}
{component_define_params params=['url' ]}

<a class="{$component}-item" href="{$url|default:{Router::GetPathRootWeb()}}">
    <img src="{$LS->Component_GetWebPath('logo')}/img/logo.png">
</a>
