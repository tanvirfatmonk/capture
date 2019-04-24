new Vue({
  el: "#app",
  data: {
    options: {},
    position: {},
    defaultOptions: {
      container: {
        width: '100%',
        height: 400
      },
      viewport: {
        width: 300,
        height: 200,
        type: 'square',
        border: {
          width: 2,
          enable: true,
          color: '#fff'
        }
      },
      zoom: {
        enable: true,
        mouseWheel: true,
        slider: true
      },
      rotation: {
        slider: true,
        enable: true,
        position: 'right'
      },
      transformOrigin: 'viewport',
    },
    cropme: {},
    el: {},
    cr: {},
  },
  watch: {
    options: {
      handler(val) {
        this.cropme.reload(val)
      },
      deep: true
    }
  },
  created() {
    this.options = JSON.parse(JSON.stringify(this.defaultOptions))
  },
  mounted() {
    this.init()
  },
  methods: {
    force() {
      let a = document.getElementById('cropme');
      let imgs = document.getElementById('a').src;
      //v-if="imgs";
      this.cr = new Cropme(a,this.options);
      this.cr.bind({
        url: imgs,
      })
    },

    getPosition() {
      this.position = this.cropme.position()
      $('#cropmePosition').modal()
    },
    crop() {
      let img = document.getElementById('cropme-result')
      this.cr.crop({
        width: 600
      }).then(res => {
        img.src = res
        $('#cropmeModal').modal()
      })
    },
    reset() {
      this.options = JSON.parse(JSON.stringify(this.defaultOptions))
      this.cropme.destroy()
      this.init()
    }
  }
})
