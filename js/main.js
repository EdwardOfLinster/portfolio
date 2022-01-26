
toggle=false;
document.getElementById("nav-trg").addEventListener("click",function(){
    console.log("click");
    if(toggle){
        this.classList.remove("open");
        document.getElementById("gb-nav").classList.remove("open");
        document.body.style.overflowY = "visible";
        toggle=false;
        console.log(toggle);
    }
    else{
        this.classList.add("open");
        document.getElementById("gb-nav").classList.add("open");
        toggle=true;
        document.body.style.overflowY = "hidden";
        console.log(toggle);
    }
});


document.getElementById('all').addEventListener('click', function(){
    proj_item = document.getElementsByClassName("project-item");
    for(i=0;i<proj_item.length;i++){
        proj_item[i].classList.add("shown");
        console.log("test");
    }
    this.classList.add("ft");
    document.getElementById("handcoded").classList.remove("ft");
    document.getElementById("framework").classList.remove("ft");
    document.getElementById("cms").classList.remove("ft");
});
document.getElementById('handcoded').addEventListener('click', function(){
    proj_item = document.getElementsByClassName("project-item");
    for(i=0;i<proj_item.length;i++){
        proj_item[i].classList.remove("shown");
    }
    proj_selected = document.getElementsByClassName("project-item handcoded")
    for(i=0;i<proj_selected.length;i++){
        proj_selected[i].classList.add("shown");
    }
    this.classList.add("ft");
    document.getElementById("all").classList.remove("ft");
    document.getElementById("framework").classList.remove("ft");
    document.getElementById("cms").classList.remove("ft");
});
document.getElementById('framework').addEventListener('click', function(){
    proj_item = document.getElementsByClassName("project-item");
    for(i=0;i<proj_item.length;i++){
        proj_item[i].classList.remove("shown");
    }
    proj_selected = document.getElementsByClassName("project-item framework")
    for(i=0;i<proj_selected.length;i++){
        proj_selected[i].classList.add("shown");
    }
    this.classList.add("ft");
    document.getElementById("handcoded").classList.remove("ft");
    document.getElementById("all").classList.remove("ft");
    document.getElementById("cms").classList.remove("ft");
});
document.getElementById('cms').addEventListener('click', function(){
    proj_item = document.getElementsByClassName("project-item");
    for(i=0;i<proj_item.length;i++){
        proj_item[i].classList.remove("shown");
    }
    proj_selected = document.getElementsByClassName("project-item cms")
    for(i=0;i<proj_selected.length;i++){
        proj_selected[i].classList.add("shown");
    }
    this.classList.add("ft");
    document.getElementById("handcoded").classList.remove("ft");
    document.getElementById("framework").classList.remove("ft");
    document.getElementById("all").classList.remove("ft");
});