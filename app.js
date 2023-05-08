const { createApp } = Vue

createApp({
  data() {
    return {
        tasks: null,
        tasksUrl: "./tasks.php",
        taskAdded: null
    }
  },
  methods:{
    addTask(){
        this.tasks.push({
            task: this.taskAdded,
            done: false
        });
        this.addNewTask;
    },
    addNewTask(){
        const payload = {
            "task": this.taskAdded,
            "completed": false
        }
    }
  },
  mounted(){
    axios.get(this.tasksUrl)
    .then(response =>{
        this.tasks = response.data
    })



  }
}).mount('#app')