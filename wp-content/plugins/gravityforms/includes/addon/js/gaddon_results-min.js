var gresultsAjaxRequest,gresults={drawCharts:function(){jQuery(".gresults-chart-wrapper").each((function(e,t){var r,s=jQuery(t).attr("id"),a=jQuery(t).data("options"),l=jQuery(t).data("datatable"),u=jQuery(t).data("charttype"),i=l,o=google.visualization.arrayToDataTable(i),n=document.getElementById(s);"bar"==u?r=new google.visualization.BarChart(n):"pie"==u?r=new google.visualization.PieChart(n):"column"==u&&(r=new google.visualization.ColumnChart(n)),r.draw(o,a)}))},renderStateData:function(e){var t=jQuery("#gresults-results");t.data("searchcriteria",e.searchCriteria),jQuery("#gresults-results-filter").html(e.filterUI),t.css("opacity",0),t.html(e.html),gresults.drawCharts(),t.fadeTo("slow",1);var r=jQuery("#gresults-results-field-filters-container");r.resizable(),r.resizable("destroy"),r.resizable({handles:"s"})},getResults:function(){gresults.recordFormState();var e=jQuery("#gresults-results-filter-form").serialize();gresults.sendRequest(e)},sendRequest:function(e,t,r){var s=jQuery("#gresults-results"),a=jQuery("#gresults-results-filter-buttons input"),l=jQuery(".gresults-filter-loading"),u=jQuery("#gresults-view-slug").val(),i=jQuery("#_gf_results_nonce").val(),o="action=gresults_get_results_"+u+"&"+e+"&_gf_results_nonce"+i;t&&(o+="&state="+t+"&checkSum="+r),gresultsAjaxRequest=jQuery.ajax({url:ajaxurl,type:"POST",dataType:"json",data:o,beforeSend:function(e,t){s.fadeTo("slow",.33),s.html(""),l.show(),a.attr("disabled","disabled")}}).done((function(r){if(r&&-1!==r)if("complete"===r.status){a.removeAttr("disabled"),l.hide(),s.html(r.html),jQuery("#gresults-results").data("searchcriteria",r.searchCriteria);var u=jQuery("#gresults-results-filter").html();gresults.drawCharts(),s.fadeTo("slow",1),window.history.replaceState&&(history.state?history.pushState({html:r.html,filterUI:u,searchCriteria:r.searchCriteria},"","?"+e):history.replaceState({html:r.html,filterUI:u,searchCriteria:r.searchCriteria},"","?"+e)),gresults.drawCharts(),window.gform_initialize_tooltips&&gform_initialize_tooltips()}else"incomplete"===r.status?(t=r.stateObject,gresults.sendRequest(e,t,r.checkSum),s.html(r.html)):(l.hide(),s.html(gresultsStrings.ajaxError));else l.hide(),s.html(gresultsStrings.ajaxError)})).fail((function(e){a.removeAttr("disabled"),s.fadeTo("fast",1);var t=e.statusText;l.hide(),t="abort"==t?"Request cancelled":gresultsStrings.ajaxError,s.html(t)}))},getMoreResults:function(e,t){var r=jQuery("#gresults-results-field-content-"+t),s=jQuery("#gresults-results"),a=jQuery(r).data("offset"),l=jQuery("#gresults-view-slug").val(),u=s.data("searchcriteria"),i=jQuery("#_gf_results_nonce").val();return jQuery.ajax({url:ajaxurl,type:"POST",dataType:"json",data:{action:"gresults_get_more_results_"+l,view:l,form_id:e,field_id:t,offset:a,search_criteria:u,_gf_results_nonce:i},success:function(e){-1===e||(e.html&&jQuery(r).append(e.html),e.more_remaining||jQuery("#gresults-results-field-more-link-"+t).hide(),jQuery(r).data("offset",e.offset))}}),!1},clearFilterForm:function(){jQuery("#gresults-results-field-filters-container").off("click",".gform-add").gfFilterUI(gresultsFilterSettings,[],!0),jQuery("#gresults-results-filter-form").find("input, select").each((function(){switch(this.type){case"text":case"select-one":jQuery(this).val("").change();break;case"checkbox":case"radio":this.checked=!1}}))},recordFormState:function(){jQuery("#gresults-results-filter-form input[type='radio']").each((function(){this.checked?jQuery(this).prop("defaultChecked",!0):jQuery(this).prop("defaultChecked",!1)})),jQuery("#gresults-results-filter-form input[type='checkbox']").each((function(){this.checked?jQuery(this).prop("defaultChecked",!0):jQuery(this).prop("defaultChecked",!1)})),jQuery("#gresults-results-filter-form input[type='text']").each((function(){jQuery(this).prop("defaultValue",jQuery(this).val())})),jQuery("#gresults-results-filter-form select option").each((function(){jQuery(this).prop("defaultSelected",jQuery(this).prop("selected"))}))},setCustomFilter:function(e,t){elementId="gresults-custom-"+e,0==jQuery("#"+elementId).length?jQuery("#gresults-results-filter-form").append("<input type='hidden' id='"+elementId+"' name='"+e+"' value='"+t+"'>"):jQuery("#"+elementId).val(t)}};google.load("visualization","1",{packages:["corechart"]}),google.setOnLoadCallback(gresults.drawCharts),jQuery(document).ready((function(){jQuery("#gresults-results").length>0&&(jQuery("#gresults-results-field-filters-container").gfFilterUI(gresultsFilterSettings,gresultsInitVars,!0),jQuery(window).resize((function(e){e.target===window&&gresults.drawCharts()})),window.onpopstate=function(e){e.state&&gresults.renderStateData(e.state)},jQuery("#gresults-results-filter-date-start, #gresults-results-filter-date-end").datepicker({dateFormat:"yy-mm-dd",changeMonth:!0,changeYear:!0}),jQuery("#gresults-results-filter-form").submit((function(e){return gresults.getResults(),!1})),history.state?gresults.renderStateData(history.state):gresults.getResults(),window.gform_initialize_tooltips&&gform_initialize_tooltips())}));