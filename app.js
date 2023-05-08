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
  },
  mounted(){
    axios.get(this.getTasksUrl)
    .then(response =>{
        this.tasks = response.data
    })
  }
}).mount('#app')