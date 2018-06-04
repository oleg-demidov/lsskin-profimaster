(function($) {
    "use strict";

    $.widget( "ls.lsGallery", $.livestreet.lsComponent, {
        /**
         * Дефолтные опции
         */
        options: {

            // Ссылки
            urls: {
               
            },

            // Селекторы
            selectors: {
                header:".js-gallery-item-header",
                header_img:".ls-gallery-item-preview-header",
                preview_list:".ls-gallery-list",
                previews:".ls-gallery-item"
            },
            
            classes:{
                preview_link:'.ls-gallery-item-link',
                preview_img:".ls-gallery-item-preview"
            },

            uploader_options: {},

            params: {}
        },

        /**
         * Конструктор
         *
         * @constructor
         * @private
         */
        _create: function () {
            this._super();
            this._on(this.elements.previews, {click:"onClickItem"});
            this.elements.header.lsLightbox();

        },
        onClickItem:function(e){
            let target = $(e.currentTarget);

            if(!target.data('active')){
                this.activationItem(target)
            }
            return false;
        },
        activationItem:function(target){
            this.elements.previews.data('active', 0);
            target.data('active', 1);
            
            let url = target.find(this.option('classes.preview_link')).attr('href');
            this.elements.header.attr('href', url);
            this.elements.header_img.attr('src', url);
        }

    });
})(jQuery);