const app = new Vue({
  el: "#app",
  data: {
    disks: {},
    textInput: "",
    actualGenre: "",
  },
  mounted() {
    axios
      .get("api/getdisks.php")
      .then((result) => {
        console.log(result.data);
        this.disks = result.data;
      })
      .catch((e) => console.log(e));
  },
  methods: {
    send() {
          this.actualGenre = this.textInput;
          axios.get(`api/getdisks.php?genre=${this.actualGenre}`).then(({ data }) => {
              this.disks = data
          })
    },
  },
});
