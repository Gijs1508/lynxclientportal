const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);


mix.js('resources/assets/js/admin/admin-general.js', 'public/assets/js/admin')
mix.js('resources/assets/js/admin/admin-role.js', 'public/assets/js/admin')
mix.js('resources/assets/js/client/client-list.js', 'public/assets/js/client')
mix.js('resources/assets/js/client/client-profile.js', 'public/assets/js/client')
mix.js('resources/assets/js/client/client-sidemenuchart.js', 'public/assets/js/client')
mix.js('resources/assets/js/client/client-view.js', 'public/assets/js/client')
mix.js('resources/assets/js/employee/emp-attendance.js', 'public/assets/js/employee')
mix.js('resources/assets/js/employee/emp-expenses.js', 'public/assets/js/employee')
mix.js('resources/assets/js/employee/emp-leaves.js', 'public/assets/js/employee')
mix.js('resources/assets/js/employee/emp-myleaves.js', 'public/assets/js/employee')
mix.js('resources/assets/js/employee/emp-payslips.js', 'public/assets/js/employee')
mix.js('resources/assets/js/employee/emp-sidemenuchart.js', 'public/assets/js/employee')
mix.js('resources/assets/js/hr/hr-attlist.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-attmark.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-attview.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-award.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-department.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-emp.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-empview.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-events.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-expenses.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-holiday.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-leaves.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-notice.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-overcldr.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-payroll.js', 'public/assets/js/hr')
mix.js('resources/assets/js/hr/hr-settings.js', 'public/assets/js/hr')
mix.js('resources/assets/js/job/job-application.js', 'public/assets/js/job')
mix.js('resources/assets/js/job/job-apply.js', 'public/assets/js/job')
mix.js('resources/assets/js/job/job-list.js', 'public/assets/js/job')
mix.js('resources/assets/js/job/job-new.js', 'public/assets/js/job')
mix.js('resources/assets/js/project/project-list.js', 'public/assets/js/project')
mix.js('resources/assets/js/project/project-new.js', 'public/assets/js/project')
mix.js('resources/assets/js/project/project-overclndr.js', 'public/assets/js/project')
mix.js('resources/assets/js/project/project-sidemenuchart.js', 'public/assets/js/project')
mix.js('resources/assets/js/project/project-view.js', 'public/assets/js/project')
mix.js('resources/assets/js/superadmin/superadmin-admins.js', 'public/assets/js/superadmin')
mix.js('resources/assets/js/superadmin/superadmin-company.js', 'public/assets/js/superadmin')
mix.js('resources/assets/js/superadmin/superadmin-invoice.js', 'public/assets/js/superadmin')
mix.js('resources/assets/js/superadmin/superadmin-role.js', 'public/assets/js/superadmin')
mix.js('resources/assets/js/superadmin/superadmin-settings.js', 'public/assets/js/superadmin')
mix.js('resources/assets/js/superadmin/superadmin-subscription.js', 'public/assets/js/superadmin')
mix.js('resources/assets/js/support/support-admindash.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-agentdash-dark.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-agentdash.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-articles.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-assignticket.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-category.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-createticket.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-customer.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-customerview.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-landing-rtl.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-landing.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-sidemenu.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-ticket.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-ticketactive.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-ticketlist.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-ticketview.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-userdash-dark.js', 'public/assets/js/support')
mix.js('resources/assets/js/support/support-userdash.js', 'public/assets/js/support')
mix.js('resources/assets/js/task/task-board-rtl.js', 'public/assets/js/task')
mix.js('resources/assets/js/task/task-board.js', 'public/assets/js/task')
mix.js('resources/assets/js/task/task-list.js', 'public/assets/js/task')
mix.js('resources/assets/js/task/task-new.js', 'public/assets/js/task')
mix.js('resources/assets/js/task/task-overclndr.js', 'public/assets/js/task')
mix.js('resources/assets/js/task/task-profile.js', 'public/assets/js/task')
mix.js('resources/assets/js/accordion.js', 'public/assets/js')
mix.js('resources/assets/js/apexchart-custom.js', 'public/assets/js')
mix.js('resources/assets/js/app-calendar-events.js', 'public/assets/js')
mix.js('resources/assets/js/app-calendar-rtl.js', 'public/assets/js')
mix.js('resources/assets/js/app-calendar.js', 'public/assets/js')
mix.js('resources/assets/js/chart.js', 'public/assets/js')
mix.js('resources/assets/js/charts.js', 'public/assets/js')
mix.js('resources/assets/js/chat.js', 'public/assets/js')
mix.js('resources/assets/js/chat2-rtl.js', 'public/assets/js')
mix.js('resources/assets/js/chat2.js', 'public/assets/js')
mix.js('resources/assets/js/construction.js', 'public/assets/js')
mix.js('resources/assets/js/contact.js', 'public/assets/js')
mix.js('resources/assets/js/cookie.js', 'public/assets/js')
mix.js('resources/assets/js/countdown.js', 'public/assets/js')
mix.js('resources/assets/js/custom.js', 'public/assets/js')
mix.js('resources/assets/js/datatables.js', 'public/assets/js')
mix.js('resources/assets/js/daterange.js', 'public/assets/js')
mix.js('resources/assets/js/dragula.js', 'public/assets/js')
mix.js('resources/assets/js/echarts.js', 'public/assets/js')
mix.js('resources/assets/js/file-upload.js', 'public/assets/js')
mix.js('resources/assets/js/filupload.js', 'public/assets/js')
mix.js('resources/assets/js/flot.js', 'public/assets/js')
mix.js('resources/assets/js/form-editor.js', 'public/assets/js')
mix.js('resources/assets/js/form-editor2.js', 'public/assets/js')
mix.js('resources/assets/js/form-elements.js', 'public/assets/js')
mix.js('resources/assets/js/form-wizard.js', 'public/assets/js')
mix.js('resources/assets/js/formelementadvnced.js', 'public/assets/js')
mix.js('resources/assets/js/forms.js', 'public/assets/js')
mix.js('resources/assets/js/fullcalendar.js', 'public/assets/js')
mix.js('resources/assets/js/gallery.js', 'public/assets/js')
mix.js('resources/assets/js/image-comparision.js', 'public/assets/js')
mix.js('resources/assets/js/index1.js', 'public/assets/js')
mix.js('resources/assets/js/index2.js', 'public/assets/js')
mix.js('resources/assets/js/index3.js', 'public/assets/js')
mix.js('resources/assets/js/index4.js', 'public/assets/js')
mix.js('resources/assets/js/index5.js', 'public/assets/js')
mix.js('resources/assets/js/index6.js', 'public/assets/js')
mix.js('resources/assets/js/index7.js', 'public/assets/js')
mix.js('resources/assets/js/invoice.js', 'public/assets/js')
mix.js('resources/assets/js/jvectormap.js', 'public/assets/js')
mix.js('resources/assets/js/livechat.js', 'public/assets/js')
mix.js('resources/assets/js/map-leafleft.js', 'public/assets/js')
mix.js('resources/assets/js/mapelmaps.js', 'public/assets/js')
mix.js('resources/assets/js/morris.js', 'public/assets/js')
mix.js('resources/assets/js/newsticker.js', 'public/assets/js')
mix.js('resources/assets/js/popover.js', 'public/assets/js')
mix.js('resources/assets/js/rangeslider.js', 'public/assets/js')
mix.js('resources/assets/js/rounded-barchart.js', 'public/assets/js')
mix.js('resources/assets/js/select2.js', 'public/assets/js')
mix.js('resources/assets/js/session.js', 'public/assets/js')
mix.js('resources/assets/js/sparkline.js', 'public/assets/js')
mix.js('resources/assets/plugins/sticky/sticky.js', 'public/assets/js')
mix.js('resources/assets/plugins/sticky/sticky2.js', 'public/assets/js')
mix.js('resources/assets/js/sweet-alert.js', 'public/assets/js')
mix.js('resources/assets/js/tabs.js', 'public/assets/js')
mix.js('resources/assets/js/timeline.js', 'public/assets/js')
mix.js('resources/assets/js/widgets.js', 'public/assets/js')
mix.sass('resources/assets/scss/style.scss', 'public/assets/css')
mix.sass('resources/assets/custom-theme/dark.scss', 'public/assets/css')
mix.sass('resources/assets/custom-theme/sidemenu.scss', 'public/assets/css')
mix.sass('resources/assets/custom-theme/skin-modes.scss', 'public/assets/css')
mix.copyDirectory('resources/assets/images', 'public/assets/images')
mix.copyDirectory('resources/assets/plugins', 'public/assets/plugins')

mix.options({
    processCssUrls: false
});

mix.browserSync('http://127.0.0.1:8000');