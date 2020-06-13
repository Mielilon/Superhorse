//= vue.js
//= productsData.js
//= regionsList.js
//= popper.min.js

const $ = document.querySelector.bind(document);

const app = new Vue({
  el: '#app',
  data: () => ({
    productsData,
    isProductModalActive: false,
    selectedProductId: null,
    activeTab: 0,
    regionsList,
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

const tooltipTriggers = document.querySelectorAll('.tooltip-trigger');
tooltipTriggers.forEach((trigger) => {
  const tooltip = trigger.nextElementSibling;

  Popper.createPopper(trigger, tooltip, {
    placement: 'top-start',
  });

  function show() {
    tooltip.setAttribute('data-show', '');
  }

  function hide() {
    tooltip.removeAttribute('data-show');
  }

  const showEvents = ['mouseenter', 'focus'];
  const hideEvents = ['mouseleave', 'blur'];

  showEvents.forEach((event) => {
    trigger.addEventListener(event, show);
    tooltip.addEventListener(event, show);
  });

  hideEvents.forEach((event) => {
    trigger.addEventListener(event, hide);
    tooltip.addEventListener(event, hide);
  });
});
