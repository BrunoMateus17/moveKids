function Loading(){
    this.open = function(){
        var html = "";
        html += ' <div id="loading">';
        html += '     <div class="loading-content">';
        html += '         LOADING';
        html += '     </div>';
        html += ' </div>';
        document.querySelector("body").insertAdjacentHTML('beforeend',html);
    }
    this.close = function(){
        const element = document.getElementById("loading");
        if(element){
            element.remove(); 
        }
    }
}
let loading = new Loading();
