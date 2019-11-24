import './bootstrap'
import dashboardHeader from "./components/dashboardHeader.vue"

new Vue({
    el: '#app',
    components: {
        "dash-head": dashboardHeader,
    },
    created() {
        // init wow
        new WOW().init();
        // fixed nav scroll
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 5) {
                $(".navbar").addClass('nav-top');
            } else {
                $(".navbar").removeClass('nav-top');
            }
        });
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
