let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Admin
 |--------------------------------------------------------------------------
 |
 */
var pluginPath = 'resources/plugins/';
var themePath = 'resources/theme/';

mix.combine([
   // ** Required Plugins **
   themePath + "vendors/js/base/jquery.min.js",
   themePath + "vendors/js/base/core.js",
   themePath + "vendors/js/noty/noty.js",
   themePath + "vendors/js/chart/chart.js",
   themePath + "vendors/js/calendar/moment.min.js",
   themePath + "vendors/js/calendar/fullcalendar.js",
   themePath + "vendors/js/leaflet/leaflet.js",
   themePath + "vendors/js/bootstrap-select/bootstrap-select.min.js",
   themePath + "vendors/js/datatables/datatables.min.js",
   themePath + "vendors/js/datatables/dataTables.buttons.min.js",
   themePath + "vendors/js/datatables/jszip.min.js",
   themePath + "vendors/js/datatables/buttons.html5.min.js",
   themePath + "vendors/js/datatables/pdfmake.min.js",
   themePath + "vendors/js/datatables/vfs_fonts.js",
   themePath + "vendors/js/datatables/buttons.print.min.js",
   themePath + "vendors/js/nicescroll/nicescroll.js",
   themePath + "vendors/js/datepicker/daterangepicker.js",
   themePath + "vendors/js/owl-carousel/owl.carousel.js",
   themePath + "vendors/js/app/app.js",
   themePath + "js/components/tables/tables.js",
   themePath + "js/components/validation/validation.js",

   // plugins 
   pluginPath + "clockpicker/bootstrap-clockpicker.js",

   // custom plugin init js
   pluginPath + "custom/notifs.js",
   pluginPath + "custom/layouts.js"

], 'public/admin/js/core/plugins.js')

   .js('resources/assets/js/app.js', 'public/admin/js')
   .sass('resources/assets/sass/app.scss', 'public/admin/css')
if (mix.inProduction()) {
   mix.version();
}
