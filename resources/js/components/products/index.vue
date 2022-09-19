
<script setup>
import router from '../../router';
import axios from "axios"
import { onMounted } from "vue"
import { useRouter } from "vue-router"
import usePosts from "../composables/posts";
     let products =ref([]);
     const router= UseRouter()

     onMounted(async () => {
        getProducts()
    })
    const newProduct = () =>
    {
        router.push('/product/new')
    }
    const getProducts = async () => {
        let response = await axios.get("/api/get_all_products")
        products.value = response.data.products
        console.log('products',products.value)
        const ourImage= (img) => {
            return "/upload/"+img
        }
    }

Export 
{
    setup()
    {

        const { posts,getPosts } = usePosts()
        onMounted(getPosts)
        return { posts,getPosts};
    }
}
</script> 
<template>  
    <div class="products__list table  my-3">
              
        <div class="customers__titlebar dflex justify-content-between align-items-center">
            <div class="customers__titlebar--item">
                <h1 class="my-1">Products</h1>
            </div>
            <div class="customers__titlebar--item" @click="NewProduct">
                <button class="btn btn-secondary my-1" >
                    Add Product
                </button>
            </div>
        </div>

        <div class="table--heading mt-2 products__list__heading " style="padding-top: 20px;background:#FFF">
            <p class="table--heading--col1">{{item.image}}</p>
            <p class="table--heading--col2">
                {{item.name}}
            </p>
            <p class="table--heading--col4">{{item.description}}</p>
            <p class="table--heading--col3">
                {{item.price}}
            </p>
            <p class="table--heading--col5">{{item.category}}</p>
        </div>

        <!-- product 1 -->
        <div class="table--items products__list__item" v-for="item in product" :key='item.id' v-if="product.length > 0">
            <div class="products__list__item--imgWrapper">
                <img class="products__list__item--img" src="ourImage(item.photo)"  style="height: 40px;" v-if="item.photo">
            </div>
            <a href="# " class="table--items--col2">
                Product name
            </a>
            <p class="table--items--col2">
                category
            </p>
            <p class="table--items--col3">
                10
            </p>     
            <div>     
                <button class="btn-icon btn-icon-success" >
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <button class="btn-icon btn-icon-danger" >
                    <i class="far fa-trash-alt"></i>
                </button>
            </div>
            <div class="table--items products__list__item"  v-if="product.length <= 0" >
                <p>Product NOt Found</p>
            </div>
        </div>
    </div>
    <Pagination :data="posts" @pagination-change-page="getPosts" class="mt-4"/>

<br><br><br>
                                           <!-- product creation -->
     <div class="products__create ">
    
             <div class="products__create__titlebar dflex justify-content-between align-items-center">
                 <div class="products__create__titlebar--item">
                     
                     <h1 class="my-1">Add Product</h1>
                 </div>
                 <div class="products__create__titlebar--item">
                     
                     <button class="btn btn-secondary ml-1" >
                         Save
                     </button>
                 </div>
             </div>

             <div class="products__create__cardWrapper mt-2">
                 <div class="products__create__main">
                     <div class="products__create__main--addInfo card py-2 px-2 bg-white">
                         <p class="mb-1">Name</p>
                         <input type="text" class="input" >

                         <p class="my-1">Description (optional)</p>
                         <textarea cols="10" rows="5" class="textarea" ></textarea>
                         
                         <div class="products__create__main--media--images mt-2">
                            <ul class="products__create__main--media--images--list list-unstyled">
                                <li class="products__create__main--media--images--item">
                                    <div class="products__create__main--media--images--item--imgWrapper">
                                        <img class="products__create__main--media--images--item--img" alt="" />  
                                    </div>
                                </li>
                                <li class="products__create__main--media--images--item">
                                    <form class="products__create__main--media--images--item--form">
                                        <label class="products__create__main--media--images--item--form--label" for="myfile">Add Image</label>
                                        <input class="products__create__main--media--images--item--form--input" type="file" id="myfile" >
                                    </form>
                                </li>
                            </ul>
                        </div>
                    
                     </div>

                 </div>
                 <div class="products__create__sidebar">
                     <div class="card py-2 px-2 bg-white">
                         <div class="my-3">
                             <p>Category</p>
                             <input type="text" class="input" >
                         </div>
                         <hr>
                         <div class="my-3">
                             <p>Price</p>
                             <input type="text" class="input" >
                         </div>
                     </div>

                 </div>
             </div>
             <!-- Footer Bar -->
             <div class="dflex justify-content-between align-items-center my-3">
                 <p ></p>
                 <button class="btn btn-secondary" >Save</button>
             </div>
         
     </div>
</template>
