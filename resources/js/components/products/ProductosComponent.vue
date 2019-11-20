<template>
    <section>
        <material-animation    tag="div"   name='fadeIn'
            class="row">
                <CardProducto v-for='(product,index) in products' 
                  :data-index="index"
                 :key='product.id' :product="product " />
              
        </material-animation>
    </section>
</template>

<script>
 import CardProducto from './../products/ProductCardComponent';
    export default {
        
        created(){
            this.fetchProductos();
        },

       data() {
           return {
               name: 'Products Componente',
               products: [],
               endPoint : '/productos',
           }
       },
       components : { CardProducto },

        methods : {
                fetchProductos() {
                    axios.get( this.endPoint).then( response => {
                    this.products = response.data.data ;
                    } );
                },
                
            }
        
    }
</script>
