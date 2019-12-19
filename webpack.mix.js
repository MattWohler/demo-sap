const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.copyDirectory('resources/assets/global/img', 'public/img');
mix.copyDirectory('resources/vendors/vendors/flaticon/fonts', 'public/fonts');
mix.copyDirectory('resources/vendors/vendors/metronic/fonts', 'public/fonts');
mix.copyDirectory('resources/vendors/vendors/line-awesome/fonts', 'public/fonts');
mix.copyDirectory('resources/vendors/vendors/fontawesome5/webfonts', 'public/webfonts');
mix.copyDirectory('resources/assets/global/plugins/font-awesome/fonts', 'public/fonts');

mix.js('resources/js/app.js', 'public/js/app.vue.js');

mix.scripts([
    'public/js/app.vue.js',
    // Global Mandatory
    'resources/vendors/js-cookie/src/js.cookie.js',
    'resources/vendors/moment/min/moment.min.js',
    'resources/vendors/tooltip.js/dist/umd/tooltip.min.js',
    'resources/vendors/perfect-scrollbar/dist/perfect-scrollbar.js',
    'resources/vendors/wnumb/wNumb.js',
    // End Global Mandatory
    // Global Optional
    'resources/vendors/jquery.repeater/src/lib.js',
    'resources/vendors/jquery.repeater/src/jquery.input.js',
    'resources/vendors/jquery.repeater/src/repeater.js',
    'resources/vendors/jquery-form/dist/jquery.form.min.js',
    'resources/vendors/block-ui/jquery.blockUI.js',
    'resources/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
    'resources/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js',
    'resources/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js',
    'resources/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
    'resources/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js',
    'resources/vendors/bootstrap-daterangepicker/daterangepicker.js',
    'resources/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js',
    'resources/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js',
    'resources/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js',
    'resources/vendors/bootstrap-switch/dist/js/bootstrap-switch.js',
    'resources/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js',
    'resources/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js',
    'resources/vendors/bootstrap-select/dist/js/bootstrap-select.js',
    'resources/vendors/select2/dist/js/select2.full.js',
    'resources/vendors/typeahead.js/dist/typeahead.bundle.js',
    'resources/vendors/handlebars/dist/handlebars.js',
    'resources/vendors/inputmask/dist/jquery.inputmask.bundle.js',
    'resources/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js',
    'resources/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js',
    'resources/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js',
    'resources/vendors/nouislider/distribute/nouislider.js',
    'resources/vendors/owl.carousel/dist/owl.carousel.js',
    'resources/vendors/autosize/dist/autosize.js',
    'resources/vendors/clipboard/dist/clipboard.min.js',
    'resources/vendors/ion-rangeslider/js/ion.rangeSlider.js',
    'resources/vendors/dropzone/dist/dropzone.js',
    'resources/vendors/summernote/dist/summernote.js',
    'resources/vendors/markdown/lib/markdown.js',
    'resources/vendors/bootstrap-markdown/js/bootstrap-markdown.js',
    'resources/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js',
    'resources/vendors/jquery-validation/dist/jquery.validate.js',
    'resources/vendors/jquery-validation/dist/additional-methods.js',
    'resources/vendors/js/framework/components/plugins/forms/jquery-validation.init.js',
    'resources/vendors/bootstrap-notify/bootstrap-notify.min.js',
    'resources/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js',
    'resources/vendors/toastr/build/toastr.min.js',
    'resources/vendors/jstree/dist/jstree.js',
    'resources/vendors/raphael/raphael.js',
    'resources/vendors/morris.js/morris.js',
    'resources/vendors/chartist/dist/chartist.js',
    'resources/vendors/chart.js/dist/Chart.bundle.js',
    'resources/vendors/js/framework/components/plugins/charts/chart.init.js',
    'resources/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js',
    'resources/vendors/vendors/jquery-idletimer/idle-timer.min.js',
    'resources/vendors/waypoints/lib/jquery.waypoints.js',
    'resources/vendors/counterup/jquery.counterup.js',
    'resources/vendors/es6-promise-polyfill/promise.min.js',
    'resources/vendors/sweetalert2/dist/sweetalert2.min.js',
    'resources/vendors/js/framework/components/plugins/base/sweetalert2.init.js',
    // Global Theme Bundle
    'resources/assets/demo/base/scripts.bundle.js',
], 'public/js/app.js');

mix.styles([
    'resources/vendors/perfect-scrollbar/css/perfect-scrollbar.css',
    'resources/vendors/tether/dist/css/tether.css',
    'resources/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css',
    'resources/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css',
    'resources/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
    'resources/vendors/bootstrap-daterangepicker/daterangepicker.css',
    'resources/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css',
    'resources/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css',
    'resources/vendors/bootstrap-select/dist/css/bootstrap-select.css',
    'resources/vendors/select2/dist/css/select2.css',
    'resources/vendors/nouislider/distribute/nouislider.css',
    'resources/vendors/owl.carousel/dist/assets/owl.carousel.css',
    'resources/vendors/owl.carousel/dist/assets/owl.theme.default.css',
    'resources/vendors/ion-rangeslider/css/ion.rangeSlider.css',
    'resources/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css',
    'resources/vendors/dropzone/dist/dropzone.css',
    'resources/vendors/summernote/dist/summernote.css',
    'resources/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css',
    'resources/vendors/animate.css/animate.css',
    'resources/vendors/toastr/build/toastr.css',
    'resources/vendors/jstree/dist/themes/default/style.css',
    'resources/vendors/morris.js/morris.css',
    'resources/vendors/chartist/dist/chartist.min.css',
    'resources/vendors/sweetalert2/dist/sweetalert2.min.css',
    'resources/vendors/socicon/css/socicon.css',
    'resources/vendors/vendors/line-awesome/css/line-awesome.css',
    'resources/vendors/vendors/flaticon/css/flaticon.css',
    'resources/vendors/vendors/metronic/css/styles.css',
    'resources/vendors/vendors/fontawesome5/css/all.min.css',
    'node_modules/bootstrap-vue/dist/bootstrap-vue.css',
    'node_modules/vuetify/dist/vuetify.css',
    'resources/assets/demo/base/style.bundle.css',
    'resources/vendors/custom/datatables/datatables.bundle.css',
    'node_modules/vue-multiselect/dist/vue-multiselect.min.css',
    'resources/sass/custom.css',
], 'public/css/app.css');

mix.scripts(['resources/js/login.js'], 'public/js/login.js');

if (mix.inProduction()) {
    mix.version();
}
