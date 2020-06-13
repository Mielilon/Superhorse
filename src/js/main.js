//= vue.js
//= productsData.js
//= regionsList.js
//= popper.min.js
//= axios.min.js

const $ = document.querySelector.bind(document);

const app = new Vue({
  el: '#app',
  data: () => ({
    productsData,
    isProductModalActive: false,
    selectedProductId: null,
    activeTab: 0,
    regionsList,
    contactForm: {
      name: {
        value: '',
        alert: '',
        required: true,
      },
      email: {
        value: '',
        alert: '',
        required: false,
        regExp: /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i,
      },
      phone: {
        value: '',
        alert: '',
        required: true,
      },
      message: {
        value: '',
        alert: '',
        required: false,
      },
    },
    contactFormResult: '',
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
    prepareMailAndSend(formName = 'contactForm') {
      let essentialMsg = 'Поле обязятельно для заполнения';
      let incorrectMsg = 'Поле заполнено некорректно';
      let error = false;

      for (let i in this[formName]) {
        let field = this[formName][i];

        if (field.required && field.value.length < 1) {
          field.alert = essentialMsg;
          error = true;
          continue;
        } else {
          field.alert = '';
        }

        if (field.regExp && !field.regExp.test(field.value)) {
          field.alert = incorrectMsg;
          error = true;
          continue;
        } else {
          field.alert = '';
        }
      }

      if (!error) this.sendMail(formName);
    },
    sendMail(formName = 'contactForm') {
      let bodyFormData = new FormData();
      bodyFormData.set('name', this[formName].name.value);
      bodyFormData.set('email', this[formName].email.value);
      bodyFormData.set('phone', this[formName].phone.value);
      bodyFormData.set('message', this[formName].message.value);

      this[formName + 'Result'] = 'Отправляется...';

      axios({
        method: 'post',
        url: '/home.php',
        data: bodyFormData,
        config: { headers: { 'Content-Type': 'multipart/form-data' } },
      })
        .then((res) => {
          this[formName + 'Result'] = 'Сообщение успешно отправлено';
        })
        .catch((err) => {
          this[formName + 'Result'] =
            'При отправке сообщения возникла ошибка. Свяжитесь с нами по почте gigienakrs@yandex.ru';
        });
    },
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
