import './bootstrap'
import dashboardHeader from "./components/dashboardHeader.vue"

new Vue({
    el: '#app',
    components: {
        "dash-head": dashboardHeader,
    },
    created() {
        new WOW().init();
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
        }
    },
    methods: {
        // change view
        view() {
            this.grid = !this.grid;
        },
        // close session
        closeSession() {
            $('.session').remove();
        }
    }
});
