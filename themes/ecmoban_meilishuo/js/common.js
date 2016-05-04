/**
 * Created by meadhu@163.com on 2015/8/30.
 */
// 下拉菜单
jQuery.noConflict();
jQuery(document).ready(function(){
    jQuery(".menu_box ul.menu-item-ul>li").hover(function(){
        var html = jQuery("#DisSub2_1").html();
        jQuery(this).find(".nav_list").show();
    },function(){
        jQuery(this).find(".nav_list").hide();
    });
});