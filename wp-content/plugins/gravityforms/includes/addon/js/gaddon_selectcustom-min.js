jQuery(document).ready((function(t){t(".gaddon-setting-select-custom").on("change",(function(){"gf_custom"==t(this).val()&&t(this).hide().siblings(".gaddon-setting-select-custom-container").show()})),t(".gaddon-setting-select-custom-container .select-custom-reset").on("click",(function(e){e.preventDefault();var n=t(this).closest(".gaddon-setting-select-custom-container"),s=n.prev("select.gaddon-setting-select-custom");n.fadeOut((function(){n.find("input").val("").change(),s.fadeIn().focus().val("")}))}))}));