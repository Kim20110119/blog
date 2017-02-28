//専門家詳細ページ-画像ギャラリー
$(function(){
    $("#navi a").click(function(){
        $("#main img").attr("src",$(this).attr("href"));
        return false;
    })
})

//メニュー開閉
$('#index_area_menu').slinky();
$('#index_area_menu2').slinky();


//lightbox
$('#js-gallery')
	.packery({
		itemSelector: '.slide',
		gutter: 10
	})
	.photoSwipe('.slide', {bgOpacity: 0.8, shareEl: false}, {
		close: function () {
			console.log('closed');
		}
});


//TOPアコーディオン
$(document).ready(function(){
    $('.slidebox').on('click', function(){
//        $(this).next('.row').stop(true, true).slideToggle();
        $(this).next('.row').slideToggle();
    });
    $("div.row").css("display","none");
});

//アコーディオン オープン時クラス追加
$(".p-expert_box").click(function(){
	$(this).toggleClass("clicked");
});