import { createRouter , createWebHitory } from 'vue-router'

import productIndex from '../components/products/index.vue'
import productNew from '../components/products/new.vue'
import notFound from '../components/notFound.vue'

const routes =[
    {
        path:'/',
        component: productIndex
    },
    {
        path:'/product/new',
        component: productNew
    },
    {
        path:'/:pathMatch(.*)*',
        component:notFound
    }

]
const router = createRouter({
    history:createWebHitory(process.env.BASE_URL),
    routes,
        
})
export default router