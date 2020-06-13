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
    isCallModalActive: false,
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
    callFormResult: '',
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
    prepareMailAndSend(formName = 'contactForm', isCall) {
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

      if (!error) this.sendMail(formName, isCall);
    },
    sendMail(formName = 'contactForm', isCall) {
      let bodyFormData = new FormData();
      bodyFormData.set('name', this[formName].name.value);
      bodyFormData.set('email', this[formName].email.value);
      bodyFormData.set('phone', this[formName].phone.value);
      bodyFormData.set(
        'message',
        isCall ? 'Запрос обратного звонка' : this[formName].message.value
      );

      if (isCall) {
        this.callFormResult = 'Отправляется...';
      } else {
        this[formName + 'Result'] = 'Отправляется...';
      }

      axios({
        method: 'post',
        url: '/home.php',
        data: bodyFormData,
        config: { headers: { 'Content-Type': 'multipart/form-data' } },
      })
        .then((res) => {
          if (isCall) {
            this.callFormResult = 'Сообщение успешно отправлено';
          } else {
            this[formName + 'Result'] = 'Сообщение успешно отправлено';
          }
        })
        .catch((err) => {
          if (isCall) {
            this.callFormResult =
              'При отправке сообщения возникла ошибка. Свяжитесь с нами по почте gigienakrs@yandex.ru';
          } else {
            this[formName + 'Result'] =
              'При отправке сообщения возникла ошибка. Свяжитесь с нами по почте gigienakrs@yandex.ru';
          }
        });
    },
    showCallModal() {
      this.isCallModalActive = true;
      this.disableWindowScroll();
    },
    closeCallModal() {
      this.isCallModalActive = false;
      this.enableWindowScroll();
    },
    showProductModal(id) {
      this.isProductModalActive = true;
      this.selectedProductId = id;
      this.disableWindowScroll();
    },
    closeProductModal() {
      this.isProductModalActive = false;
      this.activeTab = 0;
      this.enableWindowScroll();
    },
    selectTab(id) {
      this.activeTab = id;
    },
    orderProduct() {
      this.closeProductModal();
      window.scrollTo({
        top:
          $('.contacts__description.pre-order').getBoundingClientRect().top +
          pageYOffset,
      });
    },
    enableWindowScroll() {
      document.body.style.overflow = 'auto';
    },
    disableWindowScroll() {
      document.body.style.overflow = 'auto';
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
