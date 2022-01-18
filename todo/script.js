document.getElementById("myform").addEventListener("submit", function(e){
    e.preventDefault();
    let list = document.getElementById("mylist");
    let data = document.getElementById("data").value;
    let newTask = document.createElement("li");
    newTask.innerText = data;
    list.appendChild(newTask);
    document.getElementById("myform").reset();
});