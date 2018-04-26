/**
 * Created by esowa on 2017/12/4.
 */
function show(obj){
    $(obj).parent('.part-nav').find('li').removeClass('active');
    $(obj).addClass('active');
}