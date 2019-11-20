<template>
   <button @click="addToCart" class="btn btn-success" > {{ message }}

   </button>
</template>

<script>
export default {
   data() {
      return {
            message : 'Agregar al carrito',
            endPoint : '/carrito'
      }
   },
   props : { product : { type: Object }},

   methods:{
      addToCart () {
         axios ({
               method : 'POST',
               url: this.endPoint,
               data : {
                  product_id : this.product.id
               },
               headers: {
                  'Accept' : 'application/json',
                  'Content-type' :'application/json'
               }
         }).then( ()=> {
            window.store.commit('increment');
         })
      }
}

}
</script>