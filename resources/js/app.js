import './bootstrap'
import dashboardHeader from "./components/dashboardHeader.vue"
import showHeader from "./components/showHeading.vue"
import orderChart from "./components/orderChart.vue"
import salesChart from "./components/salesChart.vue"

new Vue({
    el: '#app',
    components: {
        "dash-head": dashboardHeader,
        "show-head": showHeader,
        "order-chart": orderChart,
        "sales-chart": salesChart,
    },
    created() {
        $('[data-toggle="tooltip"]').tooltip();
        // init wow
        new WOW().init();
        // fixed nav scroll
        $(document).scroll(function () {
            if ($(window).scrollTop() >= 5) {
                $(".navbar").addClass('nav-top').addClass('shadow-sm');
                $('.btn-register').addClass('register-btn');
            } else {
                $(".navbar").removeClass('nav-top').removeClass('shadow-sm');
                $('.btn-register').removeClass('register-btn');
            }
        });
        // tooltip bootstrap
    },
    data() {
        return {
            grid: false,
            selectedAll: false,
            select: false,
            checkedRows: [],
        }
    },
    methods: {
        // change view
        view() {
            this.grid = !this.grid;
        },
        // select all checkboxes
        selectAll() {
            this.checkedRows = []
            this.selectedAll = !this.selectedAll;
            if (this.selectedAll) {
                // select All
                $('input[name="checked"]').prop('checked', true);
                // $('input[name="checked"]').each(() => {
                //     this.checkedRows.push(this.val());
                // })
            } else {
                // diselect All
                $('input[name="checked"]').prop('checked', false);
            }
        },
        selected() {
            if ($('input[type="checkbox"]:not(:checked)').length == 0) {
                // all are checked
                this.selectedAll = true;
                $('input[name="selectAll"]').prop('checked', true);
                $('input[name="selectAll"]').prop('indeterminate', false);
            } else {
                // some checkbox checked
                this.selectedAll = false;
                $('input[name="selectAll"]').prop('indeterminate', true);
                $('input[name="selectAll"]').prop('checked', false);
            }
        },
        // close session
        closeSession() {
            $('.session').remove();
        }
    }
});
