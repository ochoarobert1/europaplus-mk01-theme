
jQuery(document).ready(function ($) {
    "use strict";

    //    var states = function() {
    //        var states_response;
    //        jQuery.ajax({
    //            type: 'POST',
    //            url: admin_url.ajax_url,
    //            data: {
    //                action: 'europaplus_json_help_articles'
    //            },
    //            success: function (response) {
    //                states_response = response;
    //            },
    //            error: function (request, status, error) {
    //                console.log(error);
    //            }
    //        });
    //        return states_response;
    //    }

    //    jQuery(".typeahead").autocomplete({
    //        source: [{
    //            data:[
    //                jQuery.getJSON(admin_url.ajax_url + "?action=europaplus_json_help_articles")
    //            ],
    //            getTitle:function(item){
    //                return item.title
    //            }
    //        }],
    //
    //    }).on('selected.xdsoft',function(e,datum){
    //        alert(datum.id);
    //        alert(datum.title);
    //    });


    jQuery(".flexselect").flexselect();

    jQuery(".flexselect").on('change', function() {
        location.href = jQuery(this).val();
    });

}); /* end of as page load scripts */

//$('#remote_input2').autocomplete({
//    source:[{
//        data:[
//            {id:1, title:"alabama"},
//            {id:2, title:"alaska"},
//            {id:3, title:"georgia"},
//            {id:4, title:"texas"},
//            {id:6, title:"california"}
//        ],
//        getTitle:function(item){
//            return item['title']
//        },
//        getValue:function(item){
//            return item['title']
//        },
//    }]}).on('selected.xdsoft',function(e,datum){
//    alert(datum.id);
//    alert(datum.title);
//});
