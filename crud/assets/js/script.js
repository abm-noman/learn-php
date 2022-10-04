document.addEventListener('DOMContentLoaded',function(){
    console.log('loaded');
    var links = document.querySelectorAll(".delete");
    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('click',function(e){
            if(!confirm("Are You Sure?")){
                e.preventDefault();
            }
        });
        
    }
})