webpackJsonp(["app/js/batch-upload/index"],{0:function(e,t){e.exports=jQuery},"582d7dd2d5834261808b":function(e,t,a){"use strict";var n=a("5899c7c7c1283bfb76ec");new(function(e){return e&&e.__esModule?e:{default:e}}(n).default)({element:"#uploader-container"}),$("#uploader-container").parents(".modal").on("hidden.bs.modal",function(){window.location.reload()})},"5899c7c7c1283bfb76ec":function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("7ab4a89ebadbfdecc2bf"),o=n(r),i=a("4602c3f5fe7ad9e3e91d"),l=n(i),s=a("b334fd7e4c5a19234db2"),u=n(s),d=function(){function e(t){(0,o.default)(this,e),this.element=$(t.element),this.uploader=null,this.files=[],this.$sortable=$("#sortable-list"),this.init()}return(0,l.default)(e,[{key:"init",value:function(){this.initUploader(),this.initEvent()}},{key:"initUploader",value:function(){var e=this,t=this.element;this.uploader=new UploaderSDK({id:t.attr("id"),initUrl:t.data("initUrl"),finishUrl:t.data("finishUrl"),accept:t.data("accept"),process:this.getUploadProcess(),ui:"batch",fileNumLimit:void 0!==t.data("numLimit")?t.data("numLimit"):null,locale:document.documentElement.lang}),this.uploader.on("file.finish",function(t){e.files.push(t)}),this.uploader.on("error",function(e){var t={F_DUPLICATE:Translator.trans("uploader.file.exist")};e.message||(e.message=t[e.error]),(0,u.default)("danger",e.message)})}},{key:"initEvent",value:function(){var e=this;$(".js-upload-params").on("change",function(t){e.uploader.setProcess(e.getUploadProcess())}),$(".js-batch-create-lesson-btn").on("click",function(t){if(!e.files.length)return void(0,u.default)("danger",Translator.trans("uploader.select_one_file"));var a=$(t.currentTarget);a.button("loading"),e.validLessonNum(a)&&e.files.map(function(t,n){var r=!1;n+1==e.files.length&&(r=!0),e.createLesson(a,t,r)})}),$('[data-toggle="popover"]').popover({html:!0})}},{key:"getUploadProcess",value:function(){var e=$(".js-upload-params").get().reduce(function(e,t){return e[$(t).attr("name")]=$(t).find("option:selected").val(),e},{}),t={video:e,document:{type:"html"}};return $("[name=support_mobile]").length>0&&(t.common={supportMobile:$("[name=support_mobile]").val()}),t}},{key:"validLessonNum",value:function(e){var t=!0;return $.ajax({type:"post",url:e.data("validUrl"),async:!1,data:{number:this.files.length},success:function(a){a&&a.error&&((0,u.default)("danger",a.error),e.button("reset"),t=!1),t=!0}}),t}},{key:"createLesson",value:function(e,t,a){var n=this;$.ajax({type:"post",url:e.data("url"),async:!1,data:{fileId:t.id},success:function(e){e&&e.error?(0,u.default)("danger",e.error):n.$sortable.trigger("addItem",e)},error:function(e){(0,u.default)("danger",Translator.trans("uploader.status.error"))},complete:function(e){a&&$("#modal").modal("hide")}})}}]),e}();t.default=d}},["582d7dd2d5834261808b"]);