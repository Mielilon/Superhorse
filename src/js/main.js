//= vue.js
//= productsData.js

const $ = document.querySelector.bind(document);

const app = new Vue({
  el: '#app',
  data: () => ({
    productsData,
    isProductModalActive: false,
    selectedProductId: null,
    activeTab: 0,
  }),
  mounted() {
    const catalogue = $('.catalogue__goods');
    if (catalogue) catalogue.style.visibility = 'visible';
  },
  computed: {
    activeProduct() {
      return this.productsData[this.selectedProductId];
    },
    getCurrentYear() {
      return new Date().getFullYear();
    },
  },
  methods: {
    showProductModal(id) {
      this.isProductModalActive = true;
      this.selectedProductId = id;
    },
    closeProductModal() {
      this.isProductModalActive = false;
      this.activeTab = 0;
    },
    selectTab(id) {
      this.activeTab = id;
    },
  },
});
