
{$component = 'ls-gallery'}
{component_define_params params=[ 'items', 'classes']}

<div class="{$component} js-gallery {$classes}">
    {if {$items|sizeof}}
        <a class="{$component}-item-link-header js-gallery-item-header" href="{$items[0].url}">
            <img class="{$component}-item-preview-header" src="{$items[0].url}">                            
        </a>
        <ul class="{$component}-list"> 

            {if is_array($items)}
                {foreach $items as $item name="bread" name="gal_items"}
                    
                    
                    <li class="{$component}-item " {if $smarty.foreach.gal_items.first}data-active="1"{/if} >
                        <a class="{$component}-item-link js-gallery-item" href="{$item.url}">
                            {if $item.preview}
                                <img class="{$component}-item-preview" src="{$item.preview}">                            
                            {else}
                                {$item.text}
                            {/if}                        
                        </a>
                    </li>
                {/foreach}
            {/if}

        </ul>
    {/if}
</div>
    
