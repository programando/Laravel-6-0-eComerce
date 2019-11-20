<template>
  <div>
        <material-animation    tag="div"   name='fadeIn'  >
            <article class="card-product" :key="product.id" data-index="index"
            v-for="(product,index) in products">
              <div class="row">
                <div class="col-10"> {{ product.title}} </div>
                <div class="col-2"> {{ product.humanPrice }} </div>
              </div>
            </article>

        </material-animation>

        <article>
               <div class="row card-product">
                <div class="col-10 total"> Total </div>
                <div class="col-2"> {{ totalPagar }} </div>
              </div>
        </article>

    </div>
</template>

<script>
export default {

  created() {
      this.getProducts();
  },

  data() {
    return {
      endPoint: '/ver/productos',
      products : [],
    }
  },

  methods: {
      getProducts () {
        axios.get( this.endPoint)
          .then ( response => {
            this.products = response.data.data;
          });
      }
  },

  computed: {
      totalPagar () {
          let valoraParar = this.products.reduce(  (acumulador, currenObject )=>{
              return acumulador + currenObject.numberPrice
          },0  );
          return `$${valoraParar}`;
      },

  }


}
</script>
