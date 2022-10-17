

const app = new Vue({
    el: "#app",
    data: {
        disks: {}
    },
    mounted() {
        axios
        .get('api/getdisks.php')
        .then((result) => {
          console.log(result.data);
          this.disks = result.data
        })
        .catch((e) => console.log(e));
    },
})