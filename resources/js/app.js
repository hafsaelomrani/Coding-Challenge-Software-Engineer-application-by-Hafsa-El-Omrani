require('.boostrap')

import {createApp} from "vue";
import router from "./router";
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/dist/sweetalert2.css'
import App from "./components/App.vue"



window.Swal =Swal;
const toast = Swal.mixin
({
    toast:true,
    position:'top-end',
    showConfirmButton:false,
    timer:3000,
    timerProgressBar:true,
})

createApp(App).use(router).mount("#app")