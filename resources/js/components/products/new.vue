<script setup>
// import axios from "axios";
import {ref} from "vue"
import { useRouter} from "vue-router";
const router= UseRouter()

    let from = ref
    ({
        name:'',
        description:'',
        price:'',
        image:'',
        category:''
    })
    const getImage= () => 
    {
        let photo = "/upload/image.png"
        if(from.value.photo)
        {
            if(from.value.photo.IndexOf('base64') != -1)
            {
                photo = from.value.photo
            }
            else
            {
                photo = '/upload/'+from.value.photo
            }
            return photo;
        }
    }
    const UpdatePhoto= (e) => 
    {
        let file =e.target.files[0];
        let reader =new FileReader();
        let limit = 1024*1024*2;
        if(file["size"]>limit)
        {
            return false;
        }
        reader.onloadend=(file)=> 
        {
            from.value.photo =reader.result
        }
        reader.readAsDataURL(file);
    }
    const SaveProduct = () =>
    {
        const fromData = new fromData()
        fromData.append('name',from.value.name)
        fromData.append('price',from.value.price)
        fromData.append('image',from.value.image)
        fromData.append('description',from.value.description)
        fromData.append('category',from.value.category)
        axios.post("/api/add_product/",fromData)
        .then((Response)=>
        {
            from.value.name='',
            from.value.description='',
            from.value.price='',
            from.value.image='',
            from.value.category=''
            route.push('/')
            toast.fire
            ({
                icon:"success",
                title:"Product add successfully"
            })
        })
        .catch((error)=>
        {

        })
    }
</script>

<template>
<div class="container">
<div class="products__create ">

        <div class="products__create__titlebar dflex justify-content-between align-items-center">
            <div class="products__create__titlebar--item">
                
                <h1 class="my-1">Add Product</h1>
            </div>
            <div class="products__create__titlebar--item">
                
                <button class="btn btn-secondary ml-1"  @click="SaveProduct()" >
                    Save
                </button>
            </div>
        </div>

        <div class="products__create__cardWrapper mt-2">
            <div class="products__create__main">
                <div class="products__create__main--addInfo card py-2 px-2 bg-white">
                    <p class="mb-1">Name</p>
                    <input type="text" class="input" v-model="from.name" >

                    <p class="my-1">Description (optional)</p>
                    <textarea cols="10" rows="5" class="textarea"  v-model="from.description" ></textarea>
                    
                    <div class="products__create__main--media--images mt-2">
                       <ul class="products__create__main--media--images--list list-unstyled">
                           <li class="products__create__main--media--images--item">
                               <div class="products__create__main--media--images--item--imgWrapper">
                                   <img class="products__create__main--media--images--item--img" src="getPhoto()" alt="" />  
                               </div>
                           </li>
                           <!-- upload image small -->
                           <li class="products__create__main--media--images--item">
                               <form class="products__create__main--media--images--item--form">
                                   <label class="products__create__main--media--images--item--form--label" for="myfile">Add Image</label>
                                   <input class="products__create__main--media--images--item--form--input" type="file" id="myfile" @change="UpdatePhoto">
                               </form>
                           </li>
                       </ul>
                   </div>
               
                </div>

            </div>
            <div class="products__create__sidebar">
                <!-- Product Organization -->
                <div class="card py-2 px-2 bg-white">
                    
                    <!-- Product unit -->
                    <div class="my-3">
                        <p>Category</p>
                        <input type="text" class="input"  v-model="from.Category" >
                    </div>
                    <hr>
                    <!-- Product Price -->
                    <div class="my-3">
                        <p>Price</p>
                        <input type="text" class="input"  v-model="from.Price"  >
                    </div>
                </div>

            </div>
        </div>
        <!-- Footer Bar -->
        <div class="dflex justify-content-between align-items-center my-3">
            <p ></p>
            <button class="btn btn-secondary" @click="SaveProduct()" >Save</button>
        </div>
    
</div></div>
</template>