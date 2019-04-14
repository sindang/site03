(function($){
    $(document).ready(function() {
        $(".smarteditor2").each( function(index){
            var get_id = $(this).attr("id");

            if( !get_id || $(this).prop("nodeName") != 'TEXTAREA' ) return true;

            nhn.husky.EZCreator.createInIFrame({
                oAppRef: oEditors,
                elPlaceHolder: get_id,
                sSkinURI: g5_editor_url+"/SmartEditor2Skin.html",
                htParams : {
                    bUseToolbar : true,				// �대컮 �ъ슜 �щ� (true:�ъ슜/ false:�ъ슜�섏� �딆쓬)
                    bUseVerticalResizer : true,		// �낅젰李� �ш린 議곗젅諛� �ъ슜 �щ� (true:�ъ슜/ false:�ъ슜�섏� �딆쓬)
                    bUseModeChanger : true,			// 紐⑤뱶 ��(Editor | HTML | TEXT) �ъ슜 �щ� (true:�ъ슜/ false:�ъ슜�섏� �딆쓬)
                    bSkipXssFilter : true,		// client-side xss filter 臾댁떆 �щ� (true:�ъ슜�섏� �딆쓬 / 洹몄쇅:�ъ슜)
                    //aAdditionalFontList : aAdditionalFontSet,		// 異붽� 湲�瑗� 紐⑸줉
                    fOnBeforeUnload : function(){
                        //alert("�꾨즺!");
                    }
                }, //boolean
                fOnAppLoad : function(){
                    //�덉젣 肄붾뱶
                    //oEditors.getById["ir1"].exec("PASTE_HTML", ["濡쒕뵫�� �꾨즺�� �꾩뿉 蹂몃Ц�� �쎌엯�섎뒗 text�낅땲��."]);
                },
                fCreator: "createSEditor2"
            });
        });
    });
})(jQuery);
