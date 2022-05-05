const app = new Vue({
  el: "#app",
  data: {
    dbDischi: [],
  },
  mounted() {
    axios.get("http://localhost/php-ajax-dischi/dischiApi.php").then((res) => {
      console.log(res);

      this.dbDischi = res.data;
    });
  },
});
