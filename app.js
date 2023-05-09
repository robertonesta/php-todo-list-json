const { createApp } = Vue

createApp({
  data() {
    return {
        tasks: null,
        getTasksUrl: "./getTasks.php",
        taskAdded: "",
        sendTasksUrl: "./sendtasks.php"
    }
  },
  methods:{
    addTask(){
        this.tasks.push({
            "tasks": this.taskAdded,
            "done": false
        });
        this.taskAdded = "";
        axios.post(this.sendTasksUrl, this.tasks, {
            headers: { 'Content-Type': 'multipart/form-data'}
        }).then((response) => console.log(response))
    },
    deleteTask(index){
      this.tasks.splice(index, 1);
      axios
        .post(this.sendTasksUrl, this.tasks, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.tasks = response.data;
        })
    },
    switchDone(index){
      if (this.tasks[index].done === "true"){
        this.tasks[index].done = "false";
      } else {
        this.tasks[index].done = "true";
      };
      axios
        .post(this.sendTasksUrl, this.tasks, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.tasks = response.data;
        })
    }
  },
  mounted(){
    axios.get(this.getTasksUrl)
    .then(response =>{
        this.tasks = response.data
    })
  }
}).mount('#app')